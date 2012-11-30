<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

    <div class="row">
      <div class="span9">
        <header class="row">
          <div class="span7 offset2">
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </div>
        </header>
        <div class="row entry-content">
          <div class="span2">
            <?php get_template_part('templates/entry-meta'); ?>
          </div>
          <div class="span7">
            <?php the_content(); ?>
          </div>
        </div> <!-- entry-content -->
        <footer class="row">
          <ul class="pager">
            <li class="previous"><?php previous_post_link(); ?></li>
            <li class="next"><?php next_post_link(); ?></li>
          </ul>
        </footer>
      </div> <!-- left-column -->

      <div class="span3">
      </div> <!-- right-column -->
    </div>
     
<!--       <ul class="breadcrumb">
        <?php bcn_display(); ?>
      </ul> -->

    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
