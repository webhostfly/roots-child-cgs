<div class="row">
	<div class="span8">
		<div class="row">
			<div class="span4 news">
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
				<?php cgs_posts_list("party-join", array('ul_class'=>'', 'date_label'=>false)); ?>
			</div>
		</div>
		<hr />
		<div class="row">
			<div class="span4 news">
				<?php cgs_posts_list("party-18th", array('ul_class'=>'', 'date_label'=>false)); ?>
			</div>
			<div class="span4 news">
				<?php cgs_posts_list("partynews", array('ul_class'=>'', 'date_label'=>false)); ?>
			</div>
		</div>
	</div>
	<div class="span4">
		<div class="well well-header party">
			<h1>党员先锋岗</h1>
		</div>
		<?php //get_template_part("templates/content", "starlist"); ?>
		<?php 
		$args = array(
			'post_type' => 'attachment',
			'post__in' => array('26816', '26817', '26818', '26819', '26820', '26821', '26822', '26823', '26824', '26825'),
			// 'post__in' => array('26507', '26508'),
			);
		$pioneers = get_posts($args);
		?>
		<?php foreach ($pioneers as $pioneer): ?>
		<div class="media">
			<div class="pull-left">
				<?php echo wp_get_attachment_image( $pioneer->ID, $size = '2_3_thumbnail', $icon = false, $attr = 'class="media-object thumbnail"' ); ?>
			</div>
			<div class="media-body">
				<h4><?php echo apply_filters( 'the_title', $pioneer->post_title ); ?></h4>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>

<hr />
<div class="row">
	<div class="span12">
		<ul class="thumbnails">
			<?php foreach ( array(26807, 26808, 26809, 26810, 26811, 26812) as $att_id ): ?>
			<li class="span2">
				<div class="thumbnail">
					<?php echo wp_get_attachment_image( $att_id, $size='img_span2', $icon = false ); ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>