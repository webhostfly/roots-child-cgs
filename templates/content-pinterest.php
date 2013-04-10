<div id="content">

	<ul class="thumbnails">
		<?php while (have_posts()) : the_post(); ?>
		  <li class="box span3">
		  	<div class="thumbnail pins">
		  		<a href="<?php the_permalink(); ?>">
		  			<?php echo get_the_post_thumbnail($post->ID, "thumb270"); ?>
		  		</a>
		  		<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
		  		<p><?php the_excerpt(); ?></p>
		  	</div>
		  </li>
		<?php endwhile; ?>
	</ul>

</div>

<?php if(function_exists('wp_paginate')) {
	wp_paginate();
} ?>