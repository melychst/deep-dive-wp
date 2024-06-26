<section class="page-hero">
    <div class="container">
        <div class="content-wrap">
            <h1><?php echo get_field('title'); ?></h1>
            <?php
                $btn_title = get_field('button_title');
                if( $btn_title != '' ):
            ?>
                    <div class="button-wrap">
                        <a class="btn btn-primary" href="<?php echo get_field('button_link'); ?>">
                            <?php echo $btn_title; ?>
                        </a>
                    </div>            
            <?php
                endif;
            ?>
        </div>
    </div>
</section>