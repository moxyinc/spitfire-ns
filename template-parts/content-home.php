<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
<div class="container m-auto max-w-prose">
<header class="entry-header mb-4">
	<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1 text-primary"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
</header>


<h1 class="text-ns-blue font-bold text-5xl">This Headline is Rendered in "ns-blue"</h1>
<p class="mt-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptatem debitis vero qui fuga ex nihil pariatur adipisci nam animi porro asperiores dolore eveniet incidunt, id mollitia molestiae similique dolorum.
</p>

<blockquote>"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</blockquote>


<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates mollitia fugiat nisi culpa, corporis suscipit error neque eius cumque alias quibusdam quasi expedita ea repellendus ducimus dicta porro sit autem?</p>
</div>

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