<?php

use App\Table\Admin;
Use App\Apli;

    Apli::setTitle("Login");

    if(Apli::isConnected()){
        header('Location: /resto/public/index.php?p=dashboard');
        exit();
    } 

    $error = null;
    $pseudo = null;
    $password = null;
    if(isset($_POST['pseudo']) && isset($_POST['password'])){

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $password = htmlspecialchars($_POST['password']);

        $datas = Admin::find($pseudo, sha1($password));

        if($datas){
            session_start();
            $_SESSION['connected'] = 1;
            header('Location: /resto/public/index.php?p=dashboard');
            exit();
        }else{
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