<?php
require_once('../classe/class.Profil.php');

class Commentant extends Profil implements JsonSerializable{

    public $idJeux = 0;
    public $date = '00-00-0000';
    public $message = null;
    public $note = 0;

    public $sesJeux = array();

//Constructor
    public function __construct($id = 0, $pseudo = null, $name = null, $lasteName = null, $age = null, $avatar = null, $favGame = null, $shopName = null, $hobbies = null, $address = null, $shopType = null, $idCompte = 0, $idJeux = 0, $date='00-00-0000', $message=null, $note=0)
    {
        parent::__construct($id, $pseudo, $name, $lasteName, $age, $avatar, $favGame, $shopName, $hobbies, $address, $shopType, $idCompte);
        $this->idJeux = $idJeux;
        $this->date = $date;
        $this->message = $message;
        $this->note = $note;
    }

//Getters
    public function getIdJeux(){        return $this->idJeux;}
    public function getDate(){          return $this->date;}
    public function getMessage(){       return $this->message;}
    public function getNote(){          return $this->note;}

    public function getSesJeux(){       return $this->sesJeux;}

//Setters
    public function setIdJeux($idJeux){         $this->idJeux = $idJeux;}
    public function setDate($date){             $this->date = $date;}
    public function setMessage($message){       $this->message = $message;}
    public function setNote($note){             $this->note = $note;}

    public function setSesJeux($sesJeux){       $this->sesJeux = $sesJeux;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}