<?php
    require('../classes/secretaire.php');

    $db = new PDO('mysql:host=localhost;dbname=rvhopital','zola','1996diokou');

    $user = new Manager($db);
    var_dump($user);
?>