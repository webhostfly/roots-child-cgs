<?php

function cgs_setup() {
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'cgs' ),
	) );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 450, 300, true );
	add_image_size( "slide", 770, 513, false );
	add_image_size("avator", 220, 146, false);
	add_image_size( '2_3_thumbnail', 100, 150, false );
}
add_action( 'after_setup_theme', 'cgs_setup' );

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
?>
	<ul class="unstyled">
	<?php foreach ($posts as $post) : setup_postdata($post); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>">
				<span class="label pull-right"><?php echo the_time('m-d'); ?></span>
				<?php echo the_title(); ?>
			</a>
		</li>
	<?php endforeach; ?>
	</ul>
	<a href="<?php echo get_category_link( $category_id );?>" class="btn btn-primary readmore pull-right">更多</a>

<?php
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

function cgs_scripts() {
	wp_register_script('cgs_main', get_stylesheet_directory_uri() . '/assets/js/main.js', false, null, false);
	wp_enqueue_script('cgs_main');
}

add_action('wp_enqueue_scripts', 'cgs_scripts', 101);
?>