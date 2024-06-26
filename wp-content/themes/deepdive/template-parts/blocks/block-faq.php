<section class="accordeons">
    <div class="container">
        <div class="columns display-flex">
            <div class="column column-left">
                <h3><?php echo get_field('title'); ?></h3>
            </div>
            <div class="column column-right">
                <div class="accordeons-wrap">
                    <?php
                        $accordeons = get_field('accordeons');
                        if( !empty($accordeons) ):
                            foreach ($accordeons as $key => $item):
                    ?>
                                <div class="accordeon-item">
                                    <div class="title"><?php echo $item['question']; ?></div>
                                    <div class="content"><?php echo $item['answer']; ?></div>
                                </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>