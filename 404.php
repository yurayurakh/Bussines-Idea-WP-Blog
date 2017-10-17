<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bussines_Idea
 */

get_header(); ?>

	<section id="primary" class="content-area patter-bg">
		<main id="main" class="site-main container">

			<div class="error-404 not-found">
				<header class="page-header">
					<h1 class="blog-title"><?php esc_html_e( 'К сожалению, ничего не найдено.', 'bussines-idea' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<?php

						the_widget( 'WP_Widget_Recent_Posts' );
					?>


				</div><!-- .page-content -->
			</div><!-- .error-404 -->

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
