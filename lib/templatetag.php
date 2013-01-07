<?php

function cgs_posts_list( $category_slug, $numberposts = 10, $post_type = "post" ) {
	$category = get_category_by_slug( $category_slug );
	$category_id = $category->term_id;

	cgs_posts_list_header( $category_id );
	cgs_posts_list_ul( $category_id, $numberposts, $post_type );
}

function cgs_posts_list_header( $category_id ) {
?>
	<div class="well well-header">
		<h1>
			<a href="<?php echo get_category_link( $category_id ); ?>">
				<?php echo get_catname( $category_id ); ?>
			</a>
		</h1>
	</div>
<?php
	// $output = '';
	// $output .= '<div class="well well-header">';
	// $output .= '<a href="' . get_category_link( $category_id ) . '"><h1>' . get_catname( $category_id ) . '</h1></a></div>';

	// return $output;
}

function cgs_posts_list_ul( $category_id, $numberposts, $post_type = "post", $readmore = true ) {
	$output = '';
	$args = array(
	    'numberposts'     => $numberposts,
	    'offset'          => 0,
	    'category'        => $category_id,
	    'orderby'         => 'post_date',
	    'order'           => 'DESC',
	    'post_type'       => $post_type,
	    'post_status'     => 'publish',
	    'suppress_filters' => true
	);

	global $post;
	$posts = get_posts( $args );
?>
	<ul class="unstyled">
	<?php foreach ($posts as $post) : setup_postdata($post); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<span class="label"><?php echo the_time('m.d'); ?></span>
				<?php echo the_title(); ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php if ($readmore): ?>
	<a href="<?php echo get_category_link( $category_id );?>" class="btn btn-primary readmore pull-right">更多</a>
	<?php endif; ?>
<?php
	wp_reset_postdata();
}