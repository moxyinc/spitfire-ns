<?php get_header(); ?>

<div class="container mx-auto">
	
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
		<ul class="mt-3">
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			
			
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
			
			<header class="entry-header mb-4">
				
			</header>
			
			<?php $title = get_the_title(); 
			
			$thumb   = get_post_thumbnail_id();
			$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
			?>
		
			
			<?php if ( is_search() || is_archive() ) : ?>
				
				<div class="flex w-full mx-auto items-center">
					<div class="flex bg-blue-50 p-4 rounded-lg">
						<div class="w-1/4">
							 <?php the_post_thumbnail('medium', array('class' => 'rounded-md ')); ?>
							<!-- <img class="w-full hover:animate-bounce rounded-lg" src="https://www.riautelevisi.com/foto_berita/77foto%20ilustrasi.jpg" alt="" /> -->
						</div>
						<div class="flex flex-col w-3/4 pl-4">
						
							<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-bold leading-tight mb-2 text-primary hover:text-dark"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							
							<div class="entry-summary text-lg font-light leading-5 text-brand">
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
		</ul>
	<?php endif; ?>
	
	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	
	
	
	<hr class=" border-solid border-1 border-secondary" />
	
	
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
		<ul class="mt-3">
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
		
		<header class="entry-header mb-4">
			
		</header>
		
		<?php $title = get_the_title(); 
		
		$thumb   = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full'); // Get img URL
		?>
	
		
		<?php if ( is_search() || is_archive() ) : ?>
			
			<div class="flex w-full mx-auto items-center">
				<div class="flex bg-blue-50 p-4 rounded-lg">
					<div class="w-1/4">
						 <?php the_post_thumbnail('medium', array('class' => 'rounded-md ')); ?>
						<!-- <img class="w-full hover:animate-bounce rounded-lg" src="https://www.riautelevisi.com/foto_berita/77foto%20ilustrasi.jpg" alt="" /> -->
					</div>
					<div class="flex flex-col w-3/4 pl-4">
					
						<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-bold leading-tight mb-2 text-primary hover:text-dark"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						
						<div class="entry-summary text-lg font-light leading-5 text-brand">
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
		</ul>
	<?php endif; ?>
	
	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	
	
	
    <hr class=" border-solid border-1 border-primary" />


	<!-- <?php if (have_posts()): ?>
		<?php while (have_posts()):
    the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
		
		<header class="entry-header mb-4">
			
		</header>
		
		<?php $title = get_the_title(); 
		
		$thumb   = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full'); 
		?>
	
		
		<?php if ( is_search() || is_archive() ) : ?>
			
			<div class="flex w-full mx-auto items-center">
				<div class="flex bg-blue-50 p-4 rounded-lg">
					<div class="w-1/4">
						 <?php the_post_thumbnail('medium', array('class' => 'rounded-md ')); ?>
					</div>
					<div class="flex flex-col w-3/4 pl-4">
					
						<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-bold leading-tight mb-2 text-primary hover:text-dark"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						
						<div class="entry-summary text-lg font-light leading-5 text-brand">
							<?php the_excerpt(); ?>
						</div> 
							
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
			
				</div>
			</div>
		
		<?php else : ?>
		
			<div class="entry-content">
				
				<?php
				
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

	<?php endif; ?> -->

</div>

<?php get_footer(); ?>
