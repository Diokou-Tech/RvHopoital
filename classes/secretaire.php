<?php
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
        public static function ajout_rv()
        {
           echo "zola is  back static";
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
}

?>