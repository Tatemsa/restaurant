<?php 
session_start();
unset($_SESSION['auth']);
header('Location: /resto/public/index.php');