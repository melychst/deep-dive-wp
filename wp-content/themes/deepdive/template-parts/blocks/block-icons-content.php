<section class="icons-content" style="background-color: <?php echo get_field('background_color'); ?>">
    <div class="container">
        <div class="content-wrap">
            <h3><?php echo get_field('title'); ?></h3>
            <div class="icons-wrap">
                <?php 
                    $icons = get_field('icons');
                    if( !empty($icons) ):

                        foreach ($icons as $key => $icon):
                ?>
                            <div class="icon-column">
                                <div class="icon">
                                    <?php if( $icon ): ?>
                                        <img src="<?php echo $icon['icon']['url']; ?>" alt="<?php echo $icon['icon']['alt']; ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="name"><?php echo $icon['name']; ?></div>
                            </div>
                <?php
                        endforeach;
                    endif;
                
                ?>
            </div>
            <span class="more"><?php echo get_field('content'); ?></span>
        </div>
    </div>
</section>