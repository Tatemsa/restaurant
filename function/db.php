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

    function find_by_id($id, $pdo){
        $query = $pdo->prepare("SELECT * FROM foods WHERE id=?");
        $query->execute([$id]);
        return $query->fetch();
    }

    function insert($title, $description, $admin_id, $price, $pdo){
        $query = $pdo->prepare("INSERT INTO foods (title, description, admin_id, price) VALUES (?,?,?,?)");
        return $query->execute([$title, $description, $admin_id, $price]);
    }

    function delete($id, $pdo){
        $query = $pdo->prepare("DELETE FROM foods WHERE id=?");
        return $query->execute([$id]);
    }

    function update($title, $description, $admin_id, $price, $pdo){
        $query = $pdo->prepare("UPDATE foods SET title =? , description = ?, admin_id = ?, price = ? WHERE id = ?");
        return $query->execute([$title, $description, $admin_id, $price, htmlentities($_GET['id'])]);
    }
