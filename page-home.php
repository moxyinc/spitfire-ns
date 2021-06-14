<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>

<div class="container mx-auto">
		
	
	<?php if (have_posts()): ?>
		<?php while (have_posts()):
    the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'home' ); ?>
			
	<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
