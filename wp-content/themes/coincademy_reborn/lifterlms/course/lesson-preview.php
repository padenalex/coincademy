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

<a href="<?php echo ( ! $restrictions['is_restricted'] ) ? get_permalink( $lesson->get( 'id' ) ) : '#llms-lesson-locked'; ?>"<?php echo $data_msg; ?>"><li class="<?php echo $lesson->get_preview_classes(); ?> <?php echo $restrictions['is_restricted'] ? ' llms-lesson-link-locked' : ''; ?>"><?php printf( _x( '%1$d', 'lesson order within section', 'lifterlms' ), $lesson->get_order() ); ?> <?php echo get_the_title( $lesson->get( 'id' ) ) ?><?php if ( $restrictions['is_restricted'] ) { echo "<img style='margin-left: 5px;' src='".get_template_directory_uri()."/img/lock-icon.png'>"; }  ?></li></a>
