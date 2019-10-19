<?php
require('../classes/secretaire.php');
require('../classes/connexion.php');
if(empty($_POST)){
    Manager::redir();
}
else{
    $profil=$_POST['profil'];
    $motpasse=$_POST['pass'];
    $login=$_POST['login'];
}
    $db=connexion('zola','1996diokou');
    if ($profil=='secretaire'){
            $user= new Manager($db);
            if($user->is_valid_sec($login,$motpasse)){
            session_start();
            $_SESSION['profil']=$profil;
            $_SESSION['login']=$login;
            header('location:bord-sec.php');
            }else{
            Manager::redir();
            }
        }else{
            $user= new Manager($db);
            if($user->is_valid_sec($login,$motpasse)){
                session_start();
                $_SESSION['profil']=$profil;
                $_SESSION['login']=$login;
                header('location:bord-med.php');
            }else{
            Manager::redir();
    }
}
