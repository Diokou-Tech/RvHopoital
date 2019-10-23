<?php
require('../classes/secretaire.php');
if(empty($_POST)){
    Manager::redir(0);
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
            Manager::redir(1);
            }
        }else{
            $user= new Manager($db);
            if($user->is_valid_med($login,$motpasse)){
                session_start();
                $_SESSION['profil']=$profil;
                $_SESSION['login']=$login;
                header('location:bord-med.php');
            }else{
            Manager::redir(1);
    }
}
