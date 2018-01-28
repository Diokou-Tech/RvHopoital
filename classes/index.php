<?php
    require('secretaire.php');
    if(is_null($_SESSION['connexion'])){
        Manager::redir(0);
    }
    
?>