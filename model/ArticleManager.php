<?php

include_once 'Manager.php';

class ArticleManager extends Manager
{
    public function getAll()
    {
        $query =  $this->dbConnect()->prepare('SELECT * FROM article_tbl');
        $query->execute();
        $row = $query->fetchAll();
        return $row;
    }
}