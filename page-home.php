<?php /* Template Name: Homepage */ ?>
<?php get_header(); ?>


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
	
			<li class="text-indigo-600 font-bold">
	
				<?php //if( get_field('external_url') ): ?>
					<a href="<?php echo $url; ?>"><?php the_title(); ?></a>
				<? //else : ?>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				<? //endif; ?>
	
			</li>
	
		<?php endwhile; ?>
		</ul>
	
	</div>

<?php endif; ?>

<?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>




<div class="container mx-auto">
		
	
	<?php if (have_posts()): ?>
		<?php while (have_posts()):
    the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'home' ); ?>
			
	<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
