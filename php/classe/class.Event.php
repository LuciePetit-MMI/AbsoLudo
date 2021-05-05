<?php

//creation de la class
class Event implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $name = null;
    public $start = null;
    public $end = null;
    public $activity = null;
    public $address = null;
    public $price = null;
    public $description = null;
    public $members = null;
    public $idProfil = null;

    public $lesParticipants = array();
    public $lesProfessionnels = array();

//Constructor
    public function __construct($id, $name, $start, $end, $activity, $address, $price, $description, $members, $idProfil)
    {
        $this->id = $id;
        $this->name = $name;
        $this->start = $start;
        $this->end = $end;
        $this->activity = $activity;
        $this->address = $address;
        $this->price = $price;
        $this->description = $description;
        $this->members = $members;
        $this->idProfil = $idProfil;
    }

//Getters
    public function getId(){                        return $this->id;}
    public function getName(){                      return $this->name;}
    public function getStart(){                     return $this->start;}
    public function getEnd(){                       return $this->end;}
    public function getActivity(){                  return $this->activity;}
    public function getAddress(){                   return $this->address;}
    public function getPrice(){                     return $this->price;}
    public function getDescription(){               return $this->description;}
    public function getMembers(){                   return $this->members;}
    public function getIdProfil(){                  return $this->idProfil;}

    public function getLesParticipants(){           return $this->lesParticipants;}
    public function getLesProfessionnels(){         return $this->lesProfessionnels;}

//Setters
    public function setId($id){                                     $this->id = $id;}
    public function setName($name){                                 $this->name = $name;}
    public function setStart($start){                               $this->start = $start;}
    public function setEnd($end){                                   $this->end = $end;}
    public function setActivity($activity){                         $this->activity = $activity;}
    public function setAddress($adress){                            $this->address = $adress;}
    public function setPrice($price){                               $this->price = $price;}
    public function setDescription($description){                   $this->description = $description;}
    public function setMembers($members){                           $this->members = $members;}
    public function setIdProfil($idProfil){                         $this->idProfil = $idProfil;}

    public function setLesParticipants($lesParticipants){           $this->lesParticipants = $lesParticipants;}
    public function setLesProfessionnels($lesProfessionnels){       $this->lesProfessionnels = $lesProfessionnels;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
