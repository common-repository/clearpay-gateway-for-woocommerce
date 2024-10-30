<?php
/**
 * Default values for the WooCommerce Clearpay Plugin Admin Form Fields
 */

$environments = include 'environments.php';

return array(
	'core-configuration-title'             => array(
		'title' => __( 'Core Configuration', 'woo_clearpay' ),
		'type'  => 'title',
	),
	'enabled'                              => array(
		'title'   => __( 'Enable/Disable', 'woo_clearpay' ),
		'type'    => 'checkbox',
		'label'   => __( 'Enable Clearpay', 'woo_clearpay' ),
		'default' => 'yes',
	),
	'title'                                => array(
		'title'       => __( 'Title', 'woo_clearpay' ),
		'type'        => 'text',
		'description' => __( 'This controls the payment method title which the user sees during checkout.', 'woo_clearpay' ),
		'default'     => __( 'Clearpay', 'woo_clearpay' ),
	),
	'testmode'                             => array(
		'title'       => __( 'API Environment', 'woo_clearpay' ),
		'type'        => 'select',
		'options'     => wp_list_pluck( $environments, 'name' ),
		'default'     => 'production',
		'description' => __( 'Note: Sandbox and Production API credentials are not interchangeable.', 'woo_clearpay' ),
	),
	'prod-id'                              => array(
		'title'             => __( 'Merchant ID (Production)', 'woo_clearpay' ),
		'type'              => 'text',
		'custom_attributes' => array(
			'environment-field' => 'production',
		),
		'default'           => '',
	),
	'prod-secret-key'                      => array(
		'title'             => __( 'Secret Key (Production)', 'woo_clearpay' ),
		'type'              => 'password',
		'custom_attributes' => array(
			'environment-field' => 'production',
		),
		'default'           => '',
	),
	'prod-mpid'                            => array(
		'title'             => __( 'Merchant Public ID (Production)', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly'          => 'true',
			'environment-field' => 'production',
		),
		'default'           => '',
	),
	'test-id'                              => array(
		'title'             => __( 'Merchant ID (Sandbox)', 'woo_clearpay' ),
		'type'              => 'text',
		'custom_attributes' => array(
			'environment-field' => 'sandbox',
		),
		'default'           => '',
	),
	'test-secret-key'                      => array(
		'title'             => __( 'Secret Key (Sandbox)', 'woo_clearpay' ),
		'type'              => 'password',
		'custom_attributes' => array(
			'environment-field' => 'sandbox',
		),
		'default'           => '',
	),
	'test-mpid'                            => array(
		'title'             => __( 'Merchant Public ID (Sandbox)', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly'          => 'true',
			'environment-field' => 'sandbox',
		),
		'default'           => '',
	),
	'pay-over-time-limit-min'              => array(
		'title'             => __( 'Minimum Payment Amount', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'pay-over-time-limit-max'              => array(
		'title'             => __( 'Maximum Payment Amount', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'settlement-currency'                  => array(
		'title'             => __( 'Settlement Currency', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'trading-country'                      => array(
		'title'             => __( 'Merchant Country', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'excluded-categories'                  => array(
		'title'       => __( 'Excluded Categories', 'woo_clearpay' ),
		'type'        => 'input',
		'description' => __( 'Enter slugs (separated by comma) of ineligible product categories.', 'woo_clearpay' ),
		'default'     => '',
	),
	'cross-border-trade-title'             => array(
		'title' => __( 'Cross Border Trade Configuration', 'woo_clearpay' ),
		'type'  => 'title',
	),
	'enable-multicurrency'                 => array(
		'title'       => __( 'Enable Multicurrency', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable Clearpay in user selected currency where applicable. Important: To avoid misleading information, this requires your site to be configured to allow consumers to pay in their selected currency.', 'woo_clearpay' ),
		'default'     => 'no',
	),
	'cbt-countries'                        => array(
		'title'             => __( 'CBT Countries', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'Cross Border Trade (CBT) allows you to sell internationally, with consumers in foreign countries paying in their local currencies, while Clearpay continues to settle with you in your local currency. This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'cbt-limits'                           => array(
		'title'             => __( 'CBT Limits', 'woo_clearpay' ),
		'type'              => 'input',
		'description'       => __( 'This information is supplied by Clearpay and cannot be edited.', 'woo_clearpay' ),
		'custom_attributes' => array(
			'readonly' => 'true',
		),
		'default'           => '',
	),
	'express-checkout-title'               => array(
		'title' => __( 'Express Checkout Configuration', 'woo_clearpay' ),
		'type'  => 'title',
	),
	'show-express-on-cart-page'            => array(
		'title'       => __( 'Enable on Cart Page', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Display Clearpay Express Checkout element on the cart page', 'woo_clearpay' ),
		'default'     => 'yes',
	),
	'express-button-theme'                 => array(
		'title'   => __( 'Cart Page: Express Button Theme', 'woo_clearpay' ),
		'type'    => 'select',
		'default' => 'black-on-mint',
		'options' => array(
			'black-on-mint'  => 'Black on Mint',
			'white-on-black' => 'White on Black',
		),
	),
	'presentational-customisation-title'   => array(
		'title'       => __( 'Customisation', 'woo_clearpay' ),
		'type'        => 'title',
		'description' => __( 'Please feel free to customise the presentation of the Clearpay elements below to suit the individual needs of your web store.</p><p><em>Note: Advanced customisations may require the assistance of your web development team. <a id="reset-to-default-link" style="cursor:pointer;text-decoration:underline;">Restore Defaults</a></em>', 'woo_clearpay' ),
	),
	'show-info-on-category-pages'          => array(
		'title'       => __( 'Payment Info on Category Pages', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable to display Clearpay elements on category pages', 'woo_clearpay' ),
		'default'     => 'yes',
	),
	'category-pages-placement-attributes'  => array(
		'type'        => 'textarea',
		'default'     => 'data-show-interest-free="false" data-show-upper-limit="true" data-show-lower-limit="true" data-logo-type="compact-badge" data-badge-theme="black-on-mint" data-size="sm" data-modal-link-style="none"',
		'description' => __( 'Refer to <a href="https://developers.afterpay.com/docs/api/aiude690ui329-advanced-configuration" target="_blank">Advanced Configuration</a> for styling the message.', 'woo_clearpay' ),
	),
	'category-pages-hook'                  => array(
		'type'        => 'text',
		'placeholder' => __( 'Enter hook name (e.g. woocommerce_after_shop_loop_item_title)', 'woo_clearpay' ),
		'default'     => 'woocommerce_after_shop_loop_item_title',
		'description' => __( 'Set the hook to be used for Payment Info on Category Pages.', 'woo_clearpay' ),
	),
	'category-pages-priority'              => array(
		'type'        => 'number',
		'placeholder' => __( 'Enter a priority number', 'woo_clearpay' ),
		'default'     => 99,
		'description' => __( 'Set the hook priority to be used for Payment Info on Category Pages.', 'woo_clearpay' ),
	),
	'category-pages-info-text'             => array(
		'type' => 'hidden',
	),
	'show-info-on-product-pages'           => array(
		'title'       => __( 'Payment Info on Individual Product Pages', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable to display Clearpay elements on individual product pages', 'woo_clearpay' ),
		'default'     => 'yes',
	),
	'product-pages-placement-attributes'   => array(
		'type'        => 'textarea',
		'default'     => 'data-show-upper-limit="true" data-show-lower-limit="true" data-logo-type="badge" data-badge-theme="black-on-mint" data-size="md" data-modal-theme="mint"',
		'description' => __( 'Refer to <a href="https://developers.afterpay.com/docs/api/aiude690ui329-advanced-configuration" target="_blank">Advanced Configuration</a> for styling the message.', 'woo_clearpay' ),
	),
	'product-pages-hook'                   => array(
		'type'        => 'text',
		'placeholder' => __( 'Enter hook name (e.g. woocommerce_single_product_summary)', 'woo_clearpay' ),
		'default'     => 'woocommerce_single_product_summary',
		'description' => __( 'Set the hook to be used for Payment Info on Individual Product Pages.', 'woo_clearpay' ),
	),
	'product-pages-priority'               => array(
		'type'        => 'number',
		'placeholder' => __( 'Enter a priority number', 'woo_clearpay' ),
		'default'     => 10,
		'description' => __( 'Set the hook priority to be used for Payment Info on Individual Product Pages.', 'woo_clearpay' ),
	),
	'product-pages-shortcode'              => array(
		'type'        => 'hidden',
		'description' => __( '<h3 class="wc-settings-sub-title">Page Builders</h3> If you use a page builder plugin, the above payment info can be placed using a shortcode instead of relying on hooks. Use [clearpay_paragraph] within a product page, or include the product ID to display the info for a specific product on any custom page. E.g.: [clearpay_paragraph id="99"]', 'woo_clearpay' ),
	),
	'product-pages-info-text'              => array(
		'type' => 'hidden',
	),
	'show-info-on-product-variant'         => array(
		'title'       => __( 'Payment Info Display for Product Variant', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable to display Clearpay elements upon product variant selection', 'woo_clearpay' ),
		'default'     => 'no',
	),
	'product-variant-placement-attributes' => array(
		'type'        => 'textarea',
		'default'     => 'data-show-upper-limit="true" data-show-lower-limit="true" data-logo-type="badge" data-badge-theme="black-on-mint" data-size="md" data-modal-theme="mint"',
		'description' => __( 'Refer to <a href="https://developers.afterpay.com/docs/api/aiude690ui329-advanced-configuration" target="_blank">Advanced Configuration</a> for styling the message.', 'woo_clearpay' ),
	),
	'show-outside-limit-on-product-page'   => array(
		'title'       => __( 'Outside Payment Limit Info on Product Page', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable to display Outside Payment Limits Text on the product page', 'woo_clearpay' ),
		'default'     => 'yes',
	),
	'product-variant-info-text'            => array(
		'type' => 'hidden',
	),
	'show-info-on-cart-page'               => array(
		'title'       => __( 'Payment Info on Cart Page', 'woo_clearpay' ),
		'label'       => __( 'Enable', 'woo_clearpay' ),
		'type'        => 'checkbox',
		'description' => __( 'Enable to display Clearpay elements on the cart page', 'woo_clearpay' ),
		'default'     => 'yes',
	),
	'cart-page-placement-attributes'       => array(
		'type'        => 'textarea',
		'default'     => 'data-show-upper-limit="true" data-show-lower-limit="true" data-logo-type="badge" data-badge-theme="black-on-mint" data-size="md" data-modal-theme="mint"',
		'description' => __( 'Refer to <a href="https://developers.afterpay.com/docs/api/aiude690ui329-advanced-configuration" target="_blank">Advanced Configuration</a> for styling the message.', 'woo_clearpay' ),
	),
	'cart-page-info-text'                  => array(
		'type' => 'hidden',
	),
	'clearpay-checkout-experience'         => array(
		'type'    => 'hidden',
		'default' => 'redirect',
	),
	'ei-configs'                           => array(
		'type' => 'hidden',
	),
);
