<?php
/**
 * Display a course progress bar and
 * a button for the next incomplete lesson in the course
 * @since    1.0.0
 * @version  3.11.1
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

if ( ! llms_is_user_enrolled( get_current_user_id(), $post ) ) {
	return;
}

$student = new LLMS_Student();
$progress = $student->get_progress( $post, 'course' );
?>

<div class="continue-bar" style="display: block; width: 100%;">
	<div class="progress-background">
		<div style="width: <?php echo $progress;?>%;" class="progress-foreground"></div>
	</div>
</div>

