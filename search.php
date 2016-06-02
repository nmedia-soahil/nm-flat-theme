<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8">						
			<h1>Your Search Results Here...</h1>
			<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
				<a href="<?php echo the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<p><?php the_excerpt(); ?></p>
			<?php endwhile; else : ?>
			
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
