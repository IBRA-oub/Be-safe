<?php

require_once('../../Services/ClientService/InterfaceClient.php');
require_once('../../Services/ClientService/ServiceClient.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $userId = $_GET['userId'];
    
    $deleteClient = new ServiceClient();
    $result = $deleteClient->deleteClient($userId);

    if($result){
        header('location:../../Views/clients/displayClients.php');
    }else{
        echo "<script> alert('Data not delete');</script>";
    }
}



?>