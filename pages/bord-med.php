<?php
require('../classes/secretaire.php');   
    session_start();
    Manager::logout();
    Manager::verif_session();
    $mess=null;
    $med = new Manager($conn);
    $user= $med ->getuser($_SESSION['profil'],$_SESSION['login']);
    $login=$_SESSION['login'];
    if(isset($_GET['supp'])){
        $med->delete_rv($_GET['supp']);
        $mess='suppresion du rendez-vous reussie !';
    }
?>
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de Bord</title>
    <link rel="icon" type="image/png" href="../img/favicon.png" /> 
    <link rel="stylesheet" href="../bootstrap/css/bord.css">    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstrap/DataTables/datatables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div class="log">
            Sa-Hôpital
        </div>
        <div class="logout">
            <button><a href="?logout=true">Se Deconnecter</a></button>
        </div>
    </header>
    <main>
        <div class="row flex-wrap">
            <div class="col-lg-2 col-md-2 profil">
                    <h4>info-Utlisateur</h4>
                <div class="img">
                    <i class="material-icons">person</i>
                </div>
                <div class="info">
                    <p>
                            <b>
                            <?php echo $user['prenom']; echo ' ';echo $user['nom'];  ?>
                            </b><br>
                            <small>Service de <?php $med->getservice($user['service']);?></small>
                    </p>
                    <hr>
                    <div class="flash-info">
                            <h4>Flash Aujourd'hui</h4>
                            <ul>
                                <li>  Total <span class="badge">10</span></li>
                                <li> effectués <span class="badge">7</span></li>
                                <li> Restants <span class="badge">3</span></li>
                            </ul>
                    </div>
                </div>
            
               <div class="mess-error"> <i class="material-icons">error</i>
               <span><?php Manager::set($mess) ?></span>
                 </div>
            </div>
            <div class="col-lg-8 col-md-7">
                    <table border="1" id="table">
                            <thead>
                                <th>id</th>
                                <th>medecin</th>
                                <th>patient</th>
                                <th>date</th>
                                <th>heure</th>
                                <th>motif</th>
                                <th>Etat</th>
                                <th style="visibility:hidden"></th>
                                <th style="visibility:hidden"></th>
                                <th style="visibility:hidden"></th>
                            </thead>
                            <tbody>
                                <?php
                                $datas = $med->list_rv($_SESSION['profil'],$login);
                                foreach($datas as $data){
                                    echo "<tr>";
                                    foreach($data as $key => $val){
                                        if($key!='secretaire'){
                                            echo "<td>$val</td>";
                                        }
                                    }
                                    ?>
                                     <td style="border:none">
                                    <a href="?valid=<?php if(isset($data)){echo $data['id'];}?>"><i class="material-icons">check</i></a>
                                    </td>
                                    <td style="border:none">
                                    <a href="?supp=<?php if(isset($data)){echo $data['id'];}?>"><i class="material-icons">delete</i></a>
                                    </td>
                                    <td style="border:none">
                                    <a href="?patient=<?php if(isset($data)){echo $data['patient'];}?>"><i class="material-icons">visibility</i></a>
                                    </td>
                                    <?php
                                    echo "</tr>";
                                   }

                                ?>
                                </tr>
                            </tbody>
                        </table>
            </div>
            <div class="col-lg-2 col-md-3 patient">
                <h4>info-patient</h4>
                <div>
                        <ul class="content">
                        <?php
                        if(!($p=Manager::get('patient'))){
                            $p=$datas[0]['patient'];
                        }
                        $med->affichepat($p);
                        ?>
                        </ul> 
                </div>
            </div>
        </div>
    </main> 
</body>
<script src="../bootstrap/js/jquery-3.js"></script>
    <script src="../bootstrap/DataTables/datatables.js"></script>
    <script src="../bootstrap/js/bord.js"></script>
</html>