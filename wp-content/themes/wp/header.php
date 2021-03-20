<?php?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- roboto condenced -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- roboto font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <!-- Swiper -ын css -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="logo">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/bmw.jpg"> </a>
                    </div>
                </div>
                <div class=" col-md-8 col-sm-8">
                    <div class="menu">
                        <ul>
						<?php wp_nav_menu( array(  'theme_location' => 'menu-1','container' => false, 'items_wrap' => '%3$s' )); ?>                   
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
