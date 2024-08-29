<?php
$isSuccess = null;
if(isset($_GET['id'])){
    $isSuccess= Apli::getInstance()->getTable('Food')->delete($_GET['id']);
    header('Location: /resto/public/index.php?p=dashboard');
    exit();
}