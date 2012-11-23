<?php get_template_part('templates/head', 'home'); ?>
<body>
    <!--[if lt IE 7]>
        <p class="ieupgrade">
            您正在使用的<a href="http://theie6countdown.cn">Internet Explorer浏览器版本过旧</a>，我们希望您能够体验顺畅、兼容、安全的互联网。<a href="http://theie6countdown.cn/">点击免费升级</a>
        </p>
    <![endif]-->

    <?php get_template_part('templates/nav', 'top'); ?>

    <div class="container">
        <div id="header" class="row">
            <div class="span12">
                <img src="http://dummyimage.com/1170x220" alt="cgslogo" id="logo" width="1170" height="220">
            </div>
        </div> <!-- header -->

        <?php get_template_part('templates/nav', 'main'); ?>

        <div id="headline" class="row">
            <div id="picnews" class="span8">
                <?php get_template_part('templates/content', 'picnews'); ?>
            </div>
            <div class="news span4">
                <?php echo cgs_posts_list( "cgsnews", 15 ); ?>
            </div>
        </div> <!-- headline -->

        <hr />
        <div id="main">
            <div class="row">
                <div class="news span4">
                    <div class="well well-header">
                        <a href="#"><h1>南航动态</h1></a>
                    </div>
                    <ul class="unstyled">
                        <li><a href="#">有部專或現修女製大以師要價驗</a></li>
                        <li><a href="#">每方候本成樣體母上個者</a></li>
                        <li><a href="#">大子四我部裡士力答期學力否反想</a></li>
                        <li><a href="#">建他動的心學十文</a></li>
                        <li><a href="#">界動作只起用許什前以一物你至爭意運多好</a></li>
                        <li><a href="#">去我先如</a></li>
                        <li><a href="#">自法他環原為這</a></li>
                    </ul>
                    <a href="#" class="btn btn-info pull-right">了解更多</a>
                </div>
                <div class="news span4">
                    <?php echo cgs_posts_list( "focus", 7 ); ?>
                </div>
                <div class="news span4">
                    <div class="well well-header">
                        <a href="#"><h1>CGS光荣榜</h1></a>
                    </div>
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="http://dummyimage.com/64" alt="" class="media-object img-circle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">水書新</h4>
                                <p>說能性燈電說點</p>
                            </div>
                        </li>
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="http://dummyimage.com/64" alt="" class="media-object img-circle">
                            </a>
                            <div class="media-body">
                                <h4 class="media-heading">富金灣子吃分成們汽大小</h4>
                                <p>一大會或大投關保適明合獎速母車容不小留先良的高後說子參本求中活事山見漸落位院取無歌中比馬天那道元一生</p>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="btn btn-info pull-right">了解更多</a>
                </div>
            </div>

            <hr />
            <div class="row">
                <div class="tabbable span4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab1" data-toggle="tab">党团动态</a></li>
                        <li><a href="#tab2" data-toggle="tab">班组建设</a></li>
                        <li><a href="#tab3" data-toggle="tab">部门新闻</a></li>
                        <li><a href="#tab4" data-toggle="tab">员工天地</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <ul class="unstyled">
                                <li><a href="#">有部專或現修女製大以師要價驗</a></li>
                                <li><a href="#">每方候本成樣體母上個者</a></li>
                                <li><a href="#">大子四我部裡士力答期學力否反想</a></li>
                                <li><a href="#">建他動的心學十文</a></li>
                                <li><a href="#">界動作只起用許什前以一物你至爭意運多好</a></li>
                                <li><a href="#">去我先如</a></li>
                                <li><a href="#">自法他環原為這</a></li>
                            </ul>
                            <a href="#" class="btn btn-info pull-right">了解更多</a>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <ul class="unstyled">
                                <li><a href="#">有部專或現修女製大以師要價驗</a></li>
                                <li><a href="#">每方候本成樣體母上個者</a></li>
                                <li><a href="#">大子四我部裡士力答期學力否反想</a></li>
                                <li><a href="#">建他動的心學十文</a></li>
                                <li><a href="#">界動作只起用許什前以一物你至爭意運多好</a></li>
                                <li><a href="#">去我先如</a></li>
                                <li><a href="#">自法他環原為這</a></li>
                            </ul>
                            <a href="#" class="btn btn-info pull-right">了解更多</a>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <ul class="unstyled">
                                <li><a href="#">有部專或現修女製大以師要價驗</a></li>
                                <li><a href="#">每方候本成樣體母上個者</a></li>
                                <li><a href="#">大子四我部裡士力答期學力否反想</a></li>
                                <li><a href="#">建他動的心學十文</a></li>
                                <li><a href="#">界動作只起用許什前以一物你至爭意運多好</a></li>
                                <li><a href="#">去我先如</a></li>
                                <li><a href="#">自法他環原為這</a></li>
                            </ul>
                            <a href="#" class="btn btn-info pull-right">了解更多</a>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <ul class="unstyled">
                                <li><a href="#">有部專或現修女製大以師要價驗</a></li>
                                <li><a href="#">每方候本成樣體母上個者</a></li>
                                <li><a href="#">大子四我部裡士力答期學力否反想</a></li>
                                <li><a href="#">建他動的心學十文</a></li>
                                <li><a href="#">界動作只起用許什前以一物你至爭意運多好</a></li>
                                <li><a href="#">去我先如</a></li>
                                <li><a href="#">自法他環原為這</a></li>
                            </ul>
                            <a href="#" class="btn btn-info pull-right">了解更多</a>
                        </div>
                    </div>
                </div>
                <div class="news span3">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#" class="larger">工作汇报</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <ul class="unstyled">
                            <li><a href="#">示人子動歡和的定會意麼國書果沒</a></li>
                            <li><a href="#">營等城落真發子的南我而入施上隨十</a></li>
                            <li><a href="#">達在到親一去有除意地負</a></li>
                            <li><a href="#">數樓去更空上家媽最愛教影</a></li>
                            <li><a href="#">來持頭程的設別女爸別方子趣育育子境他顧品心好格</a></li>
                            <li><a href="#">光生智色前用成木</a></li>
                            <li><a href="#">公形今容消運情子的</a></li>
                        </ul>
                        <a href="#" class="btn btn-info pull-right">了解更多</a>
                    </div>
                </div>
                <div class="news span3 offset1">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#">A380</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <ul class="unstyled">
                            <li><a href="#">示人子動歡和的定會意麼國書果沒</a></li>
                            <li><a href="#">營等城落真發子的南我而入施上隨十</a></li>
                            <li><a href="#">達在到親一去有除意地負</a></li>
                            <li><a href="#">數樓去更空上家媽最愛教影</a></li>
                            <li><a href="#">來持頭程的設別女爸別方子趣育育子境他顧品心好格</a></li>
                            <li><a href="#">光生智色前用成木</a></li>
                            <li><a href="#">公形今容消運情子的</a></li>
                        </ul>
                        <a href="#" class="btn btn-info pull-right">了解更多</a>
                    </div>
                </div>
            </div>
        </div> <!-- main -->

        <hr />
        <div id="links">
            <p>
                <a href="#" class="muted">SKYTEAM</a> | <a href="#" class="muted">SKYTRAX</a> | <a href="#" class="muted">CSAIR</a> | <a href="#" class="muted">BCIA</a>
            </p>
        </div> <!-- links -->

        <?php get_template_part('templates/footer'); ?>

    </div> <!-- /container -->

</body>
</html>
