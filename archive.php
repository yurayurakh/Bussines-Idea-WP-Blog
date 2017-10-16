<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

get_header(); ?>

    <section id="primary" class="blog-post patter-bg">
        <main id="main" class="site-main container">
                <?php
                if ( have_posts() ) : ?>
                <div class="row">
                    <div class="col-xs-12">
                        <?php  the_archive_title( '<h2 class="blog-title">', '</h2>' ); ?>
                    </div>
                </div>
                <div class="row">
                        <?php
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/category-posts', get_post_format() );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif; ?>
                </div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
