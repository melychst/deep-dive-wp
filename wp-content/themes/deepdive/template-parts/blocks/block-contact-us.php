<section class="contact-us">
    <div class="container">
        <div class="columns display-flex">
            <div class="column column-left">
                <div class="content-wrap">
                    <h1><?php echo get_field('title'); ?></h1>
                    <div class="image-wrap">
                        <?php
                            $image = get_field('image');
                            if( $image ):
                        ?>
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
            </div>
            <div class="column column-right">
                <div class="contact-form-wrap">
                    <?php
                        $contact_form = get_field('contact_form');
                        if( $contact_form != ''):
                            echo do_shortcode( $contact_form );
                        endif;
                    ?>
                </div>
                <div class="image-wrap mobile-img">
                    <?php
                        $image = get_field('image');
                        if( $image ):
                    ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>