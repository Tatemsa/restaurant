<?php

define('ROOT', dirname(__DIR__));
define('PATH_IMAGE', dirname(__DIR__).'/public/images/img');

require ROOT . '/app/Apli.php';
Apli::load();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home'; 
}

//Authentification
$title = Apli::getInstance()->title . ' | admin | ' . $p;

ob_start();

if($p === 'home'){
    require ROOT . '/pages/admin/index.php';
} elseif ($p === 'login') {
    require ROOT . '/pages/user/login.php';
} elseif ($p === 'edith') {
    require ROOT . '/pages/admin/edith.php';
} elseif ($p === 'delete') {
    require ROOT . '/pages/admin/delete.php';
} elseif ($p === 'logout') {
    require ROOT . '/pages/admin/logout.php';
}

$content= ob_get_clean();

require ROOT . '/pages/template/default.php';