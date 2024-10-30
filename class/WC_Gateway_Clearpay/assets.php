<?php
/**
 * These are assets values in the Clearpay - WooCommerce plugin
 */

$get_clearpay_assets = function ( $country ) {

	$global_assets = array(
		'cart_page_express_button' => '<tr><td colspan="2" class="btn-clearpay_express_td"><button id="clearpay_express_button" class="btn-clearpay_express btn-clearpay_express_cart" type="button" disabled><img src="https://static.afterpay.com/button/checkout-with-clearpay/[THEME].svg" alt="Checkout with Clearpay" /></button></td></tr>',
	);

	$assets = array(
		'GB' => array(
			'help_center_url' => 'https://help.clearpay.co.uk/hc/en-gb/requests/new',
			'retailer_url'    => 'https://www.clearpay.co.uk/en-GB/for-retailers',
		),
	);

	$region_assets = array_key_exists( $country, $assets ) ? $assets[ $country ] : $assets['GB'];

	return array_merge( $global_assets, $region_assets );
};

return $get_clearpay_assets( $this->get_country_code() );
