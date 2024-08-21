<?php
    require_once 'function/auth.php';
    require_once 'function/db.php';
    require_once 'data/config.php';
    forced_user_connect();
    $pdo = db_connection(
            $config['dbname'],
            $config['dbhost'],
            $config['dbuser'],
            $config['dbpassword']
    );

    if(isset($_GET['id'])){
        $id = htmlentities($_GET['id']);
        $isDelete = delete($id, $pdo);
        if($isDelete){
            header('Location: /resto/dashboard.php');
        } else {
            echo 'L\'opération a echoué !!!';
        }
    }