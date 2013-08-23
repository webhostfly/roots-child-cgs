<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span4 news" id="party_intro">
				<div class="well well-header">
					<h1>组织介绍</h1>
				</div>
				<div class="div" id="content">
					<?php
					$intro = get_page_by_path('party/cgs_party_intro');
					echo apply_filters( 'the_content', $intro->post_content );
					?>
				</div>
			</div>
			<div class="span4 news">
				<?php cgs_posts_list_header('party-join'); ?>
				<ul style="margin-bottom: 0;">
					<li><a href="/static/cgs_impress/join_party_workflow.html" style="color:red;">入党流程图示<i class="icon-facetime-video"></i></a></li>
				</ul>
				<?php cgs_posts_list_ul("party-join", array('numberposts'=>9, 'ul_class'=>'', 'date_label'=>false)); ?>
			</div>
		</div>

		<div class="row">
			<div class="span4 news">
				<?php cgs_posts_list("party-18th", array('numberposts'=>8, 'ul_class'=>'', 'date_label'=>false)); ?>
			</div>
			<div class="span4 news">
				<?php cgs_posts_list("partynews", array('numberposts'=>8, 'ul_class'=>'', 'date_label'=>false)); ?>
			</div>
		</div>
	</div>
	<div class="span4" id="party_pioneer">
		<div class="well well-header party">
			<h1>党员先锋岗</h1>
		</div>
		<?php //get_template_part("templates/content", "starlist"); ?>
		<?php
		$args = array(
			'post_type' => 'attachment',
			'numberposts' => -1,
			'post_status' => null,
			'post_parent' => $intro->ID
			);
		$pioneers = get_posts($args);
		?>
		<div class="row">
			<div class="party_pins">
				<?php foreach ($pioneers as $pioneer): ?>
				<div class="pin_thumbnail span2">
					<div class="thumbnail">
						<?php echo wp_get_attachment_image( $pioneer->ID, $size = 'img_span2', $icon = false, $attr = 'class="media-object thumbnail"' ); ?>
						<h6><?php echo apply_filters( 'the_title', $pioneer->post_title ); ?></h6>
					</div>

				</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>

<hr />
<div class="row">
	<div class="span12">
		<?php foreach ( array(26807, 26808, 26809, 26810, 26811) as $att_id ): ?>
		<div class="" style="width: 180px; float: left; margin-left: 8px;">
			<div class="thumbnail">
				<?php echo wp_get_attachment_image( $att_id, $size='avator', $icon = false ); ?>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<script>
	$(function() {
		var $container = $('.party_pins');
		$container.imagesLoaded( function() {
			$container.masonry({
				itemSelector: '.pin_thumbnail',
				isAnimated: true,
				isResizable: true,
				columnWidth: function() {
					return $container.width() / 2;
				}
			});
			$('#party_pioneer').foldIt({
				'height': 588
			});
		});

		$('#party_intro').foldIt({
			'height': 345
		});
		// $('#party_pioneer').foldIt({
		// 	'height': 400
		// });
	})
</script>