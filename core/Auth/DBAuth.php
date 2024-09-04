<?php
namespace Core\Auth;

use Core\Database\Database;


class DBAuth{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;
    }  

    public function login($pseudo, $password){
        $admin =  $this->db->prepare('SELECT * FROM admin WHERE name = ?', [$pseudo], null, true);
        if($admin){
            if($admin->password == sha1($password)){
                if(session_status() ===  PHP_SESSION_NONE){
                    session_start();
                }
                $_SESSION['auth'] = $admin->name;
                return true;
            }
        }
        return false;
    }

    public function getAdminId(){
        if($this->logged()){
            return $_SESSION['auth'];
        }
        return false;
    }

    public function logged(){
        if(session_status() ===  PHP_SESSION_NONE){
            session_start();
        }
        return isset($_SESSION['auth']);
    }

}