<?php
namespace  App\Table;

use App\Apli;
class Admin extends Table{
    
    protected static $table = "admin";

    public static function find($name, $password){
        return Apli::getDb()->prepare("
        SELECT * 
        FROM ". static::getTable() . "
        WHERE name=? and password=?
        ", [$name,$password], get_called_class(), true);
    }
}