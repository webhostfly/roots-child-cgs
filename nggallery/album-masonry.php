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
	<!-- List of galleries -->
	<?php foreach ($galleries as $gallery) : ?>

	<li class="span3">
		<div class="thumbnail">
			<a href="<?php echo $gallery->pagelink ?>"><img alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/></a>
			<p3><?php echo $gallery->title ?></p3>
			<p><?php echo $gallery->galdesc ?></p>
		</div>
<!-- 		<div class="ngg-albumtitle"><a href="<?php echo $gallery->pagelink ?>"><?php echo $gallery->title ?></a></div>
			<div class="ngg-albumcontent">
				<div class="ngg-thumbnail">
					<a href="<?php echo $gallery->pagelink ?>"><img class="Thumb" alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/></a>
				</div>
				<div class="ngg-description">
				<p><?php echo $gallery->galdesc ?></p>
				<?php if ($gallery->counter > 0) : ?>
				<p><strong><?php echo $gallery->counter ?></strong> <?php _e('Photos', 'nggallery') ?></p>
				<?php endif; ?>
			</div>
		</div> -->
	</li>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</ul>

<?php endif; ?>