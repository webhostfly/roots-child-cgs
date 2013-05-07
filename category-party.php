<style>
#top_nav, #suggest_btn, #topnavbar form {
	visibility: hidden;
}
#header {
	display: none;
}
.container .navbar {
	display: none;
}
</style>

<div class="party">
	<?php get_template_part('templates/page', 'header'); ?>
	<?php get_template_part('templates/content', 'party'); ?>
</div>