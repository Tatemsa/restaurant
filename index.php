<?php
require 'element/header.php';
require 'element/sidebar.php';
require 'data/data.php';
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
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="600ms"><?= $description;?></p>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #call-to-action close -->
   
   

    <?php 
    require 'menu.php';

    require 'blog.php';

    require 'subscribe.php';

    require 'contact.php';

    require 'element/footer.php'
    ?>