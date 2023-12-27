<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Claim.php');
require_once('InterfaceClaim.php');

class ServiceClaim extends DataBase implements InterfaceClaim{
    public function addClaim(Claim $claim){
        $pdo = $this->connection();
        
        
        $Descreption = $claim->getDescreption();
        $Date = $claim->getDate();
        $Article_ID = $claim->getArticle_ID();
        

       

        $sql = "INSERT INTO claim (Descreption,Date,Article_ID) VALUES (:Descreption,:Date,:Article_ID);";
        
        $stmt = $pdo->prepare($sql);
        
      
        $stmt->bindParam(':Descreption',$Descreption);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':Article_ID',$Article_ID);
      

        $stmt->execute();
        
       
        
    }

    function updateClaim(Claim $claim){
        $pdo = $this->connection();
        
        $Descreption = $claim->getDescreption();
        $Date = $claim->getDate();
        $Article_ID = $claim->getArticle_ID();
        $id = $claim->getClaim_ID();

        $sql = "UPDATE claim SET  Descreption = :Descreption,Date = :Date, Article_ID = :Article_ID  WHERE Claim_ID = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':Descreption',$Descreption);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':Article_ID',$Article_ID);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
    }

     public function deleteClaim($id){
   

        $pdo = $this->connection();
       
        $sql = "DELETE FROM claim WHERE Claim_ID = :id";
       
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
       
        $DeletClaim= $stmt->execute();
        return  $DeletClaim;
       
       }

    public function displayClaim(){
        $pdo = $this->connection();

        $sql = "SELECT * FROM claim";
        
        $data = $pdo->query($sql);
        $claim = $data->fetchAll(PDO::FETCH_ASSOC);

        return  $claim;
    }

  
}
 

?>