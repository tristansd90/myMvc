<?php

include_once '../model/Manager.php';
include_once '../model/ArticleManager.php';

class BlogController
{
    function index()
    {
        include_once '../view/blog/index.html.php';
    }
    
    function article()
    {
        $articleManager = new ArticleManager();
        //fonction getAll() se trouve dans article manager
        $articles = $articleManager->getAll();
        //var_dump($articles);
        include_once '../view/blog/article.html.php';
    }
    
    function form()
    {
        include_once '../view/blog/form.html.php';
    }
}