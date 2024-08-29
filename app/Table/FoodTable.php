<?php
namespace App\Table;

use App\Apli;
use Core\Table\Table;

class FoodTable extends Table{
 
    public function findById($id){
        return $this->query("
        SELECT * 
        FROM ". $this->table . "
        WHERE id=?
        ", [$id], true);
    }

    public function insert($title, $description, $admin_id, $price){
        return $this->query('
            INSERT INTO ' . $this->table . ' (title, description, admin_id, price) VALUES (?,?,?,?)',
            [$title, $description, $admin_id, $price]
        );
    }

    public function update($title, $description, $admin_id, $price, $id){
        return $this->query('
            UPDATE ' . $this->table . ' SET title =? , description = ?, admin_id = ?, price = ? WHERE id = ?',
            [$title, $description, $admin_id, $price,$id]
        );
    }

    public function delete($id){
        return $this->query('DELETE FROM ' . $this->table . ' WHERE id=?', [$id]);
    }
}