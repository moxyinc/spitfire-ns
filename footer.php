
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-primary py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	
	
	<div class="row flex flex-wrap">
		
		<div class="w-full md:w-1/3">
			<?php dynamic_sidebar('Footer 1') ?>
		</div>
	
		<div class="w-full md:w-1/3">
				<?php dynamic_sidebar('Footer 2') ?>
		</div>
	
		<div class="w-full md:w-1/3">
				<?php dynamic_sidebar('Footer 3') ?>
		</div>
	
		<div class="w-full md:w-1/4">
				<?php dynamic_sidebar('Footer 4') ?>
		</div>

		
	</div><!--  /.row -->
	

	<div class="container mx-auto text-center text-white border-t pt-3 border-blue-300">
		&copy; <?php echo date_i18n( 'Y' );?> - <?php echo get_bloginfo( 'name' );?>
	</div>
</footer>

</div>

<?php wp_footer(); ?>


</body>
</html>
