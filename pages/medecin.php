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
    <header>
    <nav>
    <div class="log">   
                    Sa-Hôpital
                </div>
    </nav>
    </header>
  <button>  <a href="../index.php">Acceuil</a></button>
    <div class="container">
    <div class="row">
        <div class='info'>
            <p>Total : 5</p>
        </div>
        <div class='info'>
            <p>Effectués : 3</p>
        </div>
        <div class='info'>
            <p>Restants : 2</p>
        </div>
    </div>
    </div>
    <div class="tab">
        <div class="row">
            <form action="#">
                <input type="search" name="filtre" id="filtre" placeholder='filtre'>
                <button type="submit">valider</button>
            </form>
        </div>
    </div>
    <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery-3.js"></script>
  <script src="../bootstrap/js/main.js"></script>  
</body>
    <style>    
            .container{
                background-image:url('../img/medecine.svg');
                background-size:100%;
                background-position:fixed;
                display:flex;
    align-items:center;
    justify-content:center;
            } 
            button a{
    text-decoration:none;
    color:white;
}
body>button{
    margin:5px;
    appearance:none;
    background-color:teal;
    color:white;
    padding:5px;
}
.tab{
    min-height:800px;
}
.row{
    min-height:100px;
    display:flex;
    justify-content: space-around;
    flex-wrap:wrap;
}
.info{
    width:100px;
    height:40px;
    padding:5px;
    border-radius:50%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    color:teal;
    background-color:white;
    margin-top:5px;
    margin-right:15px;
    box-shadow:2px 2px 4px teal;
}
.tab button{
  border:1px solid teal;
}

    </style>                
</html>