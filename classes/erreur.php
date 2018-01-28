<?php
class Erreur{
    public $error=null;
    public function __construct($e){
        $this->error=$e;
    } 
    public function getMessage(){
        $chaine=null;
        switch($this->error){
            case 0: $chaine="veuilez-vous connecter";
            case 1: $chaine="identifiants incorrects";
        }
        echo "$chaine";
    }
}