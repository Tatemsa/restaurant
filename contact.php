<?php
    require 'function/contact.php';
    $error = null;
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
    {
       if(post_is_set($_POST)){
        
       } else {
        $error = 'Veuiller remplir tous les champs s\'il vous plait';
        }
        
    } 
?>

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