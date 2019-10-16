<?php

    class connexion{
        protected $_user='zola';
        protected $_pass='1996diokou';
        protected $_base='rvhopital';
        
        public static function connnecter(){
            $conn = new PDO("mysql:host;dbname=rvhopital",$this->_user,$this->_pass);
		$conn->setAttribute(PDO::ERRORMODE, PDO::ERROREXCEPTION);
        return $conn;
        }
        
    }

    class Verif{
        public $login=null;
        public $mopass=null;
    }



?>