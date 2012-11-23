<?php

function cgs_posts_list( $category_slug, $numberposts = 10 ) {
	$category = get_category_by_slug( $category_slug );
	$category_id = $category->term_id;

	cgs_posts_list_header( $category_id );
	cgs_posts_list_ul( $category_id, $numberposts );
}

function cgs_posts_list_header( $category_id ) {
?>
	<div class="well well-header">
		<h1>
			<a href="<?php echo get_category_link( $category_id ); ?>">
				<?php echo get_catname( $category_id ); ?>
			</a>
			<a href="<?php echo get_category_link( $category_id );?>" class="btn btn-primary btn-mini pull-right">更多</a>
		</h1>
	</div>
<?php
	// $output = '';
	// $output .= '<div class="well well-header">';
	// $output .= '<a href="' . get_category_link( $category_id ) . '"><h1>' . get_catname( $category_id ) . '</h1></a></div>';

	// return $output;
}

function cgs_posts_list_ul( $category_id, $numberposts ) {
	$output = '';
	$args = array(
	    'numberposts'     => $numberposts,
	    'offset'          => 0,
	    'category'        => $category_id,
	    'orderby'         => 'post_date',
	    'order'           => 'DESC',
	    'post_type'       => 'post',
	    'post_status'     => 'publish',
	    'suppress_filters' => true
	);

	global $post;
	$posts = get_posts( $args );
	echo '<ul class="unstyled">';

	foreach ($posts as $post) : setup_postdata($post); ?>
		<li>
			<span class="label pull-right"><?php echo the_time('m-d'); ?></span>
			<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
		</li>
	<?php endforeach; ?>

<?php
	echo '</ul>';
	wp_reset_postdata();
}

?>