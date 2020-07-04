<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 6/10/2020
 * Time: 01:36
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="Pensiunea Casa Mica: cazare umila ">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Alexandru Mirea">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php //echo get_stylesheet_directory_uri() ?><!--/assets/css/animate.css">-->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/favicon.ico"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;0,800;1,300;1,400&display=swap"
          rel="stylesheet">
	<?php wp_head() ?>
</head>
<body>

<div class="header">
    <div>
        <div class="quick-menu">
            <a class="header-location" href="#home-map"><i class="fas fa-map-pin"></i>Locație |</a>
            <a class="header-location" href="#home-map"><i class="fas fa-clipboard-list"></i>Rezervare |</a>
            <a class="header-location" href="#home-map"><i class="fas fa-phone"></i>0733 334 001</a>
        </div>
        <div>
            <a class="brand" href="<?php get_home_url()?>">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo__casa-mica.jpg" class="brand-logo"/>
            </a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Acasa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php get_site_url()?>/cazare">Cazare</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php get_site_url()?>/evenimente">Evenimente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php get_site_url()?>/contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
