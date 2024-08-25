<?php
namespace App;

use \PDO;

class  Database{
    private $db_name;
    private $db_host;
    private $db_user;
    private $db_password;
    private $pdo;

    public  function __construct($db_name, $db_host = 'localhost', $db_user='root', $db_password=''){
        $this->db_name = $db_name;
        $this->db_host = $db_host;
        $this->db_user = $db_user;
        $this->db_password = $db_password;        
    }

    private function getPDO(){
        if($this->pdo === null){
            $pdo = new PDO("mysql:dbname={$this->db_name};host={$this->db_host}", $this->db_user, $this->db_password,[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            $this->pdo = $pdo;
        }
  
        return $this->pdo;
    }
    
    public function query($statement, $class){
        $request = $this->getPDO()->query($statement);
        $datas = $request->fetchAll(PDO::FETCH_CLASS, $class);
        return $datas;
    } 

    
}