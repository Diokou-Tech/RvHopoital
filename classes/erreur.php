<?php
class Erreur{
    public $error=null;
    public function __construct($e){
        $this->error=$e;
    } 
    public function getMessage(){
        $chaine=null;
        switch($this->error){
            case 0: return $chaine="veuilez-vous connecter";
            case 1: return $chaine="identifiants incorrects";
            case 2: return $chaine="erreur de date ou de heure non ouvert";
            case 3: return $chaine="cette date est deja prise par un patient";
        }
    }
}