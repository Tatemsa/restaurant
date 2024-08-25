<?php

use App\Table\Food;

    $datas = Food::getFoods();
    
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Nombre de vues</h1><br>
            <div class="list-group">
            <?php for ($i=1; $i<6; $i++):?>
                <a href="?year=<?=$year +1 - $i;?>" class="list-group-item <?=$year +1 - $i == $yearSelected? 'active': '';?>" ><?=$year +1 - $i;?></a>
                <?php if(isset($_GET['year'])):?>
                    <?php if($year +1 - $i == $yearSelected):?>
                        <div class="list-group">
                            <?php foreach($months as $k=>$month):?>
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
            <h1>Menu</h1><br>
            <a class="btn btn-success" href="/resto/edith.php">Ajouter un plat</a>
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
                        <td><a class="btn btn-primary" href="<?=$item->getUrl();?>">Modifier</a>  <a class="btn btn-danger" href="/resto/delete.php?id=<?=$item->id;?>">Supprimer</a></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
                </table>
            </div>
            
        </div>

        <div class="col-md-4">
            <h1>Messages des utilisateures</h1><br>
        </div>
    </div>
</div>