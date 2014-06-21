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
							<?php wp_footer(); ?>
						</div><!-- .site-info -->
				</footer><!-- #colophon -->
		</div><!-- #page -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://www.firefart.at/";
    _paq.push(['setTrackerUrl', u+'pi.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'pi.js'; s.parentNode.insertBefore(g,s);
  })();

</script>
<noscript><p><img src="//www.firefart.at/pi.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
