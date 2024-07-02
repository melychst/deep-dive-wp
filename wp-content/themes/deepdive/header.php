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
        <div class="container top-row">
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
                    <div class="burger-btn">
                        <div class="open-berger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <rect y="20" width="32" height="2" fill="black"/>
                                <rect y="10" width="32" height="2" fill="black"/>
                            </svg>
                        </div>
                        <div class="close-burger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect width="31.917" height="1.99481" transform="matrix(-0.706495 -0.707718 -0.706495 0.707718 23.9585 22.5884)" fill="black"/>
                                <rect width="31.917" height="1.99481" transform="matrix(0.706495 -0.707718 0.706495 0.707718 0.0415039 22.5884)" fill="black"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="mobile-navigation">
            <div class="container">
                <div class="navigation-wrap">
                    <?php
                        wp_nav_menu(array(
                            "theme_location"  => "primary",
                            "menu"              => "primary",
                        ));
                    ?>
                </div>
                <?php
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
    </header>
    <main>   

    #Kbp3&u4;#%7
    deepdiveadmin