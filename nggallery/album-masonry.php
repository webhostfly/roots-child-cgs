<?php 
/**
Template Page for the album overview (extended)

Follow variables are useable :

	$album     	 : Contain information about the album
	$galleries   : Contain all galleries inside this album
	$pagination  : Contain the pagination content

 You can check the content when you insert the tag <?php var_dump($variable) ?>
 If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
**/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($galleries)) : ?>

<ul class="thumbnails">	
	<!-- For archive picnews. -->
<?php
	$args = array(
		"post_type" => "slide",
		"posts_per_page" => 1
	); 
	$slides = new WP_Query( $args );
?>
	<?php while ( $slides->have_posts() ) : $slides->the_post(); ?>
	<li class="span3 box">
		<div class="thumbnail">
			<?php $cgs_gallery_link = get_page_link(get_page_by_title('cgs视窗')->ID); ?>
			<a href="<?php echo $cgs_gallery_link; ?>">
				<?php the_post_thumbnail("thumb270") ?>
			</a>
			<div class="caption">
				<a href="<?php echo $cgs_gallery_link ?>">
					<h4>CGS视窗</h4>
				</a>
			</div>
		</div>
	</li>
	<?php endwhile; ?>
	
	<!-- List of galleries -->
	<?php foreach ($galleries as $gallery) : ?>

	<li class="span3 box">
		<div class="thumbnail">
			<a href="<?php echo $gallery->pagelink ?>"><img alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/></a>
			<div class="caption">
				<a href="<?php echo $gallery->pagelink ?>">
					<h4><?php echo $gallery->title ?></h4>
				</a>
			</div>
		</div>
	</li>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</ul>

<?php endif; ?>