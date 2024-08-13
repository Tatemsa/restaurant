<?php 
    
    $error = null;
    if(isset($_POST['pseudo']) && isset($_POST['password'])){
        if($_POST['pseudo'] == 'Bill' && $_POST['password'] == '12345'){
            session_start();
            $_SESSION['connected'] = 1;
            header('Location: /dashboard.php');
            exit();
        }else{
            $error = 'Identifiant ou mot de passe incorrect';
        }
    }
    require 'function/auth.php';
    if(is_connected()){
        header('Location: /dashboard.php');
        exit();
    }
    require_once 'element/header.php';
    
?>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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

<?php require 'element/footer.php';?>

