<div class="navbar navbar-inverse">
    <div class="navbar-inner">
        <a href="#" class="brand">北京南航地服</a>
        <?php wp_nav_menu(array('theme_location' => 'top', 'menu_class' => 'nav')); ?>
        <form action="http://www.bjcgs.com/staff/admin/index.asp?type=ck" class="navbar-form pull-right">
            <input type="text" name="M_ID" class="input-small" placeholder="员工号">
            <input type="password" name="pass" class="input-small" placeholder="密码">
            <button class="btn" type="submit">登陆</button>
        </form>
    </div>
</div>