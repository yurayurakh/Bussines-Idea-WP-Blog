<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

?>
<div class="col-md-3 col-sm-4 col-xs-6">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="post__item">
            <div class="post__item_img">
                <?php if (get_the_post_thumbnail( )) { ?>
                    <?php echo get_the_post_thumbnail( ); ?>
                <?php }else { ?>
                    <img src="<?php echo get_template_directory_uri() ?>/img/post1__img.jpg" alt="post">
                <?php } ?>
            </div>
            <?php
                the_title( '<h2 class="post__item_text">', '</h2>' );
            ?>
            <a class="btn-green" href="<?php echo esc_url( get_permalink() ); ?>">
                Подробнее
            </a>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>