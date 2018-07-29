<?php
/**
 * Section template for dashboard index
 * @since    3.14.0
 * @version  3.18.0
 */
defined( 'ABSPATH' ) || exit;
global $current_tab
?>

<section class="llms-sd-section <?php echo $slug; ?>" style="margin-top: 80px;">

	<?php if ( $title != $current_tab ) { ?>
		<h2 class="llms-sd-section-title">
			<?php echo apply_filters( 'lifterlms_' . $action . '_title', $title ); ?>
		</h2>
	<?php } ?>

	<?php do_action( 'lifterlms_before_' . $action ); ?>

	<?php echo $content; ?>

	<?php if ( $more ) : ?>
		<footer class="llms-sd-section-footer" style="margin-top: 40px;">
			<a class="green-btn green-btn-padding" style="font-size: 0.8em;" href="<?php echo esc_url( $more['url'] ); ?>"><?php echo $more['text']; ?></a>
		</footer>
	<?php endif; ?>

	<?php do_action( 'lifterlms_before_' . $action ); ?>

</section>
