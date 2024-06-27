<section class="columns-duble">
    <?php
        $left_column = get_field('left_column');
        if( !empty($left_column) ):
        $borders = $left_column['borders'];
        
        $border_top = $borders['border_top'];
        $border_bottom = $borders['border_bottom'];
        $border_right = $borders['border_right'];
       
        $border_css = "border-width: ". $border_top ."px ". $border_right ."px ". $border_bottom ."px 0px";
        
    ?>
            <div class="column column-left column-content" style="background-color:<?php echo $left_column['background_color']; ?>; <?php echo $border_css; ?>;">
                <div class="content-wrap">
                    <h3><?php echo $left_column['title']; ?></h3>
                    <div class="content"><?php echo $left_column['description']; ?></div>
                </div>
            </div>
    <?php 
        endif; 
    ?>

    <?php
        $right_column = get_field('right_column');
        if( !empty($right_column) ):
            $bg_type = $right_column['background_type'];
            $media_type = $right_column['media_type'];
            $media_image = $right_column['image'];
            $media_animation = $right_column['animation_url'];

            $borders = $right_column['borders'];
            
            $border_top = $borders['border_top'];
            $border_bottom = $borders['border_bottom'];
            $border_left = $borders['border_left'];
        
            $border_css = "border-width: ". $border_top ."px 0px ". $border_bottom ."px ". $border_left ."px";
    ?>
            <div class="column column-right column-image" style="background-<?php echo $bg_type; ?>: <?php echo $bg_type == 'image' ? "url(". $right_column['background_image']['url'] .")" : $right_column['background_color'] ?>; <?php echo $border_css; ?>;">
                <div class="column-image-wrap">
                    
                    <?php if( ($media_type == 'animation') && !empty($media_animation) ): ?>
                        <div id="animation-how-we-work">
                            <dotlottie-player src="<?php echo $media_animation; ?>" background="transparent" speed="1"  loop autoplay></dotlottie-player>
                        </div>
                    <?php endif; ?>

                    <?php if( ($media_type == 'image') && $right_column['image'] ): ?>
                        <img src="<?php echo $right_column['image']['url']; ?>" alt="<?php echo $right_column['image']['alt']; ?>">
                    <?php endif; ?>

                </div>
            </div>
    <?php
        endif;
    ?>
</section>