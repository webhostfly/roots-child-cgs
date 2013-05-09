<?php
    $args = array(
        'category_name' => 'top',
        'posts_per_page'    => 1,
        'orderby' => 'rand',
        'year' => date('Y'),
        'monthnum' => date('m'),
    );
    $args_alt = array(
        'category_name' => 'top',
        'posts_per_page' => 1,
        'orderby' => 'rand',
    );
    $rand_star = new WP_Query($args);
?>

<ul class="media-list">

<?php
    if ( !($rand_star->have_posts()) ) {    //if do not have star this month then pick one from all.
        $rand_star = new WP_Query($args_alt);
    }
?>
    <?php if ($rand_star->have_posts()): $rand_star->the_post(); ?>
    <li class="media">
        <a href="<?php echo the_permalink(); ?>" class="pull-left">
            <?php echo get_the_post_thumbnail($post->ID, "avator_small", array('class'=>"media-object img-circle")); ?>
        </a>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="<?php echo the_permalink(); ?>">
                    <?php echo the_title(); ?>
                </a>
            </h4>
            <p><?php echo apply_filters('the_excerpt', mb_substr(strip_shortcodes(strip_tags($post->post_content)), 0, 80, 'utf-8') . '……') ?></p>
        </div>
        <?php else: ?>
        <h4>本月尚未评选服务明星</h4>
    </li>
    <?php endif; ?>
</ul>