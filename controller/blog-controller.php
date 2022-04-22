<?php
include_once '../model/article-manager.php';

function index()
{
    include_once '../view/blog/index.html.php';
}

function show()
{
    //fonction getAll() se trouve dans article manager
    $articles = getAll();
    //var_dump($articles);
    include_once '../view/blog/show.html.php';
}    