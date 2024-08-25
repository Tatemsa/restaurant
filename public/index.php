<?php
require '../app/Autoloader.php';
App\Autoloader::register(); 

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home'; 
}


ob_start();

if($p === 'home'){
    require '../pages/home.php';
} elseif ($p === 'dashboard') {
    require '../pages/dashboard.php';
} elseif ($p === 'login') {
    require '../pages/login.php';
} elseif ($p === 'edith') {
    require '../pages/edith.php';
} elseif ($p === 'delete') {
    require '../pages/delete.php';
} elseif ($p === 'logout') {
    require '../pages/logout.php';
}

$content= ob_get_clean();

require '../pages/template/default.php';