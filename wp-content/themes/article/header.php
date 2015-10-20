<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
  $header_menu_options = array('theme_location'  => '','menu' => 'Header Menu', 'echo' => true,
                            'fallback_cb'     => 'wp_page_menu','items_wrap'      => '%3$s'); 
?>

<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
            <title>TABI LABO</title>
            <link rel="shortcut icon" href="http://tabilabo.s3.amazonaws.com/wp-content/uploads/2014/07/favicon.ico">
            <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
            <link href="<?php bloginfo('template_url'); ?>/css/media/media-adaptive.css" type="text/css" rel="stylesheet" />
            <link href="<?php bloginfo('template_url'); ?>/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
            <link href="<?php bloginfo('template_url'); ?>/swiper/swiper.min.css" rel="stylesheet">
    </head>
    <body>
        <section id="wrapper">
            <header id="header">
                <div id = "logo">
                    <a href = "<?php bloginfo('home'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/tabilabo-logo.png" />
                    </a>
                </div>
                <div id = "header-menu">
                    <nav id="primary_nav_wrap">
                        <ul>
                          <li><a href="#">About TabiLabo</a>
                            <ul>
                                <?php wp_nav_menu($header_menu_options); ?>
                            </ul>
                          </li>
                        </ul>
                        <div class="search-toggle" id="btn_search">
                            <span class="glyphicon glyphicon-search glyphicon-white"></span>
                            <a href="#search-container" class="screen-reader-text">検索</a>
                        </div>
                        <div id="search_container" class="search-box-wrapper hide">
                            <div class="search-box">
                                <?php get_search_form();?>
                            <!--     <form role="search" method = "post" class="search-form" action="{{ path('frontend_native_search_action') }} ">
                                    <label>
                                        <span class="screen-reader-text">検索:</span>
                                        <input type="search" class="search-field" placeholder="検索 …" value="" name="search" title="検索:">
                                    </label>
                                    <input type="submit" class="search-submit" value="検索">
                                </form>         
                            </div> -->
                        </div>
                    </nav>
                </div>
            </header>
            <section id = "content-wrapper">
                <?php get_sidebar(); ?>
                <main class="main-col">
                 
   
