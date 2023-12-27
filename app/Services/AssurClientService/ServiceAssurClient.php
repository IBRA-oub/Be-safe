<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/AssurClient.php');
require_once('InterfaceAssurClient.php');

class ServiceAssurClient extends DataBase implements InterfaceAssurClient{
    
    public function addAsurClient( AssurClient $assurClient){
        $pdo = $this->connection();
        
        $userId = $assurClient->getUserId();
        $Assurance_ID = $assurClient->getAssurance_ID();

        $sql = "INSERT INTO assurclient (userId,Assurance_ID) VALUES (:userId,:Assurance_ID);";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':userId',$userId);
        $stmt->bindParam(':Assurance_ID',$Assurance_ID);

        $stmt->execute();
    }
}

?>