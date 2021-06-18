<?php

/**
 * Enqueue scripts.
 */
function tailpress_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_script( 'jquery' );

	wp_enqueue_style( 'tailpress', tailpress_get_mix_compiled_asset_url( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	
	wp_enqueue_script( 'tailpress', tailpress_get_mix_compiled_asset_url( 'js/app.js' ), array( 'jquery' ), $theme->get( 'Version' ) );
	

}

add_action( 'wp_enqueue_scripts', 'tailpress_enqueue_scripts' );

/**
 * Get mix compiled asset.
 *
 * @param string $path The path to the asset.
 *
 * @return string
 */
function tailpress_get_mix_compiled_asset_url( $path ) {
	$path                = '/' . $path;
	$stylesheet_dir_uri  = get_stylesheet_directory_uri();
	$stylesheet_dir_path = get_stylesheet_directory();

	if ( ! file_exists( $stylesheet_dir_path . '/mix-manifest.json' ) ) {
		return $stylesheet_dir_uri . $path;
	}

	$mix_file_path = file_get_contents( $stylesheet_dir_path . '/mix-manifest.json' );
	$manifest      = json_decode( $mix_file_path, true );
	$asset_path    = ! empty( $manifest[ $path ] ) ? $manifest[ $path ] : $path;

	return $stylesheet_dir_uri . $asset_path;
}


// added by Moxy for Flexslider
add_action( 'wp_enqueue_scripts', 'moxy_scripts_load' );
function moxy_scripts_load(){
  wp_enqueue_script( 'flexslider', get_stylesheet_directory_uri() . '/js/jquery.flexslider.js', array( 'jquery' ) );
  wp_enqueue_style( 'flexslider', get_stylesheet_directory_uri() . '/css/flexslider.css', array(), '', 'screen' );
  
  wp_enqueue_script( 'prettyPhoto', get_stylesheet_directory_uri() . '/js/jquery.prettyPhoto.js', array( 'jquery' ) );
  wp_enqueue_style( 'prettyPhoto', get_stylesheet_directory_uri() . '/css/prettyPhoto.css', array(), '', 'screen' );
}
// end added by Moxy




/**
 * Get data from the tailpress.json file.
 *
 * @param mixed $key The key to retrieve.
 *
 * @return mixed|null
 */
function tailpress_get_data( $key = null ) {
	$config = json_decode( file_get_contents( get_stylesheet_directory() . '/tailpress.json' ), true );

	if ( $key === null ) {
		return filter_var_array( $config, FILTER_SANITIZE_STRING );
	}

	$option = filter_var( $config[ $key ], FILTER_SANITIZE_STRING );

	return $option ?? null;
}

/**
 * Theme setup.
 */
function tailpress_setup() {
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	// Switch default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

	// Adding Thumbnail basic support.
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'large', 700, 350, true );
	//add_image_size( 'featured', 700, 450, true );
	
	set_post_thumbnail_size( $width, $height, $crop );

	// Block editor.
	add_theme_support( 'align-wide' );

	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style();

	$tailpress = tailpress_get_data();

	$colors = array_map(
		function ( $color, $hex ) {
			return array(
				'name'  => ucfirst( $color ),
				'slug'  => $color,
				'color' => $hex,
			);
		},
		array_keys( $tailpress['colors'] ),
		$tailpress['colors']
	);

	$font_sizes = array_map(
		function ( $size, $px ) {
			return array(
				'name' => ucfirst( $size ),
				'size' => $px,
				'slug' => $size,
			);
		},
		array_keys( $tailpress['fontSizes'] ),
		$tailpress['fontSizes']
	);

	add_theme_support( 'editor-color-palette', $colors );
	add_theme_support( 'editor-font-sizes', $font_sizes );
}

add_action( 'after_setup_theme', 'tailpress_setup' );

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'tailpress_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The curren item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function tailpress_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'tailpress_nav_menu_add_submenu_class', 10, 3 );


//Sidebars

function spitfire_widgets_init() {
 
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'spitfire' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'spitfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s mb-6">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
 
	register_sidebar( array(
		'name' =>__( 'Front page sidebar', 'spitfire'),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on the static front page template', 'spitfire' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}
 
add_action( 'widgets_init', 'spitfire_widgets_init' );



// Upscale thumbnails when the source image is smaller than the thumbnail size. Retain the aspect ratio.
function alx_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){
	if ( !$crop ) return null; // let the wordpress default function handle this

	$aspect_ratio = $orig_w / $orig_h;
	$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

	$crop_w = round($new_w / $size_ratio);
	$crop_h = round($new_h / $size_ratio);

	$s_x = floor( ($orig_w - $crop_w) / 2 );
	$s_y = floor( ($orig_h - $crop_h) / 2 );

	return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'alx_thumbnail_upscale', 10, 6 );




/**
 * Title         : Aqua Resizer
 * Description   : Resizes WordPress images on the fly
 * Version       : 1.2.2
 * Author        : Syamil MJ
 * Author URI    : http://aquagraphite.com
 * License       : WTFPL - http://sam.zoy.org/wtfpl/
 * Documentation : https://github.com/sy4mil/Aqua-Resizer/
 *
 * @param string  $url      - (required) must be uploaded using wp media uploader
 * @param int     $width    - (required)
 * @param int     $height   - (optional)
 * @param bool    $crop     - (optional) default to soft crop
 * @param bool    $single   - (optional) returns an array if false
 * @param bool    $upscale  - (optional) resizes smaller images
 * @uses  wp_upload_dir()
 * @uses  image_resize_dimensions()
 * @uses  wp_get_image_editor()
 *
 * @return str|array
 */

if(!class_exists('Aq_Resize')) {
	class Aq_Exception extends Exception {}

	class Aq_Resize
	{
		/**
		 * The singleton instance
		 */
		static private $instance = null;

		/**
		 * Should an Aq_Exception be thrown on error?
		 * If false (default), then the error will just be logged.
		 */
		public $throwOnError = false;

		/**
		 * No initialization allowed
		 */
		private function __construct() {}

		/**
		 * No cloning allowed
		 */
		private function __clone() {}

		/**
		 * For your custom default usage you may want to initialize an Aq_Resize object by yourself and then have own defaults
		 */
		static public function getInstance() {
			if(self::$instance == null) {
				self::$instance = new self;
			}

			return self::$instance;
		}

		/**
		 * Run, forest.
		 */
		public function process( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
			try {
				// Validate inputs.
				if (!$url)
					throw new Aq_Exception('$url parameter is required');
				if (!$width)
					throw new Aq_Exception('$width parameter is required');

				// Caipt'n, ready to hook.
				if ( true === $upscale ) add_filter( 'image_resize_dimensions', array($this, 'aq_upscale'), 10, 6 );

				// Define upload path & dir.
				$upload_info = wp_upload_dir();
				$upload_dir = $upload_info['basedir'];
				$upload_url = $upload_info['baseurl'];
				
				$http_prefix = "http://";
				$https_prefix = "https://";
				$relative_prefix = "//"; // The protocol-relative URL
				
				/* if the $url scheme differs from $upload_url scheme, make them match 
				   if the schemes differe, images don't show up. */
				if(!strncmp($url,$https_prefix,strlen($https_prefix))){ //if url begins with https:// make $upload_url begin with https:// as well
					$upload_url = str_replace($http_prefix,$https_prefix,$upload_url);
				}
				elseif(!strncmp($url,$http_prefix,strlen($http_prefix))){ //if url begins with http:// make $upload_url begin with http:// as well
					$upload_url = str_replace($https_prefix,$http_prefix,$upload_url);      
				}
				elseif(!strncmp($url,$relative_prefix,strlen($relative_prefix))){ //if url begins with // make $upload_url begin with // as well
					$upload_url = str_replace(array( 0 => "$http_prefix", 1 => "$https_prefix"),$relative_prefix,$upload_url);
				}
				

				// Check if $img_url is local.
				if ( false === strpos( $url, $upload_url ) )
					throw new Aq_Exception('Image must be local: ' . $url);

				// Define path of image.
				$rel_path = str_replace( $upload_url, '', $url );
				$img_path = $upload_dir . $rel_path;

				// Check if img path exists, and is an image indeed.
				if ( ! file_exists( $img_path ) or ! getimagesize( $img_path ) )
					throw new Aq_Exception('Image file does not exist (or is not an image): ' . $img_path);

				// Get image info.
				$info = pathinfo( $img_path );
				$ext = $info['extension'];
				list( $orig_w, $orig_h ) = getimagesize( $img_path );

				// Get image size after cropping.
				$dims = image_resize_dimensions( $orig_w, $orig_h, $width, $height, $crop );
				$dst_w = $dims[4];
				$dst_h = $dims[5];

				// Return the original image only if it exactly fits the needed measures.
				if ( ! $dims || ( ( ( null === $height && $orig_w == $width ) xor ( null === $width && $orig_h == $height ) ) xor ( $height == $orig_h && $width == $orig_w ) ) ) {
					$img_url = $url;
					$dst_w = $orig_w;
					$dst_h = $orig_h;
				} else {
					// Use this to check if cropped image already exists, so we can return that instead.
					$suffix = "{$dst_w}x{$dst_h}";
					$dst_rel_path = str_replace( '.' . $ext, '', $rel_path );
					$destfilename = "{$upload_dir}{$dst_rel_path}-{$suffix}.{$ext}";

					if ( ! $dims || ( true == $crop && false == $upscale && ( $dst_w < $width || $dst_h < $height ) ) ) {
						// Can't resize, so return false saying that the action to do could not be processed as planned.
						throw new Aq_Exception('Unable to resize image because image_resize_dimensions() failed');
					}
					// Else check if cache exists.
					elseif ( file_exists( $destfilename ) && getimagesize( $destfilename ) ) {
						$img_url = "{$upload_url}{$dst_rel_path}-{$suffix}.{$ext}";
					}
					// Else, we resize the image and return the new resized image url.
					else {

						$editor = wp_get_image_editor( $img_path );

						if ( is_wp_error( $editor ) || is_wp_error( $editor->resize( $width, $height, $crop ) ) ) {
							throw new Aq_Exception('Unable to get WP_Image_Editor: ' . 
												   $editor->get_error_message() . ' (is GD or ImageMagick installed?)');
						}

						$resized_file = $editor->save();

						if ( ! is_wp_error( $resized_file ) ) {
							$resized_rel_path = str_replace( $upload_dir, '', $resized_file['path'] );
							$img_url = $upload_url . $resized_rel_path;
						} else {
							throw new Aq_Exception('Unable to save resized image file: ' . $editor->get_error_message());
						}

					}
				}

				// Okay, leave the ship.
				if ( true === $upscale ) remove_filter( 'image_resize_dimensions', array( $this, 'aq_upscale' ) );

				// Return the output.
				if ( $single ) {
					// str return.
					$image = $img_url;
				} else {
					// array return.
					$image = array (
						0 => $img_url,
						1 => $dst_w,
						2 => $dst_h
					);
				}

				return $image;
			}
			catch (Aq_Exception $ex) {
				error_log('Aq_Resize.process() error: ' . $ex->getMessage());

				if ($this->throwOnError) {
					// Bubble up exception.
					throw $ex;
				}
				else {
					// Return false, so that this patch is backwards-compatible.
					return false;
				}
			}
		}

		/**
		 * Callback to overwrite WP computing of thumbnail measures
		 */
		function aq_upscale( $default, $orig_w, $orig_h, $dest_w, $dest_h, $crop ) {
			if ( ! $crop ) return null; // Let the wordpress default function handle this.

			// Here is the point we allow to use larger image size than the original one.
			$aspect_ratio = $orig_w / $orig_h;
			$new_w = $dest_w;
			$new_h = $dest_h;

			if ( ! $new_w ) {
				$new_w = intval( $new_h * $aspect_ratio );
			}

			if ( ! $new_h ) {
				$new_h = intval( $new_w / $aspect_ratio );
			}

			$size_ratio = max( $new_w / $orig_w, $new_h / $orig_h );

			$crop_w = round( $new_w / $size_ratio );
			$crop_h = round( $new_h / $size_ratio );

			$s_x = floor( ( $orig_w - $crop_w ) / 2 );
			$s_y = floor( ( $orig_h - $crop_h ) / 2 );

			return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
		}
	}
}





if(!function_exists('aq_resize')) {

	/**
	 * This is just a tiny wrapper function for the class above so that there is no
	 * need to change any code in your own WP themes. Usage is still the same :)
	 */
	function aq_resize( $url, $width = null, $height = null, $crop = null, $single = true, $upscale = false ) {
		/* WPML Fix */
		if ( defined( 'ICL_SITEPRESS_VERSION' ) ){
			global $sitepress;
			$url = $sitepress->convert_url( $url, $sitepress->get_default_language() );
		}
		/* WPML Fix */

		$aq_resize = Aq_Resize::getInstance();
		return $aq_resize->process( $url, $width, $height, $crop, $single, $upscale );
	}
}


// END OF AQUA RESIZER

// get all of the images attached to the current post
function get_gallery_images() {
	global $post;

	$photos = get_children( array('post_parent' => $post->ID, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID') );

	$galleryimages = array();

	if ($photos) {
		foreach ($photos as $photo) {
			// get the correct image html for the selected size
			$galleryimages[] = wp_get_attachment_url($photo->ID);
		}
	}
	return $galleryimages;
}

add_filter('widget_text', 'do_shortcode');


function custom_excerpt_length($length)
{
return 30;
}
add_filter('excerpt_length', 'custom_excerpt_length');

/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	if ( ! is_single('listing') ) {
		$more = sprintf( '<a class="read-more text-xs text-indigo-600 hover:underline font-bold" href="%1$s">%2$s</a>',
			get_permalink( get_the_ID() ),
			__( '&nbsp;&nbsp;...Read More', 'textdomain' )
		);
	}
 
	return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Add an OPTIONS Page for the admin 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

