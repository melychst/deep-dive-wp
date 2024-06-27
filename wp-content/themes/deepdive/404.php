<?php get_header(); ?>
    <div id="primary" class="content-area">

        <section class="page-404">
            <div class="container">
                <div class="content-wrap">
                    <?php
                        $animation = get_field('animation_404', 'option');
                        if( $animation != '' ):
                    ?>
                            <dotlottie-player src="<?php echo $animation; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                    <?php
                        endif;
                    ?>
                    <h3><?php echo get_field('title_404', 'option'); ?></h3>
                </div>
            </div>
        </section>

    </div><!-- .content-area -->
<?php get_footer(); ?>
