<article style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
	<a href="<?php the_permalink(); ?>" class="permalink">
		<h3><?php the_title(); ?></h3>
		<div class="post-ratings">
			<?php echo the_ratings_results($post->ID); ?>
		</div>
	</a>
</article>
