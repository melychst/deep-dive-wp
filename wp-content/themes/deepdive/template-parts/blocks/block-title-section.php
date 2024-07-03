<?php
    $bg_image = get_field('background_image');
    $bg_image_mobile = get_field('background_image_mobile');
    $bg_color = get_field('background_color');
?>
<section class="column-title" style="background-color: <?php echo $bg_color; ?>;">
    <div class="container">
        <div class="content-wrap">
            <div class="title"><?php echo get_field('title'); ?></div>
        </div>
    </div>
    <?php if( $bg_image ): ?>
        <div class="image-bg desktop-bg">
            <img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>">
        </div>
    <?php endif; ?>
    <?php if( $bg_image_mobile ): ?>
        <div class="image-bg mobile-bg">
            <img src="<?php echo $bg_image_mobile['url']; ?>" alt="<?php echo $bg_image_mobile['alt']; ?>">
        </div>
    <?php endif; ?>
</section>