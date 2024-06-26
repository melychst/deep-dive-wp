<section class="columns-duble revers">

    <?php
        $left_column = get_field('left_column');
        if( !empty($left_column) ):
            $bg_type = $left_column['background_type'];
    ?>
            <div class="column column-left" style="background-<?php echo $bg_type; ?>: <?php echo $bg_type == 'image' ? "url(". $left_column['background_image']['url'] .")" : "#". $left_column['
background_color'] ?>;">
                <div class="column-image-wrap">
                    <?php if( $left_column['image'] ): ?>
                        <img src="<?php echo $left_column['image']['url']; ?>" alt="">
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
            <div class="column column-right" style="background-color: <?php echo $right_column['background_color']; ?>">
                <div class="content-wrap">
                    <h3><?php echo $right_column['title']; ?></h3>
                    <div class="content"><?php echo $right_column['description']; ?>
                    </div>
                </div>
            </div>
    <?php
        endif;
    ?>

</section>