<?php
require_once('../../Models/Client.php');
require_once('../../Services/ClientService/InterfaceClient.php');
require_once('../../Services/ClientService/ServiceClient.php');





if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
   
    $userId = $_POST['userId'];
    $FullName = $_POST['FullName'];
    $CIN = $_POST['CIN'];
    $Adress = $_POST['Adress'];
    $Number = $_POST['Number'];
    
   
    
    try{
        
        $ClientUpdate = new Client($FullName,$CIN,$Adress,$Number);
        $ClientUpdate->setUser_Id($userId);
        
        $serviceClieUpd = new ServiceClient();
        $serviceClieUpd-> updateClient($ClientUpdate);
        
        
        
        header('location:../../Views/clients/displayClients.php');
        
        }catch(PDOException $e){
            
            die($e->getMessage());
        }
}