<?php

?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bord.css">    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="../bootstrap/DataTables/datatables.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <div class="log">
            Sâ-Hopital
        </div>
        <div class="logout">
            <button>Se Deconnecter</button>
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
                            <b>Cheikhou DIOKOU</b><br>
                            <small>Service de Chirurgie</small>
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
            </div>
            <div class="col-lg-7 col-md-7">
                    <table border="1" id="table">
                            <thead>
                                <th>id</th>
                                <th>patient</th>
                                <th>sexe</th>
                                <th>heure_rv</th>
                                
                            </thead>
                            <tbody>
                                <tr>
                                    <td>cheikh</td>
                                    <td>diokou</td>
                                    <td>M</td>
                                    <td>12:30</td>
                                </tr>
                                <tr>
                                    <td>zola</td>
                                    <td>tech</td>
                                    <td>M</td>
                                    <td>13:30</td>
                                </tr>
                                <tr>
                                    <td>adja</td>
                                    <td>mbaye</td>
                                    <td>F</td>
                                    <td>12:50</td>
                                </tr>
                                <tr>
                                        <td>adja</td>
                                        <td>mbaye</td>
                                        <td>F</td>
                                        <td>12:50</td>
                                    </tr>
                            </tbody>
                        </table>
            </div>
            <div class="col-lg-3 col-md-3 patient">
                <h4>info-patient</h4>
                <div>
                        <ul class="content">
                            <li>Abdou <b>Fall</b></li>
                            <li>78 386 24 14 / 76 576 54 04</li>
                            <li>Yeumbeul Nord</li>
                            <li>Abdou <b>Fall</b></li>
                            <li>78 386 24 14 / 76 576 54 04</li>
                            <li>Yeumbeul Nord</li>
                        </ul> 
                </div>
            </div>
        </div>
    </main>

</body>
<script src="../bootstrap/js/jquery-3.js"></script>
    <script src="../bootstrap/DataTables/datatables.js"></script>
    <script>
$(document).ready(function(){
    $('#table').DataTable( {
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        lengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée correspondant dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
} );
} );
    </script>
</html>