<?php
    require('../classes/secretaire.php');

    $db = new PDO('mysql:host=localhost;dbname=rvhopital','zola','1996diokou');

    $user = new Manager($db);
    $date='2019-10-27';
    echo $date;
    function isWeekend($date) {
        $weekDay = date('w', strtotime($date));
        return ($weekDay == 0 || $weekDay == 6);
    }
    if($user->isWeekend($date)){
        echo "c'est un weekend";
    }else{
        echo "ce nest pas un weekend";
    }
    $heure = 
?>