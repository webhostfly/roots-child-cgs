<div id="slider" class="carousel slide">
    <div class="carousel-inner">

        <?php $posts = get_posts(array("post_type" => "slide")); ?>
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
        <?php if has_post_thumbnail(); ?>
            <div class="item">
                <?php the_post_thumbnail("slide"); ?>
                <div class="carousel-caption">
                    <p><?php the_title(); ?></p>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <a href="#slider" class="carousel-control left" data-slide="prev">&lsaquo;</a>
    <a href="#slider" class="carousel-control right" data-slide="next">&rsaquo;</a>
</div>