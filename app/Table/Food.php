<?php
namespace App\Table;

use App\Apli;
class Food{

    public static function getFoods(){
        return Apli::getDb()->query('SELECT * FROM foods', __CLASS__);
    } 
    public function __get($key){
        var_dump($key);
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return 'index.php?p=edith&id='. $this->id;
    }

    public function getAbstract(){
        $absstract = substr($this->description, 0, 100). '...';;
        return $absstract;
    }
}