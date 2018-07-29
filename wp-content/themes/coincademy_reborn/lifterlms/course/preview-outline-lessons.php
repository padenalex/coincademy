<?php
/**
 * Template for a lesson preview element
 *
 * @author 		LifterLMS
 * @package 	LifterLMS/Templates
 * @since       1.0.0
 * @version     3.7.5
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }
$restrictions = llms_page_restricted( $lesson->get( 'id' ), get_current_user_id() );
$data_msg = $restrictions['is_restricted'] ? ' data-tooltip-msg="' . esc_html( strip_tags( llms_get_restriction_message( $restrictions ) ) ) . '"' : '';
?>

<a id="nav_button<?php echo strtolower($pre_text); ?>" href="<?php echo ( ! $restrictions['is_restricted'] ) ? get_permalink( $lesson->get( 'id' ) ) : '#llms-lesson-locked'; ?>"<?php echo $data_msg; ?>"><li class="<?php echo $lesson->get_preview_classes(); ?> <?php echo $restrictions['is_restricted'] ? ' llms-lesson-link-locked' : ''; ?>"><?php echo $pre_text; ?></li></a>
