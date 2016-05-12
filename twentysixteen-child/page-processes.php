<?php
/**
 * Template Name: Process Page Template 
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
		
		<div class="process-content-container">
			<h1 class="page-title-custom">My Process</h1>
			<div class="process-parts" id="process-one">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/customer-service.svg" alt="customer-service icon"/>
				<h2>Lets Talk</h2>
				<p>We’ll meet and chat over coffee, I’ll try to understand you, your brand and your customers.  
					Ill gather information and any resources required to complete your project.  
					Ill meet your team and learn how to work with them in a way that is mutually beneficial.  
				</p>
			</div>

			<div class="process-parts" id="process-two">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/responsive-web.svg" alt="responsive web design icon"/>
				<h2>Designing Together</h2>
				<p>
					Understanding your brand will help in the design or redesign of your website.  
					Look and feel and what your customers expect is of high priority.  
					Creating a fantastic User Experience is what we will do together.  
				</p>
			</div>

			<div class="process-parts" id="process-three">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/custom-css.svg" alt="web code icon"/>
				<h2>Development</h2>
				<p>This is where I get stuck in and do what I do best.  Deciding on the right platform, whether you want a CMS to manage your own content or a fully customized system or web app.
				  I will find a solution for your requirements.
				</p>
			</div>

			<div class="process-parts" id="process-four">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/seo-meter.svg" alt="speed gauge icon"/>
				<h2>Optimization And Performance</h2>
				<p>
					The work doesn’t stop after the initial development.  I have to get you noticed.  
					The way to do that is with optimization and making your website get seen.  
					Website speed contributes greatly to the user experience and will directly correlate to conversion rates.  
					By optimizing the website content and increasing page load speed along with great responsive design we give your site 
					a big SEO boost aswell increasing your search result visibility and rank.  
				</p>
			</div>

			<div class="process-parts" id="process-five">
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/stats.svg" alt="analytics icon"/>
				<h2>Analytics</h2>
				<p>Working with you over time and analyzing the data collected with analytics will allow a more tailored experience for not only current customers but also to find new ways of attracting new markets.  Analytics will allow us to see exactly what we are doing right but also the things we are doing wrong and can improve on.  
					With a constant improvement mindset we can fine tune the websites market appeal and conversion rates.
				</p>
			</div>



		</div>
		
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
