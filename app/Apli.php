<?php 
namespace App;

class Apli{
    
    const DB_NAME = 'tuto';
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    private static $database;
    
    public static function getDb(){
        if(self::$database == null){
            self::$database = new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
        }

        return self::$database;
    }

}