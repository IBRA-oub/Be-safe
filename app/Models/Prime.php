<?php

class Prime{
    private $Pemium_ID;
    private $Amount;
    private $Date;
    private $Claim_ID;

    public function __construct($Premium_ID,$Amount,$Date,$Claim_ID){
        
        $this->Pemium_ID = $Premium_ID;
        $this->Amount = $Amount;
        $this->Date = $Date;
        $this->Claim_ID = $Claim_ID;
        
    }

    public function getPremium_ID(){
        return $this->Pemium_ID;
    }
    
    public function setPremium_ID($Premium_ID){
        $this->Pemium_ID = $Premium_ID;
    }

    public function getAmount(){
        return $this->Amount;
    }
    
    public function setAmount($Amount){
        $this->Amount = $Amount;
    }

    public function getDate(){
        return $this->Date;
    }
    
    public function setDate($Date){
        $this->Date = $Date;
    }

    public function getClaim_ID(){
        return $this->Claim_ID;
    }
    
    public function setClaim_ID($Claim_ID){
        $this->Claim_ID = $Claim_ID;
    }
}




?>