<?php
/**
 * Clearpay Checkout Instalments Display
 *
 * @var WC_Gateway_Clearpay $this
 */

/**
 * Provides data for the payment schedule widget
 *
 * @param string $test_mode Either 'sandbox' or 'production'.
 * @param string $mpid Merchant Public ID.
 * @param float  $order_total Order total amount.
 * @param string $currency Currency used.
 * @param string $page_type Defaults to 'checkout'.
 */
function clearpay_display_payment_schedule( $test_mode, $mpid, $order_total, $currency, $page_type = 'checkout' ) {
	?>
	<?php if ( $test_mode !== 'production' ) { ?>
		<p class="clearpay-test-mode-warning-text"><?php _e( 'TEST MODE ENABLED', 'woo_clearpay' ); ?></p>
	<?php } ?>
	<div
		id="clearpay-widget-container"
		data-mpid="<?php echo esc_attr( $mpid ); ?>"
		data-page-type="<?php echo esc_attr( $page_type ); ?>"
		data-amount="<?php echo esc_attr( $order_total ); ?>"
		data-currency="<?php echo esc_attr( $currency ); ?>"></div>
	<?php
}
