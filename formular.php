<?php

$php_mail = 'PHPMailer-master/PHPMailerAutoload.php';

//echo 'formular';

include ($php_mail);

$errName='';
$errEmail='';
$errMessage='';
$errHuman='';
$result='';
$name = '';
$email = '';
$message = '';

$crlf = "\r\n";

if(!isset($_COOKIE["mail"])&&(isset($_POST["submit"]))) //ověření, jestli je nastavena cookie jako ochrana před spamy
{
    
  //echo 'cookie';

    if (isset($_POST["submit"]))
    {
      //echo 'submit';
      
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = 'Zprava z weboveho formulare';
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = array ('web@marekpridal.eu', 'marekpridal.eu');
        $to = array ('marek@marekpridal.eu','Marek Přidal');
        $result='';
        $username = 'web@marekpridal.eu';
        $password = 'password';
        $smtpsecure = 'tls';
        $port = 587;
        
        
        //hlavička
        /*$headers = "MIME-Version: 1.0\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\n";
        $headers .= "From: =?UTF-8?B?".base64_encode($name)."?=<".$email.">\n";*/
        
        //$body = "Od: " . $name . $crlf . "E-Mail: " .$email.$crlf. "Zpráva: " .$crlf. $message;
 
        // Check if name has been entered
        if (!$name) {
            $errName = 'Vložte prosím své jméno';
        }else $errName='';
        
        // Check if email has been entered and is valid
        if (!$email || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Vložte prosím svou mailovou adresu';
        }else $errEmail='';
        
        //Check if message has been entered
        if (!$message) {
            $errMessage = 'Vložte prosím zprávu';
        }else $errMessage='';
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Výsledek není správný';
        }else $errHuman='';
        /*
        echo $result;
        echo $name ;
        echo $email ;
        echo $message ;
        */
        
                
        $mail = new PHPMailer;

        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = $username;                 // SMTP username
        $mail->Password = $password;                           // SMTP password
        $mail->SMTPSecure = $smtpsecure;                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = $port;                                    // TCP port to connect to

        $mail->setFrom($from[0], $from[1]);
        $mail->addAddress($to[0],$to[1]);     // Add a recipient
        $mail->addReplyTo($email, $name);
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = "Od: " . $name . $crlf . "E-Mail: " .$email.$crlf. "Zpráva: " .$crlf. $message;
        $mail->AltBody = "Od: " . $name . $crlf . "E-Mail: " .$email.$crlf. "Zpráva: " .$crlf. $message;
        
// If there are no errors, send the email
    if ($errName == '' && $errEmail == '' && $errMessage == '' && $errHuman == '')
    {
      if($mail->send())
      {
      $result='<div class="alert alert-success">Díky! Brzy se vám ozvu</div>';
      setcookie("mail", "mail", time() + (86400 * 3), "/"); // 86400 = 1 den
      } else
        {
        $result='<div class="alert alert-danger">Mail bohužel nebyl odeslán</div>';
        $result='<div class="alert alert-info">Mailer Error: ' . $mail->ErrorInfo.'</div>';
        }
    }else $result='<div class="alert alert-danger">Někde se stala chyba</div>';
    
    

  }
}else if(isset($_COOKIE["mail"]))
          $result='<div class="alert alert-info">Vaše zpráva již byla zaslána</div>';

//echo 'no cookie';

    
?>
