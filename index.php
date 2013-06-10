<?php get_header(); ?>
<?php $categories = get_categories(array('orderby' => 'name', 'order' => 'ASC', 'child_of' => 0)); ?>
<?php foreach ($categories as $category) : ?>

	<section id="<?php echo $category->slug ?>" class="category">
		<h2>Topp 5 <?php echo $category->name ?></h2>
	
		<?php foreach (get_posts(array('numberposts' => 5, 'category' => $category->term_id)) as $post) :
			
		get_template_part('content');
			
		endforeach; ?>

	
	</section>

<?php endforeach; ?>
<?php get_footer(); ?>
