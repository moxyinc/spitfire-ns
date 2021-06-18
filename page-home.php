<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>


<h1 class="text-ns-blue font-bold text-5xl mb-12">Current Listings</h1>



<?php 

// query
$the_query = new WP_Query(array(
	'post_type'			=> 'listing',
	'posts_per_page'	=> -1,
	'meta_key'			=> 'featured',
	'orderby'			=> 'meta_value',
	'order'				=> 'DESC'
));

?>
<?php if( $the_query->have_posts() ): ?>
	<ul>
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
		$class = get_field('featured') ? 'class="featured font-bold"' : '';
		
		?>
		<li <?php echo $class; ?>>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>










<div class="container mx-auto mt-12">
		
	
	<?php if (have_posts()): ?>
		<?php while (have_posts()):
    the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'home' ); ?>
			
	<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
