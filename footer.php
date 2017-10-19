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
                    <?php if(ot_get_option('footer_textarea')) {?>
                        <?php echo ot_get_option('footer_textarea') ?>
                    <?php } ?>
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
                        VK.Widgets.Group("vk_groups", {mode: 3, width: "350"}, <?php if(ot_get_option('footer_vk-group')) { echo ot_get_option('footer_vk-group'); }?> );
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
                    <?php if(ot_get_option('footer_social_links')) {?>
                        <?php foreach (ot_get_option('footer_social_links') as $social){ ?>
                            <a href="<?php echo $social['social_link_url']?>" class="social__item">
                                <img src="<?php echo $social['social_icon_name']?>" alt="social">
                            </a>
                    <?php } } ?>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
