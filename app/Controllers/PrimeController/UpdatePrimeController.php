<?php

require_once('../../Models/Prime.php');
require_once('../../Services/PrimeService/InterfacePrime.php');
require_once('../../Services/PrimeService/ServicePrime.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Claim_ID = $_POST['Claim_ID'];
    $Amount = $_POST['Amount'];
    $Date = $_POST['Date'];
    $Premium_ID = $_POST['Premium_ID'];
  
   
    

    try{
        $Primeup = new Prime($Amount,$Date,$Claim_ID);
        $Primeup ->setPremium_ID($Premium_ID);
       
        
        
        // add Client
        $sevicePrimeupd = new ServicePrime();
        $sevicePrimeupd->updatePrime($Primeup);

     
        
        header('location:../../Views/Primes/displayPrime.php');
    }catch(PDOException $e){
        
        die($e->getMessage());
    }
    


    
}