<?php get_header(); ?>

<div class="container mx-auto">
	
<!--
	Author: Mostafa Ahangarha
	License: MIT
	Version: v1.1
	-->
	
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
	
	<div class="row flex justify-center items-center">
		<!--actual component start-->
		<div x-data="setup()">
			<ul class="flex justify-center items-center my-4">
				<template x-for="(tab, index) in tabs" :key="index">
					<li class="cursor-pointer py-2 px-4 text-gray-500 border-b-8"
						:class="activeTab===index ? 'text-primary border-primary' : ''" @click="activeTab = index"
						x-text="tab"></li>
				</template>
			</ul>
	
			<div class="w-full bg-white text-left mx-auto">
				
				
				<div x-show="activeTab===0"><!-- START TAB #1 -->
					
				<h2 class="text-2xl text-primary">North American Listings</h2>
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
					<div class="mt-3">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						
						
						
						
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'relative mb-12 scroll-show' ); ?>>
						
			
						
						<header class="entry-header mb-4">
							
						</header>
						
						<?php $title = get_the_title(); 
						
						$thumb   = get_post_thumbnail_id();
						$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
						?>
					
						
						<?php if ( is_search() || is_archive() ) : ?>
							
							<div class="flex w-full mx-auto items-center">
								<div class="flex w-full bg-blue-50 p-4 rounded-lg">
									<div class="w-3/12">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											 <?php the_post_thumbnail('large', array('class' => 'rounded-md ')); ?>
										</a>
										<!-- <img class="w-full hover:animate-bounce rounded-lg" src="https://www.riautelevisi.com/foto_berita/77foto%20ilustrasi.jpg" alt="" /> -->
									</div>
									
									<div class="flex flex-col w-6/12 pl-4">
									
										<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-bold leading-tight mb-2 text-primary hover:text-dark"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
										<h2 class="text-secondary text-xl italic"><?php if (get_field('callout')) { the_field( 'callout' ); } ?></span></h2> 
										
										<div class="entry-summary leading-5 text-brand">
											<?php the_excerpt(); ?>
										</div> <!-- Excerpt / Post Content -->
											
										<div class="flex h-full items-end text-brand hover:text-primary">
											<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
												<button class="text-sm font-semibold flex items-center space-x-2">
												  <span>LISTING DETAILS</span>
												  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
												  </svg>
												</button>
											</a>
										</div>
									</div>
									
									<div class="w-3/12 border-l-2 border-blue-200 ml-6 pl-6 flex-col">
										<h3 class="text-dark font-maple font-bold italic border-b border-blue-200 pb-2"><?php the_field( 'price' ); ?></h3>
			
										<section "listing-broker-info" class="author flex flex-wrap mt-12 my-3 -ml-3 text-primary">
											
											<?php $listing_broker = get_field( 'listing_broker' ); ?>
											<?php if ( $listing_broker ) : ?>
												<?php $post = $listing_broker; ?>
												<?php setup_postdata( $post ); ?> 
												<div class="user-logo">
													<a href="<?php the_permalink(); ?>">
													
													<?php the_post_thumbnail( 'thumbnail', array( 'class'  => 'w-12 h-12 text-primary object-cover rounded-sm mx-4 mb-4 shadow' ) ); // show featured image ?>
													</a>
												</div>
												<a href="<?php the_permalink(); ?>">
													<h2 class="text-bold tracking-tighter text-gray-900 text-lg"><?php the_title(); ?></h2>
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
												
												<p class="font-serif italic ml-3 text-left"><?php the_field( 'phone' ); ?></p>
												
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>
													
										</section>	
										
									</div>
							
								</div>
							</div>
						
						<?php else : ?>
						
							<div class="entry-content">
								
								<?php
								/* translators: %s: Name of current post */
								the_content(
									sprintf(
										__( 'Continue reading %s', 'tailpress' ),
										the_title( '<span class="screen-reader-text">"', '"</span>', false )
									)
								);
						
								wp_link_pages(
									array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
										'separator'   => '<span class="screen-reader-text">, </span>',
									)
								);
								?>
							</div>
						
						<?php endif; ?>
						
						</article>
						
						
						
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				
				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
						
				</div><!-- END TAB #1 -->
				
				
				<div x-show="activeTab===1"><!-- BEGIN TAB #2 -->
					
				<h2 class="text-2xl text-primary mt-6">Caribbean Listings</h2>
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
					<div class="mt-3">
					<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
						
						
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'relative mb-12 scroll-show' ); ?>>
					
					<header class="entry-header mb-4">
						
					</header>
					
					<?php $title = get_the_title(); 
					
					$thumb   = get_post_thumbnail_id();
					$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
					?>
				
					
					<?php if ( is_search() || is_archive() ) : ?>
						
						<div class="flex w-full mx-auto items-center">
							<div class="flex w-full bg-blue-50 p-4 rounded-lg">
								<div class="w-3/12">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
										<?php the_post_thumbnail('medium', array('class' => 'rounded-md ')); ?>
									</a>
									<!-- <img class="w-full hover:animate-bounce rounded-lg" src="https://www.riautelevisi.com/foto_berita/77foto%20ilustrasi.jpg" alt="" /> -->
								</div>
								<div class="flex flex-col w-6/12 pl-4">
								
									<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-bold leading-tight mb-2 text-primary hover:text-dark"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
									<h2 class="text-secondary text-xl italic"><?php if (get_field('callout')) { the_field( 'callout' ); } ?></span></h2> 
									
									<div class="entry-summary leading-5 text-brand">
										<?php the_excerpt(); ?>
									</div> <!-- Excerpt / Post Content -->
										
									<div class="flex h-full items-end text-brand hover:text-primary">
										<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
											<button class="text-sm font-semibold flex items-center space-x-2">
											  <span>LISTING DETAILS</span>
											  <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
											  </svg>
											</button>
										</a>
									</div>
								</div>
								
								<div class="w-3/12 border-l-2 border-blue-200 ml-6 pl-6">
									<h3 class="text-dark font-maple font-bold italic border-b border-blue-200 pb-2"><?php the_field( 'price' ); ?></h3>
		
									<section "listing-broker-info" class="author flex flex-wrap mt-9 my-3 -ml-3 text-primary">
										
										<?php $listing_broker = get_field( 'listing_broker' ); ?>
										<?php if ( $listing_broker ) : ?>
											<?php $post = $listing_broker; ?>
											<?php setup_postdata( $post ); ?> 
											<div class="user-logo">
												<a href="<?php the_permalink(); ?>">
												
												<?php the_post_thumbnail( 'thumbnail', array( 'class'  => 'w-12 h-12 text-primary object-cover rounded-sm mx-4 mb-4 shadow' ) ); // show featured image ?>
												</a>
											</div>
											<a href="<?php the_permalink(); ?>">
												<h2 class="text-bold tracking-tighter text-gray-900 text-lg"><?php the_title(); ?></h2>
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
											
											<p class="font-serif italic ml-3 text-left"><?php the_field( 'phone' ); ?></p>
											
											<?php wp_reset_postdata(); ?>
											<?php endif; ?>
												
									</section>	
									
								</div>
						
							</div>
						</div>
					
					<?php else : ?>
					
						<div class="entry-content">
							
							<?php
							/* translators: %s: Name of current post */
							the_content(
								sprintf(
									__( 'Continue reading %s', 'tailpress' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								)
							);
					
							wp_link_pages(
								array(
									'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
									'after'       => '</div>',
									'link_before' => '<span>',
									'link_after'  => '</span>',
									'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
									'separator'   => '<span class="screen-reader-text">, </span>',
								)
							);
							?>
						</div>
					
					<?php endif; ?>
					
					</article>	
						
						
					<?php endwhile; ?>
					</div>
				<?php endif; ?>
				
				<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
				
					
					
				</div><!-- END TAB #2 -->
			
			</div>
	
			<ul class="flex justify-center items-center my-4">
				<template x-for="(tab, index) in tabs" :key="index">
					<li class="cursor-pointer py-3 px-4 rounded transition"
						:class="activeTab===index ? 'bg-green-500 text-white' : ' text-gray-500'" @click="activeTab = index"
						x-text="tab"></li>
				</template>
			</ul>
			
			<!-- <div class="flex gap-4 justify-center border-t p-4">
				<button
					class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
					@click="activeTab--" x-show="activeTab>0"
					>Back</button>
				<button
					class="py-2 px-4 border rounded-md border-blue-600 text-blue-600 cursor-pointer uppercase text-sm font-bold hover:bg-blue-500 hover:text-white hover:shadow"
					@click="activeTab++" x-show="activeTab<tabs.length-1"
					>Next</button>
			</div> -->
		</div>
		<!--actual component end-->
	</div>
	
	<script>
		function setup() {
		return {
		  activeTab: 0,
		  tabs: [
			  "North American Listings",
			  "Caribbean Listings",
			 
		  ]
		};
	  };
	</script>
	
	<!--
	# Changelog:
	
	## [1.1] - 2021-05-01
	### Added
	 - Back/Next buttons
	
	## [1.0] - 2021-05-01
	### Added
	 - Nav bar with two styles
	 - Set tabs title dynamically and render on page
	-->

</div><!-- end main container -->
<?php get_footer(); ?>
