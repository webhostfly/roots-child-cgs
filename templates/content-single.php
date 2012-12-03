<?php while (have_posts()) : the_post(); ?>
<?php
  $subheading = get_post_meta( $post->ID, 'subheading', true );
?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header class="row">
      <div class="span7 offset2">
        <h1 class="entry-title">
          <?php the_title(); ?>
          <?php if (!empty($subheading)): ?>
          <h1 class="pull-right">
            <small>——<?php echo $subheading; ?></small>
          </h1>
          <?php endif; ?>
        </h1>
      </div>
    </header>
    <div class="row">
      <div class="span9">
        <div class="row entry-content">
          <div class="span2">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
          <div class="span7" id="content">
            <?php the_content(); ?>
          </div>
        </div> <!-- entry-content -->
        <footer class="row">
          <ul class="pager span9">
            <li class="previous"><?php previous_post_link(); ?></li>
            <li class="next"><?php next_post_link(); ?></li>
          </ul>
        </footer>
      </div> <!-- left-column -->

      <div class="span3">
        <?php $cur_categories = get_the_category(); ?>
        
        <div class="sidebar well">
          <ul class="nav nav-list">
            <?php foreach ($cur_categories as $cat): ?>
            <li class="nav-header"><?php echo apply_filters('the_title', $cat->name); ?></li>
            <?php
              $args = array(
                'numberposts'     => 7,
                'category'        => $cat->cat_ID
              );
              $posts = get_posts( $args );
            ?>
            <?php foreach ($posts as $post) : setup_postdata($post); ?>
            <li>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <li class="divider"></li>

            <?php endforeach; ?>
          </ul>
        </div> <!-- sidebar -->
      </div> <!-- right-column -->
    </div>
  </article>     
    <?php comments_template('/templates/comments.php'); ?>

<?php endwhile; ?>
