<?php

class AssurClient{

    private $userId;
    private $Assurance_ID;
    
    public function __construct($userId, $Assurance_ID){
        $this->userId = $userId;
        $this->Assurance_ID = $Assurance_ID;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getAssurance_ID(){
        return $this->Assurance_ID;
    }

    public function setAssurance_ID($Assurance_ID){
        $this->Assurance_ID = $Assurance_ID;
    }

    
}



?>