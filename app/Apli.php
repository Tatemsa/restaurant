<?php 
namespace App;

class Apli{
    
    const DB_NAME = 'tuto';
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    private static $database;
    private static $title = "Restaurant";
    
    public static function getDb(){
        if(self::$database == null){
            self::$database = new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
        }
        return self::$database;
    }

    public static function isConnected(){
        if(session_status() ===  PHP_SESSION_NONE){
            session_start();
        }
        return !empty($_SESSION['connected']);
    }

    public static function getTitle(){
        return self::$title;
    }

    public static function setTitle($title){
        self::$title = self::$title . " | " . $title;
    }
}