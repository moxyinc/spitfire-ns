<div id="sidebar">
	<div class="inner">
	
		<?php 	
		//Check first that child theme is used or Parent theme and then that file exist or not in child theme if exist this file in child theme then include that otherwise used parent theme file
		if ( get_stylesheet_directory() != get_template_directory() && 
		file_exists(get_stylesheet_directory().'/includes/search.php') ) 
		{			
			include get_stylesheet_directory() . '/includes/search.php';
								
		}
		else {
											
			include get_template_directory() . '/includes/search.php';
								
		}	
		
		
		 ?>
	

	
			<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
			<?php endif; ?>
	
	
		</div><!-- end inner -->
	</div><!-- end sidebar -->
	