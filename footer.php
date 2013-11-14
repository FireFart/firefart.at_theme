<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
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
