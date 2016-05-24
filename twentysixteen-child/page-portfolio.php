<?php
/**
 * Template Name: Portfolio Page Template 
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
		<div class="about-inner-main">
			<h1 class="page-title-custom">Some Work</h1>
			<?php echo do_shortcode("[huge_it_portfolio id='2']"); ?>
			
			<div class="current-project">
				<h2>Current Project</h2>
				<img src="<?php echo get_stylesheet_directory_uri();?>/images/PP.jpg?>" alt="main_image"/>
			</div>
		</div><!--end about inner main-->
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
