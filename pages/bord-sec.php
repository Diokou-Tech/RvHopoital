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
            Sa-Hôpital
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
               <div class="ajout" title="ajouter un rendez-vous">
                <i class="material-icons cible">add_circle_outline</i>
               </div>
            </div>
            <div class="col-lg-7 col-md-7">
                    <table border="1" id="table">
                            <thead>
                                <th>id</th>
                                <th>medecin</th>
                                <th>patient</th>
                                <th>date</th>
                                <th>heure</th>
                                <th>motif</th>
                                <th>Etat</th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                    <td>med001</td>
                                    <td>pat001</td>
                                    <td>2019-10-25</td>
                                    <td>12:00</td>
                                    <td>suivi du traitement</td>
                                    <td>non effectué</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>adja</td>
                                    <td>mbaye</td>
                                    <td>2019-10-30</td>
                                    <td>12:50</td>
                                    <td>suivi du traitement</td>
                                    <td>non effectué</td>
                                    <td></td>
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
    <div class="modal">
            <form action="#" method="post" id="ajout">
                <h4>Ajout d'un rendez-vous</h4>
                <p>
                    <label for="patient">patient</label>
                    <input type="text" name="patient" pattern="[a-z0-9]{6}" id="pat">
                </p>
                <p>
                    <label for="medecin">medecin</label>
                    <input type="text" name="medecin" pattern="[a-z0-9]{6}" id="med">
                </p>
                <p>
                    <label for="Date">Date</label>
                    <input type="date" name="daterv" id="daterv">
                </p>
                <p>
                    <label for="heure">heure</label>
                    <input type="time" name="heure" id="heure">
                </p>
                <p>
                    <label for="motif">motif</label>
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
<script src="../bootstrap/js/main.js"></script>
    <script src="../bootstrap/DataTables/datatables.js"></script>
    <script>
$(document).ready(function(){
    function verif_form_ajout(){
        var pat=$('#pat').val();
        var med=$('#med').val();
        var daterv=$('#daterv').val();
        var heure=$('#heure').val();
        var motif=$('#motif').val();
        return(pat=='' || med =='' || daterv=='' || heure=='' || motif=='')
    }
    $('#ajout').on('submit',function(e){
            if(verif_form_ajout){
                e.preventDefault();
                $('.alert').text('veuiller remplir tous les champs pour ajouter un rendez-vous');
            }
    })
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
        emptyTable:     "Aucune donnée disponible dans le tableau",
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
});
    $('.cible').click(function(){
        $('.modal').fadeToggle('slow');
        $('main').toggleClass('opac');
    });
    $('.fermer').click(function(){  
        $(this).parents('.modal').fadeOut('slow');
        $('main').toggleClass('opac');
    });
    
});
    </script>
</html>