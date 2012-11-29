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
                        <h1>南航动态</h1>
                    </div>
                    <?php echo cgs_posts_list_ul( "", 10, "industrylink" ); ?>
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
                <div class="tabbable span3">
                    <?php $cats = array("partynews", "team"); ?>
                    <?php get_template_part("templates/content", "tabbable-news"); ?>
                </div>
                <div class="tabbable span3">
                    <?php $cats = array("depnews", "staff"); ?>
                    <?php get_template_part("templates/content", "tabbable-news"); ?>
                </div>
                <div class="news span3">
                    <div class="well well-header">
                        <h1>工作汇报</h1>
                    </div>
                    <?php echo do_shortcode('[wpfilebase tag="list" id="1" tpl="ul" num="10" pagenav="0" /]'); ?>
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
