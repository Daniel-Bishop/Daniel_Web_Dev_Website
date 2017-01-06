<?php
/**
 * Template Name: About Page Template 
 * The about page template for displaying the about page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!--New-->
					<div class="container">
						<div class="row">
							<div class="col-sm-12 about-top-image">

								<h1 class="page-title-custom">About</h1>

							</div>
						</div>


					</div>
				<!--end new-->
		<div class="about-inner-main">
			


			<div class="about-page-col1">

				
				
					

				<p>
					<img class="contact-icon" src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/wassap-logo-button.svg" alt="phone-icon"/>
					0409 092 450
				</p>
				<p>
					<img class="contact-icon" src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/email.svg" alt="email icon"/>
					danielgibson28@bigpond.com
				</p>
			</div>
			<div class= "about-page-col2">
				
			
				<p>
					I design and develop professional websites for professional people and businesses.  
					Strong branding and online presence are a must these days and a website helps businesses achieve
					these goals and reach wider audiences than most other media.
				</p>
				
				<p>
					So come with me and lets create a song (or web experience) together.

				</p>
			</div><!--end column2-->
		</div><!--end about inner main-->
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
