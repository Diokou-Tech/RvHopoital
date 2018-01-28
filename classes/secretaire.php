<?php
    require('connexion.php');
    $db=connexion($user,$pass);
$zola = new Manager($db);
class Manager{
        private $_db;  //instance de PDO
        public $_login='emp001';

        public function __construct($db){
            $this->setDB($db);
        } 
        public function list_rv($sec):array{
        $q=$this->_db->query('select * from rendezvous where matricule="'.$sec.'"');
        $donnes=$q->fetchAll();
        return $donnes;
        }
        public function is_valid_sec(string $login,string $pwd){
            $q = $this->_db->query('select * from secretaire  where identifiant="'.$login.'" and  motpasse="'.$pwd.'"');
            $data=$q->rowCount();
            return $data;
        }
        public function is_valid_med(string $login,string $pwd){
            $q = $this->_db->query('select * from medecin  where identifiant="'.$login.'" and  motpasse="'.$pwd.'"');
            $data=$q->rowCount();
            return $data;
        }

        public function getpatient(string $id):array{
            $q = $this->_db->query('select * from patient where matricule="'.$id.'"');
            $data=$q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
        public static function ajout_rv(){
           
        }
        public function setDB(PDO $db){
        $this->_db=$db;           
        }
}
$data=$zola->getpatient('pat004');
echo $zola->is_valid_sec('emp001','1996diokou');
echo $zola->is_valid_med('med001','1996diokou');
echo "<pre>";
var_dump($data);
echo "</pre>";

Manager::ajout_rv();
?>