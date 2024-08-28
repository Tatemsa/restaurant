<?php
namespace App\Table;

use App\Database\Database;

class Table{

    protected $table;
    protected $db;
    
    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = strtolower(end($parts));
            $this->table = str_replace('table', '', $class_name);
        }
    }

    public function all(){
        return $this->db->query("SELECT * FROM foods");
    }

    // public static function findById($id){
    //     return self::query("
    //     SELECT * 
    //     FROM ". static::getTable() . "
    //     WHERE id=?
    //     ", [$id], true);
    // }

    // public static function query($statement, $attributes=null, $one=false){
    //    if($attributes){
    //         return Apli::getDb()->prepare($statement, $attributes, get_called_class(), $one);
    //    } else {
    //         return Apli::getDb()->query($statement, get_called_class(), $one);
    //    }
    // }
    // public static function getTable(){
    //     if(static::$table === null){
    //         static::$table = get_called_class();
    //         $class_name = explode("\\", static::$table);
    //         static::$table  = strtolower(end($class_name)) . "s";
    //     }
    //     return static::$table;
    // }
}