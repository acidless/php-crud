<?php

class Database
{
    public static ?PDO $connection = null;

    public static function Init()
    {
        if(!isset(Database::$connection)){
            try {
                Database::$connection = new PDO("pgsql:host=localhost;dbname=crud", "postgres", "12345");
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }
}

?>