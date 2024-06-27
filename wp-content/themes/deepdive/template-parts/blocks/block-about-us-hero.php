<section class="about-us-columns columns-duble">
    <?php
        $left_column = get_field('left_column');
        if( !empty($left_column) ):
    ?>
            <div class="column column-left" style="<?php echo "background-color: ". $left_column['background_color']; ?>;">
                <div class="content-wrap">
                    <h1><?php echo $left_column['title']; ?></h1>
                    <div class="content"><?php echo $left_column['content']; ?></div>
                    <?php if( $left_column['button_title'] != '' ): ?>
                        <div class="button-wrap">
                            <a class="btn btn-primary" href="<?php echo $left_column['button_link']; ?>">
                                <?php echo $left_column['button_title']; ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
    <?php
        endif;
    ?>

    <?php
        $right_column = get_field('right_column');
        if( !empty($right_column) ):
    ?>
        <div class="column column-right" style="<?php echo "background-color: ". $right_column['background_color']; ?>;">
            <?php if( ($right_column['media_type'] == 'image') && $right_column['image'] ): ?>
                <div class="column-image-wrap">
                    <img src="<?php echo $right_column['image']['url']; ?>" alt="<?php echo $right_column['image']['alt']; ?>">
                </div>
            <?php endif; ?>
            <?php if( ($right_column['media_type'] == 'animation') && ($right_column['animation_url'] != '') ): ?>
                <div id="animation-careeras">
                    <dotlottie-player src="<?php echo $right_column['animation_url']; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                </div>
            <?php endif; ?>
        </div>
    <?php
        endif;
    ?>
</section>