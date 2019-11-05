<?php
$title='Guide d\'utilisation';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php if(!empty($title)){echo $title;}else {echo 'Gestion Rendez-vous';} ?></title>
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <link rel="stylesheet" href="../bootstrap/css/monstyle.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
        <header>
            <nav>
                <div class="log">
                    Sa-Hopital
                </div>
                
                <ul>
                    <li><a href="../index.php"><i class="material-icons left">home</i>Accueil</a></li>
                    <li><a href="guide.php"><i class="material-icons left">mode_edit</i>Guide d'utilisation</a></li>
                    <li><a href="faq.php"><i class="material-icons left">flag</i>FAQ</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Guide d'utilisation</h2>
        <div class="col">
      <h3>titre 1</h3>
      <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iure nesciunt a, alias quae tenetur porro nobis, obcaecati ipsa numquam veritatis quis corporis sunt asperiores ut incidunt itaque fugit impedit.Maxime ipsam architecto qui eveniet velit molestias dolor alias, optio eius, expedita quod rerum sapiente aliquam rem temporibus corporis quisquam? Pariatur temporibus est non nam minima sint ducimus nemo doloremque?
      </p>
      <h3>titre 1</h3>
      <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet iure nesciunt a, alias quae tenetur porro nobis, obcaecati ipsa numquam veritatis quis corporis sunt asperiores ut incidunt itaque fugit impedit.Maxime ipsam architecto qui eveniet velit molestias dolor alias, optio eius, expedita quod rerum sapiente aliquam rem temporibus corporis quisquam? Pariatur temporibus est non nam minima sint ducimus nemo doloremque?
      </p>
      
        </div>
        <div class="col1">
         &rarr;
        </div>        
        </main>
        <div class="form">
            <h2>Authentification</h2>
            <form action="autentic.php" method="post">
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
        <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery-3.js"></script>
  <script src="../bootstrap/js/main.js"></script>  
  <script>
        $('.form').hide();
  </script>
</body>
</html>