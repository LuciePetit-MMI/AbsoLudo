<?php
require_once('../classe/class.Profil.php');

class Repondant extends Profil implements JsonSerializable{

    public $idTop = 0;
    public $message = null;
    public $date = "00-00-0000";

    public $lesTopics = array();


    public function __construct($id=0, $pseudo=null, $name=null, $lasteName=null, $age=null, $avatar=null, $favGame=null, $shopName=null, $hobbies=null, $address=null, $shopType=null, $idCompte = 0, $idTop=0, $message=null, $date="00-00-0000")
    {
        parent::__construct($id, $pseudo, $name, $lasteName, $age, $avatar, $favGame, $shopName, $hobbies, $address, $shopType, $idCompte);
        $this->idTop = $idTop;
        $this->message = $message;
        $this->date = $date;
    }

//Getters
    public function getDate(){              return $this->date;}
    public function getMessage(){           return $this->message;}

    public function getLesTopics(){         return $this->lesTopics;}

//Setters
    public function setDate($date){                         $this->date = $date;}
    public function setMessage($message){                   $this->message = $message;}

    public function setLesTopics($lesTopics){               $this->lesTopics = $lesTopics;}
//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}