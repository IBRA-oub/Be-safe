<?php



class Client{
    private $user_Id;
    private $FullName;
    private $CIN;
    private $adress;
    private $Number;

    public function __construct( $FullName, $CIN, $adress, $Number){
        $this->FullName = $FullName;
        $this->CIN = $CIN;
        $this->adress = $adress;
        $this->Number = $Number;
        
    }

    public function getUser_Id(){
        return $this->user_Id;
    }

    public function setUser_Id($user_Id){
        $this->user_Id = $user_Id;
    }

    public function getFullName(){
        return $this->FullName;
    }

    public function setName($FullName){
        $this->FullName = $FullName;
    }

    public function getCIN(){
        return $this->CIN;
    }

    public function setCIN($CIN){
        $this->CIN = $CIN;
    }

    public function getAdress(){
        return $this->adress;
    }

    public function setAdress($adress){
        $this->adress = $adress;
    }

    public function getNumber(){
        return $this->Number;
    }

    public function setNumber($Number){
        $this->Number = $Number;
    }
}




?>