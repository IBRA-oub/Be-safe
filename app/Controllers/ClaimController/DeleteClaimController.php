<?php

require_once('../../Services/ClaimService/InterfaceClaim.php');
require_once('../../Services/ClaimService/ServiceClaim.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Claim_ID = $_GET['Claim_ID'];
    
    $deleteClaim = new ServiceClaim();
    $result = $deleteClaim->deleteClaim($Claim_ID);

    if($result){
        header('location:../../Views/Claims/displayClaim.php');
    }else{
        echo "<script> alert('Data not delete');</script>";
    }
}



?>