<?php


require_once('../../Services/ClientService/InterfaceClient.php');
require_once('../../Services/ClientService/ServiceClient.php');

$dispalyClient = new ServiceClient();

$clientData = $dispalyClient->displayClient();

?>