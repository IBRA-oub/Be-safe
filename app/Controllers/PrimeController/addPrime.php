<?php

require_once('../../Models/Prime.php');
require_once('../../Services/PrimeService/InterfacePrime.php');
require_once('../../Services/PrimeService/ServicePrime.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $Amount = $_POST['Amount'];
    $Date = $_POST['Date'];
    $Claim_ID = $_POST['Claim_ID'];
  
    

    try{
        $Prime = new Prime($Amount,$Date,$Claim_ID);
       
        
        // add Client
        $sevicePrim = new ServicePrime();
        $sevicePrim->addPrime($Prime);

     
        
        header('location:../../Views/Primes/displayPrime.php');
    }catch(PDOException $e){
        
        die($e->getMessage());
    }
    


    
}