<?php 
namespace App;


class Apli{

    public $title = 'Restaurant';
    private static $settings = [];
    private static $_instance;
    private static $db_instance;

    public function __construct(){
        self::$settings = Config::getInstance();
    }

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Apli();
        }
        return self::$_instance;
    }

    public function getTable($table_name){
        $table_name = ucfirst($table_name);
        $class_name = "\\App\\Table\\" . $table_name . "Table";
        return new $class_name();
    }

    public function getDb(){
        if(is_null(self::$db_instance)){
            $config = Config::getInstance();
            self::$_instance = new Database($config->get('db_name'),  $config->get('db_host'), $config->get('db_user'), $config->get('db_password'));
        }
        return  self::$_instance;
    }


    // public static function getDb(){
    //     if(self::$database == null){
    //         self::$database = new Database(self::DB_NAME, self::DB_HOST, self::DB_USER, self::DB_PASSWORD);
    //     }
    //     return self::$database;
    // }

    // public static function isConnected(){
    //     if(session_status() ===  PHP_SESSION_NONE){
    //         session_start();
    //     }
    //     return !empty($_SESSION['connected']);
    // }

    // public static function getTitle(){
    //     return self::$title;
    // }

    // public static function setTitle($title){
    //     self::$title = self::$title . " | " . $title;
    // }
}