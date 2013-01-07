<?php

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

function cgs_excerpt_length($length) {
	return 200;
}
add_filter( 'excerpt_length', 'cgs_excerpt_length', 999 );

?>