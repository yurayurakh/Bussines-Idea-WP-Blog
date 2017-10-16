<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bussines_Idea
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-4 col-xs-10">
                    <?php if (is_front_page()){ ?>
                        <span class="header__logo logo">
                            <?php if(ot_get_option('logo_upload')) {?>
                                <img src="<?php echo ot_get_option('logo_upload') ?>" alt="logo">
                            <?php }else { ?>
                                <h2 class="blog-title">BUSIDEASTO</h2>
                            <?php } ?>
                            <?php if(ot_get_option('sub_logo_title')) {?>
                                <h2 class="logo__descr">- <?php echo ot_get_option('sub_logo_title') ?></h2>
                            <?php } else { ?>
                                <h2 class="logo__descr">- банк бизнес идей и планов</h2>
                            <?php } ?>
                        </span>
                    <?php } else { ?>
                        <a class="header__logo logo" href="<?php echo home_url()?>">
                            <?php if(ot_get_option('logo_upload')) {?>
                                <img src="<?php echo ot_get_option('logo_upload') ?>" alt="logo">
                            <?php }else { ?>
                                <h2 class="blog-title">BUSIDEASTO</h2>
                            <?php } ?>
                            <?php if(ot_get_option('sub_logo_title')) {?>
                                <h2 class="logo__descr">- <?php echo ot_get_option('sub_logo_title') ?></h2>
                            <?php } else { ?>
                                <h2 class="logo__descr">- банк бизнес идей и планов</h2>
                            <?php } ?>
                        </a>
                    <?php } ?>

                </div>
                <div class="col-lg-6 col-md-7 col-sm-8 float-right">

                    <button class="hamburger hidden-lg hidden-md hidden-sm">☰</button>
                    <button class="cross hidden-lg hidden-md hidden-sm" style="display: none;">˟</button>
                    <?php

                    $args = array(
                        'theme_location'  => 'primary',
                        'menu'            => '',
                        'container'       => 'nav',
                        'container_class' => 'header__nav nav',
                        'container_id'    => '',
                        'menu_class'      => 'nav__list',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                    );

                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
    </header>
    <section class="search-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="titels">
                        <?php if (is_front_page()){ ?>
                            <h1 class="main-title">
                                <?php bloginfo('name') ?>
                            </h1>
                        <?php } else { ?>
                            <h2 class="main-title">
                                <?php bloginfo('name') ?>
                            </h2>
                        <?php } ?>

                        <h2 class="sub-title">
                            <?php bloginfo('description') ?>
                        </h2>
                    </div>
                    <?php get_search_form(); ?>
                    <div class="col-xs-12 mobile-padding-del">
                        <div class="blog__category">
                            <?php $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC'
                            ));
                            if( $categories ){
                                foreach( $categories as $cat ){ ?>
                                    <a class="blog__item-link" href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name ?> (<?php echo $cat->category_count ?>)</a>
                            <?php  } } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
