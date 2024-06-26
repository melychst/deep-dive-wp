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
                            <img src="images/Logo-header.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="column column-center">
                    <div class="navigation-wrap">
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">How we work</a></li>
                            <li><a href="#">hours and locations</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">careers</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column column-right">
                    <div class="button-wrap">
                        <a class="btn btn-black" href="#">Contact us</a>
                    </div>
                </div>
            </div>            
        </div>
    </header>
    <main>   