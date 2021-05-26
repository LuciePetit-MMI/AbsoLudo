<?php
require_once ('../classe/class.Profil.php');

class Interagissant extends Profil implements JsonSerializable{

    public $date = '00-00-0000';
    public $possede = false;
    public $connait = false;
    public $souhaite = false;
    public $idJeux = 0;

    public $sesJeux = array();

//Constructor
    public function __construct($id = 0, $pseudo = null, $name = null, $lasteName = null, $age = null, $avatar = null, $favGame = null, $shopName = null, $hobbies = null, $address = null, $shopType = null, $idCompte = 0, $date='00-00-0000', $possede=false, $connait=false, $souhaite=false, $idJeux =0)
    {
        parent::__construct($id, $pseudo, $name, $lasteName, $age, $avatar, $favGame, $shopName, $hobbies, $address, $shopType, $idCompte);
        $this->date = $date;
        $this->possede = $possede;
        $this->connait = $connait;
        $this->souhaite = $souhaite;
        $this->idJeux = $idJeux;
    }

//Getters
    public function getDate(){          return $this->date;}
    public function isPossede(){        return $this->possede;}
    public function isConnait(){        return $this->connait;}
    public function isSouhaite(){       return $this->souhaite;}
    public function getIdJeux(){        return $this->idJeux;}

    public function getSesJeux(){       return $this->sesJeux;}

//Setters
    public function setDate($date){             $this->date = $date;}
    public function setPossede($possede){       $this->possede = $possede;}
    public function setConnait($connait){       $this->connait = $connait;}
    public function setSouhaite($souhaite){     $this->souhaite = $souhaite;}
    public function setIdJeux($idJeux){         $this->IdJeux = $idJeux;}

    public function setSesJeux($sesJeux){       $this->sesJeux = $sesJeux;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}