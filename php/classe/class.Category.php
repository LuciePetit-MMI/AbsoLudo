<?php

//creation de la class
class Category implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $name = null;
    public $description = null;

    public $lesTopics = array();

//Constructor
    public function __construct($id, $name, $description)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

//Getters
    public function getId(){                return $this->id;}
    public function getName(){              return $this->name;}
    public function getDescription(){       return $this->description;}

    public function getLesTopics(){         return $this->lesTopics;}

//Setters
    public function setId($id){                         $this->id = $id;}
    public function setName($name){                     $this->name = $name;}
    public function setDescription($description){       $this->description = $description;}

    public function setLesTopics($lesTopics){           $this->lesTopics = $lesTopics;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
