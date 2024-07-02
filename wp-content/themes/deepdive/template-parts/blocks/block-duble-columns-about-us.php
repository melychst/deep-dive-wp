<section class="columns-duble revers about-us">

    <?php
        $left_column = get_field('left_column');
        if( !empty($left_column) ):
            $bg_type = $left_column['background_type'];
            $borders = $left_column['borders'];
            
            $border_top = $borders['border_top'];
            $border_bottom = $borders['border_bottom'];
            $border_right = $borders['border_right'];
        
            $border_css = "border-width: ". $border_top ."px ". $border_right ."px ". $border_bottom ."px 0px";
    ?>
            <div class="column column-left" style="background-<?php echo $bg_type; ?>: <?php echo $bg_type == 'image' ? "url(". $left_column['background_image']['url'] .")" : $left_column['background_color'] ?>; <?php echo $border_css;?>;">
                <div class="column-image-wrap">
                    <?php if( ($left_column['media_type'] == 'image') && $left_column['image'] ): ?>
                        <img src="<?php echo $left_column['image']['url']; ?>" alt="<?php echo $left_column['image']['alt']; ?>">
                    <?php endif; ?>
                    <?php if( ($left_column['media_type'] == 'animation') && ($left_column['animation_url'] != '') ): ?>
                        <div id="animation-about-us">
                            <dotlottie-player src="<?php echo $left_column['animation_url']; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
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
            $borders = $right_column['borders'];
        
            $border_top = $borders['border_top'];
            $border_bottom = $borders['border_bottom'];
            $border_left = $borders['border_left'];
        
            $border_css = "border-width: ". $border_top ."px 0px ". $border_bottom ."px ". $border_left ."px";
    ?>
            <div class="column column-right" style="background-color: <?php echo $right_column['background_color']; ?>; <?php echo $border_css;?>;">
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