<?php
    function is_connected(): bool{
        if(session_status() ===  PHP_SESSION_NONE){
            session_start();
        }
        return !empty($_SESSION['connected']);
    }

    function forced_user_connect(){
        if(!is_connected()){
            header('Location: /login.php');
            exit();
        }
    }