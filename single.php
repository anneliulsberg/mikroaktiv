<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

	<article>
		<h1><?php the_title() ?></h1>
		<div id="media"><?php echo get_the_post_thumbnail() ?></div>
		<?php the_content() ?>	
	</article>	

<?php endwhile; ?>
<?php get_footer(); ?>