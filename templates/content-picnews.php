<div id="slider" class="carousel slide">
    <div class="carousel-inner">
        <div class="active item">
            <img src="http://dummyimage.com/770x3:2&text=Pic1" alt="">
            <div class="carousel-caption">
                <p>pic1</p>
            </div>
        </div>
        <div class="item">
            <img src="http://dummyimage.com/770x3:2&text=Pic2" alt="">
            <div class="carousel-caption">
                <p>中文怎样？</p>
            </div>
        </div>
        <div class="item">
            <img src="http://dummyimage.com/770x3:2&text=Pic3" alt="">
            <div class="carousel-caption">
                <p>pic1</p>
            </div>
        </div>
        <?php
            $posts = get_posts(array("post_type" => "slide"));
            krumo($posts);
        ?>
    </div>
    <a href="#slider" class="carousel-control left" data-slide="prev">&lsaquo;</a>
    <a href="#slider" class="carousel-control right" data-slide="next">&rsaquo;</a>
</div>