<?php
include 'formular.php';
?>
<!doctype html>
<html lang="cs">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#8B8B8B">
    <meta name="description" content="Jestli sháníte informace nebo kontakty na Marka Přidala, jste tady správně" >
    <title>Marek Přidal - osobní web</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="styl.css" type="text/css">
    <!--ikona-->
    <link rel="apple-touch-icon" sizes="57x57" href="/icons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/icons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/icons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/icons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/icons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/icons/favicon-194x194.png" sizes="194x194">
    <link rel="icon" type="image/png" href="/icons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/icons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/icons/manifest.json">
    <link rel="mask-icon" href="/icons/safari-pinned-tab.svg" color="#17a2c9">
    <link rel="shortcut icon" href="/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/icons/mstile-144x144.png">
    <meta name="msapplication-config" content="/icons/browserconfig.xml">
<!--konec include ikon-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    </head>

<body>
    <div class="container">
      <img src="avatar.jpeg" class="img-circle img-responsive img-center" width="280" height="280" alt="avatar">
        <h1 class="jmeno">Marek Přidal</h1>
    <div>
    <div class="row">
    <div class="col-md-6">
        <form class="form-horizontal" method="post" action="index.php">
            <div class="form-group">
                <label for="name" class="col-sm-5 control-label">Jméno</label>
                <div class="col-md-7 col-sm-6">
                    <input type="text" class="form-control" id="name" name="name" placeholder="Jméno a přijmení" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                    <?php echo "<p class='text-danger'>$errName</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-5 control-label">E-mail</label>
                <div class="col-md-7 col-sm-6">
                    <input type="email" class="form-control" id="email" name="email" placeholder="jan.novak@seznam.cz" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                    <?php echo "<p class='text-danger'>$errEmail</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="message" class="col-sm-5 control-label">Zpráva</label>
                <div class="col-md-7 col-sm-6">
                    <textarea class="form-control" rows="4" name="message" placeholder="Váš vzkaz"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                    <?php echo "<p class='text-danger'>$errMessage</p>";?>
                </div>
            </div>
            <div class="form-group">
                <label for="human" class="col-sm-5 control-label">2 + 3</label>
                <div class="col-md-7 col-sm-6">
                    <input type="number" class="form-control" id="human" name="human" placeholder="Výsledek">
                    <?php echo "<p class='text-danger'>$errHuman</p>";?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-7 col-sm-6 col-sm-offset-5">
                    <input id="submit" name="submit" type="submit" value="Odeslat" class="btn btn-primary">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-7 col-sm-6 col-sm-offset-5">
                    <?php echo $result; ?>

                </div>
            </div>
        </form>
        </div>  <!--ukončení col-md-6 pro formulář-->

        <div class="col-md-offset-1 col-md-4">
            <a href="https://itunes.apple.com/us/developer/marek-pridal/id1264724474" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-apple"><i class="fa fa-apple"></i></a>
            <a href="https://twitter.com/MarekPridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-twitter"><i class="fa fa-twitter"></i></a>
            <a href="https://github.com/marekpridal" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-github"><i class="fa fa-github"></i></a>
            <a href="https://www.linkedin.com/profile/view?id=AAEAAAj1cvsBsDYXBwNz8mSs0MCSeXAsLHRLcdw" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-linkedin">
                <i class="fa fa-linkedin"></i></a>
            <a href="https://instagram.com/marekpridal/" target="_blank" class="btn azm-social azm-size-64 azm-circle azm-long-shadow azm-instagram"><i class="fa fa-instagram"></i></a>
        </div>


    </div> <!--ukočení row-->
    </div> <!--ukončení second-->


  </div> <!--ukončení container-->

<script type="text/javascript">
    window.cookieconsent_options = {"message":"Tato stránka ukládá cookies a Evropská unie nařizuje tohle upozornění. Stačí odkliknout a jedeme dál.","dismiss":"Chápu...","learnMore":"Více info z české legislativy","link":"https://www.uoou.cz/vismo/zobraz_dok.asp?id_org=200144&id_ktg=1853&n=cookies-prechod-z-principu-opt-out-na-opt-in&query=cookie","theme":"dark-floating"};
  </script>

</body>
</html>
