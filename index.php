<?php
include 'formular.php';
include 'copyright.php';
?>
<!doctype html>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jestli sháníte informace nebo kontakty na Marka Přidala, jste tady správně" />
    <title>Marek Přidal - osobní web</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="styl.css" type="text/css">
    <link href="favicon.ico" rel="icon" type="image/png" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="jquery-circle-progress/dist/circle-progress.js"></script>
    </head>
    
<body>
    <div class="container">
      <img src="Avatar.png" class="img-circle img-responsive img-center" width="280" height="280" alt="avatar">
        <h1 class="jmeno">Marek Přidal</h1>
        <p class="popis">
        Novinář, programátor, fotograf a stále ještě student z Ostravy
        </p>
        
        <div class="row">
        <div class="col-md-12">
            
            <h3 class="nadpis">HTML5</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%;">
                    <span class="graf-text">85%</span>
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
                <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                    <span class="graf-text">72%</span>
                </div>
            </div>
            
            <h3 class="nadpis">JavaScript</h3>
            <div class="progress posledni">
                <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                    <span class="graf-text">43%</span>
                </div>
            </div>
            
        </div>
        </div> <!--ukončení row-->
    
        <br>
        
    <div id="second">
    <div class="row">
    <div class="col-md-6">
<form class="form-horizontal" method="post" action="index.php">
    <div class="form-group">
        <label for="name" class="col-sm-5 control-label">Jméno</label>
        <div class="col-md-7">
            <input type="text" class="form-control" id="name" name="name" placeholder="Jméno a přijmení" value="<?php echo htmlspecialchars($_POST['name']); ?>">
            <?php echo "<p class='text-danger'>$errName</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-5 control-label">Email</label>
        <div class="col-md-7">
            <input type="email" class="form-control" id="email" name="email" placeholder="jan.novak@seznam.cz" value="<?php echo htmlspecialchars($_POST['email']); ?>">
            <?php echo "<p class='text-danger'>$errEmail</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-5 control-label">Zpráva</label>
        <div class="col-md-7">
            <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
            <?php echo "<p class='text-danger'>$errMessage</p>";?>
        </div>
    </div>
    <div class="form-group">
        <label for="human" class="col-sm-5 control-label">2 + 3</label>
        <div class="col-md-7">
            <input type="text" class="form-control" id="human" name="human" placeholder="Výsledek">
            <?php echo "<p class='text-danger'>$errHuman</p>";?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-7 col-sm-offset-5">
            <input id="submit" name="submit" type="submit" value="Odeslat" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-7 col-sm-offset-5">
            <?php echo $result; ?>
            
        </div>
    </div>
</form>
        </div>  <!--ukončení col-md-6 pro formulář-->
        
        <div class="col-md-6">
            <a href="https://www.facebook.com/marek.pridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-facebook"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/MarekPridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://plus.google.com/+MarekPridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="https://www.linkedin.com/profile/view?id=AAEAAAj1cvsBsDYXBwNz8mSs0MCSeXAsLHRLcdw" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-linkedin">
                <i class="fa fa-linkedin"></i></a>
            <a href="https://www.flickr.com/photos/95097582@N04" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-flickr"><i class="fa fa-flickr"></i></a>
            <a href="https://foursquare.com/marekpridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-foursquare"><i class="fa fa-foursquare"></i></a>
            <a href="https://soundcloud.com/marek-pridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-soundcloud"><i class="fa fa-soundcloud"></i></a>
            <a href="https://player.spotify.com/user/marekpridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-spotify"><i class="fa fa-spotify"></i></a>
            <a href="https://instagram.com/marekpridal/" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-instagram"><i class="fa fa-instagram"></i></a>

        </div>
        
        
    </div> <!--ukočení row-->
    </div> <!--ukončení second-->
    
    
  </div> <!--ukončení container-->
  
  <footer class="row">
   <?php
   copyright();
   ?>
  </footer>
  
</body>
</html>