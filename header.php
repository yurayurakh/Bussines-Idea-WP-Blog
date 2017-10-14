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
                    <a class="header__logo logo" href="/">
                        <img src="img/logo_white.png" alt="logo header">
                        <span class="logo__descr">- банк бизнес идей и планов</span>
                    </a>
                </div>
                <div class="col-lg-6 col-md-7 col-sm-8 float-right">
                    <button class="hamburger hidden-lg hidden-md hidden-sm">☰</button>
                    <button class="cross hidden-lg hidden-md hidden-sm" style="display: none;">˟</button>
                    <nav class="header__nav nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="">
                                    Главная
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="">
                                    Как добиться успеха в бизнесе
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="">
                                    Образец бизнес-плана
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="search-block">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="titels">
                        <?php if (is_front_page() && is_home()){ ?>
                            <h1 class="main-title">
                                <?php bloginfo('name') ?>
                            </h1>
                        <?php } else { ?>
                            <h2 class="main-title">
                                сайт свежих бизнес идей и планов
                            </h2>
                        <?php } ?>

                        <h2 class="sub-title">
                            Бизнес-планы и бизнес-идеи для открытия своего дела с нуля
                        </h2>
                    </div>
                    <form role="search" method="get" class="search-form" action="">
                        <input type="search" id="" class="search-field" placeholder="Введите ваше сообщение ..." value="" name="s" />
                        <button type="submit" class="search-submit"><span class="hidden-xs">Начать</span> поиск</button>
                    </form>
                    <div class="col-xs-6 right-text mobile-padding-del">
                        <a class="blog__item-link" href="/">Бизнес-идеи (220 статей)</a>
                    </div>
                    <div class="col-xs-6 mobile-padding-del">
                        <a class="blog__item-link" href="/">Бизнес-планы (70 статей)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
