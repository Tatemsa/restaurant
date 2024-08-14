<?php
    require_once 'data/data.php';
?>
<!--
    Slider start
    ============================== -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <div class="title">
                            <h3>Featured <span>Works</span></h3>
                        </div>
                        <div id="owl-example" class="owl-carousel">
                            <?php foreach($carousel as $item):?>
                                <div>
                                <img class="img-responsive" src="<?= $item['path']?>" alt="">
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- slider close -->