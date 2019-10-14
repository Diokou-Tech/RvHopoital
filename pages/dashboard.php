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
    <link rel="icon" href="../img/favicon.png" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/dashbord.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<main class="container-fluid">
    <div class="barre-v">
        <div class="img">

        </div>
        <p>
        <h4>Cheikhou DIOKOU</h4>
        </p>
        <p>
            service de Chirurgie
        </p>
    </div>
    <div class="tableau">
        <div class="nav justify-content-around bg-teal">
            <li><a href="#" class="bg-teal">lien 1</a></li>
            <li><a href="#" class="bg-teal">lien 1</a></li>
            <li><a href="#" class="bg-teal">lien 1</a></li>
        </div>
        <form action="#" class="m-5 form-inline col-4">
            <input type="search" class="form-control" name="cherche" id="search" placeholder="filtrer">
            <button class='btn btn-primary ml-2'>filtrer</button>
        </form>
        <table class="table table-striped">
        <thead>
            <th>Categorie 1</th>
            <th>Categorie 1</th>
            <th>Categorie 1</th>
            <th>Categorie 1</th>
            <th>Categorie 1</th>
            <th>Categorie 1</th>
            <th>Action</th>
        </thead>
        <tbody>
    <tr>
    <td>lien 1</td>
            <td>lien 1</td>
            <td>lien 1</td>
            <td>lien 1</td>
            <td>lien 1</td>
            <td>lien 1</td>
            <td>
                <a href="#"><i class="material-icons"></i></a>
            </td>
    </tr>
        </tbody>
        </table>
    </div>
</main>



    
          <script src="../bootstrap/js/jquery-3.js"></script>
          <script src="../bootstrap/js/popper.js"></script> 
          <script src="../bootstrap/js/bootstrap.js"></script>
          <script src="../bootstrap/js/main.js"></script>
</body>
</html>