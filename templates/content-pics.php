<?php while (have_posts()) : the_post(); ?>
  <div id="content">
  	<div class="galleryoverview">
  		<?php $posts = get_posts(array(
	  		"post_type" => "slide",
	  		"numberposts" => 12
  		)); ?>
  		<ul class="thumbnails">
  		<?php foreach ( $posts as $post ) : setup_postdata($post); ?>
  			<?php if ( has_post_thumbnail() ) : ?>
  			<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large'); ?>
  			<li class="box span3">
  				<div class="thumbnail">
  					<a href="<?php echo $image_url[0]; ?>">
  						<?php the_post_thumbnail("span3") ?>
  					</a>
					<h6><?php the_title() ?></h6>
  				</div>
  			</li>
	  		<?php endif; ?>
	  	<?php endforeach; ?>
  		</ul>
  	</div>
  	<?php the_content(); ?>
  	<?php if(function_exists('wp_paginate')) {
		wp_paginate();
	} ?>
  </div>
  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>