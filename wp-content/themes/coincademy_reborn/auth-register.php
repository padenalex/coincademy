<form method="post" class="llms-new-person-form register">

		<?php do_action( 'lifterlms_register_form_start' ); ?>

		<div class="llms-form-fields">

			<?php do_action( 'lifterlms_before_registration_fields' ); ?>

			<?php foreach ( LLMS_Person_Handler::get_available_fields( 'registration', $field_data ) as $field ) : ?>
				<?php llms_form_field( $field ); ?>
			<?php endforeach; ?>

			<?php
				/**
				 * llms_registration_privacy
				 * @hooked llms_privacy_policy_form_field - 10
				 * @hooked llms_agree_to_terms_form_field - 20
				 */
				do_action( 'llms_registration_privacy' );
			?>

			<?php do_action( 'lifterlms_after_registration_fields' ); ?>

		</div>

		<footer class="llms-form-fields">

			<?php do_action( 'lifterlms_before_registration_button' ); ?>

			<?php llms_form_field( array(
				'columns' => 3,
				'classes' => 'llms-button-action',
				'id' => 'llms_register_person',
				'value' => apply_filters( 'lifterlms_registration_button_text', __( 'Register', 'lifterlms' ) ),
				'last_column' => true,
				'required' => false,
				'type'  => 'submit',
			) ); ?>

			<?php do_action( 'lifterlms_after_registration_button' ); ?>
			<?php wp_nonce_field( 'llms_register_person' ); ?>
			<input name="action" type="hidden" value="llms_register_person">

		</footer>

		<?php do_action( 'lifterlms_register_form_end' ); ?>

	</form>