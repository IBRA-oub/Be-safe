<?php

require_once('../../Services/AssuranceService/InterfaceAssurance.php');
require_once('../../Services/AssuranceService/ServiceAssurance.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Assurance_ID = $_GET['Assurence_ID'];
    
    $deleteAssur = new ServiceAssurance();
    $result = $deleteAssur->deleteAssurance($Assurance_ID);

    if($result){
        header('location:../../Views/assurance/dispalyAssurance.php');
    }else{
        echo "<script> alert('Data not delete');</script>";
    }
}



?>