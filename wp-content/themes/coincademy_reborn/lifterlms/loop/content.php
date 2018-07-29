<?php
/**
 * The Template for displaying all single courses.
 *
 * @author 		codeBOX
 * @package 	LifterLMS/Templates
 * @since       1.0.0
 * @version     3.14.0
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
global $post;
$course = new LLMS_Course($post);
?>

<div <?php 
$object_terms = wp_get_object_terms($post->ID, 'course_cat')[0];
post_class('type-tile type-tile-express course-tile '.strtolower($object_terms->name).' llms-loop-item'); ?> >
    <span class="category-title"><?php echo "<a href='".get_term_link( $object_terms->slug, 'course_cat' )."'>".strtoupper($object_terms->name)."</a>"; ?><?php if (has_term('express','course_tag')) {
        ?> <img src="<?php echo get_template_directory_uri().'/img/express_'.strtolower($object_terms->name).'.png';?>"> <?php
    }
    ?></span>
    <a href="<?php echo get_the_permalink(); ?>">
    <span class="course-title"><?php the_title(); ?></span>
    <div class="course-description"><?php echo wp_trim_words(get_post_meta( get_the_ID(), 'excerpt', true ), 15, '...'); ?></div>
    <?php 
    
    if ( 'course' == $post->post_type ) :
        if ( ! llms_is_user_enrolled( get_current_user_id(), $course->id ) ) : ?>
			<button class="arrow-btn">Enroll now</button>
		<?php
		else :
			$course_progress = $course->get_percent_complete();
        ?>
			<button class="arrow-btn">Continue course (<?php echo $course_progress; ?>%)</button>
<?php 		
		endif;
	endif;
    ?>
    
    <span class="duration"><?php echo $course->get('length'); ?></span></a>
</div>