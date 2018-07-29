<?php
/**
 * My Account Navigation Links
 * @since    2.?.?
 * @version  3.17.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$current = LLMS_Student_Dashboard::get_current_tab( 'slug' );
?>
<nav class="llms-sd-nav">

	<?php do_action( 'lifterlms_before_my_account_navigation' ); ?>

	<ul class="llms-sd-items">
		<?php foreach ( LLMS_Student_Dashboard::get_tabs_for_nav() as $var => $data ) : ?>
			<li class="llms-sd-item <?php printf( '%1$s %2$s', $var, ( $var === $current ) ? ' current' : '' ); ?>">
				<a class="llms-sd-link" href="<?php echo esc_url( $data['url'] ); ?>"><?php echo $data['title']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>

	<?php do_action( 'lifterlms_after_my_account_navigation' ); ?>

</nav>
