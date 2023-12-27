<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Client.php');
require_once('InterfaceClient.php');

class ServiceClient extends DataBase implements InterfaceClient{
    public function addClient(Client $client){
        $pdo = $this->connection();
        
        $FullName = $client->getFullName();
        $CIN = $client->getCIN();
        $Adress = $client->getAdress();
        $Number = $client->getNumber();

       

        $sql = "INSERT INTO client (FullName,CIN,Adress,Number) VALUES (:FullName,:CIN,:Adress,:Number);";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':FullName',$FullName);
        $stmt->bindParam(':CIN',$CIN);
        $stmt->bindParam(':Adress',$Adress);
        $stmt->bindParam(':Number',$Number);

        $stmt->execute();
        
        $userId = $pdo->lastInsertId();
        return $userId;
        
    }

    function updateClient(Client $client){
        $pdo = $this->connection();
        
        $FullName = $client->getFullName();
        $CIN = $client->getCIN();
        $Adress = $client->getAdress();
        $Number = $client->getNumber();
        $id = $client->getUser_Id();

        $sql = "UPDATE client SET FullName = :FullName, CIN = :CIN,adress = :adress, Number = :Number  WHERE userId = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':id',$id);
        $stmt->bindParam(':FullName',$FullName);
        $stmt->bindParam(':CIN',$CIN);
        $stmt->bindParam(':adress',$Adress);
        $stmt->bindParam(':Number',$Number);

        $stmt->execute();
    }

     public function deleteClient($id){
   

        $pdo = $this->connection();
       
        $sql = "DELETE FROM client WHERE userId = :id";
       
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
       
        $DeletClient= $stmt->execute();
        return  $DeletClient;
       
       }

    public function displayClient(){
        $pdo = $this->connection();

        $sql = "SELECT * FROM client";
        
        $data = $pdo->query($sql);
        $client = $data->fetchAll(PDO::FETCH_ASSOC);

        return $client;
    }

    function displayClientById($id){
        $pdo=$this->connection();
    $sql="SELECT * FROM client WHERE userId=$id";
    
    $data = $pdo->query($sql);
    $ClientById = $data->fetchAll(PDO::FETCH_ASSOC);
    return $ClientById;
    }
}
 

?>