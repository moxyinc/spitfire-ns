<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
	
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.typekit.net/qfi5grs.css">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class("bg-white text-gray-900 antialiased"); ?>>

<?php do_action("tailpress_site_before"); ?>



<div id="page" class="min-h-screen flex flex-col  mx-auto">

	<?php do_action("tailpress_header"); ?>

<header id="masthead" class="relative w-screen">
	<div id="hero-image" class="w-screen hero-image bg-cover bg-right-top bg-no-repeat flex flex-wrap">
		<div class="z-10 w-full border-solid border-t-8 border-blue-300">
			<div class="flex flex-wrap justify-between">
				
				<div id="logo-container" class="w-72 max-w-xs mt-9 md:w-1/3 md:mx-9  md:w-1/3 md:max-w-lg lg:mx-14">
				  <?php if (has_custom_logo()) { ?>
					  <a href="<?php echo get_bloginfo("url"); ?>">
						  <?php the_custom_logo(); ?>
					  </a>
				  <?php } else { ?>
					  <a href="<?php echo get_bloginfo("url"); ?>">
						  <img src="<?php echo get_template_directory_uri(); ?>/resources/svg/northsouth-logo.svg" alt="Moxy Logo">
					  </a>
				  <?php } ?>
				  
				</div>
				
				<div id="hamburger-container" class="lg:hidden z-10 m-3">
					 <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
						 <div x-data="{ open: false }">
							 <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="open = !open">
								 <span class="sr-only">Open main menu</span>
								 <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
									 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
									 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
									 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
								 </div>
							 </button>
						 </div>
					 </a>
				 </div>	
				 
				 <div id="featured-callout" class="p-6 lg:mt-10 lg:mr-8 text-dark bg-white bg-opacity-50 lg:max-w-md hidden md:block font-maple">
					<h2 class="text-lg font-maple font-bold text-primary"><?php the_field( 'header_announcement_title', 'option' ); ?></h2>
					<div class="text-primary"><?php the_field( 'header_announcement_text', 'option' ); ?></div>
					<a href="<?php the_field( 'header_annnouncement_link', 'option' ); ?>" alt="<?php the_field( 'header_announcement_title', 'option' ); ?>" class="text-blue-500 text-xs mt-3 float-right"><button class="bg-transparent hover:bg-blue-500 text-xs text-blue-700 font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">More Info</button></a>
					
				 </div><!-- /.featured-callout -->	
					  
				<div class="z-10 w-full p-4 w-full text-dark md:text-white lg:rounded-b-lg md:text-right md:pr-20 flex justify-end hidden lg:block ">
					<h3 class="font-serif italic text text-dark md:text-white sm:text-shadow"><strong>Eight Locations to Serve You:</strong><br />
						Port Credit, Hamilton, St.&nbsp;Catharines, Georgian Bay, Eastern&nbsp;Ontario, Downtown&nbsp;Toronto, Caribbean&nbsp;(St.&nbsp;Maarten)
					</h3>
				</div>		  
				 
				<div class="w-screen m-auto flex justify-center z-10 lg:bg-white lg:bg-opacity-50">
					<?php wp_nav_menu([
						"container_id" => "primary-menu",
						"container_class" =>
						"hidden lg:block mt-4 p-4  lg:text-primary font-extrabold lg:mt-0 lg:p-0 lg:bg-transparent lg:block bg-white bg-opacity-60",
						"menu_class" => "lg:flex lg:mx-4",
						"theme_location" => "primary",
						"li_class" => "lg:mx-2 py-1 md:py-3 px-2 hover:bg-blue-200",
						"fallback_cb" => false,
					]); ?>
				 </div>
				 
				 <div id="featured-callout" class="p-6 lg:mt-10 lg:mr-8 text-dark bg-blue-400 bg-opacity-10 lg:max-w-md md:hidden">
					 <h2 class="text-lg"><?php the_field( 'header_announcement_title', 'option' ); ?></h2>
					 <?php the_field( 'header_announcement_text', 'option' ); ?>
					 <a href="<?php the_field( 'header_annnouncement_link', 'option' ); ?>" alt="<?php the_field( 'header_announcement_title', 'option' ); ?>" class="text-blue-500 text-xs -ml-3"><button class="bg-transparent hover:bg-blue-500 text-xs text-blue-700 font-semibold hover:text-white py-1 px-4 my-3 border border-blue-500 hover:border-transparent rounded">More Info</button></a>
					 <p><a href="#">Featured Link for More Info</a>
				 </div><!-- /.featured-callout -->
			</div>
		</div>
	</div><!-- /#her-image sction -->
</header>

<div class="z-10 text-center py-4 px-10 lg:rounded-b-lg md:text-right md:pr-20 flex justify-end lg:hidden">
	<h3 class="font-serif italic text-sm"><strong>Eight Locations to Serve You:</strong><br />
		Port Credit, Hamilton, St.&nbsp;Catharines, Georgian Bay, Eastern&nbsp;Ontario, Downtown&nbsp;Toronto, Caribbean&nbsp;(St.&nbsp;Maarten)
	</h3>
</div>	


<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<section class="z-20 w-screen bg-blue-50 bg-opacity-50 shadow-md mb-10">
	
	<div class="container mx-auto flex flex-wrap justify-center lg:justify-around items-center my-6 xl:px-32 lg:xl-0">
	
		<a href="#" alt="Featured Listings" class="text-blue-500 text-lg"><button class="bg-primary hover:bg-blue-500 text-sm xl:text-lg text-white font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">Featured Listings</button></a>
	
		<div id="contact-info" class=" max-w-prose text-dark pl-6 py-4 z-10 ">
			<?php if (is_front_page()): ?>
			<img src="<?php echo get_template_directory_uri(); ?>/images/cpyb-moxy-105x75.png" alt="CPYB Logo" class="float-right ml-6 opacity-90 hover:opacity-100" width="105" height="75" />
				<p class="z-10 mb-2 font-serif italic font-maple text-right"><strong>North South Yacht Sales</strong> is a Certified Professional Yacht Broker (CPYB) Endorsed Brokerage.
Buy or sell your boat with an experienced professional guiding you through the entire process.</p>
			<?php endif; ?>
			
			<h3 class="font-maple"><em>Head Office:</em> 1 Port St. East, Port Credit, Ontario — Phone: <strong>(905) 891-6764</strong></h1>
			
		</div><!-- /#contact-info -->
			
			<a href="/pre-owned-vessels/" alt="Featured Listings" class="text-blue-500 text-lg"><button class="bg-primary hover:bg-blue-500 text-sm xl:text-lg text-white font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">All Pre-Owned Vessels</button></a>
		
	</div>

</section>



	

	<div id="content" class="site-content flex-grow">

		<!-- Start Front Page-Only Stuff -->
<?php if (is_front_page()): ?>
		
	<section id="featured listings" class="-mt-10">
		
		<h1 class="text-center w-screen pt-9 text-primary sm:text-3xl lg:text-4xl bg-blue-100 uppercase">Featured Listings</h1>

		
		<div id="featured-listings-vessels" class="flex flex-wrap justify-center bg-blue-100 lg:px-8">
			
		
		<?php
		/**
		 * Setup query to show the ‘listings’ post type with all posts filtered by 'home' category.
		 * Output is linked title with featured image and excerpt.
		 */
		   
			$args = array(  
				'post_type' => 'listing',
				'post_status' => 'publish',
				'posts_per_page' => -1, 
				'orderby' => 'date', 
				'order' => 'DESC	',
				'meta_query' => array(
					array(
						'key'     => 'display_on_homepage',
						'value'   => '"yes"',
						'compare' => 'LIKE'
					)
				),
			);
		
			$loop = new WP_Query( $args ); 
			while ( $loop->have_posts() ) : $loop->the_post();  
			$title = get_the_title(); 
			
			$thumb   = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
			$image   = aq_resize( $img_url, 700, 450, true ); // Resize & crop img 
			?>
			
			
				
			<div class="px-5 py-8 md:max-w-md mt-6">
				<div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
					<div class="md:flex-shrink-0">
					
						
						<figure class="relative cursor-pointer">
							<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
								<img src="<?php echo $image ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full rounded-lg rounded-b-none">
							</a>
							
							<?php if( get_field('callout') ): ?>
								<figcaption class="absolute w-full text-lg -mt-11 text-primary">
								  <div class="w-full bg-white bg-opacity-70 py-2">
									<h3 class="px-6 text-center font-maple font-bold italic">
										<?php the_field( 'callout' ); ?>
									</h3>
								  </div>
								</figcatpion>
							<?php endif; ?>
							
						</figure>
						
					</div>
					<div class="px-4 py-2 mt-2">
						<a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
							<h2 class="text-2xl text-primary tracking-normal uppercase"><?php echo $title; ?></h2>
						</a>
						<h3 class="text-gray-700 pl-3 font-serif italic"><?php the_field( 'price' ); ?></h3>
							<p class="text-sm text-gray-700 px-3 mt-3 mr-1">
								<?php $the_excerpt = get_the_excerpt(); if ( '' != $the_excerpt ) {}	echo $the_excerpt; ?>
							</p>
							<div class="flex items-center justify-end mt-2 mx-6">
								<!-- <a href="<?php the_permalink(); ?>" class="text-blue-500 text-xs -ml-3 ">Show Me More</a> -->
								<a href="<?php the_permalink(); ?>" class="text-blue-500 text-xs -ml-3 "><button class="bg-transparent hover:bg-blue-500 text-xs text-blue-700 font-semibold hover:text-white py-1 px-4 my-3 border border-blue-500 hover:border-transparent rounded">
									  Details & Pictures
								</button></a>
							</div>
							
							<div class="w-full bg-gray-100 my-3 p-1">
								<p class="text-gray-600 text-center text-xs"> <?php the_field( 'length' ); ?> Feet  |  <?php the_field( 'year' ); ?>  |  <?php the_field( 'fuel_type' ); ?></p>
							</div>
							
						
							
							<section "listing-broker-info" class="author flex flex-wrap items-center justify-center -ml-3 my-3 text-primary">
								
								<?php $listing_broker = get_field( 'listing_broker' ); ?>
								<?php if ( $listing_broker ) : ?>
									<?php $post = $listing_broker; ?>
									<?php setup_postdata( $post ); ?> 
									<div class="user-logo">
										<a href="<?php the_permalink(); ?>">
										
										<?php the_post_thumbnail( 'thumbnail', array( 'class'  => 'w-12 h-12 text-primary object-cover rounded-full mx-4  shadow' ) ); // show featured image ?>
										</a>
									</div>
									<a href="<?php the_permalink(); ?>">
										<h2 class="text-sm tracking-tighter text-gray-900 font-serif"><?php the_title(); ?></h2>
									</a>
									
									<p><a href="mailto:<?php the_field( 'email' ); ?>?subject=Inquiry:&nbsp;<?php echo $title ?>" class="text-primary">
										
										
										<svg version="1.1" id="Layer_1" class="w-6 h-6 text-primary ml-4" stroke="currentColor"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
										 viewBox="0 0 100.354 100.352" style="enable-background:new 0 0 100.354 100.352;" xml:space="preserve">
										<path d="M93.09,76.224c0.047-0.145,0.079-0.298,0.079-0.459V22.638c0-0.162-0.032-0.316-0.08-0.462
											c-0.007-0.02-0.011-0.04-0.019-0.06c-0.064-0.171-0.158-0.325-0.276-0.46c-0.008-0.009-0.009-0.02-0.017-0.029
											c-0.005-0.005-0.011-0.007-0.016-0.012c-0.126-0.134-0.275-0.242-0.442-0.323c-0.013-0.006-0.023-0.014-0.036-0.02
											c-0.158-0.071-0.33-0.111-0.511-0.123c-0.018-0.001-0.035-0.005-0.053-0.005c-0.017-0.001-0.032-0.005-0.049-0.005H8.465
											c-0.017,0-0.033,0.004-0.05,0.005c-0.016,0.001-0.032,0.004-0.048,0.005c-0.183,0.012-0.358,0.053-0.518,0.125
											c-0.01,0.004-0.018,0.011-0.028,0.015c-0.17,0.081-0.321,0.191-0.448,0.327c-0.005,0.005-0.011,0.006-0.016,0.011
											c-0.008,0.008-0.009,0.019-0.017,0.028c-0.118,0.135-0.213,0.29-0.277,0.461c-0.008,0.02-0.012,0.04-0.019,0.061
											c-0.048,0.146-0.08,0.3-0.08,0.462v53.128c0,0.164,0.033,0.32,0.082,0.468c0.007,0.02,0.011,0.039,0.018,0.059
											c0.065,0.172,0.161,0.327,0.28,0.462c0.007,0.008,0.009,0.018,0.016,0.026c0.006,0.007,0.014,0.011,0.021,0.018
											c0.049,0.051,0.103,0.096,0.159,0.14c0.025,0.019,0.047,0.042,0.073,0.06c0.066,0.046,0.137,0.083,0.21,0.117
											c0.018,0.008,0.034,0.021,0.052,0.028c0.181,0.077,0.38,0.121,0.589,0.121h83.204c0.209,0,0.408-0.043,0.589-0.121
											c0.028-0.012,0.054-0.03,0.081-0.044c0.062-0.031,0.124-0.063,0.181-0.102c0.03-0.021,0.057-0.048,0.086-0.071
											c0.051-0.041,0.101-0.082,0.145-0.129c0.008-0.008,0.017-0.014,0.025-0.022c0.008-0.009,0.01-0.021,0.018-0.03
											c0.117-0.134,0.211-0.288,0.275-0.458C93.078,76.267,93.083,76.246,93.09,76.224z M9.965,26.04l25.247,23.061L9.965,72.346V26.04z
											 M61.711,47.971c-0.104,0.068-0.214,0.125-0.301,0.221c-0.033,0.036-0.044,0.083-0.073,0.121l-11.27,10.294L12.331,24.138h75.472
											L61.711,47.971z M37.436,51.132l11.619,10.613c0.287,0.262,0.649,0.393,1.012,0.393s0.725-0.131,1.011-0.393l11.475-10.481
											l25.243,23.002H12.309L37.436,51.132z M64.778,49.232L90.169,26.04v46.33L64.778,49.232z"/>
										</svg>
									
									</a></p>
									
									<p class="font-serif italic ml-3 text-center"><?php the_field( 'phone' ); ?></p>
									<?php wp_reset_postdata(); ?>
								<?php endif; ?>
										
							</section>			
									
									
									
										
										
								
									
							
						
							
							
							
					
					</div>
				</div>
			</div>	
			
				
			<?php endwhile; ?><!-- end Featured Listing Loop -->
		
			<?php wp_reset_postdata(); ?>
			
			
			
			
			
	
		
		</div> <!-- end of #featured-listing-vesselss -->
		
<?php endif; ?>
		<!-- End introduction -->
			
	</section><!-- /#featured-listings> -->

		<?php do_action("tailpress_content_start"); ?>
		


		<main class="max-w-screen-lg xl:max-w-screen-xl mx-auto mt-6 px-0 sm:px-4 md:px-8 mb-14 sm:mb-20 xl:mb-12">

