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

		<div id="hero-image">
			<!--<img src="<?php echo get_stylesheet_directory_uri();?>/images/office-581131.jpg" alt="office picture"/>-->
			<p>I build beautiful websites for Hobart businessesssssssss using the latest web development and design technologies</p>
		</div>

		<div id="services" class="container">



			<div class="row">

				<div class="col-sm-4">

					<h2 class="home-headers">Responsive Web Design</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/smartphone-1132677.svg" alt="smartphone-icon"/>

					<p>With a multitude of devices available these days to view the internet, it is important that websites look as consistent across as many of these devices and platforms as possible.  Responsive web design ensures that this is the case.  Allowing the elements to move and scale as the screen size changes ensures a consistent look and feel while still maintaining usability and user experience.</p>

				</div>

				<div class="col-sm-4">

					<h2 class="home-headers">Performance Tested</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/speedo-1081563.svg" alt="speedometer icon"/>

					<p>Part of usability and user experience guidelines is the performance of your website.  A faster loading website keeps users attention and keeps them from getting frustrated waiting for sites to load and thus increasing their user experience.  User experience is one of the highest factors that search engines use for rankings and other SEO. Performance tested websites will help usability and overall customer satisfaction.</p>

				</div>

				<div class="col-sm-4">



					<h2 class="home-headers">User Centered Design</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/svgsDanCorporate/photo-1103597.svg" alt="speedometer icon"/>

					<p>With a focus on user experience and user centered design, I design websites with both the users needs and business objectives in mind.  Combining these two goals is a win win situation.  The user/customer is happy and therefore the business is happy.   </p>

				</div>

			</div>

			<!--Row 2-->

			<div class="row">

				<div class="col-sm-4">

					<h2 class="home-headers">Analytics</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/magnifying-glass-1083378.svg" alt="smartphone-icon"/>

					<p>Analytics and monitoring is an important part of any digital strategy. Knowing who your customers are is integral for any business.  
						When you know your customers, you can tailor experiences to keep current customers happy and coming back and also target new business more efficiently.
						I will help you get to know who your customers are through analytics and other research strategies.</p>
				</div>

				<div class="col-sm-4">

					<h2 class="home-headers">Visual Design</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/photo-1103594.svg" alt="speedometer icon"/>

					<p>Visual Design is a main key of any website.  It is a businesses first contact with a customer and first impressions need to be great.
						Working together on a visual design that communicates the right message and projects the image of your business correctly will ensure the proper online 
						representation of product or business.</p>
				

				</div>

				<div class="col-sm-4">



					<h2 class="home-headers">Social Media</h2>

					<img src="<?php echo get_stylesheet_directory_uri();?>/images/parts-1086747.svg" alt="speedometer icon"/>

					<p>Social Media is one of the most powerful marketing tools available
					 today and used correctly can reach an enormous amount of people.  Properly setup pages, profiles and campaigns mean maximum exposure and maximum conversions.  
					 Even if you have no social media experience I will take care of everything for you.  Did I mention social media can also be fun?</p>

				</div>

			</div>





		</div>

		



	</main><!-- .site-main -->



	<?php get_sidebar( 'content-bottom' ); ?>



</div><!-- .content-area -->





<?php get_footer(); ?>

