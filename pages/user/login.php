<?php
use Core\Auth\DBAuth;

    $error = null;
    
    if(!empty($_POST)){
        $app = Apli::getInstance();
        $auth = new DBAuth($app->getDb());
        $admin = $auth->login($_POST['pseudo'], $_POST['password']);
        if($admin){
            header('Location: /resto/public/admin.php');
        } else {
            $error = 'Identifiant ou mot de passe incorrect';
        }
    }
    
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