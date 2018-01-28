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
    <link rel="icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/monstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <header>
            <nav>
                <div class="log">
                    Sa_Hopital
                </div>
                
                <ul>
                    <li><a href="#"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="#"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
                <button>
                    se connecter
                </button>
            </nav>
        </header>
        <main>
        <div class="col">
        <img src="medecine.svg" width="400px" alt="">
        </div>
        <div class="col1">
        Plateforme de Gestion de Rendez-vous &rarr;
        </div>        
        </main>
        <div class="form">
            <h2>Authentification</h2>
            <form action="#" method="autentic.php">
                <p><input type="text" name="login" placeholder="votre login"><i style="visibility:hidden" class="material-icons">visibility</i></p>
                <p><input type="password" name="pass" id="pass" placeholder="Votre mot de passe"><i class="material-icons btnvue">visibility</i></p>
                <button>Conexion &rarr;</button>
                <p>Mot de passe oublié <!DOCTYPE html>
                <br><br>
                <small class="btnclose"><i class="material-icons left">close</i>close</small>
                </body>
                </html></p>
            </form>
        </div>
        <footer>
            <h4>Propulsé par &copy; Diokou-Tech</h4>
        </footer>
        <script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
  <script src="main.js"></script>  
</body>
</html>