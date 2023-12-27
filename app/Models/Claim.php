<?php


class Claim{
    private $Claim_ID;
    private $Descreption;
    private $Date ;
    private $Article_ID;


    public function __construct($Descreption, $Date, $Article_ID){
        $this->Descreption = $Descreption;
        $this->Date = $Date;
        $this->Article_ID = $Article_ID;
    }

    public function getClaim_ID(){
        return $this->Claim_ID;
    }
 
    public function setClaim_ID($Claim_ID){
        $this->Claim_ID = $Claim_ID;
    }

    public function getDescreption(){
        return $this->Descreption;
    }
 
    public function setDescreption($Descreption){
        $this->Descreption = $Descreption;
    }

    public function getDate(){
        return $this->Date;
    }
 
    public function setDate($Date){
        $this->Date = $Date;
    }

    public function getArticle_ID(){
        return $this->Article_ID;
    }
 
    public function setArticle_ID($Article_ID){
        $this->Article_ID = $Article_ID;
    }


}


?>