<?php /* Template Name: Vessel Listing */ ?>
<?php get_header(); ?>
<div class="w-full grid grid-cols-12">
	<div class="container col-span-full  lg:col-span-7 lg:col-start-2 my-8 lg:pr-9">

	<?php if ( have_posts() ) : ?>

		<?php
		while ( have_posts() ) :
			the_post();
			?>
			
			
			

			<?php get_template_part( 'template-parts/content', 'single_listing' ); ?>
			
			
			
			

		<?php endwhile; ?>

	<?php endif; ?>

	</div>
	
	<div id="sidebar" class="container col-span-full lg:col-span-3 lg:my-8 lg:mt-28">
		<?php get_sidebar('listing') ?>
	</div>
</div>

<?php
get_footer();
