<?php
require('../classes/secretaire.php');

if(empty($_POST)){
    Manager::redir(0);
}
else{
    $profil=Manager::normalize($_POST['profil']);
    $motpasse=Manager::normalize($_POST['pass']);
    $login=Manager::normalize($_POST['login']);
}
    $db=$conn;
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
