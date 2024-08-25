<H1>Ceci  est un test d'affichage</H1>
<?php
use App\Database;
    $db = new Database('tuto');
    $datas = $db->query('SELECT * FROM foods', \App\Table\Food::class);
    var_dump($datas);