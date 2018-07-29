<?php
/**
 * LifterLMS Product Pricing Table Template
 *
 * @property  obj   $product   WP_Product object
 * @since     3.0.0
 * @version   3.11.1
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // End if().

$is_enrolled = llms_is_user_enrolled( get_current_user_id(), $product->get( 'id' ) );
$purchaseable = $product->is_purchasable();
$has_free = $product->has_free_access_plan();
$free_only = ( $has_free && ! $purchaseable );
?>

<?php if ( ! apply_filters( 'llms_product_pricing_table_enrollment_status', $is_enrolled ) && ( $purchaseable || $has_free ) ) : ?>

	<?php do_action( 'lifterlms_before_access_plans', $product->get( 'id' ) ); ?>

		<?php do_action( 'lifterlms_before_access_plans_loop', $product->get( 'id' ) ); ?>

		<?php foreach ( $product->get_access_plans( $free_only ) as $i => $plan ) : ?>
		
			<?php  if ($plan->get_price('price') != 0): ?>

			<div class="llms-access-plan<?php echo $plan->is_featured() ? ' featured' : ''; ?><?php echo $plan->is_on_sale() ? ' on-sale' : '' ?>" id="llms-access-plan-<?php echo $plan->get( 'id' ); ?>">

				<div class="llms-access-plan-featured">
					<?php if ( $plan->is_featured() ) : ?>
						<?php echo apply_filters( 'lifterlms_featured_access_plan_text', __( 'FEATURED', 'lifterlms' ), $plan ); ?>
					<?php else : ?>
						&nbsp;
					<?php endif; ?>
				</div>

				<div class="llms-access-plan-content">

					<div class="llms-access-plan-pricing regular">

						<div class="llms-access-plan-price">

							<?php if ( $plan->is_on_sale() ) : ?>
								<em class="stamp"><?php _e( 'SALE', 'lifterlms' ); ?></em>
							<?php endif; ?>

							
							<?php if ($plan->get_price('price') != 0) {?>
							<span class="price-regular"><?php echo $plan->get_price( 'price' ); ?></span>
							<?php } ?>
							<?php if ( $plan->is_on_sale() ) : ?>
								<span class="price-sale"><?php echo $plan->get_price( 'sale_price' ); ?></span>
							<?php endif; ?>
						</div>



						<?php $schedule = $plan->get_schedule_details();
						if ( $schedule ) : ?>
							<div class="llms-access-plan-schedule"><?php echo $schedule; ?></div>
						<?php endif; ?>

						<?php $expires = $plan->get_expiration_details();
						if ( $expires ) : ?>
							<div class="llms-access-plan-expiration"><?php echo $expires; ?></div>
						<?php endif; ?>

						<?php if ( $plan->is_on_sale() && $plan->get( 'sale_end' ) ) : ?>
							<div class="llms-access-plan-sale-end"><?php printf( __( 'sale ends %s', 'lifterlms' ), $plan->get_date( 'sale_end', 'n/j/y' ) ); ?></div>
						<?php endif; ?>

					</div>

					<?php if ( $plan->has_availability_restrictions() ) : ?>
						<div class="llms-access-plan-restrictions">
							<em class="stamp"><?php _e( 'MEMBER PRICING', 'lifterlms' ); ?></em>
							<ul>
								<?php foreach ( $plan->get_array( 'availability_restrictions' ) as $mid ) : ?>
									<li><a href="<?php echo get_permalink( $mid ); ?>"><?php echo get_the_title( $mid ); ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					<?php endif; ?>


				</div>
				
				<?php elseif($plan->has_trial()): ?>

				<div class="llms-access-plan-footer">

					<div class="llms-access-plan-pricing trial">
						<div class="llms-access-plan-price">
							<em class="stamp"><?php _e( 'TRIAL', 'lifterlms' ); ?></em>
							<?php echo $plan->get_price( 'trial_price' ); ?>
						</div>
						<div class="llms-access-plan-trial"><?php echo $plan->get_trial_details(); ?></div>
					</div>

				</div>
				
				<?php elseif($plan->get_price('price') == 0): ?>
				
    					<?php if ( get_current_user_id() && $plan->has_free_checkout() && $plan->is_available_to_user() ) : ?>
    						<?php llms_get_template( 'product/free-enroll-form.php', array(
    							'plan' => $plan,
    						) ); ?>
    					<?php else : $plan->get_checkout_url(); ?>
    						<a class="enroll-btn" href="<?php echo $plan->get_checkout_url(); ?>">Register for a free account and <?php echo strtolower($plan->get_enroll_text()); ?></a>
    					<?php endif; ?>
   
			</div>
			
			<?php endif; ?>

		<?php endforeach; ?>

		<?php do_action( 'lifterlms_after_access_plans_loop', $product->get( 'id' ) ); ?>


	<?php do_action( 'lifterlms_after_access_plans', $product->get( 'id' ) ); ?>

<?php elseif ( ! $is_enrolled ) : ?>

	<?php do_action( 'lifterlms_product_not_purchasable', $product->get( 'id' ) ); ?>

	<?php if ( 'course' === $product->get( 'type' ) ) :
		$course = new LLMS_Course( $product->post ); ?>
		<?php if ( 'yes' === $course->get( 'enrollment_period' ) ) : ?>
			<?php if ( ! $course->has_date_passed( 'enrollment_start_date' ) ) : ?>
				<?php llms_print_notice( $course->get( 'enrollment_opens_message' ), 'notice' ); ?>
			<?php elseif ( $course->has_date_passed( 'enrollment_end_date' ) ) : ?>
				<?php llms_print_notice( $course->get( 'enrollment_closed_message' ), 'error' ); ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php if ( ! $course->has_capacity() ) : ?>
			<?php llms_print_notice( $course->get( 'capacity_message' ), 'error' ); ?>
		<?php endif; ?>
	<?php endif; ?>

<?php endif; ?>
