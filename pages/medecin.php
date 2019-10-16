<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/favicon.png" />
    <title>Gestion de rendez-vous</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/monstyle.css">
    <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <header>
    <nav>
    <div class="log">   
                    Sa-Hôpital
                </div>
    </nav>
    </header>
  <div class="breadcrumb">
    <a href="../index.php" class="breadcrumb-item text-dark">Accueil</a>
    <a href="" class="breadcrumb-item text-dark">Dashboard</a>
  </div>
    <div class="container">
    <div class="row">
        <div class=" p-2">
            <p>Total : <span class="badge bg-dark text-white">5</span></p>
        </div>
        <div class="p-2">
            <p>Effectués :<span class="badge bg-dark text-white">3</span></p>
        </div>
        <div class="p-2">
            <p>Restants : <span class="badge bg-dark text-white">2</span></p>
        </div>
        <div class="p-2">
            <i class="material-icons left">add_circle</i> nouveau
        </div>
    </div>
    </div>
            <form action="#">
                <input type="search" name="filtre" id="filtre" placeholder='filtre'>
                <button type="submit">filtrer</button>
            </form>

            <table class="table table-bordered ">
  <thead>
    <th>matricule</th>
    <th>prenom</th>
    <th>nom</th>
    <th>sexe</th>
    <th>Date de naissance</th>
    <th>motif</th>
    <th>Etat</th>
  </thead>
  <tbody>
  <tr>
    <td>emp001</td>
    <td>cheikhou</td>
    <td>Diokou</td>
    <td>M</td>
    <td>1996-02-10</td>
    <td>suivi du traitement</td>
    <td>non effectué</td>
    <td>
    <a href="#"><i class="material-icons left">edit</i></a>
    </td>
    <td>
    <a href="#"> <i class="material-icons left">check</i></a>
    </td>
  </tr>
  <tr>
  <td>emp002</td>
    <td>fallou</td>
    <td>ndiaye</td>
    <td>M</td>
    <td>1996-02-20</td>
    <td>suivi du traitement</td>
    <td>non effectué</td>
    <td>
    <a href="#"><i class="material-icons left">edit</i></a>
    </td>
    <td>
    <a href="#"> <i class="material-icons left">check</i></a>
    </td>
  </tr>
  <tr>
  <td>emp003</td>
    <td>modou</td>
    <td>dione</td>
    <td>F</td>
    <td>1994-04-20</td>
    <td>suivi du traitement</td>
    <td>non effectué</td>
    <td>
    <a href="#"><i class="material-icons left">edit</i></a>
    </td>
    <td>
    <a href="#"> <i class="material-icons left">check</i></a>
    </td>
  </tr>
  </tbody>
</table>
    <script src="../bootstrap/js/popper.js"></script>
        <script src="../bootstrap/js/jquery-3.js"></script>
  <script src="../bootstrap/js/main.js"></script>  
</body>
    <style>   
            .container{
                background-image:url('../img/medecine.svg');
                background-size:100%;
                display:flex;
    align-items:center;
    justify-content:flex-end;
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
    min-height:400px;
}
.row{
    display:flex;
    justify-content: space-around;
    flex-wrap:wrap;
}
table{
    width:100%;
    min-width:100%;
    text-align:center;
}
b input{
    appearance:none;
    border:none;
    outline:none;
    border-bottom:2px solid teal;
}
.action{
    display:flex;
    justify-content:space-around;
}
    </style>                
</html>