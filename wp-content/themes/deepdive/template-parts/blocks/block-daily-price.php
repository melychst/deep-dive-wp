<section class="daily-price">
    <div class="container">
        <div class="content-wrap">
            <h3><?php echo get_field('title');?></h3>
        </div>
        <div class="price-wrap">
            <?php
                $prices = get_field('price');
                if( !empty($prices) ):
                    foreach( $prices as $key => $price ):
            ?>
                        <div class="price-content">
                            <div class="price-img">
                                <?php if( $price['icon'] ): ?>
                                    <img src="<?php echo $price['icon']['url'] ?>" alt="<?php echo $price['icon']['alt'] ?>">
                                <?php endif; ?>
                            </div>
                            <span class="day"><?php echo $price['name']; ?></span>
                        </div>
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </div>
</section>