<?php get_template_part('templates/page', 'header'); ?>
<div id="content">

	<ul class="thumbnails">
		<?php while (have_posts()) : the_post(); ?>
		  <li class="box span3">
		  	<div class="thumbnail">
		  		<a href="<?php the_permalink(); ?>">
		  			<?php echo get_the_post_thumbnail($post->ID, "thumb270"); ?>
		  		</a>
		  		<h4><?php the_title(); ?></h4>
		  		<p><?php the_excerpt(); ?></p>
		  	</div>
		  </li>
		<?php endwhile; ?>
	</ul>

</div>

<?php if(function_exists('wp_paginate')) {
	wp_paginate();
} ?>