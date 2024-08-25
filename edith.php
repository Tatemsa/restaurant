<?php
    require_once 'function/auth.php';
    forced_user_connect();
    require_once 'data/config.php';
    require_once 'function/db.php';
    
    $pdo = db_connection($config['dbname'],$config['dbhost'], $config['dbuser'],$config['dbpassword']);

    $error = null;
    $isSuccess = null;
    $title  = null;
    $description = null;
    $price = null;
    if(isset($_GET['id'])){
        $query = find_by_id(htmlentities($_GET['id']), $pdo);
        $title = $query->title;
        $description = $query->description;
        $price = $query->price;
    }
    
    //Ici nous n'avons pas encore géré les fichiers
    if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price'])){
        if(!is_null($_POST['title']) && !is_null($_POST['description']) && !is_null($_POST['price'])){
            if(isset($_GET['id'])){
                $isSuccess = update($_POST['title'], $_POST['description'], $_POST['admin_id'], $_POST['price'], $pdo);
                if($isSuccess){
                    header('Location: /resto/dashboard.php');
                }
            } else {
                $isSuccess = insert($_POST['title'], $_POST['description'], $_POST['admin_id'], $_POST['price'], $pdo);   
            }

        }  else  {
            $error = 'Veillez remplir tous les champs';
        }
    }

    require 'element/header.php';
    
?>
<h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>Ajouter/Modifier</span> un plat</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-6 wow fadeInUp">
            <?php if($isSuccess):?>
            <div class="alert alert-success">
                <p>Opération réussit avec success</p>
            </div>
            <?php endif;?>
            <?php if($error):?>
            <div class="alert alert-danger">
                <?=$error?>
            </div>
            <?php endif;?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Nom du plat</label>
                    <input class="form-control" type="text" name="title" value="<?=$title;?>">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" value=""><?=$description;?></textarea>
                </div>
                <div class="form-group">
                    <label for="price">Prix</label>
                    <input class="form-control" type="text" name="price" value="<?=$price;?>">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input class="form-control" type="file" value="">
                </div>
                <div class="form-group">
                    <input class="form-control" type="hidden" name="admin_id" value="admin">
                </div>
                <button class="btn btn-success" type="submit">Enregistrer</button>
            </form>
        </div>
        <div class="col-md-6 wow fadeInUp">
            <div>
                <img src="images/blog/blog-img-3.jpg" alt="food_image">
            </div>
        </div>
    </div>
</div>
<?php
    require 'element/footer.php';
?>