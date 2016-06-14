<?php get_header(); ?>
	<div class="toTop"><a id="top_button">Top</a></div>
	<div class="container content-wrapper">
	<?php 
		if(have_posts()):
			while(have_posts()): the_post() ?>
			<div class="row page-title"><h1><?php the_title(); ?></h1></div>
			<p><?php the_content(); ?></p>
			<?php endwhile;
			endif;
			
	?>
	</div>

	
<?php get_footer(); ?>

