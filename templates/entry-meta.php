
<div class="well well-small">
	<div class="meta-control">
		<span><i class="icon-calendar"></i></span>
		<div class="meta-info">
			<?php echo get_the_date(); ?>
		</div>
	</div>
	
	<div class="meta-control">
		<span><i class="icon-time"></i></span>
		<div class="meta-info">
			<?php echo get_the_time(); ?>
		</div>
	</div>
	
	<?php if ( has_term('', 'author_tag') ): ?>
	<div class="meta-control">
		<span><i class="icon-user"></i></span>
		<div class="meta-info">
			<ul class="unstyled">
				<?php the_terms( $post->ID, 'author_tag', '<li>', '</li><li>', '</li>' ); ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if ( has_tag() ): ?>
	<div class="meta-control">
		<span><i class="icon-tags"></i></span>
		<div class="meta-info">
			<ul class="unstyled">
				<?php the_tags('<li>', '</li><li>', '</li>'); ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
</div>