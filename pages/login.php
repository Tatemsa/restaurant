<?php 
    // require_once 'data/config.php';
    // require_once 'function/auth.php';
    //$title .= ' | login';

    // require_once 'function/db.php';
    // $pdo = db_connection($config['dbname'],$config['dbhost'],$config['dbuser'],$config['dbpassword']);
    // $error = null;
    // if(isset($_POST['pseudo']) && isset($_POST['pseudo'])){
    //     $pdo = db_connection($config['dbname'],$config['dbhost'],$config['dbuser'],$config['dbpassword']);
    //     if(authentification($_POST['pseudo'],$_POST['password'], $pdo)){
    //         header('Location: /resto/dashboard.php');
    //         exit();
    //     }else{
    //         $error = 'Identifiant ou mot de passe incorrect';
    //     }
    // }

    
    // if(is_connected()){
    //     header('Location: /resto/dashboard.php');
    //     exit();
    // } 
    
?>
<br>
<h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>Connection</span></h1>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="block">
                    <?php if($error): ?>
                        <div class="alert alert-danger">
                            <?=$error; ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post"   class="wow fadeInUp"  data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="form-group">
                            <input type="text" class="form-control" name="pseudo" placeholder="Entrer votre identifiant">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe">
                        </div>
                        <button type="submit" class="btn btn-success"> Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>