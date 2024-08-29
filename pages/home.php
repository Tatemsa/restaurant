
<?php
    $app = Apli::getInstance();
    $table = $app->getTable('food');    

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

    
<!--
    price start
    ============================ -->
    <section id="price">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">our <span>MENU</span> the <span>PRICE</span></h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                        <div class="pricing-list">
                            <div class="title">
                                <h3>Featured <span>on the week</span></h3>
                            </div>
                            <ul>
                                <?php foreach($menu as $item): ?>
                                    <li class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                                        <div class="item">
                                            <div class="item-title">
                                                <h2><?= $item['title'];?></h2>
                                                <div class="border-bottom"></div>
                                                <span>$ <?= $item['price'];?></span>
                                            </div>
                                            <p><?= $item['description'];?></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <a class="btn btn-default pull-right wow bounceIn" data-wow-duration="500ms" data-wow-delay="1200ms" href="#" role="button">More Info</a>
                        </div>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #price close -->

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

     <!--
    subscribe start
    ============================ -->
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class=" heading wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms"> SUBSCRIBE <span>to our</span> NEWSLETTER</h1>
                        <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                        <form class="form-inline">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Enter your email to subscribe...">
                                    <div class="input-group-addon">
                                        <button class="btn btn-default" type="submit">subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .containe close -->
    </section><!-- #subscribe close -->

    <!--
    CONTACT US  start
    ============================= -->
    <section id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">our <span>CONTACT US</span></h1>
                        <h3 class="title wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">Sign Up for <span>Email Alerts</span> </h3>
                        <?php if($error !==  null):?>
                            <div class="alert alert-danger">
                                <?=$error;?>
                            </div>
                        <?php endif;?>
                        <form action="#contact-us" method="POST">
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Write your full name here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="800ms">
                                <input type="email" name="email" class="form-control" placeholder="Write your email address here...">
                            </div>
                            <div class="form-group wow fadeInDown" data-wow-duration="500ms" data-wow-delay="1000ms">
                                <textarea name="message" class="form-control" rows="3" placeholder="Write your message here..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms">send your message</button>
                        </form>
                        
                    </div>
                </div><!-- .col-md-12 close -->
            </div><!-- .row close -->
        </div><!-- .container close -->
    </section><!-- #contact-us close -->
    <!--