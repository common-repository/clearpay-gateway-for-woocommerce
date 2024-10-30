=== Clearpay Gateway for WooCommerce ===
Contributors: clearpayit
Tags: woocommerce, clearpay
Requires at least: 4.8.3
Tested up to: 6.5.5
Stable tag: 3.8.6
License: GNU Public License
License URI: https://www.gnu.org/licenses/

Provide Clearpay as a payment option for WooCommerce orders.

== Description ==

Give your customers the option to buy now and pay later with Clearpay. The "Clearpay Gateway for WooCommerce" plugin provides the option to choose Clearpay as the payment method at the checkout. It also provides the functionality to display the Clearpay logo and instalment calculations below product prices on category pages, individual product pages, and on the cart page. For each payment that is approved by Clearpay, an order will be created inside the WooCommerce system like any other order. Automatic refunds are also supported.

== Installation ==

This section outlines the steps to install the Clearpay plugin.

> Please note: If you are upgrading to a newer version of the Clearpay plugin, it is considered best practice to perform a backup of your website - including the WordPress database - before commencing the installation steps. Clearpay recommends all system and plugin updates to be tested in a staging environment prior to deployment to production.

1. Login to your WordPress admin.
1. Navigate to "Plugins > Add New".
1. Type "Clearpay" into the Keyword search box and press the Enter key.
1. Find the "Clearpay Gateway for WooCommerce" plugin. Note: the plugin is made by "Clearpay".
1. Click the "Install Now" button.
1. Click the "Activate" button.
1. Navigate to "WooCommerce > Settings".
1. Click the "Checkout" tab.
1. Click the "Clearpay" sub-tab.
1. Enter the Merchant ID and Secret Key that were provided by Clearpay for Production use.
1. Save changes.

== Frequently Asked Questions ==

= What do I do if I need help? =

Please refer to the [User Guide](https://developers.clearpay.co.uk/clearpay-online/docs/woocommerce-pre-integration-checks). Most common questions are answered in the [FAQ](https://developers.clearpay.co.uk/clearpay-online/docs/woocommerce-frequently-asked-questions). There is also the option to create a support ticket in the official [Clearpay Help Centre](https://help.clearpay.co.uk/hc) if necessary.

== Changelog ==

= 3.8.6 =
*Release Date: Monday, 22 Jul 2024*

* Minor improvements.
* Tested and verified support for WordPress 6.5.5 and WooCommerce 9.1.2.

= 3.8.5 =
*Release Date: Monday, 04 Mar 2024*

* Minor improvements.
* Tested and verified support for WordPress 6.4.3 and WooCommerce 8.6.1.

= 3.8.4 =
*Release Date: Friday, 16 Feb 2024*

* Minor improvements.
* Tested and verified support for WordPress 6.4.3 and WooCommerce 8.5.2.

= 3.8.3 =
*Release Date: Thursday, 01 Feb 2024*

* Added a fix to remove potential for a function redeclaration error.

= 3.8.2 =
*Release Date: Wednesday, 31 Jan 2024*

* Fixed an outdated file that failed to upload during the release of version 3.8.1.

= 3.8.1 =
*Release Date: Wednesday, 31 Jan 2024*

* Minor improvements

= 3.8.0 =
*Release Date: Tuesday, 30 Jan 2024*

* Upgraded checkout block assets from raster to vector.
* Other minor improvements, and preparation for future improvements.
* Tested and verified support for WordPress 6.4.2 and WooCommerce 8.5.1.

= 3.7.3 =
*Release Date: Wednesday, 13 Dec 2023*

* Minor bug fixes.
* Tested and verified support for WordPress 6.4.2 and WooCommerce 8.3.1.

= 3.7.2 =
*Release Date: Wednesday, 29 Nov 2023*

* Minor bug fixes and performance improvements.
* Tested and verified support for WordPress 6.4.1 and WooCommerce 8.3.1.

= 3.7.1 =
*Release Date: Friday, 10 Nov 2023*

* Minor bug fixes.

= 3.7.0 =
*Release Date: Tuesday, 31 Oct 2023*

* Created messaging block types for product and cart blocks.
* Added support for express checkout in cart and checkout blocks.
* Tested and verified support for WordPress 6.3.2 and WooCommerce 8.2.1.

= 3.6.1 =
*Release Date: Thursday, 28 Sep 2023*

* Added extra data attributes to messaging elements.
* Tested and verified support for WordPress 6.3.1 and WooCommerce 8.1.1.

= 3.6.0 =
*Release Date: Monday, 28 Aug 2023*

* Upgraded to V2 JS Library.
* Dropped support for EU stores and EUR orders. Note that refunds from existing EUR orders will continue to be supported.
* Other minor improvements.
* Tested and verified support for WordPress 6.3.0 and WooCommerce 8.0.2.

= 3.5.5 =
*Release Date: Monday, 31 Jul 2023*

* Updated the PHP SDK dependency.
* Prepared for the v2 JS Library.

= 3.5.4 =
*Release Date: Thursday, 22 Jun 2023*

* Added support for High-Performance Order Storage (HPOS).
* Added support for item decimal quantities.
* Tested and verified support for WordPress 6.2.2 and WooCommerce 7.8.0.

= 3.5.3 =
*Release Date: Monday, 23 Jan 2023*

* Some minor improvements.
* Tested and verified support for WordPress 6.1.1 and WooCommerce 7.3.0.

= 3.5.2 =
*Release Date: Monday, 19 Dec 2022*

* Updates to better align with WordPress best practices.

= 3.5.1 =
*Release Date: Friday, 09 Dec 2022*

* Fixed a security vulnerability.
* Removed the 'Rate now' notification.

= 3.5.0 =
*Release Date: Wednesday, 02 Nov 2022*

* Added support for currency switchers where Cross Border Trade is enabled at the merchant account level.
* Improved messaging for variable products.
* Tested and verified support for WordPress 6.0.3 and WooCommerce 7.0.0.

= 3.4.4 =
*Release Date: Tuesday, 18 Oct 2022*

* Addressed a challenge with Express Checkout not capturing email addresses for guest customers.

= 3.4.3 =
*Release Date: Monday, 26 Sep 2022*

* Improved English locale support for Europe.
* Retained pre-selected shipping option in Express Checkout.
* Tested and verified support for WordPress 6.0.2 and WooCommerce 6.9.3.

= 3.4.2 =
*Release Date: Wednesday, 20 Jul 2022*

* Addressed a challenge with checkout payment breakdown potentially displaying twice
* Increased compatibility with merchant account configurations and WooCommerce Blocks plugin
* Improved frontend asset performance
* Updated contact details for customer service
* Tested and verified support for WordPress 6.0 and WooCommerce 6.6.1.

= 3.4.1 =
*Release Date: Tuesday, 03 May 2022*

* Added support for pay in 3 for EUR.
* Updated SDK dependency to utilize global API endpoints.
* Other minor fixes.
* Tested and verified support for WordPress 5.9.3 and WooCommerce 6.4.1.

= 3.4.0 =
*Release Date: Monday, 10 Jan 2022*

* Added support for the WooCommerce Checkout Block.
* Added a new feature for excluding Clearpay from specified product categories.
* Added a setting for merchant country, to better support the site language setting.
* Improved the PDP messaging for variable products to present the lowest possible payment amount.
* Other minor fixes.
* Tested and verified support for WordPress 5.8.2 and WooCommerce 6.0.0.

= 3.3.1 =
*Release Date: Thursday, 21 Oct 2021*

* Addressed a challenge that affected usage of the "clearpay_paragraph" shortcode on non-WooCommerce pages.

= 3.3.0 =
*Release Date: Monday, 11 Oct 2021*

* Upgraded payment messaging to improve consistency and ensure compliance.

= 3.2.1 =
*Release Date: Wednesday, 29 Sep 2021*

* Fixed a defect where the admin notice to save settings might have been unnecessary.
* Fixed a defect where PHP notices might have been thrown.
* Updated dependencies to address a defect that might have blocked transactions.
* Tested and verified support for WordPress 5.8.1 and WooCommerce 5.7.1.

= 3.2.0 =
*Release Date: Wednesday, 18 Aug 2021*

* Implemented PHP SDK and upgraded to V2 API.
* Added a hyperlink to the order page in the admin, allowing users to view the order in the merchant portal.
* Improved performance by loading JavaScript files only when needed.
* Addressed a challenge for Express Checkout orders where the tax amount may have rounded incorrectly.
* Tested and verified support for WordPress 5.8 and WooCommerce 5.5.2.

= 3.1.2 =
*Release Date: Tuesday, 06 Jul 2021*

* Addressed a challenge regarding tax amount that might arise when using Express Checkout.
* Disabled Express Checkout for carts containing only virtual products due to unavailable addresses.
* Tested and verified support for WordPress 5.7.2 and WooCommerce 5.4.1.

= 3.1.1 =
*Release Date: Tuesday, 22 Jun 2021*

* Checkout fix for "clearpay_is_product_supported" action hook
* Tested and verified support for WordPress 5.7.2 and WooCommerce 5.4.1.

= 3.1.0 =
*Release Date: Monday, 24 May 2021*

* Introduced an implementation of Clearpay Express Checkout on the cart page for UK only.
* Improved display of payment declined messaging for registering users.
* Other minor enhancements.

= 3.0.2 =
*Release Date: Wednesday, 05 May 2021*

* Improved reliability of the WooCommerce Order lookup process after consumers confirm payment and return from Clearpay.
* Tested and verified support for WordPress 5.7.1 and WooCommerce 5.2.2.

= 3.0.1 =
*Release Date: Wednesday, 28 Apr 2021*

* Improved compatibility with customized order numbers.
* Tested and verified support for WordPress 5.7.1 and WooCommerce 5.2.2.

= 3.0.0 =
*Release Date: Thursday, 22 Apr 2021*

* Revised transaction flow to more closely follow WooCommerce recommendations.
* Allow customers to pay using Clearpay for existing (unpaid) orders, with or without traversing through the WooCommerce checkout.
* Tested and verified support for WordPress 5.7 and WooCommerce 5.2.

= 2.3.0 =
*Release Date: Friday, 26 Mar 2021*

* Tested and verified support for WordPress 5.7 and WooCommerce 5.1.0.
* Added support for Spain, France and Italy.
* Added support for EUR.
* Added translations for Spanish (es-ES), French (fr-FR) and Italian (it-IT).

= 2.2.2 =
*Release Date: Monday, 19 Oct 2020*

* Tested and verified support for WordPress 5.5.1 and WooCommerce 4.6.0.
* Improved website performance by loading plugin assets on WooCommerce pages only when the plugin is activated.
* Improved compatibility with other plugins where a trailing slash is appended to the url and may have caused issues with transactions.
* Improved display of the 'Payment Info on Category Pages'.
* Improved display of the 'Outside Payment Limit Info'.

= 2.2.1 =
*Release Date: Friday, 11 Sep 2020*

* Tested and verified support for WordPress 5.5 and WooCommerce 4.4.
* Fixed a defect that may have caused PHP errors when running cron jobs.

= 2.2.0 =
*Release Date: Wednesday, 26 Aug 2020*

* Tested and verified support for WordPress 5.5 and WooCommerce 4.4.
* Standardized modal content by using Clearpay Global JS Library.
* Improved flexibility of the hook used for Payment Info on Individual Product Pages.
* Improved usage of 'clearpay_is_product_supported' hook in the Checkout page.
* Updated FAQ documentation.

= 2.1.6 =
*Release Date: Wednesday, 22 Jul 2020*

* Tested up to WordPress 5.4 with WooCommerce 4.3.
* Improved handling of price breakdown using the displayed price, inclusion of tax now inherited from WooCommerce settings.
* Improved the experience for new customers who ticked the box to create an account, then their payment is declined. These customers are redirected to the cart page instead of the checkout to ensure the decline message can be read.
* Improved user experience by providing higher resolution modal artwork for users with high pixel density ratio screens.
* Improved handling of instalment message for variable products that are out of stock.

= 2.1.5 =
*Release Date: Wednesday, 01 Apr 2020*

* Tested up to WordPress 5.4 with WooCommerce 4.0.
* Added a shortcode to render PDP assets from page builders or on custom pages without requiring an action hook.
* Added region-specific customer service numbers to decline messages at the checkout.
* Improved the experience for new customers who ticked the box to create an account, then cancel their payment. These customers are redirected to the cart page instead of the checkout to ensure the payment cancellation message can be read.
* Improved handling of products with null price values.
* Improved compatibility with WooCommerce Product Bundles.

= 2.1.4 =
*Release Date: Wednesday, 11 Mar 2020*

* Tested up to WordPress 5.3 with WooCommerce 4.0.
* Added a new admin notification to encourage submitting a plugin review after 14 days.
* Updated JS to improve compatibility with Google Closure compression.
* Improved support for orders without shipping addresses.
* Improved method of accessing Order properties in Compatibility Mode.
* Improved handling of invalid products sent to WC_Gateway_Clearpay::is_product_supported.
* Removed references to WordPress internal constants.

= 2.1.3 =
*Release Date: Tuesday, 12 Nov 2019*

* Tested up to WordPress 5.3 with WooCommerce 3.8.
* Removed a legacy admin notice containing a reference to a WooThemes plugin.

= 2.1.2 =
*Release Date: Thursday, 31 Oct 2019*

* Tested up to WordPress 5.3 with WooCommerce 3.8.
* Added a notification in the admin when the plugin has been updated and the configuration needs to be reviewed.
* Added a "Restore Defaults" button for customisations to the plugin configuration.
* Simplified the redirection process between the WooCommerce checkout page and the Clearpay payment screenflow.
* Revised the conditions for triggering the Clearpay messaging that applies to products outside the merchant's Clearpay payment limits.
* Revised the conditions controlling the inclusion of Clearpay as an available payment method, so that Clearpay does not appear if the currency has been changed by a third party plugin.
* Removed the dependency on serialisation of the WC_Checkout object.
* Removed the dependency on the PHP parse_ini_file function.

= 2.1.1 =
*Release Date: Friday, 30 Aug 2019*

* Tested up to WordPress 5.3 with WooCommerce 3.7.
* Improved support for orders without shipping addresses.

= 2.1.0 =
*Release Date: Tuesday, 13 Aug 2019*

* Tested up to WordPress 5.3 with WooCommerce 3.7.
* Revised checkout flow for WooCommerce 3.6+.
* Added a Compatibility Mode to minimise conflicts with third party plugins.
* Added an interface to customise hooks and priorities.
* Replaced idempotent retry processes with extended timeouts.
* Extended logging in Debug Mode.
* Improved handling of Clearpay assets on product variants and related products.
* Improved jQuery version checking.
* Improved handling of non-JSON API responses.

= 2.0.5 =
*Release Date: Wednesday, 01 May 2019*

* Improved support for quotes and special characters used in product attributes and checkout fields.

= 2.0.4 =
*Release Date: Wednesday, 19 December 2018*

* Reduced logging of unnecessary notices.
* Improved support for custom meta fields on WooCommerce order line items.
