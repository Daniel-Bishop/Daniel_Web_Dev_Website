<?php
/**
 * Template Name: Contact Page Template 
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
			<h1 class="page-title-custom">Lets Chat</h1>
			<?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]');?>
	
		</div>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->


<?php get_footer(); ?>
