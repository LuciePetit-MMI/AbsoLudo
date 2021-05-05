<?php

//creation de la class
class Badge implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $name = null;
    public $condition = null;

    public $lesProfils = array();

//Constructor
    public function __construct($id, $name, $condition)
    {
        $this->id = $id;
        $this->name = $name;
        $this->condition = $condition;
    }

//Getters
    public function getId(){            return $this->id;}
    public function getName(){          return $this->name;}
    public function getCondition(){     return $this->condition;}

    public function getLesProfils(){    return $this->lesProfils;}

//Setters
    public function setId($id){                     $this->id = $id;}
    public function setName($name){                 $this->name = $name;}
    public function setCondition($condition){       $this->condition = $condition;}

    public function setLesProfils($lesProfils){     $this->lesProfils = $lesProfils;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
