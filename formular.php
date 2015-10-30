<?php
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
    


    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'marekpridal.eu';
        $to = 'marek@marekpridal.eu';
        $subject = "=?utf-8?B?".base64_encode("Zpráva z webového formuláře")."?=";
        $result='';
        
        
        //hlavička        
        $headers = "MIME-Version: 1.0\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\n";
        $headers .= "From: =?UTF-8?B?".base64_encode($name)."?=<".$email.">\n";
        
        $body = "Od: " . $name . $crlf . "E-Mail: " .$email.$crlf. "Zpráva: " .$crlf. $message;
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }else $errName='';
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }else $errEmail='';
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }else $errMessage='';
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }else $errHuman='';
        
      /*  echo $result;
        echo $name ;
        echo $email ;
        echo $message ; */
 
// If there are no errors, send the email
if (($errName && $errEmail && $errMessage && $errHuman )== '')
{
    if (mail ($to, $subject, $body, $from, $headers)) {
        $result='<div class="alert alert-success">Díky! Brzy se vám ozvu</div>';
    } else {
        $result='<div class="alert alert-danger">Mail bohužel nebyl odeslán</div>';
    }
}
    }
    
}else if(isset($_COOKIE["mail"]))
    $result='<div class="alert alert-info">Vaše zpráva již byla zaslána</div>';
?>