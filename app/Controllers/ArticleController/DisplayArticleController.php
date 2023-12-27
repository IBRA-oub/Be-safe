<?php


require_once('../../Services/ArticleService/InterfaceArticle.php');
require_once('../../Services/ArticleService/ServiceArticle.php');

$displayAssur = new ServiceAssurance();

$AssuranceData = $displayAssur->displayAssurance();


?>