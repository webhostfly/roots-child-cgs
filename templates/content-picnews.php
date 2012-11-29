<div id="slider" class="carousel slide">
    <div class="carousel-inner">

        <?php 
        $posts = get_posts(array( "post_type" => "slide" )); 
        $first = true;
        foreach ( $posts as $post ) :
            $item_css_class = "item";
            setup_postdata($post);
            if ( has_post_thumbnail() ) :
                if ( $first ) {
                    $item_css_class .= " active";
                    $first = false;
                }
        ?>

            <div class="<?php echo $item_css_class; ?>">
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