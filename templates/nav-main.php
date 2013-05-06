<div role="navigation">
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container-fluid">
                <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target="#main_nav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse" id="main_nav">
                    <?php
                        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
                    ?>
                    <form role="search" method="get" action="<?php echo home_url('/'); ?>" class="navbar-search pull-right">
                        <div class="input-append">
                            <input type="text" class="span2" id="appendedInputButton" placeholder="搜索文章" name="s" id="s" value="<?php if (is_search()) { echo get_search_query(); } ?>">
                            <button class="btn" type="submit"><i class="icon-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- .bavbar-inner -->
    </div> <!-- .navbar -->
</div> <!-- main_nav -->