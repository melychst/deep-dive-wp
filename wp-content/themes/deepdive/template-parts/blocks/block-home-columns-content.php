<section class="content-columns">
    <div class="container">
        <div class="content-wrap">
            <h3><?php echo get_field('title'); ?></h3>
            <div class="columns columns-wrap">
                <?php
                    $columns = get_field('content');
                    if( !empty($columns) ):
                        foreach ($columns as $key => $column_content):
                            if( $column_content['content_type'] == 'text' ):
                ?>
                                <div class="column content">
                                    <div class="title"><?php echo $column_content['title']; ?></div>
                                    <div class="content"><?php echo $column_content['description']; ?></div>
                                </div>
                    <?php  else:  ?>
                                    <div class="column image">
                                        <?php if( $column_content['image'] ): ?>
                                            <div class="image-wrap">
                                                <img src="<?php echo $column_content['image']['url']; ?>" alt="<?php echo $column_content['image']['alt']; ?>">
                                            </div>
                                        <?php endif; ?>
                                    </div>
                <?php
                            endif;
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>