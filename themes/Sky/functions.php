<?php 
add_action( 'after_setup_theme', 'et_setup_theme' );
if ( ! function_exists( 'et_setup_theme' ) ){
	function et_setup_theme(){
		global $themename, $shortname;
		$themename = "Sky";
		$shortname = "sky";
		
		require_once(TEMPLATEPATH . '/epanel/custom_functions.php'); 

		require_once(TEMPLATEPATH . '/includes/functions/comments.php'); 

		load_theme_textdomain('Sky',get_template_directory().'/lang');

		require_once(TEMPLATEPATH . '/epanel/options_sky.php');

		require_once(TEMPLATEPATH . '/epanel/core_functions.php'); 

		require_once(TEMPLATEPATH . '/epanel/post_thumbnails_sky.php');
		
		require_once(TEMPLATEPATH . '/includes/additional_functions.php'); 
		
		add_theme_support( 'automatic-feed-links' );
	}
}

add_action('wp_head','et_portfoliopt_additional_styles',100);
function et_portfoliopt_additional_styles(){ ?>
	<style type="text/css">
		#et_pt_portfolio_gallery { margin-left: -41px; margin-right: -51px; }
		.et_pt_portfolio_item { margin-left: 9px; }
		.et_portfolio_small { margin-left: -40px !important; }
		.et_portfolio_small .et_pt_portfolio_item { margin-left: 14px !important; }
		.et_portfolio_large { margin-left: -26px !important; }
		.et_portfolio_large .et_pt_portfolio_item { margin-left: 11px !important; }
	</style>
<?php }

function et_register_main_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' )
		)
	);
}
add_action( 'init', 'et_register_main_menus' );

add_action( 'wp_enqueue_scripts', 'et_load_sky_scripts' );
function et_load_sky_scripts(){
	if ( !is_admin() ){
		$template_dir = get_template_directory_uri();
		
		wp_enqueue_script('easing', $template_dir . '/js/jquery.easing.1.3.js', array('jquery'), '1.0', true);
		wp_enqueue_script('cycle', $template_dir . '/js/jquery.cycle.all.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('background_position', $template_dir . '/js/jquery.backgroundPosition.js', array('jquery'), '1.0', true);
		wp_enqueue_script('jquery_address', $template_dir . '/js/jquery.address-1.4.min.js', array('jquery'), '1.0', true);
		wp_enqueue_script('custom_script', $template_dir . '/js/custom.js', array('jquery'), '1.0', true);
		
		$data = array( 'site_url' => trailingslashit( site_url() ), 'theme_url' => $template_dir, 'enable_ajax' => get_option('sky_enable_ajax','on') );
		wp_localize_script( 'custom_script', 'et_site_data', $data );
	}
}

if ( ! function_exists( 'et_list_pings' ) ){
	function et_list_pings($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li id="comment-<?php comment_ID(); ?>"><?php comment_author_link(); ?> - <?php comment_excerpt(); ?>
	<?php }
}

add_action( 'et_before_stylesheet', 'et_add_google_fonts' );
function et_add_google_fonts(){
	echo '<link href="http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911" rel="stylesheet" type="text/css" />';
} ?>