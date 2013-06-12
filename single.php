<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

	<article>
		
		<div id="header">
			<h1><?php the_title() ?></h1>
			<?php the_ratings() ?>

		</div>
				
		<div id="media"><?php echo get_the_post_thumbnail() ?></div>
		<div id="body"><?php the_content() ?></div>	
	</article>	

<?php endwhile; ?>
<?php get_footer(); ?>