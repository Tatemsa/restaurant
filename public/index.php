<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/Apli.php';
Apli::load();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home'; 
}



ob_start();

if($p === 'home'){
    require ROOT . '/pages/home.php';
} elseif ($p === 'dashboard') {
    require ROOT . '/pages/dashboard.php';
} elseif ($p === 'login') {
    require ROOT . '/pages/login.php';
} elseif ($p === 'edith') {
    require ROOT . '/pages/edith.php';
} elseif ($p === 'delete') {
    require ROOT . '/pages/delete.php';
} elseif ($p === 'logout') {
    require ROOT . '/pages/logout.php';
}

$content= ob_get_clean();

require ROOT . '/pages/template/default.php';