<?php

require_once('../../Models/Client.php');
require_once('../../Models/AssurClient.php');
require_once('../../Services/ClientService/InterfaceClient.php');
require_once('../../Services/ClientService/ServiceClient.php');
require_once('../../Services/AssurClientService/InterfaceAssurClient.php');
require_once('../../Services/AssurClientService/ServiceAssurClient.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $FullName = $_POST['FullName'];
    $CIN = $_POST['CIN'];
    $Adress = $_POST['Adress'];
    $Number = $_POST['Number'];
    $Assurance_ID = $_POST['Assurance_ID'];
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    try{
        $Client = new Client($FullName,$CIN,$Adress,$Number);
      
        
        // add Client
        $seviceClient = new ServiceClient();
        $userId = $seviceClient->addClient($Client);

      
        // add client_id and Assurance_id to PVO
        $AssurClient = new AssurClient($userId, $Assurance_ID);
        $servAssurClien = new ServiceAssurClient();
        
        $servAssurClien->addAsurClient($AssurClient); 
        
        header('location:../../Views/clients/displayClients.php');
    }catch(PDOException $e){
        
        die($e->getMessage());
    }
    


    
}

?>