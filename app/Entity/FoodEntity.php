<?php
namespace App\Entity;

use Core\Entity\Entity;
class FoodEntity extends Entity{
    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

    public function getUrl(){
        return 'admin.php?p=edith&id='. $this->id;
    }

    public function getAbstract(){
        $absstract = substr($this->description, 0, 100). '...';;
        return $absstract;
    }
}