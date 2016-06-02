<?php get_header(); ?>
<section id="testimonial" class="alizarin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <?php
                    if( have_posts() ){
                    ?>

                    <header class="archive-header">
                        <h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'nm-flat-theme' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>  

                        <?php if ( category_description() ) : // Show an optional category description ?>
                        <div class="archive-meta"><?php echo category_description(); ?></div>
                        <?php endif; ?>
                    </header><!-- .archive-header -->

                    <?php
                        while( have_posts() ){
                        
                            the_post();
                    ?>
                            <div>
                            <h2><?php the_title();?></h2>
                            <span><?php the_date(); ?></span>
                            
                            <span><?php the_content(); ?></span>
                            </div>
                        <?php
                            
                        }
                      
                    }
                    ?>
                    <!--   -->
                </div>
            </div>
        </div>
    </section><!--/#testimonial-->

<?php get_footer(); ?>