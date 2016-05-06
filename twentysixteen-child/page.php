<?php
/**
 * The template for displaying pages
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
		<div id="hero-image"><img src="<?php echo get_stylesheet_directory_uri();?>/images/ipad-cropped.jpg" alt="ipad-image"/></div>
		<section id="pitch">
			<div class="the-pitch">
				<p id="pitch-text">Daniels web development will deliver higher ROI and build brand recognition</p>
			</div>


		</section>
		<section id="about">
			<div class="main-about-container">
			<p>
				<span class="firstWords">I can...</span> 
				create the website you need for your audience.  
				The service goes beyond design and development into analytics and performance management.  These are not just “buzz” words, they have meaning.  Meaning that can mean serious business.  Faster loading 
				and displaying web pages make a difference in todays 
				fast paced market.</p>
			<p>
				<span class="firstWords">Analyzing</span>
				and getting to know your audience and 
				creating a trusting relationship is important.  Therefore providing people 
				with a great user experience when visiting your site is important.  
				Streamlined UX design and easy to use interfaces are key to helping users find what they want and in a timely manner.  
				
				Close communication and client relationships are important to me and I like to think I am working with businesses  
				to achieve their goals.</p>
				<p id="final-pitch">Custom builds, tailor designed websites and extra mile 
					service, theres only one answer
					ME
				</p>
			</div>

		</section>
		<section class="Imac">
			<div class="Imac-and-yellow">
				<p>
					"Great looking websites designed for you and your customers"
				</p>

			</div>

		</section>
		<section class="home-contact">


		</section>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
