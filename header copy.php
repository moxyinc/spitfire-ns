<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
	
	<link href="https://fonts.googleapis.com/css?family=Oswald|Quattrocento" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class("bg-white text-gray-900 antialiased"); ?>>

<?php do_action("tailpress_site_before"); ?>



<div id="page" class="min-h-screen flex flex-col  mx-auto">

	<?php do_action("tailpress_header"); ?>

<header class="relative">

<div class="min-h-full hero-image bg-right-bottom bg-cover bg-fixed flex" style="background-image: url(https://images.unsplash.com/photo-1474927280041-5bef478c74e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3454&q=80);">
<div class="z-10 w-full">

<div class="py-2 px-24 my-5 flex justify-between">
  <div class="sm:w-screen lg:w-1/3 md:w-4/5 mr-20">
	  <?php if (has_custom_logo()) { ?>
		  <a href="<?php echo get_bloginfo("url"); ?>">
			  <?php the_custom_logo(); ?>
		  </a>

	  <?php } else { ?>
		  
		  <a href="<?php echo get_bloginfo("url"); ?>">
			  <img src="<?php echo get_template_directory_uri(); ?>/resources/svg/northsouth-logo.svg" alt="Moxy Logo" class="w-full py-8">
		  </a>
		  
		  <p class="text-sm font-bold text-black-coffee">
			  <?php echo get_bloginfo("description"); ?>
		  </p>

	  <?php } ?>
  </div>
  <div class="p-3 mt-10 lg:w-1/3 md:w-1/5 alignright text-white text-right bg-blue-900 bg-opacity-70 h-full">
	  <h3 class="">Eight Locations to Serve You!<br />

		  Port Credit, Hamilton, St.&nbsp;Catharines,

		  Georgian Bay, Eastern&nbsp;Ontario, Downtown&nbsp;Toronto, Caribbean (St.&nbsp;Maarten)
		  
	  </h3>
	  
  </div>
  

  
  
</div>

 <div class="container m-auto flex justify-center bg-white bg-opacity-30">
  <?php wp_nav_menu([
    "container_id" => "primary-menu",
    "container_class" =>
      "hidden lg:block mt-4 p-4  lg:text-primary font-extrabold lg:mt-0 lg:p-0 lg:bg-transparent lg:block",
    "menu_class" => "lg:flex lg:mx-4",
    "theme_location" => "primary",
    "li_class" => "lg:mx-4 py-3",
    "fallback_cb" => false,
  ]); ?>
  
 </div>
 
 <div class="lg:hidden">
	 <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
		 <div x-data="{ open: false }">
			 <button class="text-gray-500 w-10 h-10 relative focus:outline-none bg-white" @click="open = !open">
				 <span class="sr-only">Open main menu</span>
				 <div class="block w-5 absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
					 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': open,' -translate-y-1.5': !open }"></span>
					 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': open } "></span>
					 <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': open, ' translate-y-1.5': !open}"></span>
				 </div>
			 </button>
		 </div>
	 </a>
 </div>
	 
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


</div>


</div>


</header>



	<!-- <nav>

		<div class="mx-auto container">
			
			<div class="lg:flex lg:justify-between lg:items-center py-6">
			
				<div class="flex justify-between items-center">
					
					
					
				</div>
			
			</div>
			
		</div>
	</nav> -->
	
	
	
	

	<div id="content" class="site-content flex-grow">

		<!-- Start introduction -->
		<?php if (is_front_page()): ?>
		
		<div id="featured-listings" class="flex flex-wrap justify-center bg-blue-100">
			
			
			
		
			
			<div class="px-4 py-8 md:max-w-sm my-20">
				<div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
					<div class="md:flex-shrink-0">
						<img src="https://northsouthyachtsales.com/wp/wp-content/uploads/2021/06/Sea-Ray-470-Sundancer-1-Bates-North-South-Yacht-Sales-700x450.jpg" alt="mountains" class="w-full h-full rounded-lg rounded-b-none">
					</div>
					<div class="px-4 py-2 mt-2">
						<h2 class="font-bold text-2xl text-gray-800 tracking-normal">2011 SEA RAY 470 SUNDANCER</h2>
							<p class="text-sm text-gray-700 px-2 mr-1">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro amet ab debitis deleniti modi soluta similique...
							</p>
							<div class="flex items-center justify-between mt-2 mx-6">
								<a href="#" class="text-blue-500 text-xs -ml-3 ">Show More</a>
								<a href="#" class="flex text-gray-700">
									<svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
									</svg>
									5
								</a>
							</div>
						<div class="author flex items-center -ml-3 my-3">
							<div class="user-logo">
								<img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
							</div>
							<h2 class="text-sm tracking-tighter text-gray-900">
								<a href="#">By Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
							</h2>
						</div>
					</div>
				</div>
			</div>
			
			<div class="px-4 py-8 md:max-w-sm my-20">
				<div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
					<div class="md:flex-shrink-0">
						<img src="https://northsouthyachtsales.com/wp/wp-content/uploads/2021/06/Gib-Sea-30-1-Peel-North-South-Yacht-Sales-700x450.jpg" alt="mountains" class="w-full h-full rounded-lg rounded-b-none">
					</div>
					<div class="px-4 py-2 mt-2">
						<h2 class="font-bold text-2xl text-gray-800 tracking-normal">1986 GIB’SEA 30</h2>
							<p class="text-sm text-gray-700 px-2 mr-1">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro amet ab debitis deleniti modi soluta similique...
							</p>
							<div class="flex items-center justify-between mt-2 mx-6">
								<a href="#" class="text-blue-500 text-xs -ml-3 ">Show More</a>
								<a href="#" class="flex text-gray-700">
									<svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
									</svg>
									5
								</a>
							</div>
						<div class="author flex items-center -ml-3 my-3">
							<div class="user-logo">
								<img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
							</div>
							<h2 class="text-sm tracking-tighter text-gray-900">
								<a href="#">By Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
							</h2>
						</div>
					</div>
				</div>
			</div>	
			
		<div class="px-4 py-8 md:max-w-sm my-20">
			<div class="bg-white shadow-2xl rounded-lg mb-6 tracking-wide" >
				<div class="md:flex-shrink-0">
					<img src="https://northsouthyachtsales.com/wp/wp-content/uploads/2021/06/Custom-House-Boat-1-Weaymouth-North-South-Yacht-Sales-700x450.jpg" alt="mountains" class="w-full h-full rounded-lg rounded-b-none">
				</div>
				<div class="px-4 py-2 mt-2">
					<h2 class="font-bold text-2xl text-gray-800 tracking-normal">1980 CUSTOM HOUSE BOAT CRUISER | ONE OWNER, CUSTOM TRAILER</h2>
						<p class="text-sm text-gray-700 px-2 mr-1">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora reiciendis ad architecto at aut placeat quia, minus dolor praesentium officia maxime deserunt porro amet ab debitis deleniti modi soluta similique...
						</p>
						<div class="flex items-center justify-between mt-2 mx-6">
							<a href="#" class="text-blue-500 text-xs -ml-3 ">Show More</a>
							<a href="#" class="flex text-gray-700">
								<svg fill="none" viewBox="0 0 24 24" class="w-6 h-6 text-blue-500" stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
								</svg>
								5
							</a>
						</div>
					<div class="author flex items-center -ml-3 my-3">
						<div class="user-logo">
							<img class="w-12 h-12 object-cover rounded-full mx-4  shadow" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80" alt="avatar">
						</div>
						<h2 class="text-sm tracking-tighter text-gray-900">
							<a href="#">By Mohammed Ibrahim</a> <span class="text-gray-600">21 SEP 2015.</span>
						</h2>
					</div>
				</div>
			</div>
		</div>	
		
		</div> <!-- end of #featured-listings -->
		
		<?php endif; ?>
		<!-- End introduction -->

		<?php do_action("tailpress_content_start"); ?>

		<main class="max-w-screen-lg xl:max-w-screen-xl mx-auto px-0 sm:px-4 md:px-8 mb-14 sm:mb-20 xl:mb-12">
