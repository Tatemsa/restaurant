<?php 
session_start();
unset($_SESSION['connected']);
header('Location: /resto/public/index.php');