<?php
if(!isset($_COOKIE["mail"])&&(isset($_POST["submit"])))
{
    setcookie("mail", "mail", time() + (86400 * 3), "/"); // 86400 = 1 den
}

include 'formular.php';
?>
<!doctype html>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <title>Bootstrap 1</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styl.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="jquery-circle-progress/dist/circle-progress.js"></script>
    </head>
<body>
    <div class="container">
      
      
    
      <img src="Avatar.png" class="img-circle img-responsive img-center" width="280" height="280">
        <h1 class="jmeno">Marek Přidal</h1>
        <p class="popis">
        Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
        </p>
        
        <div class="row">
        <div class="col-md-12">
            
            <h3 class="nadpis">HTML5</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width:99%;">
                    <span class="graf-text">99%</span>
                </div>
            </div>
            
            <h3 class="nadpis">CSS 3</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%">
                    <span class="graf-text">83%</span>
                </div>
            </div>
            
            <h3 class="nadpis">PHP</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                    <span class="graf-text">75%</span>
                </div>
            </div>
            
            <h3 class="nadpis">JavaScript</h3>
            <div class="progress posledni">
                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="graf-text">60%</span>
                </div>
            </div>
            
        </div>
        </div> <!--ukončení row-->
        <!--<div class="row">
         
         <div class="sipka">
        <a href="#second"><i class="fa fa-arrow-circle-o-down fa-5x"></i></a>
          
        </div>
        
        </div>-->
    
        <br>
        
    <div id="second">
    <div class="row">
<form class="form-horizontal" role="form" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Jméno</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Jméno a přijmení" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="jan.novak@seznam.cz" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Zpráva</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-2 control-label">2 + 3</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Výsledek">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="submit" name="submit" type="submit" value="Odeslat" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
            
        </div>
    </div>
</form>
       </div>
        </div>
    
    
  </div> <!--ukončení container-->
  
</body>
</html>