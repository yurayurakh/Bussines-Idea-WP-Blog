<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

?>
<div class="col-md-6 col-xs-12">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="alt-post clearfix">
            <div class="post-thumb">
                <?php if (get_the_post_thumbnail( )) { ?>
                    <?php echo get_the_post_thumbnail( ); ?>
                <?php }else { ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/img/category-post1.jpg" alt="post">
                <?php } ?>
            </div>


            <div class="post-detail">
                <?php
                    the_title( '<h2 class="category-title">', '</h2>' );
                ?>
                <div class="post-content">
                    Сегодня мы рассмотрим идею для
                    своего бизнеса по мобильной
                    продаже кофе. Как открыть бизнес
                    кофейни на колесах, какие документы
                    нужно получить для старта бизнеса
                    по передвижной продаже кофе....
                    <div class="post-more">
                        <a href="<?php echo esc_url( get_permalink() ); ?>">Читать далее</a>
                    </div>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>
