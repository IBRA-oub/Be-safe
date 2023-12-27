<?php

require_once('../../Services/ArticleService/InterfaceArticle.php');
require_once('../../Services/ArticleService/ServiceArticle.php');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    $Article_ID = $_GET['Article_ID'];
    
    $deleteArticle = new ServiceArticle();
    $result = $deleteArticle->deleteArticle($Article_ID);

    if($result){
        header('location:../../Views/Article/displayArticle.php');
    }else{
        echo "<script> alert('Data not delete');</script>";
    }
}



?>