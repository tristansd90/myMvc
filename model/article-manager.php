<?php

function getAll()
{
    try
    {
        $connexion = new PDO('mysql:host=localhost;dbname=blog_test','root', 'root');
        echo 'connexion reussi <br>';
    }
    catch (Exception $e)
    {
        $e->getMessage();
        die();
    }

    $query = $connexion->prepare('SELECT * FROM article_tbl');
    $query->execute();
    $record = $query->fetchAll();

    return $record;
}