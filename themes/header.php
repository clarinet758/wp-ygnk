<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <?php if (is_singular()) wp_enqueue_script("commentreply"); wp_head(); ?>
<!--
    <link rel="shortcut icon" href="img/favicon.ico">
    <php wp_head(); ?>
-->
</head>
    <body <?php body_class(); ?>>
    <div id="container">

    <!-- header -->
        <div id="header" class="clearfix">
            <div class="alignleft">
                <h1 id="logo"><a href="<?php echo home_url('/'); ?>"<span><?php bloginfo('name'); ?></span></a></h1>
                <p id="desc"><?php bloginfo('description'); ?></p>
            </div>
            
            <!-- search -->
            <div class="alignright"> <?php get_search_form(); ?> </div>
            <!-- search -->

    <!-- navi -->
    <?php wp_nav_menu( array('theme_location' => 'header-navi')); ?>
<!--
            <div>
                <ul class="menu">
                    <li class="intro"><a href="http://ygnk.mydns.jp/introduction/">INTRODUCTION</a></li>
                    <li class="methods"><a href="http://ygnk.mydns.jp/methods/">METHODS</a></li>
                    <li class="return"><a href="http://ygnk.mydns.jp/return-objects/">RETURN OBJECTS</a></li>
                    <li class="example"><a href="#">EXAMPLE</a></li>
                    <li class="about"><a href="#">ABOUT</a></li>
                </ul>
            </div>
-->
    <!-- navi -->

        </div>
<!-- bodyなどはindex.phpにつづく -->
