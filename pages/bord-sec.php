<?php
require('../classes/secretaire.php');   
    session_start();
    Manager::logout();
    Manager::verif_session();
    $mess=null;
    $sec = new Manager($conn);
    $user= $sec ->getuser($_SESSION['profil'],$_SESSION['login']);
    $aujourdhui = date('Y-m-d'); 
    $login=$_SESSION['login'];
    if(isset($_GET['supp'])){
        $sec->delete_rv($_GET['supp']);
        $mess='suppresion du rendez-vous reussie !';
    }
    if(!empty($_POST)){
        $med=Manager::normalize($_POST['medecin']);
        $patient=Manager::normalize($_POST['patient']);
        $date=Manager::normalize($_POST['daterv']);
        $heure=Manager::normalize($_POST['heure']);
        $motif=Manager::normalize($_POST['motif']);
        if($sec->verif_doublon($date,$heure) || $sec->isWeekend($date)){
            $mess='date deja occupé ou c\'est un weekend';
        }else{
            if($sec->ajout_rv($login,$med,$patient,$date,$heure,$motif)){
                $mess='Rendez-vous ajouté avec succès';
            }
        }
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
                            <small>Service de <?php $sec->getservice($user['service']);?></small>
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
               <div class="ajout" title="ajouter un rendez-vous">
                <i class="material-icons cible">add_circle_outline</i>
               </div>
               <hr>
               <div class="mess-error"> <i class="material-icons">error</i>
               <span><?php Manager::set($mess) ?></span>
                 </div>
               <h3>Horaire</h3>
               <span>matin : 8h à 12h</span>
               <span>Soir : 15h à 17h</span>
               
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
                                $datas = $sec->list_rv($_SESSION['profil'],$_SESSION['login']);
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
                        $sec->affichepat($p);
                        ?>
                        </ul> 
                </div>
            </div>
        </div>
    </main>
    <div class="modal">
            <form method="post" id="ajout">
                <h4>Ajout d'un rendez-vous</h4>
                <p>
                    <label for="medecin">medecin</label>
                    <i class="material-icons">person</i>
                    <input type="text" name="medecin" pattern="[a-z0-9]{6}" id="med">
                </p>
                <p>
                    <label for="patient">patient</label>
                    <i class="material-icons">person</i>
                    <input type="text" name="patient" pattern="[a-z0-9]{6}" id="pat">
                </p>
                <p>
                    <label for="Date">Date</label>
                    <i class="material-icons">date_range</i>
                    <input type="date" name="daterv" id="daterv">
                </p>
                <p>
                    <label for="heure">heure</label>
                    <i class="material-icons">access_time</i>
                    <input type="time" name="heure" id="heure">
                </p>
                <p>
                    <label for="motif">motif</label>
                    <i class="material-icons">insert_comment</i>
                    <input type="text" name="motif" id="motif">
                </p>
                <p><button type="submit">enregistrer</button></p>
                <i class="material-icons fermer" title="fermer">close</i>
            </form>
            <div class="alert">

            </div>
    </div>  
</body>
<script src="../bootstrap/js/jquery-3.js"></script>
    <script src="../bootstrap/DataTables/datatables.js"></script>
    <script src="../bootstrap/js/bord.js"></script>
</html>