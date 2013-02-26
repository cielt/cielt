<?php
//update_option('siteurl','http://localhost:8888/cielt');
//update_option('home','http://localhost:8888/cielt');
/**
* Starkers functions and definitions
*
* For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
*
* @package 	WordPress
* @subpackage 	Cielt
* @since 		Cielt 0.1
*/

/* ========================================================================================================================

Required external files

======================================================================================================================== */

require_once( 'external/starkers-utilities.php' );

/* ========================================================================================================================

Theme specific settings

Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme

======================================================================================================================== */

//add_theme_support('post-thumbnails');
if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 176, 128, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'folio-thumb', 240, 180, true ); //236 pixels wide (and unlimited height)
}

register_nav_menus(array('primary' => 'Primary Navigation'));


/* ========================================================================================================================

Actions and Filters

======================================================================================================================== */

add_action( 'wp_enqueue_scripts', 'script_enqueuer' );

add_filter( 'body_class', 'add_slug_to_body_class' );
//limit length of excerpt to 20
function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

//'read more' link
function new_excerpt_more($more) {
	global $post;
	return ' <a href="'. get_permalink($post->ID) . '"><span class="etc"> ... </span></a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

//add custom post types to category, tag queries
add_filter('pre_get_posts', 'query_post_type');
function query_post_type($query) {
	if(is_category() || is_tag()) {
		$post_type = get_query_var('post_type');
		if($post_type)
			$post_type = $post_type;
		else
			$post_type = array('post', 'folio_project', 'drawing'); // replace cpt to your custom post type
		$query->set('post_type',$post_type);
		return $query;
	}
}


/* ========================================================================================================================

Custom Post Types - include custom post types and taxonimies here e.g.

e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

======================================================================================================================== */

// ADDING CUSTOM POST TYPE
add_action( 'init', 'create_project_post_type' );
function create_project_post_type() {
	register_post_type( 'folio_project',
	array(
		'labels' => array(
			'name' => __( 'Projects' ),
			'singular_name' => __( 'Project' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => '/projects'),
			)
			);

			register_taxonomy_for_object_type('category', 'folio_project');
			register_taxonomy_for_object_type('post_tag', 'folio_project');
		}



add_action( 'init', 'create_drawing_post_type' );
function create_drawing_post_type() {
	   register_post_type( 'drawing',
	   array(
	   	'labels' => array(
	   		'name' => __( 'Drawings' ),
	   		'singular_name' => __( 'Drawing' )
	   		),
	   		'public' => true,
	   		'has_archive' => true,
	   		'rewrite' => array('slug' => '/drawings'),
	   		)
	   		);
       
	   		register_taxonomy_for_object_type('category', 'drawing');
	   		register_taxonomy_for_object_type('post_tag', 'drawing');
	   	}



/* ========================================================================================================================

Scripts

======================================================================================================================== */

/**
* Add scripts via wp_head()
*
* @return void
* @author Keir Whitaker
*/

function script_enqueuer() {
	wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery','jquery-ui-core') );
	wp_enqueue_script( 'site' );

	//plugins
	wp_register_script( 'imagesloaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'imagesloaded' );

	wp_register_script( 'masonry', get_template_directory_uri() . '/js/jquery.masonry.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'masonry' );

	wp_register_script( 'cycle', get_template_directory_uri() . '/js/jquery.cycle.all.js', array( 'jquery' ) );
	wp_enqueue_script( 'cycle' );
	
	wp_register_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'waypoints' );

	wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
	wp_enqueue_style( 'screen' );
}	



function les_favicon() { ?>
<link rel="shortcut icon" href="<?php echo(get_template_directory_uri().'/favicon.ico'); ?>" >
<?php }

add_action('wp_head', 'les_favicon');

/* ========================================================================================================================

Comments

======================================================================================================================== */

/**
* Custom callback for outputting comments 
*
* @return void
* @author Keir Whitaker
*/
function starkers_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment; 
	?>
	<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif; ?>
	</li>
	<?php 
}