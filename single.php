<?php get_header(); ?>
<section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 center">
                    <?php

                       if( has_post_thumbnail() ){
                       the_post_thumbnail('medium',array('class'=>'img-thumbnail post-img img-responsive'));
                       }
                       else {
                           echo '<img  class="img-thumbnail post-img img-responsive"  src="'.get_stylesheet_directory_uri(). '/images/blog/avatar2.png" />';
                       }

                   ?>

                    <?php
                    if( have_posts() ){
                      
                        while( have_posts() ){
                        
                            the_post();
                    ?>
                            <div class="center">
                            <h2><?php the_title();?></h2>
                            <span><?php the_date(); ?></span>
                            
                            <span><?php the_content(); ?></span>
                            </div>
                        <?php
                            
                        }
                      
                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

<?php get_footer(); ?>