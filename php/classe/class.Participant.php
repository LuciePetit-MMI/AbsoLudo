<?php
require_once('../classe/class.Profil.php');

class Participant extends Profil implements JsonSerializable{

    public $date = '00-00-0000';
    public $participe = false;
    public $idEvent = 0;

    public $sesEvenements = array();

//Constructor
    public function __construct($id = 0, $pseudo = null, $name = null, $lasteName = null, $age = null, $avatar = null, $favGame = null, $shopName = null, $hobbies = null, $address = null, $shopType = null, $idCompte = 0, $date='00-00-0000', $participe=false, $idEvent = 0)
    {
        parent::__construct($id, $pseudo, $name, $lasteName, $age, $avatar, $favGame, $shopName, $hobbies, $address, $shopType, $idCompte);
        $this->date = $date;
        $this->participe = $participe;
        $this->idEvent = $idEvent;
    }

//Getters
    public function getDate(){              return $this->date;}
    public function isParticipe(){          return $this->participe;}
    public function getIdEvent(){           return $this->idEvent;}


    public function getSesEvenements(){     return $this->sesEvenements;}

//Setters
    public function setDate($date){                         $this->date = $date;}
    public function setParticipe($participe){               $this->participe = $participe;}
    public function setIdEvent($idEvent){                   $this->idEvent = $idEvent;}

    public function setSesEvenements($sesEvenements){       $this->sesEvenements = $sesEvenements;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}