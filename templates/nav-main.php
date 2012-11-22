<div id="main_nav" role="navigation">
    <div class="navbar">
        <div class="navbar-inner">
            <?php
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills'));
            ?>
            <form action="" class="navbar-search pull-right">
                <input type="text" class="search-query" placeholder="Search">
            </form>
        </div> <!-- .bavbar-inner -->
    </div> <!-- .navbar -->
</div> <!-- main_nav -->