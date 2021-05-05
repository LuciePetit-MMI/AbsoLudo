<?php

//creation de la class
class Topic implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $title = null;
    public $datetime = null;
    public $message = null;
    public $idProfil = 0;

    public $laCategorie = null;
    public $leProfilCree = null;
    public $lesProfilsRepondent = array();

//Constructor
    public function __construct($id, $title, $datetime, $message, $idProfil)
    {
        $this->id = $id;
        $this->title = $title;
        $this->datetime = $datetime;
        $this->message = $message;
        $this->idProfil = $idProfil;
    }

//Getters
    public function getId(){                        return $this->id;}
    public function getTitle(){                     return $this->title;}
    public function getDatetime(){                  return $this->datetime;}
    public function getMessage(){                   return $this->message;}
    public function getIdProfil(){                   return $this->idProfil;}

    public function getLaCategorie(){               return $this->laCategorie;}
    public function getLeProfilCree(){              return $this->leProfilCree;}
    public function getLesProfilsRepondent(){       return $this->lesProfilsRepondent;}

//Setters
    public function setId($id){                                     $this->id = $id;}
    public function setTitle($title){                               $this->title = $title;}
    public function setDatetime($datetime){                         $this->datetime = $datetime;}
    public function setMessage($message){                           $this->message = $message;}
    public function setIdProfil($IdProfil){                           $this->idProfil = $idProfil;}

    public function setLaCategorie($laCategorie){                   $this->laCategorie = $laCategorie;}
    public function setLeProfilCree($leProfilCree){                 $this->leProfilCree = $leProfilCree;}
    public function setLesProfilsRepondent($lesProfilsRepondent){   $this->lesProfilsRepondent = $lesProfilsRepondent;}


//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
