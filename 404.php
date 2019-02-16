<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Anew
 */

    get_header();
?>

    <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
                <div class="grid-container">
                    <h1 class="page-title"><?php _e( 'Not Found', 'twentythirteen' ); ?></h1>
                </div>
			</header>

			<section class="page-wrapper grid-container">
				<div class="page-content text-center">
					<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location.', 'twentythirteen' ); ?></p>
				</div><!-- .page-content -->
            </section><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>