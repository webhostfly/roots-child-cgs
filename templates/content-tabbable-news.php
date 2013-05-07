<?php
/*
 * generate html from $cats array.
 */
?>

<ul class="nav nav-tabs">
<?php
global $cats;
$first = true;
foreach ( $cats as $cat ) :
    $li_css_class = "";
    $category = get_category_by_slug( $cat );
    $category_id = $category->term_id;
    if ( $first ) {
        $li_css_class .= " active";
        $first = false;
    }
?>
    <li class="<?php echo $li_css_class; ?>">
        <a href="#<?php echo $cat; ?>" data-toggle="tab">
            <?php echo get_catname( $category_id ); ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>

<div class="tab-content news">
    <?php
    $first = true;
    foreach ( $cats as $cat ) :
        $tab_css_class = "tab-pane";

        if ( $first ) {
            $tab_css_class .= " active";
            $first = false;
        }
    ?>
    <div class="<?php echo $tab_css_class; ?>" id="<?php echo $cat; ?>">
        <?php cgs_posts_list_ul($cat); ?>
    </div>
    <?php endforeach; ?>

</div>