<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bussines_Idea
 */

get_header(); ?>

	<section id="primary" class="blog-post patter-bg">
		<main id="main" class="site-main container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="blog-title">
                        Свежие бизнес-идеи и бизнес-планы
                    </h2>
                </div>
            </div>
            <div class="row">
                <?php
                    if ( have_posts() ) :

                    if ( is_home() && ! is_front_page() ) : ?>
                        <header>
                            <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                        </header>

                        <?php
                    endif;

                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        /*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'template-parts/home-post', get_post_format() );

                    endwhile;

                else :

                    get_template_part( 'template-parts/home-post', 'none' );

                endif; ?>
            </div>
            <div class="row">
                <div class="col-xs-12 mobile-padding-del">
                    <div class="blog-category__list">
                        <?php $categories = get_categories(array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        ));
                        if( $categories ){
                            foreach( $categories as $cat ){ ?>
                                <a class="category-blog btn-transparent" href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name ?></a>
                            <?php  } } ?>
                    </div>
                </div>
            </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
//get_sidebar();
get_footer();
