<div class="row">
	<div class="span12">
		<?php while (have_posts()) : the_post(); ?>
		  <div id="content">
		
		  	<?php the_content(); ?>
		    
			<?php if(function_exists('wp_paginate')) {
				wp_paginate();
			} ?>
		  </div>
		  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		<?php endwhile; ?>
	</div>
</div>