<?php
namespace  App\Table;

use App\Apli;
class AdminsTable extends Table{
    
    protected $table = "admin";

    // public static function find($name, $password){
    //     return Apli::getDb()->prepare("
    //     SELECT * 
    //     FROM ". static::getTable() . "
    //     WHERE name=? and password=?
    //     ", [$name,$password], get_called_class(), true);
    // }
}