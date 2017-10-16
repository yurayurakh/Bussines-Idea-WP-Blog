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
                        VK.Widgets.Group("vk_groups", {mode: 3, width: "350"}, 20003922);
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

</body>
</html>
