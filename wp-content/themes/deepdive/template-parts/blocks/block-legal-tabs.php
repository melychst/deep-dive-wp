<section class="legal-tabs page-content">
    <div class="container">
        <?php
            $tabs = get_field('tabs');
            if( !empty($tabs) ):
        ?>
                <div class="columns display-flex">
                    <div class="column column-left">
                        <div class="tabs-navigation">
                            <?php foreach ($tabs as $key => $item): ?>
                                <div class="tab-name <?php echo $key == 0 ? "active" : ""; ?>" data-tab-name-id="<?php echo $key; ?>">
                                    <?php echo $item['tab_title']; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="column column-right">
                        <div class="tabs-content">
                            <?php foreach ($tabs as $key => $item): ?>
                                <div class="tab-content <?php echo $key == 0 ? "active" : ""; ?>" data-tab-contant-id="<?php echo $key; ?>">
                                    <div class="content"><?php echo $item['tab_content']; ?></div>
                                </div>                            
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        <?php
            endif;
        ?>
    </div>
</section>