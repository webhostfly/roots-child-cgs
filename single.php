<?php get_template_part('templates/head', 'home'); ?>
<body>

    <div class="container">
        <?php get_template_part('templates/header'); ?>

        <?php get_template_part('templates/nav', 'main'); ?>

        <div class="row">
        	<div class="span12">
        		<ul class="breadcrumb">
        			<?php bcn_display(); ?>
        		</ul>
        	</div>
        </div>

        <?php get_template_part('templates/content', 'single'); ?>
        <hr />
        <?php get_template_part('templates/links'); ?>

        <?php get_template_part('templates/footer'); ?>

    </div> <!-- /container -->

</body>
</html>
