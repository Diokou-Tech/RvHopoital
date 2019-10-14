<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/monstyle.css">
</head>
<body>
    <nav>
<div class="log">   
                    Sa-Hôpital
                </div>
    </nav>
  <button>  <a href="../index.php">Acceuil</a></button>
    <main>
        <h1>mode administrateur</h1>
    <form action="pages/traitement.php" method="post" id="form">    
        <p>
        <label for="login">login</label>
                <input type="text" name="login" id="login">
        </p>
        <p>
        <label for="login">Mot de passe</label>
                <input type="text" name="mopasse" id="mopasse">
        </p>
        <p>
            <button type="submit">se connecter &rarr;</button>
        </p>
            </form>
    </main>
    <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery-3.js"></script>
  <script src="../bootstrap/js/main.js"></script>  
</body>
    <style>     
            nav{
                margin:0;
                padding:0;
                background-color:teal;
                
            }
            h1{
                color:teal;
                text-decoration:underline;
                letter-spacing:2px;
            }
            p{
                display:flex;
                justify-content:center;
                align-items:center;
            }
            form{
                box-shadow:2px 2px 2px gray;
                padding:5px;
            }
            form label{
                width:120px;
                margin-right:2px;
            }
            button a{
                text-decoration:none;
            }
    </style>                box-shadow:2px 2px 2px gray;
</html>