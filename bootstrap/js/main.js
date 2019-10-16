function formulaire(){
    $('main').css('opacity',0.2)
    $('.btnvue').prev('input').attr('type','password');
    $('.form').slideDown('slow');
    $('.btnvue').text('visibility')
}
function fermerform(){
    $('.form').slideUp();
    $('main').css('opacity',1);
    $('.alert').slideUp();
}
function motpasse(){
    if($(this).prev('input').prop('type') == 'password') {
        //Si c'est un input type password
        $(this).prev('input').prop('type','text');
        $(this).text('visibility_off');
    } else {
        //Sinon
        $(this).prev('input').prop('type','password');
        $(this).text('visibility');
    }
}
$('document').ready(function(){

    $('nav>button').click(formulaire)

    $('.btnclose').click(fermerform);
    $('.dropcontent>button').click(formulaire);

    $('.btnvue').click(motpasse);

    $('nav i').click(function(){
        $('.dropcontent').slideToggle('fast'); 
    }) 
    $(document).keypress(function(e){
        var touche = String.fromCharCode(e.which);
        if(touche==' '){
            formulaire();
        } 
    })
    $('#form').submit(function(e){
        var login=$('#login').val();
        var pass=$('#pass').val();
        if(pass=='' || login==''){
            $('.alert').text('Veuillez remplir tous les champs').css('color','white');
            $('.alert').slideDown('slow');
            e.preventDefault();
        }
    })

})  