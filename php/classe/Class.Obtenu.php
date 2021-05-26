<?php
require_once('../classe/class.Badge.php');

class Obtenu extends Badge implements JsonSerializable{

    public $obtenu = false;

//Constructor
    public function __construct($id, $name, $condition, $obtenu){
        parent::__construct($id, $name, $condition);
        $this->obtenu = $obtenu;
    }

//Getters
    public function isObtenu()          {return $this->obtenu;}
    public function getId()             {return $this->id;}
    public function getName()           {return $this->name;}
    public function getCondition()      {return $this->condition;}

    public function getLesProfils()     {return $this->lesProfils;}

//Setters
    public function setObtenu($obtenu)              {$this->obtenu = $obtenu;}
    public function setId($id)                      {$this->id = $id;}
    public function setName($name)                  {$this->name = $name;}
    public function setCondition($condition)        {$this->condition = $condition;}

    public function setLesProfils($lesProfils)      {$this->lesProfils = $lesProfils;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }

}