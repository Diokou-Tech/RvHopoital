<?php

require('secretaire.php');

$zola = new Secretaire('emp001','1996diokou');
var_dump($zola);

$zola->is_valid();