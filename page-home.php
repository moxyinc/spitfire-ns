<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>


<h1 class="text-ns-blue font-bold text-5xl mb-12">Current Listings</h1>


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
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
	
		
		?>
		<li class="font-extrabold">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




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
	<?php while( $the_query->have_posts() ) : $the_query->the_post(); 
		
	
		
		?>
		<li class="font-extrabold">
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
