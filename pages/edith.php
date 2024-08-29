<?php

    $error = null;
    $isSuccess = null;
    $title  = null;
    $description = null;
    $price = null;
    $app = Apli::getInstance();
    if(isset($_GET['id'])){
        $datas = $app->getTable('Food')->findById($_GET['id']);
        $title = $datas->title;
        $description = $datas->description;
        $price = $datas->price;
    }

    if(isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price'])){
        if(!is_null($_POST['title']) && !is_null($_POST['description']) && !is_null($_POST['price'])){
            if(isset($_GET['id'])){
                $isSuccess = $app->getTable('Food')->update($_POST['title'], $_POST['description'], $_POST['admin_id'], $_POST['price'], $_GET['id']);
                    header('Location: /resto/public/index.php?p=dashboard');
            } else {
                $isSuccess = $app->getTable('Food')->insert($_POST['title'], $_POST['description'], $_POST['admin_id'], $_POST['price']);   
            }

        }  else  {
            $error = 'Veillez remplir tous les champs';
        }
    }
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