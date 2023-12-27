<?php


require_once('../../Services/PrimeService/InterfacePrime.php');
require_once('../../Services/PrimeService/ServicePrime.php');

$dispalyPrime = new ServicePrime();

$PrimeData = $dispalyPrime->displayPrime();

?>