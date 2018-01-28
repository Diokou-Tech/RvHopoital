<?php
require('connexion.php');
class Manager{
        private $_db;  //instance de PDO

        public function __construct($db)
        {
            $this->setDB($db);
        } 
        public function list_rv($sec):array
        {
        $q=$this->_db->query('select * from rendezvous where matricule="'.$sec.'"');
        $donnes=$q->fetchAll();
        return $donnes;
        }
        public function is_valid_sec(string $login,string $pwd)
        {
            $q = $this->_db->query('select * from secretaire  where identifiant="'.$login.'" and  motpasse="'.$pwd.'"');
            $data=$q->rowCount();
            return $data;
        }
        public function is_valid_med(string $login,string $pwd)
        {
            $q = $this->_db->query('select * from medecin  where identifiant="'.$login.'" and  motpasse="'.$pwd.'"');
            $data=$q->rowCount();
            return $data;
        }

        public function getpatient(string $id):array
        {
            $q = $this->_db->query('select * from patient where matricule="'.$id.'"');
            $data=$q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function ajout_rv()
        {
            
        }
        public function setDB(PDO $db)
        {
        $this->_db=$db;           
        }
        public static function redir(int $val){
            header('location:../index.php?error='.$val);
        }
        public static function normalize($var)
        {
            $var=trim($var);
            $var=htmlentities($var);
            $var=strip_tags($var);
            return $var;
        }
        public static function verif_session(){
            if(empty($_SESSION['login']))
            {
                self::redir(1);
            }
        }
        public function affichepat(string $id)
        {
            $tab=self::getpatient($id);
            foreach($tab as $key => $val){
                if($key !='matricule')
                echo "<li> <strong>$key :</strong> $val </li>";
            }
        }
        public function getsec($id)
        {
            $q = $this->_db->query('select * from secretaire where identifiant="'.$id.'"');
            $data=$q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function getmed($id)
        {
            $q = $this->_db->query('select * from medecin where identifiant="'.$id.'"');
            $data=$q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public function gettotal($login)
        {
            $q = $this->_db->query('select * from rendezvous  where identifiant="'.$login.'" and date_rv="'.$login.'"');
            $data=$q->rowCount();
            return $data;
        }
        public function verif_doublon($date,$heure)
        {
            $q = $this->_db->query('select * from rendezvous  where date_rv="'.$date.'" and heure="'.$heure.'"');
            $data=$q->rowCount();
            return $data;
        }
}

?>