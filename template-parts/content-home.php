<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>


<div id="main_content" class="container m-auto max-w-prose">
	
	<header class="entry-header mb-4">
		<?php //the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1 text-primary"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>
	
	<h1 class="text-ns-blue font-bold text-5xl">Current Listings</h1>
	
	<?php 
	
		// query
		$the_query = new WP_Query(array(
			'post_type'			=> 'listing',
			'posts_per_page'	=> -1
		
			
		));
	
	?>
	
	
	
	<?php if( $the_query->have_posts() ): ?>
	
	<div id="current_listings" class="mt-6">
	
		<ul>
		<?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php
		$url = rtrim(get_permalink(),'/');
		$url = $url . ('?template=external');
		?>
			
			<li class="text-indigo-600">
				
				<?php if( get_field('external_url') ): ?>
					<a href="<?php echo $url; ?>"><?php the_title(); ?></a>
				<? else : ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<? endif; ?>

			</li>
			
		<?php endwhile; ?>
		</ul>
		
	</div>
	
	<?php endif; ?>
	
	<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
	

</div><!-- end #main_content" container -->

<?php if ( is_search() || is_archive() ) : ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
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