<?php get_header(); ?>
<?php $categories = get_categories(array('orderby' => 'name', 'order' => 'ASC', 'child_of' => 0)); ?>
<?php foreach ($categories as $category) : ?>

	<div id="<?php echo $category->slug ?>" class="category">
		<h2>Topp 5 <?php echo $category->name ?></h2>
	
		<ul>
			<?php foreach (get_posts(array('numberposts' => 5, 'category' => $category->term_id)) as $post) : ?>
			
			<li><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></li>
			
			<?php endforeach; ?>
		</ul>
	
	</div>

<?php endforeach; ?>
<?php get_footer(); ?>
