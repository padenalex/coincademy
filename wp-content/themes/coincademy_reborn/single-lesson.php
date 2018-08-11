<?php /* Template Name: Single Lesson static */ get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<?php
	$object_terms = wp_get_object_terms($lesson->get_parent_course(), 'course_cat')[0];
	?>
	
	<header class="article-header <?php echo strtolower($object_terms->name); ?>">
        <div class="max-width">
            <div class="pure-g">
                <div class="pure-u-1 pure-u-md-2-3 pure-u-lg-2-3 title">
					<a href="<?php echo get_permalink( $lesson->get_parent_course() ); ?>" class="arrow-btn back parent-course">Back to: <?php echo get_the_title( $lesson->get_parent_course() ); ?></a>
                    <h1 class="lesson-title" title="<?php the_title(); ?>"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </header>
    
    <article id="lesson-content" <?php post_class('max-width content-section layout-content-fs'); ?>>
    
    	<section class="content-2-3">
    		<div class="col-left">
    		<?php the_content(); // Dynamic Content ?>
    	</section>
    	

	<div class="sidebar-1-3" id="nav-sidebar-holder>
    	<aside class="nav-sidebar" id="nav-sidebar">
            <h4>Course Navigation</h4>
    		<!-- <button id="fullscreen-mode-sidebar">fullscreen</button> -->
    		<!-- <button id="fullscreen-split-mode-sidebar">fs split</button> -->
    		<div id="sidebar-slide">
    		  <?php echo do_shortcode('[lifterlms_course_outline collapse="true"]'); ?>
    		</div>
    		<div id="sidebar-slideout"></div>
    		<?php if(llms_is_user_enrolled( get_current_user_id(), $post->ID )) { 
    		    llms_get_template( 'course/progress-bar.php', array(
    		        'post' => $lesson->get_parent_course()
    		    ) ); 
    		}?>
    		<?php lifterlms_template_lesson_navigation(); ?>
    	</aside>
    </div>
    	
    </article>


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article class="max-width">

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


<?php get_sidebar(); ?>

<script>
//When the user scrolls the page, execute myFunction 
window.addEventListener('scroll', stickySidebar);

// Get the navbar
var navbar = document.getElementById("nav-sidebar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop+90;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickySidebar() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("fixed")
  } else {
    navbar.classList.remove("fixed");
  }
}

var upbutton = document.getElementById("sidebar-slideout");
upbutton.addEventListener('click', toggleSlideout);

var slideout = document.getElementById("sidebar-slide");

function toggleSlideout() {
	slideout.classList.toggle("displayed");
}

var setMode = String("<?php echo $_GET['layout-mode']; ?>");
var classes = ['layout-fullscreen','layout-content-fs','layout-fullscreen-split'];
var contentScreen = document.getElementById('lesson-content');

if (setMode && classes.includes(setMode)) {
	toggleView(setMode);
}

var fsMode = document.getElementById('fullscreen-mode');
var defaultMode = document.getElementById('default-mode');
var splitMode = document.getElementById('fullscreen-split-mode');
var fsModeS = document.getElementById('fullscreen-mode-sidebar');
var splitModeS = document.getElementById('fullscreen-split-mode-sidebar');

var navBarHrefs = document.getElementById('nav-sidebar-holder').getElementsByTagName('a');

for (var i = 0; i < navBarHrefs.length; i++) {
	navBarHrefs[i].addEventListener('click', function() { catchHref(this); });
}

function catchHref(elem) {
	if(setMode){
		elem.href = elem.href+'?layout-mode='+setMode;
	}
}

fsMode.addEventListener('click', function() {toggleView('layout-fullscreen');});
defaultMode.addEventListener('click', function() {toggleView('layout-content-fs');});
splitMode.addEventListener('click', function() {toggleView('layout-fullscreen-split');});
fsModeS.addEventListener('click', function() {toggleView('layout-fullscreen');});
splitModeS.addEventListener('click', function() {toggleView('layout-fullscreen-split');});

function toggleView(classAdd) {
	classes.forEach(function(activeClass){
		if 	(activeClass != classAdd) {
			contentScreen.classList.remove(activeClass);
		} else {
			contentScreen.classList.add(activeClass);
			setMode = activeClass;	
		}
	});
}

</script>

<?php get_footer(); ?>
