<?php
$user='zola';
$pass='1996diokou';
function connexion($u,$p){
    TRY 
    {
        $connect = new PDO('mysql:host=localhost;dbname=rvhopital',$u,$p);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    Catch(PDOException $e)
    {
        echo 'erreur '.$e->getMessage();
        exit();
    }
    return $connect;
}
$conn = connexion($user,$pass);

?>



