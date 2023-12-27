<?php

require_once('../../Services/PrimeService/InterfacePrime.php');
require_once('../../Services/PrimeService/ServicePrime.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Premium_ID= $_GET['Premium_ID'];
    
    $deletePrime = new ServicePrime();
    $result = $deletePrime->deletePrime($Premium_ID);

    if($result){
        header('location:../../Views/Primes/displayPrime.php');
    }else{
        echo "<script> alert('Data not delete');</script>";
    }
}



?>