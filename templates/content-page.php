
<div class="row-fluid">
	<?php $nav_depth = ($post->post_parent) ? 0 : 1 ?>
	<ul class="span3 nav nav-list page-sidenav" data-spy="affix" data-offset-top="360">
		<?php wp_list_pages( array( 
			'depth' => $nav_depth,
			'sort_column' => 'menu_order',
			'child_of' => $post->post_parent,
			'title_li' => ''
		 ) ); 
		 ?>
	</ul>
	
	<?php while (have_posts()) : the_post(); ?>
	  <div id="content" class="span9 pull-right">
	  	<?php the_content(); ?>
	  </div>
	  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
	<?php endwhile; ?>
</div>