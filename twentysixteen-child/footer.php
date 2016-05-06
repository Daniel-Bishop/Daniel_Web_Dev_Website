<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<h2>I LOVE MEETING NEW PEOPLE</h2>
			<h3>Lets get together, have a chat and create something great
			</h3>
			<div class= "social-links">
				<div id="footer-col-1" class="footer-col">
					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/facebook-logo-button.svg" alt="facebook logo" />
						Facebook
					</p>

					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/google-plus-logo-button.svg" alt="facebook logo" />
						Google Plus
					</p>
					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/twitter-logo.svg" alt="facebook logo" />Twitter
					</p>
				</div>
				<div id="footer-col-2" class="footer-col">
					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/linked-in-logo-key.svg" alt="facebook logo" />
						Linked In
					</p>
					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/pinterest-social-logo.svg" alt="facebook logo" />
						Pinterest
					</p>
					<p>
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/instagram-logo.svg" alt="facebook logo" />
						Instagram
					</p>

				</div>
			</div>
			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
