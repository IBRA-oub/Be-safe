<?php

require_once('../../Models/dataBase.php');
require_once('../../Models/Article.php');
require_once('InterfaceArticle.php');

class ServiceArticle extends DataBase implements InterfaceArticle{
    public function addArticle(Article $article){
        $pdo = $this->connection();
        
        $Title = $article->getTitle();
        $Description = $article->getDescriptione();
        $Date = $article->getDate();
        $userId = $article->getUserId();
        $Assurance_ID = $article->getAssurence_ID();

       

        $sql = "INSERT INTO article (Title,Description,Date,userId,Assurance_ID) VALUES (:Title,:Description,:Date,:userId,:Assurance_ID);";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':Title',$Title);
        $stmt->bindParam(':Description',$Description);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':userId',$userId);
        $stmt->bindParam(':Assurance_ID',$Assurance_ID);

        $stmt->execute();
        
       
        
    }

    function updateArticle(Article $article){
        $pdo = $this->connection();
        
        $Title = $article->getTitle();
        $Description = $article->getDescriptione();
        $Date = $article->getDate();
        $userId = $article->getUserId();
        $Assurance_ID = $article->getAssurence_ID();
        $id = $article->getArticle_ID();

        $sql = "UPDATE article SET Title = :Title, Description = :Description,Date = :Date, userId = :userId, Assurance_ID = :Assurance_ID   WHERE Article_ID = :id";
        
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':Title',$Title);
        $stmt->bindParam(':Description',$Description);
        $stmt->bindParam(':Date',$Date);
        $stmt->bindParam(':userId',$userId);
        $stmt->bindParam(':Assurance_ID',$Assurance_ID);
        $stmt->bindParam(':id',$id);

        $stmt->execute();
    }

     public function deleteArticle($id){
   

        $pdo = $this->connection();
       
        $sql = "DELETE FROM article WHERE Article_ID = :id";
       
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id',$id);
       
        $DeletClient= $stmt->execute();
        return  $DeletClient;
       
       }

    public function displayArticle(){
        $pdo = $this->connection();

        $sql = "SELECT * FROM article";
        
        $data = $pdo->query($sql);
        $article = $data->fetchAll(PDO::FETCH_ASSOC);

        return  $article;
    }

  
}
 

?>