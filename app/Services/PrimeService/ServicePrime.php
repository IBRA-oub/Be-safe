<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Prime.php');
require_once('InterfacePrime.php');

class ServicePrime extends DataBase implements InterfacePrime{
    public function addPrime(Prime $prime){
        $pdo = $this->connection();
        
        
        $Amount = $prime->getAmount();
        $Date = $prime->getDate();
        $Claim_ID = $prime->getClaim_ID();
        

       

        $sql = "INSERT INTO prime (Amount,Date,Claim_ID) VALUES (:Amount,:Date,:Claim_ID);";
        
        $stmt = $pdo->prepare($sql);
        
      
        $stmt->bindParam(':Amount',$Amount);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':Claim_ID',$Claim_ID);
      

        $stmt->execute();
        
       
        
    }

    function  updatePrime(Prime $prime){
        $pdo = $this->connection();
        
        $Amount = $prime->getAmount();
        $Date = $prime->getDate();
        $Claim_ID = $prime->getClaim_ID();
        
        $id = $prime->getPremium_ID();

        $sql = "UPDATE prime SET  Amount = :Amount,Date = :Date, Claim_ID  = :Claim_ID   WHERE Premium_ID = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':Amount',$Amount);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':Claim_ID',$Claim_ID);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
    }

     public function deletePrime($id){
   

        $pdo = $this->connection();
       
        $sql = "DELETE FROM prime WHERE Premium_ID = :id";
       
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
       
        $DeletPrime= $stmt->execute();
        return  $DeletPrime;
       
       }

    public function displayPrime(){
        $pdo = $this->connection();

        $sql = "SELECT * FROM prime";
        
        $data = $pdo->query($sql);
        $prime = $data->fetchAll(PDO::FETCH_ASSOC);

        return  $prime;
    }

  
}
 

?>