<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WPCanvas2
 */
global $wpc2;
?>

						</div><!-- .encapsulate -->

						<?php do_action( 'wpc_insert_code_below_content' ); ?>

					</div><!-- #content -->

					<footer id="colophon" class="site-footer" role="contentinfo">
						<?php get_sidebar('footer'); ?>
					</footer><!-- #colophon -->

				</div><!-- #box -->

				<footer class="site-info clear">
					
				</footer><!-- .site-info -->	

			</div><!-- #page -->

		</div><!-- .bottom-background -->

	</div><!-- .top-background -->

	<?php wp_footer(); ?>

</body>
</html>
