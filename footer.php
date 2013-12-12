<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

				</div><!-- #main -->

				<footer id="colophon" class="site-footer" role="contentinfo">

						<?php get_sidebar( 'footer' ); ?>

						<div class="site-info">
							<?php
								$start_year = 2013;
								$current_year = date('Y');
								if ($start_year == $current_year)
								{
									$text = $start_year;
								}
								else
								{
									$text = $start_year . '-' . $current_year;
								}
							?>
							Copyright <?php echo $text; ?> by Christian Mehlmauer
						</div><!-- .site-info -->
				</footer><!-- #colophon -->
		</div><!-- #page -->
</body>
</html>
