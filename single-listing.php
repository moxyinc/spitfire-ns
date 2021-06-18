<?php /* Template Name: Vessel Listing */ ?>

<?php get_header(); ?>

<div id="full-grid" class="w-full grid grid-cols-12">
	
<?php 
$external = $_GET['template'];
if(isset($external)) { ?><!-- check if ?template=external is in the URL, is it is - show this:-->

	<div class="container col-span-full  lg:col-span-10 lg:col-start-2 my-8 lg:pr-0">
		
		<iframe id="advanced_iframe" name="advanced_iframe" src="<?php the_field( 'external_url' ); ?>" scrolling="auto" allowtransparency="true" style="width: 100%; height: 3000px; max-width: 100%; max-height: 48640px;" onload=";aiScrollToTop(&quot;advanced_iframe&quot;,&quot;true&quot;);" width="100%" height="4000" frameborder="0"></iframe>
		
	</div>
	
	<!-- <div id="sidebar" class="container col-span-full lg:col-span-2 lg:my-8 lg:mt-28">
		<?php //get_sidebar('listing') ?>
	</div> -->	



<? } else { ?>	<!-- ?template=external is NOT in the URL so here is the regular Listing template: -->




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
		
		
		<?php
		$url = rtrim(get_permalink(),'/');
		$url = $url . ('?template=external');
		?>
		<?php if( get_field('external_url') ): ?>
			<a href="<?php echo $url; ?>"><button class="bg-primary hover:bg-blue-500 text-sm xl:text-lg text-white font-semibold hover:text-white py-1 px-4 border border-blue-500 hover:border-transparent rounded">FULL DETAILS</button></a>
		<? endif; ?>
		
	</div>


</div><!-- end #full-grid -->

<?php } ?><!-- end the ?external GET from the URL -->











<?php get_footer();
