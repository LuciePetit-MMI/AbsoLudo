<?php

//creation de la class
class Compte implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $email = null;
    public $name = null;
    public $prenom = null;
    public $pw = null;
    public $siret = 0;
    public $role = null;

    public $sesProfils = array();

//Constructor
    public function __construct($id, $email, $name, $prenom, $pw, $siret, $role)
    {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->prenom = $prenom;
        $this->pw = $pw;
        $this->siret = $siret;
        $this->role = $role;
    }


//Getters
    public function getId()             {return $this->id;}
    public function getEmail()          {return $this->email;}
    public function getName()           {return $this->name;}
    public function getPrenom()         {return $this->prenom;}
    public function getPw()             {return $this->pw;}
    public function getSiret()          {return $this->siret;}
    public function getRole()           {return $this->role;}

    public function getSesProfils()     {return $this->sesProfils;}


//Setters
    public function setId($id)                      {$this->id = $id;}
    public function setEmail($email)                {$this->email = $email;}
    public function setName($name)                  {$this->name = $name;}
    public function setPrenom($prenom)              {$this->prenom = $prenom;}
    public function setPw($pw)                      {$this->pw = $pw;}
    public function setSiret($siret)                {$this->siret = $siret;}
    public function setRole($role)                  {$this->role = $role;}

    public function setSesProfils($sesProfils)      {$this->sesProfils = $sesProfils;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
