<?php

//creation de la class
class Game implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $name = null;
    public $image = null;
    public $age = null;
    public $playTime = null;
    public $category = null;
    public $theme = null;
    public $player = null;
    public $type = null;
    public $editor = null;
    public $fnac = null;
    public $cultura = null;
    public $idProfil = null;

    public $lesCommentaires = array();
    public $lesInteractions = array();
    public $lesProfils = null;

//Constructor
    public function __construct($id, $name, $image, $age, $playTime, $category, $theme, $player, $type, $editor, $fnac, $cultura, $idProfil)
    {
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        $this->age = $age;
        $this->playTime = $playTime;
        $this->category = $category;
        $this->theme = $theme;
        $this->player = $player;
        $this->type = $type;
        $this->editor = $editor;
        $this->fnac = $fnac;
        $this->cultura = $cultura;
        $this->idProfil = $idProfil;
    }

//Getters
    public function getId(){                    return $this->id;}
    public function getName(){                  return $this->name;}
    public function getImage(){                 return $this->image;}
    public function getAge(){                   return $this->age;}
    public function getPlayTime(){              return $this->playTime;}
    public function getCategory(){              return $this->category;}
    public function getTheme(){                 return $this->theme;}
    public function getPlayer(){                return $this->player;}
    public function getType(){                  return $this->type;}
    public function getEditor(){                return $this->editor;}
    public function getFnac(){                  return $this->fnac;}
    public function getCultura(){               return $this->cultura;}
    public function getIdProfil(){               return $this->idProfil;}

    public function getLesCommentaires(){       return $this->lesCommentaires;}
    public function getLesInteractions(){       return $this->lesInteractions;}
    public function getLesProfils(){            return $this->lesProfils;}

//Setters
    public function setId($id){                                 $this->id = $id;}
    public function setName($name){                             $this->name = $name;}
    public function setImage($image){                           $this->image = $image;}
    public function setAge($age){                               $this->age = $age;}
    public function setPlayTime($playTime){                     $this->playTime = $playTime;}
    public function setCategory($category){                     $this->category = $category;}
    public function setTheme($theme){                           $this->theme = $theme;}
    public function setPlayer($player){                         $this->player = $player;}
    public function setType($type){                             $this->type = $type;}
    public function setEditor($category){                       $this->editor = $editor;}
    public function setFnac($fnac){                             $this->fnac = $fnac;}
    public function setCultura($cultura){                       $this->cultura = $cultura;}
    public function setIdProfil($idProfil){                     $this->idProfil = $idProfil;}

    public function setLesCommentaires($lesCommentaires){       $this->lesCommentaires = $lesCommentaires;}
    public function setLesInteractions($lesInteractions){       $this->lesInteractions = $lesInteractions;}
    public function setLesProfils($lesProfils){                 $this->lesProfils = $lesProfils;}

//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}
