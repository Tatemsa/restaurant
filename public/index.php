<?php
define('ROOT', dirname(__DIR__));


require ROOT . '/app/Apli.php';
Apli::load();
$apli = Apli::getInstance();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home'; 
}

$views = $apli->setViews();
$viewsPerMonth = $apli->setViewsPerMonth();
$title =  $apli->title . ' | ' . $p;

ob_start();

if($p === 'home'){
    require ROOT . '/pages/home.php';
} elseif ($p === 'dashboard') {
    require ROOT . '/pages/admin/index.php';
} elseif ($p === 'login') {
    require ROOT . '/pages/admin/login.php';
} elseif ($p === 'logout') {
    require ROOT . '/pages/admin/logout.php';
}

$content= ob_get_clean();

require ROOT . '/pages/template/default.php';