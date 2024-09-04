<?php
    use Core\Auth\DBAuth;

    $app = Apli::getInstance();
    $auth = new DBAuth($app->getDb());
    if(!$auth->logged()){
        header('Location: /resto/public/admin.php?p=login');
    }

    $table = $app->getTable('food');
    $datas = $table->all();

    $year = date('Y');
    $yearIsSelected = false;
    if(isset($_GET['year'])){
        $yearSelected = $_GET['year'];
        $yearIsSelected = true;
        $viewPerYear = $app->getViewsPerYear($_GET['year']);
    }

    $monthIsSelected = false;
    if(isset($_GET['month'])){
        $monthSelected = $_GET['month'];
        $monthIsSelected = true;
        $viewPerMonth = $app->getViewsPerMonth($_GET['year'], $_GET['month']);
    }

    $views = $app->setViews();
    
    
    
   
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>Nombre de vues</span></h1>
            <div class="list-group">
            <?php for($i=1; $i<6; $i++):?>
                <a href="?year=<?=$year +1 - $i;?>" class="list-group-item <?=$year +1 - $i == $yearSelected? 'active': '';?>" ><?=$year +1 - $i;?></a>
                <?php if(isset($_GET['year'])):?>
                    <?php if($year +1 - $i == $yearSelected):?>
                        <div class="list-group">
                            <?php foreach($app->months as $k=>$month):?>
                                <a href="?year=<?=$year +1 - $i;?>&month=<?=$k;?>" class="list-group-item <?=$k == $monthSelected? 'active': '';?>" ><?=$month;?></a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif;?>
                <?php endif;?>
            <?php endfor;?>
            <p><h2>Nombre de vues total: <em><?=$views?></em></h2></p>
            <?php if($yearIsSelected):?>
                <p><h2>Nombre de vues en fonction de l'année: <em><?=$viewPerYear;?></em></h2></p>
            <?php endif;?>
            <?php if($monthIsSelected):?>
                <p><h2>Nombre de vues en fonction de l'année  et du mois: <em><?=$viewPerMonth?></em></h2></p>
            <?php endif;?>
            </div>
        </div>

        <div class="col-md-6">
            <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"><span>Menu</span></h1>
            <a class="btn btn-success" href="/resto/public/admin.php?p=edith">Ajouter un plat</a>
            <div class="bd-example m-0 border-0">
                <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($datas as $k=>$item):?>
                    <tr>
                        <th scope="row"><?=$k; ?></th>
                        <td><?=$item->title; ?></td>
                        <td><?=$item->price; ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?=$item->getUrl();?>">Modifier</a>  
                            <form action="?p=delete" method="post" style="display: inline;" >
                                <input type="hidden" name="id" value="<?=$item->id;?>">
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>