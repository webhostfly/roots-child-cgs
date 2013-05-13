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

<div class="pins">
	<?php foreach ($galleries as $gallery) : ?>

	<div class="pin_wrapper">
		<div class="pin_thumbnail">
			<a href="<?php echo $gallery->pagelink ?>"><img alt="<?php echo $gallery->title ?>" src="<?php echo $gallery->previewurl ?>"/></a>
			<div class="caption">
				<a href="<?php echo $gallery->pagelink ?>">
					<h4><?php echo $gallery->title ?></h4>
				</a>
			</div>
		</div>
	</div>

 	<?php endforeach; ?>
 	
	<!-- Pagination -->
 	<?php echo $pagination ?>
 	
</div>

<?php endif; ?>