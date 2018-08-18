<?php
/*
 *  Author: Todd Motto | @toddmotto
 *  URL: html5blank.com | @html5blank
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

// Load any external files you have here


//LIFTERLMS FUNCTIONS

/**
 * Redirect users to an alternate URL instead of their student dashboard when they login
 * using the form on the Student dashboard page
 * @param    null     $url    url is not set by default and redirects students back to their dashboard
 * @return   string
 */
function my_llms_student_dashboard_login_redirect( $url ) {
    return '/dashboard/';
}
add_filter( 'llms_student_dashboard_login_redirect', 'my_llms_student_dashboard_login_redirect' );



function remove_single_course_actions() {
    remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_length', 10 );
    remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_single_difficulty', 20 );
    remove_action( 'lifterlms_single_course_after_summary', 'lifterlms_template_course_author', 40 );
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_pricing_table', 60);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_course_progress', 60);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_meta_wrapper_start', 5);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_meta_wrapper_end', 50);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_course_categories', 30);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_course_tags', 35);
    remove_action('lifterlms_single_lesson_after_summary', 'lifterlms_template_lesson_navigation', 20);
    remove_action('lifterlms_single_course_after_summary', 'lifterlms_template_single_syllabus', 90);
}

add_action( 'init', 'remove_single_course_actions', 15 );

add_action('coincademy_enroll_action', 'lifterlms_template_pricing_table', 10);
add_action('coincademy_enroll_action', 'lifterlms_template_single_course_progress', 10);

function remove_dashboard_actions() {
    remove_action('lifterlms_student_dashboard_header', 'lifterlms_template_student_dashboard_title', 20);
    remove_action('lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_achievements', 20);
    remove_action('lifterlms_student_dashboard_index', 'lifterlms_template_student_dashboard_my_memberships', 40);
}

add_action('init', 'remove_dashboard_actions', 15);

function dashboard_tabs_filter($tabs) {
    unset( $tabs['view-achievements'] );
    unset( $tabs['redeem-voucher'] );
    unset( $tabs['orders'] );
    unset( $tabs['notifications'] );
    unset( $tabs['view-memberships'] );
    unset( $tabs['signout'] );
    return $tabs;
}

add_filter('llms_get_student_dashboard_tabs', 'dashboard_tabs_filter');

function remove_single_lesson_actions() {
    
    remove_action( 'lifterlms_single_lesson_before_summary', 'lifterlms_template_single_parent_course', 10 );
    
}
add_action( 'init', 'remove_single_lesson_actions', 15 );


if ( ! function_exists( 'lifterlms_course_continue_button' ) ) {
    
    function lifterlms_course_continue_button( $post_id = null, $student = null, $progress = null ) {
        
        if ( ! $post_id ) {
            $post_id = get_the_ID();
            if ( ! $post_id ) {
                return '';
            }
        }
        
        $course = llms_get_post( $post_id );
        if ( ! $course || ! is_a( $course, 'LLMS_Post_Model' ) ) {
            return '';
        }
        if ( in_array( $course->get( 'type' ), array( 'lesson', 'quiz' ) ) ) {
            $course = llms_get_post_parent_course( $course->get( 'id' ) );
            if ( ! $course ) {
                return '';
            }
        }
        
        if ( ! $student ) {
            $student = llms_get_student();
        }
        if ( ! $student || ! $student->exists() || ! llms_is_user_enrolled( $student->get_id(), $course->get( 'id' ) ) ) {
            return '';
        }
        
        if ( is_null( $progress ) ) {
            $progress = $student->get_progress( $course->get( 'id' ), 'course' );
        }
        
        if ( 100 == $progress ) {
            
            echo '<p class="llms-course-complete-text">' . apply_filters( 'llms_course_continue_button_complete_text', __( '<i class="fa fa-check-circle"></i> Course Complete', 'lifterlms' ), $course ) . '</p>';
            
        } else {
            
            $lesson = apply_filters( 'llms_course_continue_button_next_lesson', $student->get_next_lesson( $course->get( 'id' ) ), $course, $student );
            if ( $lesson ) { ?>

				<a class="enroll-btn" href="<?php echo get_permalink( $lesson ); ?>">

					<?php if ( 0 == $progress ) : ?>

						<?php _e( 'Get Started', 'lifterlms' ); ?>

					<?php else : ?>
						
						<?php echo 'Continue this course ('.$progress.'% complete)';?>

					<?php endif; ?>

				</a>

			<?php }
		}

	}
}// End if().



/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('custom-size', 700, 200, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

    // Add Support for Custom Backgrounds - Uncomment below if you're going to use
    /*add_theme_support('custom-background', array(
	'default-color' => 'FFF',
	'default-image' => get_template_directory_uri() . '/img/bg.jpg'
    ));*/

    // Add Support for Custom Header - Uncomment below if you're going to use
    /*add_theme_support('custom-header', array(
	'default-image'			=> get_template_directory_uri() . '/img/headers/default.jpg',
	'header-text'			=> false,
	'default-text-color'		=> '000',
	'width'				=> 1000,
	'height'			=> 198,
	'random-default'		=> false,
	'wp-head-callback'		=> $wphead_cb,
	'admin-head-callback'		=> $adminhead_cb,
	'admin-preview-callback'	=> $adminpreview_cb
    ));*/

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('html5blank', get_template_directory() . '/languages');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// HTML5 Blank navigation
function cc_header_menu()
{
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
	    'container_class' => 'menu-{menu slug}-container',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'items_wrap'      => '<ul class="menu-list" id="top-nav-menu">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
		)
	);
}

// Load HTML5 Blank scripts (header.php)
function cc_script_enqueue()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_register_script('html5blankscripts', get_template_directory_uri() . '/js/general.js', '1.0.3'); // Custom scripts
        wp_enqueue_script('html5blankscripts'); // Enqueue it!
    }
    
    if(is_course()) {
        wp_register_script('scrollbar', get_template_directory_uri() . '/js/jquery.overlayScrollbars.min.js', array('jquery'), '1.0.3'); // Custom scripts
        wp_enqueue_script('scrollbar'); // Enqueue it!
        
        wp_register_script('scrollsyll', get_template_directory_uri() . '/js/slide-syll.js', array('scrollbar'), '1.0.4'); // Custom scripts
        wp_enqueue_script('scrollsyll'); // Enqueue it!
    }
}


// Load HTML5 Blank styles
function cc_style_enqueue()
{
    wp_register_style('cc_general_css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.7', 'all');
    wp_enqueue_style('cc_general_css'); // Enqueue it!
    
    if(is_course()) {
        wp_register_style('scrollbar', get_template_directory_uri() . '/css/OverlayScrollbars.min.css', array(), '1.0.5', 'all');
        wp_enqueue_style('scrollbar'); // Enqueue it!
    }
}

// Register HTML5 Blank Navigation
function register_html5_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'html5blank'), // Main Navigation
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'html5blank'),
        'description' => __('Description for this widget-area...', 'html5blank'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style()
{
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function html5wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function html5wp_index($length) // Create 20 Word Callback for Index page Excerpts, call using html5wp_excerpt('html5wp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using html5wp_excerpt('html5wp_custom_post');
function html5wp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function html5wp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function html5_blank_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'html5blank') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function html5_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function html5blankcomments($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_footer', 'cc_script_enqueue'); // Add Custom Scripts to wp_head
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'cc_style_enqueue'); // Add Theme Stylesheet
add_action('init', 'register_html5_menu'); // Add HTML5 Blank Menu
add_action('init', 'create_post_type_html5'); // Add our HTML5 Blank Custom Post Type
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'html5wp_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'html5_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'html5_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

// Shortcodes
add_shortcode('cc_syllabus', 'cc_syllabus'); // You can place [html5_shortcode_demo] in Pages, Posts now.
add_shortcode('cc_section', 'cc_section');
add_shortcode('cc_section_gradient', 'cc_section_gradient');
add_shortcode('cc_section_grey', 'cc_section_grey');
add_shortcode('cc_heading', 'cc_title');
add_shortcode('cc_textarea', 'cc_textarea');
add_shortcode('cc_cta', 'cc_cta');

// Shortcodes above would be nested like this -
// [html5_shortcode_demo] [html5_shortcode_demo_2] Here's the page title! [/html5_shortcode_demo_2] [/html5_shortcode_demo]

/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{
    register_taxonomy_for_object_type('category', 'html5-blank'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'html5-blank');
    register_post_type('html5-blank', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('HTML5 Blank Custom Post', 'html5blank'), // Rename these to suit
            'singular_name' => __('HTML5 Blank Custom Post', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New HTML5 Blank Custom Post', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit HTML5 Blank Custom Post', 'html5blank'),
            'new_item' => __('New HTML5 Blank Custom Post', 'html5blank'),
            'view' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'view_item' => __('View HTML5 Blank Custom Post', 'html5blank'),
            'search_items' => __('Search HTML5 Blank Custom Post', 'html5blank'),
            'not_found' => __('No HTML5 Blank Custom Posts found', 'html5blank'),
            'not_found_in_trash' => __('No HTML5 Blank Custom Posts found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability

function cc_syllabus($atts, $content = null)
{
    ob_start();
    get_template_part('lifterlms/course/syllabus'); // do_shortcode allows for nested Shortcodes
    return ob_get_clean();
}

function cc_section($atts, $content = null)
{
    $section = "<div class='section max-width'>";
    $section .= do_shortcode($content);
    $section .= "</div>";
    return $section;
}

function cc_section_gradient($atts, $content = null)
{
    global $post;
    $gradient = "<div class='section ".strtolower(wp_get_object_terms($post->ID, "course_cat")[0]->name)." gradient-".strtolower(wp_get_object_terms($post->ID, "course_cat")[0]->name)."'>";
    $gradient .= "<div class='max-width'>";
    $gradient .= do_shortcode($content);
    $gradient .= "</div></div>";
    return $gradient;
}

function cc_section_grey($atts, $content = null)
{
    $section = "<div class='section section-grey'><div class='max-width'>";
    $section .= do_shortcode($content);
    $section .= "</div></div>";
    return $section;
}

function cc_title($atts, $content = null) {
    $atts = shortcode_atts(array('heading'=>null, 'subheading'=>null), $atts);
    $title = "<div class='title'>";
    if ($atts['subheading'] != null) {
        $title .= '<span>'.strtoupper($atts[subheading]).'</span>';
    }
    
    if ($atts['heading'] != null) {
        $title .= '<h2>'.$atts[heading].'</h2>';
    }
    $title .= '</div>';
    return $title;
}

function cc_textarea($atts, $content = null) {
    return '<p>'.do_shortcode($content).'</p>';
}

function cc_cta($atts, $content = null) {
    global $post;
    $cat = strtolower(wp_get_object_terms($post->ID, "course_cat")[0]->name);
    $cta = '<section class="max-width">
            <div class="cta-hold '.$cat.'">
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2">
                    <div class="heading">This is an example cta</div>
                    <div class="subheading">MOre example rejah</div>
                </div>
                <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-2 buttons">
                    <button class="cta-opaque"> wowzer </button>
                    <button class="cta-white">wowzer indeed</button>
                </div>
            </div>
        </section>';
    return $cta;
}

// Shortcode Demo with simple <h2> tag
function html5_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}


// added to remove warning about theme not fully supported by LifterLMS
/**
 * Declare explicit theme support for LifterLMS course and lesson sidebars
 * @return   void
 */
function my_llms_theme_support(){
    add_theme_support( 'lifterlms-sidebars' );
}
add_action( 'after_setup_theme', 'my_llms_theme_support' );


?>