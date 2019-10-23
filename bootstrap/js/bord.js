$(document).ready(function(){
    function verif_form_ajout(){
        var pat=$('#pat').val();
        var med=$('#med').val();
        var daterv=$('#daterv').val();
        var heure=$('#heure').val();
        var motif=$('#motif').val();
        return(pat=='' || med =='' || daterv=='' || heure=='' || motif=='')
    }
/*     $('#ajout').on('submit',function(e){
            if(verif_form_ajout){
                $('.alert').css({
                    'background-color':'rgb(235, 79, 79)',
                    'color':'white',
                    'padding':'5px',
                    'text-align':'center'
                });
                $('.alert').text('veuiller remplir tous les champs pour ajouter un rendez-vous');
                e.preventDefault();
            }else{
                ('.alert').css('background-color','teal');
                ('.alert').text('rendez-vous ajouté avec succès !');
            }
    }) */
    $('#ajout').on('submit',function(e){
        if(verif_form_ajout()){
            $('.alert').css({
                'background-color':'rgb(235, 79, 79)',
                'color':'white',
                'padding':'5px',
                'text-align':'center'
            });
            $('.alert').text('veuiller remplir tous les champs pour ajouter un rendez-vous');
            e.preventDefault();   
        }else{
            ('.alert').css('background-color','teal');
            ('.alert').text('rendez-vous ajouté avec succès !');
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
    $('.alert').show();
    $('.cible').click(function(){
        $('.modal').fadeToggle('slow');
        $('main').toggleClass('opac');
    });
    $('.fermer').click(function(){  
        $(this).parents('.modal').fadeOut('slow');
        $('main').toggleClass('opac');
    });
    
});