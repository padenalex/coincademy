<?php
/**
 * Template for the Course Syllabus Displayed on individual course pages
 *
 * @author 		LifterLMS
 * @package 	LifterLMS/Templates
 * @since       1.0.0
 * @version     3.0.0 - refactored for sanity's sake
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

global $post;

$course = new LLMS_Course( $post );

// retrieve sections to use in the template
$sections = $course->get_sections( 'posts' );
?>
	<section class="section syllabus-section <?php echo strtolower(wp_get_object_terms($post->ID, 'course_cat')[0]->name); ?> <?php echo 'gradient-'.strtolower(wp_get_object_terms($post->ID, 'course_cat')[0]->name); ?>">
	<?php if ( ! $sections ) : ?>
		<div class="max-width" id="max-width-hold">	
			<?php _e( 'This course does not have any sections.', 'lifterlms' ); ?>
		</div>	
	<?php else : ?>
		<div class="max-width">	
			<h2 style="margin: 0px; margin-bottom: 40px; color: #FFFFFF;">Course Syllabus</h2>
		</div>
		<div class="syllabus-max-width" id="max-width-hold">
    		<div class="syllabus-holder" id="syll-holder">
    			<?php $sectionnumber = 1; ?>
        		<?php foreach ( $sections as $s ) :
        			$section = new LLMS_Section( $s->ID ); ?>
        			<div class="syllabus-card">
                		<?php if ( apply_filters( 'llms_display_outline_section_titles', true ) ) : ?>
                				<span>SECTION #<?php echo $sectionnumber; $sectionnumber++; ?></span>
                				<h3><?php echo get_the_title( $s->ID ); ?></h3>
                		<?php endif; ?>
                		
                		<div class="syllabus-lessons">
                			<?php $lessons = $section->get_children_lessons();
                			if ( $lessons ) : ?>
                			
                				<ul class="syll-lessons">
                
                    				<?php foreach ( $lessons as $l ) : ?>
                    
                    					<?php llms_get_template( 'course/lesson-preview.php', array(
                    						'lesson' => new LLMS_Lesson( $l->ID ),
                    						'total_lessons' => count( $lessons ),
                    					) ); ?>
                    
                    				<?php endforeach; ?>
                    				
                				</ul>
                
                			<?php else : ?>
                
                				<?php _e( 'This section does not have any lessons.', 'lifterlms' ); ?>
                
                			<?php endif; ?>
                		</div>
            		</div>
            	<?php endforeach; ?>
            		
        		
        	</div>
		</div>
	<?php endif; ?>
	</section>

