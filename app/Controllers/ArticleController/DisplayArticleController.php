<?php


require_once('../../Services/ArticleService/InterfaceArticle.php');
require_once('../../Services/ArticleService/ServiceArticle.php');

$displayArticle = new ServiceArticle();

$ArticleData = $displayArticle->displayArticle();


?>