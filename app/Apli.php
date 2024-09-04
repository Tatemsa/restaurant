<?php 

use App\Config;
use Core\Database\MysqlDatabase;

class Apli{

    public $title = 'Restaurant';
    private static $_instance;
    private static $db_instance;
    public $months = [
        "01" => "Janvier",
        "02" => "Fevrier",
        "03" => "Mars",
        "04" => "Avril",
        "05" => "Mai",
        "06" => "Juin",
        "07" => "Juillet",
        "08" => "Août",
        "09" => "Septembre",
        "10" => "Octobre",
        "11" => "Novembre",
        "12" => "Decembre"
    ];

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

    public function setViews(){
        $file = dirname(__DIR__). DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter';
        $counter = 1;

        if(file_exists($file)){
            $counter = (int)file_get_contents($file);
            $counter++;
        } 
        file_put_contents($file, $counter); 
        return file_get_contents($file);
        
    }

    public function  setViewsPerMonth(){
        $counter = 1;
        $filePerMonth = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . date('Y-m-d');
        if(file_exists($filePerMonth)){
            $counter = (int)file_get_contents($filePerMonth);
            $counter++;
        } 
        file_put_contents($filePerMonth, $counter); 
        return file_get_contents($filePerMonth);
    }

    public function getViewsPerYear(int $year ){
        $file = dirname(__DIR__) .  DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . '*-*';
        $files = glob($file);
        $total =  0;
        foreach($files as $item){
            $total += (int)file_get_contents($item);
        }
        return $total;
    }

    public function getViewsPerMonth(int $year, string $month){
        $file = dirname(__DIR__) .  DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter-' . $year . '-' . $month . '-*';
        $files = glob($file);
        $total =  0;
        foreach($files as $item){
            $total += (int)file_get_contents($item);
        }
        return $total;
    }

    public function forbiden(){
        header('Http:/1.0 403 Forbiden');
    } 

    public function notFound(){
        header('Http:/1.0 40A Not Found');
    }
}