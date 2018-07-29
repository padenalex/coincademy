<?php
/**
 * Display a course progress bar and
 * a button for the next incomplete lesson in the course
 * @since    1.0.0
 * @version  3.11.1
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

global $post;

if ( ! llms_is_user_enrolled( get_current_user_id(), $post->ID ) ) {
	return;
}

$student = new LLMS_Student();
$progress = $student->get_progress( $post->ID, 'course' );
?>

<?php lifterlms_course_continue_button( $post->ID, $student, $progress ); ?>

