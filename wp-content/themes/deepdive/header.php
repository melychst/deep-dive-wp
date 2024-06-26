<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header>
        <div class="container">
            <div class="row space-between align-items-center">
                <div class="column column-left">
                    <div class="logo-wrap">
                        <a href="/">
                            <?php 
                                $header_logo = get_field('header_logo', 'option');
                                if( $header_logo ):
                            ?>
                                <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo bloginfo();?>">
                            <?php
                                endif;
                            ?>
                        </a>
                    </div>
                </div>
                <div class="column column-center">
                    <div class="navigation-wrap">
                        <?php
                            wp_nav_menu(array(
                                "theme_location"  => "primary",
                                "menu"              => "primary",
                            ));
                        ?>
                    </div>
                </div>
                <div class="column column-right">
                    <?php
                        $btn_title = get_field('header_button_title', 'option');
                        if( $btn_title != '' ):
                    ?>
                            <div class="button-wrap">
                                <a class="btn btn-black" href="<?php echo get_field('header_button_link', 'option')?>">
                                    <?php echo $btn_title; ?>
                                </a>
                            </div>
                    <?php
                        endif;
                    ?>
                </div>
            </div>            
        </div>
    </header>
    <main>   