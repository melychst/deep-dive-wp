<section class="home-hero columns-duble">
    <div class="column column-left">
        <div class="content-wrap">
            <h1><?php echo get_field('title'); ?></h1>
            <div class="content"><?php echo get_field('description'); ?></div>
            <?php 
                $btn_title = get_field('buttom_title');
                if( $btn_title != '' ):
            ?>
                    <div class="button-wrap">
                        <a class="btn btn-primary" href="<?php echo get_field('button_link'); ?>"><?php echo $btn_title; ?></a>
                    </div>
            <?php
                endif;
            ?>
        </div>
    </div>
    <?php
        $media_type = get_field('media_container');
        $media_image = get_field('image');
        $media_animation = get_field('animation_url');
    ?>
    <div class="column column-right">
        <div class="column-image-wrap">
            <?php
                if( ($media_type == 'animation') && !empty($media_animation) ): 
            ?>
                <div id="animation-careeras">
                    <dotlottie-player src="<?php echo $media_animation; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                </div>
            <?php
                endif;
            ?>
        </div>
    </div>
    <?php
        $additional_image = get_field('aditional_image');
        if( !empty($additional_image) ):
    ?>
            <div class="image-bg-wrap">
                <img src="<?php echo $additional_image['url']; ?>" alt="<?php echo $additional_image['alt']; ?>">
            </div>
    <?php
        endif;
    ?>
</section>