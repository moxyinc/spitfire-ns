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
			
			
			<div id="mailchimp-signup" class="w-full text-primary text-xl text-center mt-9">
				
				<!-- Begin Mailchimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
					<style type="text/css">
						#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
						/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
						   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
					</style>
					<div id="mc_embed_signup">
					<form action="https://northsouthyachtsales.us5.list-manage.com/subscribe/post?u=5759b1b6b0cb569a6da6fa97f&amp;id=027ea57bd5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
						<!-- <h2>Subscribe</h2> -->
					<div class="mc-field-group">
						<label for="mce-EMAIL">Email Address </label>
						<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
					</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5759b1b6b0cb569a6da6fa97f_027ea57bd5" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
						</div>
					</form>
					</div>
					<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[14]='MMERGE14';ftypes[14]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
					<!--End mc_embed_signup-->
				
			</div><!-- end #mailchimp-signup -->
			
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
