<?php 
    session_start();
    require 'function/auth.php';
    forced_user_connect();
    
    require 'element/header.php';
?>

<?php require 'element/footer.php';?>