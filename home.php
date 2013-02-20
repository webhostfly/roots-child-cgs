<div id="headline" class="row">
    <div id="picnews" class="span8">
        <?php get_template_part('templates/content', 'picnews'); ?>
    </div>
    <div class="news span4">
        <?php echo cgs_posts_list( "cgsnews", 14 ); ?>
    </div>
</div> <!-- headline -->

<hr />

<div id="main">
    <div class="row">
        <div class="news span4">
            <div class="well well-header">
                <h1>南航动态</h1>
            </div>
            <?php echo cgs_posts_list_ul( "", 10, "industrylink" ); ?>
        </div>
        <div class="news span4">
            <?php echo cgs_posts_list( "focus", 10 ); ?>
        </div>
        <div class="span4">
            <?php get_template_part("templates/content", "star"); ?>
        </div>
    </div>

    <ul class="thumbnails row" id="piclinks">
        <li class="span3">
            <a href="/index.php/products/a380">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/fxccdbt.jpg" alt="A380" class="thumbnail">
            </a>
        </li>
        <li class="inactive span3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xxsbd.jpg" alt="学习十八大" class="thumbnail"></li>
        <li class="span3">
            <a href="<?php echo get_category_link(7); ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/czzl.jpg" alt="成长之路" class="thumbnail">
            </a>
        </li>
        <li class="span3">
            <a href="/index.php/briefing">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/cgsyk.jpg" alt="CGS月刊" class="thumbnail">
            </a>
        </li>
    </ul>

    <hr />
    <div class="row">
        <div class="news span3">
            <?php echo cgs_posts_list( "partynews", 10 ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "depnews", 10 ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "team", 10 ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "staff", 10 ); ?>
        </div>


    </div> <!-- row -->
</div> <!-- main -->