<?php
namespace  App\Table;

use Core\Table\Table;
class AdminTable extends Table{
    
    protected $table = "admin";

    public function find($name, $password){
        return $this->db->query("
        SELECT * 
        FROM ". $this->table . "
        WHERE name=? and password=?
        ", [$name,$password], true);
    }
}