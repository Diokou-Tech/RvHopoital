<?php
$user='zola';
$pass='1996diokou';
function connexion($u,$p){
    TRY
    {
        $conn = new PDO('mysql:host=localhost;dbname=rvhopital',$u,$p);
    }
    Catch(PDOException $e)
    {
        echo 'erreur '.$e->getMessage();
        exit();
    }
    return $conn;
}
$c=connexion($user,$pass);











?>