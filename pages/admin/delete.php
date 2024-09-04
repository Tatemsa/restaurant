<?php

use Core\Auth\DBAuth;

$app = Apli::getInstance();
$auth = new DBAuth($app->getDb());
if(!$auth->logged()){
    header('Location: /resto/public/admin.php?p=login');
}

$isSuccess = null;
if(isset($_POST['id'])){
    $isSuccess= $app->getTable('Food')->delete($_POST['id']);
    
     header('Location: /resto/public/admin.php');
    
}