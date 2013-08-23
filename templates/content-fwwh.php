<?php 
	$args = array(
		'post_parent' => $post->ID,
		'order' => 'ASC'
	);
	$pages = get_children( $args );
?>
<?php foreach ($pages as $pg): ?>
	<div class="row-fluid">
<div class="span10 offset1">
<div class="row-fluid bigBox">
		<div class="span7"><?php echo get_the_post_thumbnail( $post_id = $pg->ID, $size = 'medium', $attr = 'class="media-object thumbnail"' ); ?></div>
		<div class="span5"><?php echo apply_filters( 'the_content', $pg->post_content ); ?></div>
	</div>	</div>	</div>
<?php endforeach; ?>