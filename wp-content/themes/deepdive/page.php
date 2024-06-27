<?php get_header(); ?>
<div id="primary" class="content-area">

    <?php if( have_posts() ):
      while( have_posts() ):
        the_post();
        get_template_part( 'template-parts/pages/content', 'custom');
      endwhile; ?>
    <?php endif; ?>

    </div><!-- .content-area -->
<?php get_footer(); ?>