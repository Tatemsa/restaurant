<?php 
    session_start();
    require 'function/auth.php';
    forced_user_connect();
    
    require 'element/header.php';
    // $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'counter';
    // $view = (int)file_get_contents($file);
    var_dump($views);
?>

<div class="container">
    <div class="row">
        <div class="col">
            
        </div>
    </div>
</div>

<?php require 'element/footer.php';
    
?>