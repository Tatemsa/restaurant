<?php
namespace App\Table;

use App\Apli;

class Table{

    protected static $table;

    public static function all(){
        return self::query('SELECT * FROM '. static::getTable());
    }

    public static function findById($id){
        return self::query("
        SELECT * 
        FROM ". static::getTable() . "
        WHERE id=?
        ", [$id], true);
    }

    public static function query($statement, $attributes=null, $one=false){
       if($attributes){
            return Apli::getDb()->prepare($statement, $attributes, get_called_class(), $one);
       } else {
            return Apli::getDb()->query($statement, get_called_class(), $one);
       }
    }
    public static function getTable(){
        if(static::$table === null){
            static::$table = get_called_class();
            $class_name = explode("\\", static::$table);
            static::$table  = strtolower(end($class_name)) . "s";
        }
        return static::$table;
    }
}