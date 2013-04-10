<?php get_template_part('templates/head', get_post_format()); ?>
<body>
    <!--[if lt IE 7]>
        <p class="ieupgrade">
            您正在使用的<a href="http://theie6countdown.cn">Internet Explorer浏览器版本过旧</a>，我们希望您能够体验顺畅、兼容、安全的互联网。<a href="http://theie6countdown.cn/">点击免费升级</a>
        </p>
    <![endif]-->

    <?php get_template_part('templates/nav', 'top'); ?>
    
    <div class="container">
        <?php get_template_part('templates/header', $wp_query->query_vars["category_name"]); ?>

        <?php get_template_part('templates/nav', 'main'); ?>

        <?php include roots_template_path(); ?>

        <hr />
        <?php get_template_part('templates/links'); ?>

        <?php get_template_part('templates/footer'); ?>

    </div> <!-- /container -->

</body>
</html>
