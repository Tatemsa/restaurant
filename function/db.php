<?php

    function db_connection(string $dbname, string $dbhost, string $dbuser, string $dbpassword){
        return new PDO("mysql:dbname={$dbname};host={$dbhost}", $dbuser, $dbpassword,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }

    function authentification(string $name, string $password, $pdo): bool{
        $password = sha1($password);
        $query = $pdo->prepare("SELECT * FROM `admin` WHERE name=? AND password= ?");
        $query->execute([$name,$password]);
        if(!empty($query->fetchAll())){
            session_start();
            $_SESSION['connected'] = 1;
            return true;
        }
        return false;
    }

    function find_all($pdo){
        $query = $pdo->query('SELECT * FROM foods');
        return $query;
    }

