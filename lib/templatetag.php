<?php

function cgs_posts_list( $category_slug, $opts=array() ) {
	cgs_posts_list_header( $category_slug );
	cgs_posts_list_ul( $category_slug, $opts );
}

function cgs_posts_list_header( $category_slug ) {
	$category = get_category_by_slug( $category_slug );
	$category_id = $category->term_id;
?>
	<div class="well well-header">
		<h1>
			<a href="<?php echo get_category_link( $category_id ); ?>">
				<?php echo get_catname( $category_id ); ?>
			</a>
		</h1>
	</div>
<?php
}

function cgs_posts_list_ul( $category_slug, $opts=array() ) {
	$fields = array(
		'numberposts' => 10,
		'post_type' => 'post',
		'ul_class' => 'unstyled',
		'date_label' => false,
		'readmore' => true
	);
	foreach ($fields as $key => $default) {
		$$key = isset($opts[$key]) ? $opts[$key] : $default;
	}

	$category = get_category_by_slug( $category_slug );
	$category_id = $category->term_id;

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
	<ul class="<?php echo $ul_class; ?>">
	<?php foreach ($posts as $post) : setup_postdata($post); ?>
		<li>
			<a href="<?php echo the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<?php if ($date_label): ?>
					<span class="label"><?php echo the_time('m.d'); ?></span>
				<?php endif; ?>
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