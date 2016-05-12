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
		<div class="about-inner-main">
			<div class="about-page-col1">
				<h1 class="page-title-custom">About</h1>
					<img src ="<?php echo get_stylesheet_directory_uri();?>/images/me.jpg" alt="pic-of-me" /> 

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
				<h2>This is me</h2>
			
				<p>
					I love my music, and I love web development.  
					I find music and web design very similar in that they are both 
					creative and are about creating rhythm (or layout), 
					color and excitement (melody) and connecting with people on a 
					sub-concious level.
				</p>
				<p>
					Music and web development are hard work and incredibly 
					frustrating at times.  They both take you on a life long 
					journey of learning and there is always a new challenge and 
					area of knowledge to improve in.

				</p>

				<p>
					The rewards in both cases is presenting your creation to the 
					world and knowing you have done it well.  I know my job is done
					 well when the message is communicated and the intended audience 
					 is reached.  The customers are happy and have had a 
					 great experience through my creations.  
				</p>

				<p>
					Being a musician and a web developer often requires 
					collaboration and co-operation.  This is also exciting because 
					you get to create and reach people as a team and share the 
					experience with your bandmates or fellow collaborators, 
					whether they are clients or development teams.

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
