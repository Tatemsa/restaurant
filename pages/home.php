<H1>Ceci  est un test d'affichage</H1>
<?php
use App\Database;
    $db = new Database('tuto');
    $datas = $db->query('SELECT * FROM foods', \App\Table\Food::class);
    var_dump($datas)

?>

<!--
    about-us start
    ============================== -->
    <section id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <img class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms" src="images/cooker-img.png" alt="cooker-img">
                        <h1 class="heading wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms" >Your <span>Restaurant’s</span> </br> Website Has To Look <span>Good</span>
                        </h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim </br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in </br>voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->