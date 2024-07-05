<section class="page-hero legal-animation-hero">
    <div class="container">
        <div class="content-wrap">
            <h1><?php echo get_field('title'); ?></h1>
        </div>
        <div class="animation-hero">
            <?php
                $animation = get_field('animation');
                if( $animation != '' ):
            ?>
                    <dotlottie-player src="<?php echo $animation; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
            <?php
                endif;
            ?>
        </div>          
    </div>
          
</section>