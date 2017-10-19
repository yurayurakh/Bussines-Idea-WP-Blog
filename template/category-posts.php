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
                    <img src="<?php echo get_template_directory_uri() ?>/img/post1__img.jpg" alt="post">
                <?php } ?>
            </div>


            <div class="post-detail">
                <?php
                    the_title( '<div class="category-title">', '</h2>' );
                ?>
                <div class="post-content">
                    <?php echo  $content = get_the_content();?>
                    <div class="post-more">
                        <a href="<?php echo esc_url( get_permalink() ); ?>">Читать далее</a>
                    </div>
                </div>
            </div>
        </div>
    </article><!-- #post-<?php the_ID(); ?> -->
</div>
