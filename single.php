<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bussines_Idea
 */

get_header(); ?>

    <section id="primary" class="post patter-bg">
		<main id="main" class="site-main container">
            <div class="row">
                <?php
                    while ( have_posts() ) : the_post();

                    get_template_part( 'template/post', get_post_type() );

                    //the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>
            </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bussines_Idea
 */

?>
<section class="blog-description">
    <div class="container">
        <div class="row">
            <div class="similar-post clearfix">
                <div class="col-xs-12">
                    <h2 class="blog-title">
                        Похожие бизнес-идеи и планы
                    </h2>
                </div>
                <div class="col-xs-12">
                    <div class="owl-carousel" id="owl-two">
                        <?php while ( have_posts() ) : the_post();

                        /*
                        * Include the Post-Format-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                        */
                        get_template_part( 'template/similar-post', get_post_format() );

                        endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7">
                <div class="blog-description__text">
                    <p>
                        Обстоятельства, которые приводят к мысли начать собственное дело и быть независимым от работодателя
                        у каждого человека свои.
                    </p>
                    <p>
                        Но если Вы все же решились заняться собственным бизнесом, стоит вопрос с чего начинать.
                        И первый шаг, чтобы начать собственное дело, так это определится с бизнес - идеей.
                    </p>
                    <br/>
                    <p>
                        Главное при этом, чтобы нравилось то, чем Вы собираетесь заняться, и самым простым решением
                        будет превращение хобби в бизнес.
                    </p>
                    <p>
                        Например, если умеете хорошо готовить кондитерские изделия или пирожки, то можно делать
                        продукцию на заказ, связавшись со специализированными агентствами по организации торжеств или
                        реализуя свою продукцию непосредственно на рынке. Или если хорошо разбираетесь в автомобилях,
                        то можно организовать бизнес по ремонту автомобилей.
                    </p>
                    <br/>
                    <p>
                        Но если Вы хотите организовать успешный бизнес в более широком плане, то необходимо найти бизнес-идею,
                        которая отличается от других. При этом не обязательно, чтобы это было совершенно новое, необычное.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5">
                <div class="block-vk">
                    <h2 class="blog-title">
                        Мы В Контакте:
                    </h2>
                </div>
                <div class="vk-subscribe">
                    <script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

                    <!-- VK Widget -->
                    <div id="vk_groups"></div>
                    <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 3, width: "350"}, busideasto);
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="row mobile-revert">
            <div class="col-md-9 mobile-bottom">
                <div class="copyright">
                    <?php if(ot_get_option('footer_copyright')) {?>
                        <span><?php echo ot_get_option('footer_copyright') ?></span> BUSIDEASTO: САЙТ БИЗНЕС-ИДЕЙ И БИЗНЕС-ПЛАНОВ
                    <?php }else { ?>
                        <span>Copyright © 2012-2017.</span> BUSIDEASTO: <?php bloginfo('name') ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-3 mobile-top">

                <div class="social">
                    <a href="" class="social__item">
                        <img src="img/icon/vk-icon.png" alt="vk-icon">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/icon/fb-icon.png" alt="fb-icon">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/icon/tw-icon.png" alt="tw-icon">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/icon/vk-icon.png" alt="ok-icon">
                    </a>
                    <a href="" class="social__item">
                        <img src="img/icon/g+-icon.png" alt="g+-icon">
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    $(document).ready(function () {
        $('#owl-one').owlCarousel({
            loop: true,
            items: 1,
            nav: true,
            dots: true
        });
        $('#owl-two').owlCarousel({
            loop: true,
            margin: 30,
            stagePadding: 25,
            items: 4,
            nav: true,

            responsive: {

                0:{
                    items: 2
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4
                },
                1920: {
                    items: 4
                }
            }
        });
    })
</script>
</body>
</html>

