<?php

require_once('../../Models/Claim.php');
require_once('../../Services/ClaimService/InterfaceClaim.php');
require_once('../../Services/ClaimService/ServiceClaim.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $Claim_ID = $_POST['Claim_ID'];
    $Descreption = $_POST['Descreption'];
    $Date = $_POST['Date'];
    $Article_ID = $_POST['Article_ID'];
  
   
    

    try{
        $Claimup = new Claim($Descreption,$Date,$Article_ID);
        $Claimup ->setClaim_ID($Claim_ID);
       
        
        
        // add Client
        $seviceClaimupd = new ServiceClaim();
        $seviceClaimupd->updateClaim($Claimup);

     
        
        header('location:../../Views/Claims/displayClaim.php');
    }catch(PDOException $e){
        
        die($e->getMessage());
    }
    


    
}