<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header mb-4">
	<?php //the_title( sprintf( '<h1 class="entry-title sm:text-2xl lg:text-3xl 2xl:text-5xl uppercase leading-tight mb-1 text-primary"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	<h1 class="entry-title sm:text-2xl lg:text-3xl 2xl:text-5xl uppercase leading-tight mb-1 text-primary" rel="bookmark">
		<?php the_title() ?></h1>
	<h2 class="text-secondary text-2xl pl-6"><?php if (get_field('callout')) { the_field( 'callout' ); } ?></span></h2>  
	  
</header>



<?php 
$arr_sliderimages = get_gallery_images();
?>	
<?php if (count($arr_sliderimages) > 0) { ?>
	<div id="slider2" class="flexslider">
						<?php 
			if ( get_stylesheet_directory() != get_template_directory() && file_exists(get_stylesheet_directory().'/includes/banner.php') ) 
			{			
				include get_stylesheet_directory() . '/includes/banner.php';
			}
			else {
				include get_template_directory() . '/includes/banner.php';
			}
	?>
	<ul class="slides rounded-2xl rounded-b-none scroll-show">
		<?php if(count($arr_sliderimages) > 1) { ?>
			<div class="imagehover2"></div>
		<?php } ?>
		
		<?php
			$count = 1;
			foreach ($arr_sliderimages as $image) { 
				$resized = aq_resize($image, 700, 450, true, true, true);
			?>
			<li class="rounded-2xl rounded-b-none">
				  <a class="rounded-2xl rounded-b-none" rel="prettyPhoto[pp_gal]"  href="<?php echo $image ?>">
					<img class="rounded-2xl rounded-b-none z-20" alt="" src="<?php echo $resized ?>" />
				</a>
			</li>
		<?php
		$count = $count + 1;
		} ?>
	</ul>
	</div>
<?php } ?>


<?php if (count($arr_sliderimages) > 1) { ?>
	<div id="carousel" class="flexslider">
	<ul class="slides">
		<?php
			$count = 1;
			foreach ($arr_sliderimages as $image) { 
				$resized = aq_resize($image, 700, 450,true, true, true);
			?>
			<li>
				<img alt="" src="<?php echo $resized ?>" />
			</li>
		<?php
		$count = $count + 1;
		} ?>
	</ul>
	</div>
<?php } ?>



<div class="entry-content">
	<?php the_content(); ?>

	<?php
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



</article>



