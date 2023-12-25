<?php


class Article{
    private $Article_ID;
    private $Title;
    private $Description;
    private $Date;
    private $userId;
    private $Assurence_ID;

    public function __construct($Title, $Description, $Date, $userId, $Assurence_ID){
        $this->Title = $Title;
        $this->Description = $Description;
        $this->Date = $Date;
        $this->userId = $userId;
        $this->Assurence_ID = $Assurence_ID;
    }

    public function getArticle_ID(){
        return $this->Article_ID;
    }
    public function setArticle_ID($Article_ID){
     $this->Article_ID=$Article_ID;
    }

    public function getTitle(){
        return $this->Title;
    }
    public function setTitle($Title){
     $this->Title=$Title;
    }

    public function getDescriptione(){
        return $this->Description;
    }
    public function setDescription($Description){
     $this->Description=$Description;
    }

    public function getDate(){
        return $this->Date;
    }
    public function setDate($Date){
     $this->Date=$Date;
    }

    public function getUserId(){
        return $this->userId;
    }
    public function setUserId($userId){
     $this->userId =$userId;
    }
    public function getAssurence_ID(){
        return $this->Assurence_ID;
    }
    public function setAssurence_ID($Assurence_ID){
     $this->Assurence_ID =$Assurence_ID;
    }
    
}







?>