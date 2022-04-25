<?php
class Manager
{
    public function dbConnect()
    {
        try
        {
            $connexion = new PDO('mysql:host=localhost;dbname=blog_test', 'root', 'root');
        }
        catch (Exception $e)
        {
            $e->getMessage();
            die();
        }
        return $connexion;
    }
}