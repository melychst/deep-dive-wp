<?php
    $bg_image = get_field('background_image');
    $bg_color = get_field('background_color');
?>
<section class="column-title" style="background-image: url(<?php echo $bg_image['url']; ?>); background-color: <?php echo $bg_color; ?>;">
    <div class="container">
        <div class="content-wrap">
            <div class="title"><?php echo get_field('title'); ?></div>
        </div>
    </div>
</section>