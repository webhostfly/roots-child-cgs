<?php

function bootstrape_ie6_head() { ?>
	<!--[if IE 6]>
	    <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/ie6.min.css" rel="stylesheet">
	<![endif]-->
<?php }

function bootstrape_ie6_footer() { ?>
	<!--[if IE 6]>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/ie6.js" type="text/javascript"></script>
	<![endif]-->
<?php }

add_action('wp_head', 'bootstrape_ie6_head', 99);
add_action('wp_footer', 'bootstrape_ie6_footer', 99);

?>