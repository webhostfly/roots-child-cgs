<?php get_template_part('templates/head', 'home'); ?>
<body>

    <div class="container">
        <?php get_template_part('templates/header'); ?>

        <?php get_template_part('templates/nav', 'main'); ?>

        <?php get_template_part('templates/content', 'single'); ?>
        <hr />
        <?php get_template_part('templates/links'); ?>

        <?php get_template_part('templates/footer'); ?>

    </div> <!-- /container -->

</body>
</html>
