<?php
require('connexion.php');
class Manager{
        private $_db;  //instance de PDO
        public function __construct($db)
        {
            $this->setDB($db);
        } 
        public function list_rv($profil,$id):array //recupére la liste des rendez concernant un secretaire
        {
        if($profil=='secretaire'){
            $q=$this->_db->query('select * from rendezvous where secretaire="'.$id.'"');
            $donnes=$q->fetchAll(PDO::FETCH_ASSOC);
            return $donnes;
        }else{
            $q=$this->_db->query('select * from rendezvous where medecin="'.$id.'"');
            $donnes=$q->fetchAll(PDO::FETCH_ASSOC);
            return $donnes;
        }
        }
        public function is_valid_sec(string $login,string $pwd)// verifie l'athentification des sécretaires dans la base
        {
            $q = $this->_db->query('select * from secretaire  where identifiant="'.$login.'" and  motpasse="'.$pwd.'"');
            $data=$q->rowCount();
            return $data;
        }
        public function is_valid_med(string $login,string $pwd)//// verifie l'athentification des medecins
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
        public function ajout_rv($sec,$med,$pat,$dat,$heu,$mot)
        {
            $sql="INSERT INTO rendezvous
            (secretaire,medecin,patient,date_rv,heure,motif)
            VALUES
            ('$sec','$med','$pat','$dat','$heu','$mot')";
            $q = $this->_db->exec($sql);
            return $q;
        }
        public function delete_rv($id){
            $sql="DELETE FROM rendezvous where  id='$id'";
            $q = $this->_db->exec($sql);

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
                self::redir(0);
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
        public function getuser($profil,$id)
        {
            if($profil=='secretaire'){
                $q = $this->_db->query('select * from secretaire where identifiant="'.$id.'"');
                $data=$q->fetch(PDO::FETCH_ASSOC);
                return $data;
            }else{
                $q = $this->_db->query('select * from medecin where identifiant="'.$id.'"');
                $data=$q->fetch(PDO::FETCH_ASSOC);
                return $data;
            }
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
        public static function isWeekend($date) {
            $weekDay = date('w', strtotime($date));
            return ($weekDay == 0 || $weekDay == 6);
        }
        public static function get(string $ch){
            if(isset($_GET[$ch])){
                return $_GET[$ch];
            }
        }
        public function getservice(string $ser){
            $q = $this->_db->query('select nom from service where id_service="'.$ser.'"');
            $data=$q->fetch(PDO::FETCH_ASSOC);
            echo $data['nom'];
        }
        public static function logout(){
            $logout=self::get('logout');
            if($logout){
                $_SESSION['login']=0;
            }
        }
        public static function set($val){
        if(isset($val)){
            echo $val;
        }else{
            echo "Message ";
        }   
        }
        public function total($login,$date){

        }

}
?>