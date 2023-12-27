<?php

interface InterfaceArticle {
    function addArticle(Article $article);
    function updateArticle(Article $article);
    function deleteArticle($id);
    function displayArticle();
   
   
}