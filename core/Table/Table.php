<?php
namespace Core\Table;

use Core\Database\Database;

class Table{

    protected $table;
    protected $db;
    
    public function __construct(Database $db){
        $this->db = $db;
        if(is_null($this->table)){
            $parts = explode('\\', get_class($this));
            $class_name = strtolower(end($parts));
            $this->table = str_replace('table', '', $class_name) .  's';
        }
    }

    public function all(){
        return $this->query("SELECT * FROM ". $this->table);
    }

    public function query($statement, $attributes=null, $one=false){
       
       if($attributes){
            return $this->db->prepare(
                $statement, 
                $attributes, 
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
       } else {
            return $this->db->query(
                $statement, 
                str_replace('Table', 'Entity', get_class($this)), 
                $one
            );
       }
    }
    // public static function getTable(){
    //     if(static::$table === null){
    //         static::$table = get_called_class();
    //         $class_name = explode("\\", static::$table);
    //         static::$table  = strtolower(end($class_name)) . "s";
    //     }
    //     return static::$table;
    // }
}