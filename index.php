<?php
$title='Sa_Hopital';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if(!empty($title)){echo $title;}else {echo 'Gestion Rendez-vous';} ?></title>
    <link rel="icon" type="image/png" href="img/favicon.png" /> 
    <link rel="stylesheet" href="bootstrap/css/monstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <header>
            <nav>
                <div class="log">   
                    Sa-Hôpital
                </div>
                <i class="material-icons mob" style='color:white'>menu</i>
                <ul>
                    <li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="pages/guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="pages/faq.php"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
                <button>
                &rarr; se connecter
                </button>
                <div class="dropcontent">
                <ul>
                    <li><a href="index.php"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="faq.php"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
                <button>
                &rarr; se connecter
                </button>
                </div>
            
            </nav>
        </header>
        <main>
        <div class="col">
        <img src="img/medecine.svg" width="400px" alt="">
        </div>
        <div class="col1">
        Plateforme de Gestion de Rendez-vous &rarr;
        </div>        
        </main>
        <div class="form">
            <h2>Authentification</h2>
            <form action="pages/traitement.php" method="post" id="form">
                <p>
                <input type="text" name="login" id="login"  autofocus placeholder="votre login"
                     pattern="[a-z]{1,8}" minlength="4"  maxlength="10" title="uniquement des caractères alphabétiques max 6 caractères">
                <i style="visibility:hidden" class="material-icons">visibility</i>
                </p>
                <p>
                <input type="password" name="pass" id="pass" placeholder="Votre mot de passe" pattern="[a-z]{1,10}"  minlength="4"  maxlength="10" title="uniquement des caractères alphanumériques max 10 caractères">
                <i title="afficher" class="material-icons btnvue">visibility</i>
                </p>
                <button>Conexion &rarr;</button>
                <p>
                <small class="btnclose"><i class="material-icons left">close</i>fermer</small>
                </p>
            </form>
        </div>
        <div class="alert"></div>
        <footer>
            <h4>Propulsé par &copy; Diokou-Tech</h4>
            <div class="admin">
                <button><a href="pages/admin.php">Mode administrateur</a></button>
            </div>
        </footer>
        <script src="bootstrap/js/popper.js"></script>
        <script src="bootstrap/js/jquery-3.js"></script>
  <script src="bootstrap/js/main.js"></script>  
</body>
</html>