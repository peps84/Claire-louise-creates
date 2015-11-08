<?php
/**
 * Template Name: CLC Full Width
 *
 * @package WPCanvas2
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
			<div id="sections"><a href="<?php echo get_page_link( get_page_by_title( Planning )->ID ); ?>">Planning</a</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php get_footer(); ?>
