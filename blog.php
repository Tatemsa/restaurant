<?php
    require_once 'data/data.php';
?>
 
 <!--
    blog start
    ============================ -->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading">Latest <span>From</span> the <span>Blog</span></h1>
                        <ul>
                            <?php foreach($images as $item):?>
                                <li class="wow fadeInLeft" data-wow-duration="300ms" data-wow-delay="300ms">
                                    <div class="blog-img">
                                        <img src="<?=$item['path']?>" alt="blog-img">
                                    </div>
                                    <div class="content-right">
                                        <h3><?=$item['title']?></h3>
                                        <p><?=$item['description']?></p>
                                    </div>
                                </li>
                            <?php endforeach;?>
                        </ul>
                        <a class="btn btn-default btn-more-info wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #blog close -->