<?php
/**
* Cielt functions and definitions
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
			$post_type = array('post', 'page', 'folio_project', 'drawing'); // replace cpt to your custom post type
		$query->set('post_type',$post_type);
		return $query;
	}
}


/* ========================================================================================================================

Custom Post Types - include custom post types and taxonimies here e.g.

e.g. require_once( 'custom-post-types/your-custom-post-type.php' );

======================================================================================================================== */

/* PROJECT custom post type */
add_action('init', 'register_project', 1); // Set priority to avoid plugin conflicts
function register_project() { // A unique name for our function
 	$labels = array( // Used in the WordPress admin
		'name' => _x('Projects', 'post type general name'),
		'singular_name' => _x('Project', 'post type singular name'),
		'add_new' => _x('Add New', 'Project'),
		'add_new_item' => __('Add New Project'),
		'edit_item' => __('Edit Project'),
		'new_item' => __('New Project'),
		'view_item' => __('View Project'),
		'search_items' => __('Search Projects'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
	$args = array(
		'labels' => $labels, // Set above
		'public' => true, // Make it publicly accessible
		'rewrite' => array('slug' => '/projects'),
		'hierarchical' => false, // No parents and children here
		'menu_position' => 5, // Appear right below "Posts"
		'has_archive' => true, // Activate the archive
		'supports' => array('title','editor','comments','thumbnail')
	);
	register_post_type( 'folio_project', $args ); // Create the post type, use options above
	
	register_taxonomy_for_object_type('category', 'folio_project');
	register_taxonomy_for_object_type('post_tag', 'folio_project');
	
	flush_rewrite_rules();
}

/* DRAWING custom post type */
add_action( 'init', 'register_drawing' );
function register_drawing() {
	$labels = array( // Used in the WordPress admin
		'name' => _x('Drawings', 'post type general name'),
		'singular_name' => _x('Drawing', 'post type singular name'),
		'add_new' => _x('Add New', 'Drawing'),
		'add_new_item' => __('Add New Drawing'),
		'edit_item' => __('Edit Drawing'),
		'new_item' => __('New Drawing'),
		'view_item' => __('View Drawing'),
		'search_items' => __('Search Drawings'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash')
	);
	$args = array(
		'labels' => $labels, // Set above
		'public' => true, // Make it publicly accessible
		'rewrite' => array('slug' => '/drawings'),
		'hierarchical' => false, // No parents and children here
		'menu_position' => 6, // Appear right below "Posts"
		'has_archive' => true, // Activate the archive
		'supports' => array('title','editor','comments','thumbnail')
	);
	
	register_post_type( 'drawing', $args);
       
	register_taxonomy_for_object_type('category', 'drawing');
	register_taxonomy_for_object_type('post_tag', 'drawing');
	
	flush_rewrite_rules();
}

/* PROJECT, DRAWING : metaboxes 
   added via custom field sets */ 


/* PROJECT custom taxonomy : topic */
$labels_topics = array(
	'name' => _x( 'Topics', 'taxonomy general name' ),
	'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
	'search_items' =>  __( 'Search Topics' ),
	'all_items' => __( 'All Topics' ),
	'parent_item' => __( 'Parent Topic' ),
	'parent_item_colon' => __( 'Parent Topic:' ),
	'edit_item' => __( 'Edit Topic' ),
	'update_item' => __( 'Update Topic' ),
	'add_new_item' => __( 'Add New Topic' ),
	'new_item_name' => __( 'New Topic Name' ),
);

register_taxonomy(
	'topics', // The name of the custom taxonomy
	array( 'folio_project', 'drawing' ), // Associate it with our custom post type
	array(
		'hierarchical' => true,
		'rewrite' => array(
			'slug' => 'topic', // Use "topic" instead of "topics" in permalinks
			'hierarchical' => true // Allows sub-topics to appear in permalinks
			),
		'labels' => $labels_topics
		)
	);





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

	//wp_register_style( 'screen', get_template_directory_uri().'/style.css', '', '', 'screen' );
	//wp_enqueue_style( 'screen' );
}	

add_action('init', 'les_enqueue_less');
function les_enqueue_less() {
	wp_enqueue_style('grid-less', get_template_directory_uri().'/css/grid.less');
	wp_enqueue_style('les-less', get_template_directory_uri().'/css/les.less');
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