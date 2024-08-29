<?php 

use App\Config;
use Core\Database\MysqlDatabase;

class Apli{

    public $title = 'Restaurant';
    private static $_instance;
    private static $db_instance;

    public static function getInstance(){
        if(is_null(self::$_instance)){
            self::$_instance = new Apli();
        }
        return self::$_instance;
    }

    public function getTable($table_name){
        $table_name = ucfirst($table_name);
        $class_name = "\\App\\Table\\" . $table_name . "Table";
        return new $class_name($this->getDb());
    }

    public function getDb(){
        if(is_null(self::$db_instance)){
            $config = Config::getInstance();
            self::$_instance = new MysqlDatabase($config->get('db_name'),  $config->get('db_host'), $config->get('db_user'), $config->get('db_password'));
        }
        return  self::$_instance;
    }

    public static function load(){
        require ROOT . '/app/Autoloader.php';
        \App\Autoloader::register();
        require ROOT . '/core/Autoloader.php';
        \Core\Autoloader::register();
    }

    public function isConnected(){
        if(session_status() ===  PHP_SESSION_NONE){
            session_start();
        }
        return !empty($_SESSION['connected']);
    }

    // public static function setTitle($title){
    //     self::$title = self::$title . " | " . $title;
    // }
}