<?php

use App\Apli;

require '../app/Autoloader.php';
App\Autoloader::register(); 

$app = Apli::getInstance();


// if(isset($_GET['p'])){
//     $p = $_GET['p'];
// } else {
//     $p = 'home'; 
// }

// $title = 'Restaurant';


// ob_start();

// if($p === 'home'){
//     require '../pages/home.php';
// } elseif ($p === 'dashboard') {
//     require '../pages/dashboard.php';
// } elseif ($p === 'login') {
//     require '../pages/login.php';
// } elseif ($p === 'edith') {
//     require '../pages/edith.php';
// } elseif ($p === 'delete') {
//     require '../pages/delete.php';
// } elseif ($p === 'logout') {
//     require '../pages/logout.php';
// }

// $content= ob_get_clean();

// require '../pages/template/default.php';