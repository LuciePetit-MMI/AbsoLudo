<?php

//creation de la class
class Profil implements JsonSerializable{

//creation des variables de la class
    public $id=0;
    public $pseudo = null;
    public $name = null;
    public $lasteName = null;
    public $age = null;
    public $avatar = null;
    public $favGame = null;
    public $hobbies = null;
    public $shopName = null;
    public $address = null;
    public $shopType = null;
    public $idCompte = 0;

    public $sonCompte = null;
    public $sesBadges = array();
    public $evenementPropose = array();
    public $sesTopics = array();
    public $sesJeuxCrees = array();

//Constructor
    public function __construct($id, $pseudo, $name, $lasteName, $age, $avatar, $favGame, $hobbies, $shopName, $address, $shopType, $idCompte)
    {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->name = $name;
        $this->lasteName = $lasteName;
        $this->age = $age;
        $this->avatar = $avatar;
        $this->favGame = $favGame;
        $this->hobbies = $hobbies;
        $this->shopName = $shopName;
        $this->address = $address;
        $this->shopType = $shopType;
        $this->idCompte = $idCompte;
    }

//Getters
    public function getId(){                    return $this->id;}
    public function getPseudo(){                return $this->pseudo;}
    public function getName(){                  return $this->name;}
    public function getLasteName(){             return $this->lasteName;}
    public function getAge(){                   return $this->age;}
    public function getAvatar(){                return $this->avatar;}
    public function getFavGame(){               return $this->favGame;}
    public function getHobbies(){               return $this->hobbies;}
    public function getShopName(){              return $this->shopName;}
    public function getAddress(){               return $this->address;}
    public function getShopType(){              return $this->shopType;}

    public function getSonCompte(){             return $this->sonCompte;}
    public function getSesBadges(){             return $this->sesBadges;}
    public function getEvenementPropose(){      return $this->evenementPropose;}
    public function getSesTopics(){             return $this->sesTopics;}
    public function getSesJeuxCrees(){          return $this->sesJeuxCrees;}

//Setters
    public function setId($id){                                     $this->id = $id;}
    public function setPseudo($pseudo){                             $this->pseudo = $pseudo;}
    public function setName($name){                                 $this->name = $name;}
    public function setLasteName($lasteName){                       $this->lasteName = $lasteName;}
    public function setAge($age){                                   $this->age = $age;}
    public function setAvatar($avatar){                             $this->avatar = $avatar;}
    public function setFavGame($favGame){                           $this->favGame = $favGame;}
    public function setHobbies($hobbies){                           $this->hobbies = $hobbies;}
    public function setShopName($shopName){                         $this->shopName = $shopName;}
    public function setAddress($address){                           $this->address = $address;}
    public function setShopType($shopType){                         $this->shopType = $shopType;}
    public function setIdCompte($idCompte){                         $this->idCompte = $idCompte;}

    public function setSonCompte($sonCompte){                       $this->sonCompte = $sonCompte;}
    public function setSesBadges($sesBadges){                       $this->sesBadges = $sesBadges;}
    public function setEvenementPropose($evenementPropose){         $this->evenementPropose = $evenementPropose;}
    public function setSesTopics($sesTopics){                       $this->sesTopics = $sesTopics;}
    public function setSesJeuxCrees($sesJeuxCrees){                 $this->sesJeuxCrees = $sesJeuxCrees;}



//JSON
    public function jsonSerialize(){ return get_object_vars($this); }
}

