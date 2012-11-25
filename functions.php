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
			<a href="<?php echo get_category_link( $category_id );?>" class="btn btn-primary btn-mini pull-right">更多</a>
		</h1>
	</div>
<?php
	// $output = '';
	// $output .= '<div class="well well-header">';
	// $output .= '<a href="' . get_category_link( $category_id ) . '"><h1>' . get_catname( $category_id ) . '</h1></a></div>';

	// return $output;
}

function cgs_posts_list_ul( $category_id, $numberposts, $post_type = "post" ) {
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
	echo '<ul class="unstyled">';

	switch ( $post_type ) {
		// case "industrylink":
		// 	break;
		// 	foreach ($posts as $post) : setup_postdata($post);
?>
<!-- 				<li>
					<span class="label pull-right"><?php echo the_time('m-d'); ?></span>
					<a href="<?php echo get_post_meta( $post->ID, 'link', true ); ?>" target="_blank" ><?php echo the_title(); ?></a>
				</li> -->
<?php
			 // }
		default:
			foreach ($posts as $post) : setup_postdata($post);
?>
				<li>
					<span class="label pull-right"><?php echo the_time('m-d'); ?></span>
					<a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
				</li>
<?php
			}
	}

	echo '</ul>';
	wp_reset_postdata();
}

function industrylink_permalink( $permalink, $post_id, $leavename ) {
	$post = get_post( $post_id );

	if ( $post->post_type == "industrylink" )
		return esc_url(get_post_meta( $post->ID, 'link', true ));

	return $permalink;
}
add_filter( 'post_type_link', 'industrylink_permalink', 20, 3 );

function cgs_posts_columns($columns) {
	unset(
		$columns['custom-fields'],
		$columns['viewscolumn'],
		$columns['tags'],
		$columns['comments'],
		$columns['author'],
		$columns['categories'],
		$columns['date']
		);
	$newColumns = array(
		'author' => __('Editor'),
		'categories' => __('Categories'),
		'date' => __('Date'),
		'real_author' => __('Author'),
		'wordcount' => __('WordCount')
		);
	$columns = array_merge($columns, $newColumns);
	return $columns;
}

function cgs_custom_columns($column, $post_id) {
	// global $wpdb;
	switch ( $column ) {
	case 'real_author':
		echo get_the_term_list( $post_id, 'author_tag', '', ', ', '' );
		break;
	case 'wordcount':
		// $post = $wpdb->get_row(
		// 	$wpdb->prepare(
		// 		"
		// 		SELECT post_content FROM $wpdb->posts WHERE {$wpdb->posts}.ID = %d;
		// 		",
		// 		$post_id
		// 	)
		// );
		// $post_text = strip_shortcodes(strip_tags($post->post_content));

		$post = get_post($post_id);
		$post_text = strip_shortcodes(strip_tags($post->post_content));
		echo mb_strlen($post_text);
		break;
	default:
		break;
	}
}

add_filter('manage_posts_columns', 'cgs_posts_columns');
add_action('manage_posts_custom_column', 'cgs_custom_columns', 10, 2);


?>