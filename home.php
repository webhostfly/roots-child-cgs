<div id="headline" class="row">
    <div id="picnews" class="span8">
        <?php get_template_part('templates/content', 'picnews'); ?>
    </div>
    <div class="news span4">
        <?php echo cgs_posts_list( "cgsnews", 14 ); ?>
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
            <?php echo cgs_posts_list( "focus", 10 ); ?>
        </div>
        <div class="news span4">
            <?php get_template_part("templates/content", "star"); ?>
        </div>
    </div>

    <hr />
    <div class="row">
        <div class="tabbable span3">
            <?php $cats = array("partynews"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>
        <div class="tabbable span3">
            <?php $cats = array("depnews"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>
        <div class="tabbable span3">
            <?php $cats = array("team"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>
        <div class="tabbable span3">
            <?php $cats = array("staff"); ?>
            <?php get_template_part("templates/content", "tabbable-news"); ?>
        </div>


    </div> <!-- row -->
</div> <!-- main -->