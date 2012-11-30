<div id="main_nav" role="navigation">
    <div class="navbar">
        <div class="navbar-inner">
            <?php
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
            ?>
            <form action="" class="navbar-search pull-right">
                <div class="input-append">
                    <input type="text" class="span2" id="appendedInputButton" placeholder="搜索文章">
                    <button class="btn" type="button"><i class="icon-search"></i></button>
                </div>
            </form>
        </div> <!-- .bavbar-inner -->
    </div> <!-- .navbar -->
</div> <!-- main_nav -->