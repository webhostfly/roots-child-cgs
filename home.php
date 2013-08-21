<div id="headline" class="row">
    <div id="picnews" class="span8">
        <?php get_template_part('templates/content', 'picnews'); ?>
    </div>
    <div class="news span4" id="cgsnews">
        <?php echo cgs_posts_list( "cgsnews", array('numberposts'=>18) ); ?>
    </div>
</div> <!-- headline -->

<hr />

<div id="main">

    <ul class="thumbnails" id="piclinks">
        <li class="span3">
            <a href="/index.php/products/a380">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/video.jpg" alt="A380" class="thumbnail">
            </a>
        </li>
        <li class="span3">
            <a href="/index.php/category/party">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/xxsbd.jpg" alt="学习十八大" class="thumbnail">
            </a>
        </li>
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

    <div class="row">
        <div class="news span4">
            <div class="well well-header">
                <h1>南航动态</h1>
            </div>
            <?php echo cgs_posts_list_ul( "", array('post_type'=>'industrylink', 'numberposts'=>10, 'readmore'=>false) ); ?>
        </div>
        <div class="news span4">
            <?php echo cgs_posts_list( "focus", array('numberposts'=>10) ); ?>
        </div>
        <div class="span4">
            <div class="well well-header">
                <a href="#"><h1>CGS光荣榜</h1></a>
            </div>
            <?php get_template_part("templates/content", "star"); ?>
        </div>
    </div>

    <ul class="thumbnails" id="piclinks">
        <li class="span3"><a href="#"><img src="http://dummyimage.com/270x183" alt="" class="thumbnail"></a></li>
        <li class="span3"><a href="#"><img src="http://dummyimage.com/270x183" alt="" class="thumbnail"></a></li>
        <li class="span3"><a href="#"><img src="http://dummyimage.com/270x183" alt="" class="thumbnail"></a></li>
        <li class="span3"><a href="#"><img src="http://dummyimage.com/270x183" alt="" class="thumbnail"></a></li>
    </ul>

    <hr />
    <div class="row">
        <div class="news span3">
            <?php echo cgs_posts_list( "partynews", array('numberposts'=>5) ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "depnews", array('numberposts'=>5) ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "team", array('numberposts'=>5) ); ?>
        </div>
        <div class="news span3">
            <?php echo cgs_posts_list( "staff", array('numberposts'=>5) ); ?>
        </div>


    </div> <!-- row -->
</div> <!-- main -->