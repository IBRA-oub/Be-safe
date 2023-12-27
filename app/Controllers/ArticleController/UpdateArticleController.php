<?php
require_once('../../Models/Article.php');
require_once('../../Services/ArticleService/InterfaceArticle.php');
require_once('../../Services/ArticleService/ServiceArticle.php');





if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $Article_ID = $_POST['Article_ID'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $Date = $_POST['Date'];
    $userId = $_POST['userId'];
    $Assurance_ID = $_POST['Assurance_ID'];
    
   
    
    try{
        
        $Articleupdate = new Article($Title,$Description,$Date,$userId,$Assurance_ID);
        $Articleupdate ->setArticle_ID($Article_ID);
 
        $serviceArticleUpd = new ServiceArticle();
        $serviceArticleUpd-> updateArticle($Articleupdate);
        
        
        
        header('location:../../Views/Article/displayArticle.php');
        
        }catch(PDOException $e){
            
            die($e->getMessage());
        }
}