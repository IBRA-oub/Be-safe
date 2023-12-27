<?php

require_once('../../Models/Claim.php');
require_once('../../Services/ClaimService/InterfaceClaim.php');
require_once('../../Services/ClaimService/ServiceClaim.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $Descreption = $_POST['Descreption'];
    $Date = $_POST['Date'];
    $Article_ID = $_POST['Article_ID'];
  
    

    try{
        $Claim = new Claim($Descreption,$Date,$Article_ID);
       
        
        // add Client
        $seviceClaim = new ServiceClaim();
        $seviceClaim->addClaim($Claim);

     
        
        header('location:../../Views/Claims/displayClaim.php');
    }catch(PDOException $e){
        
        die($e->getMessage());
    }
    


    
}