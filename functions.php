<?php

function cgs_post_list( $category_slug, $numberposts = 10 ) {
	$category_id = get_category_by_slug( $category_slug );

	$list_title = cgs_post_list_header( $category_id );

	$readmore = sprintf(
		'<a href="%s" class="btn btn-info btn-small pull-right">%s</a>',
		get_category_link( $category_id ),
		get_catname( $category_id )
	);
	
	return = $list_title . '<ul class="unstyled">' . cgs_post_list_ul( $category_id, $numberposts ) . '</ul>' . $readmore;
}

function cgs_post_list_header( $category_id ) {
	return sprintf('
				<div class="well well-header">
					<a href="%s"><h1>%s</h1></a>
				</div>
				', 
				get_category_list( $category_id ), 
				get_catname( $category_id )
			);
}

function cgs_post_list_ul( $category_id, $numberposts ) {
	$list = '';
	$args = array(
	    'numberposts'     => $numberposts,
	    'offset'          => 0,
	    'category'        => $category_id,
	    'orderby'         => 'post_date',
	    'order'           => 'DESC',
	    'include'         => ,
	    'exclude'         => ,
	    'meta_key'        => ,
	    'meta_value'      => ,
	    'post_type'       => 'post',
	    'post_mime_type'  => ,
	    'post_parent'     => ,
	    'post_status'     => 'publish',
	    'suppress_filters' => true
	);

	$tmpposts = get_posts( $args );
	foreach ($tmppost as $post) {
		setup_postdata($post);
		$list .= sprintf('<li><a href="%s">%s</a></li>', the_permalink(), the_title());
	}
	return $list;
}

?>