<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<div class="block">
	
	<div id="news-and-listings" class="row lg:flex lg:flex-wrap">
		
		<div class="w-full lg:w-1/2 bg-gray-100 p-6">
		
			<div class="flex flex-wrap">		
				<img src="<?php echo get_template_directory_uri(); ?>/images/nsys-newsletter-retro-postcard-1024x567.png" alt="postcard image" class="w-full md:w-1/3 object-contain self-start shadow-xl" />
				<div class="w-full md:w-2/3 flex-auto pl-6 ">
					<h3 class="text-brand font-bold mt-6 md:mt-0 text-xl">Sign Up for Our Newsletter!</h3>
					<p class="text-brand">Our newsletter is a great way to learn about new listings and upcoming events. We care about your privacy, never share your information with anyone, and you can always unsubscribe with a single click!</p>
				</div>
			</div>
			
			
			<div class="w-full text-primary text-xl text-center mt-9"><?php echo do_shortcode("[mc4wp_form id='296']"); ?></div>
			
		</div>
	
	
		
	<div id="listings-list" class="w-full lg:w-1/2  p-6 pl-12">
		<!-- <h2 class="text-ns-blue text-3xl mb-3 border-b pb-2">Current Listings</h2> -->
		
			<h3 class="text-2xl text-primary">North American Listings</h3>
			<?php 
			
			// query
			$the_query = new WP_Query(array(
				'post_type'			=> 'listing',
				'posts_per_page'	=> -1,
				'meta_key'			=> 'vessel_location',
				'meta_value'        => 'north_america',
				'orderby'			=> 'meta_value',
				'order'				=> 'DESC'
			));
			
			?>
			<?php if( $the_query->have_posts() ): ?>
				<ul class="mt-3">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
			
					?>
					<li class="font-bold text-sm">
						<a class="hover:text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
			
			
			
			
			<h3 class="text-2xl text-primary mt-6">Caribbean Listings</h3>
			<?php 
			
			// query
			$the_query = new WP_Query(array(
				'post_type'			=> 'listing',
				'posts_per_page'	=> -1,
				'meta_key'			=> 'vessel_location',
				'meta_value'        => 'caribbean',
				'orderby'			=> 'meta_value',
				'order'				=> 'DESC'
			));
			
			?>
			<?php if( $the_query->have_posts() ): ?>
				<ul class="mt-3">
				<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
					
				
					
					?>
					<li class="font-bold text-sm">
						<a class="hover:text-primary" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
			
			<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
			
		
			
			
	</div><!-- end #listings-list -->
	
		</div><!-- END #news-and-listings -->
	</div><!-- end .block -->
	
	
	
	
	
<div class="block">
	<div class="row">	
	
		<div class="container mx-auto mt-12">
				
			
			<?php if (have_posts()): ?>
				<?php while (have_posts()):
		    the_post(); ?>
		
					<?php get_template_part( 'template-parts/content', 'home' ); ?>
					
			<?php endwhile; ?>
		
			<?php endif; ?>
		
		</div>
	
	</div>
</div>

<?php get_footer(); ?>
