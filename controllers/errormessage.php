<?php
/**
 * Loads the error messages.
 *
 * @package miniorange-order-notifications-woocommerce/controller/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
use WCSMSOTP\Helper\MoConstants;
use WCSMSOTP\Helper\MoMessages;
use WCSMSOTP\Objects\Tabs;
use WCSMSOTP\Helper\MoUtility;

$server_uri     = isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : null;
$request_uri    = remove_query_arg( array( 'addon', 'form', 'subpage' ), $server_uri );
$profile_url    = add_query_arg( array( 'page' => $tab_details->tab_details[ Tabs::ACCOUNT ]->menu_slug ), $request_uri );
$register_msg   = MoMessages::showMessage( MoMessages::REGISTER_WITH_US, array( 'url' => $profile_url ) );
$activation_msg = MoMessages::showMessage( MoMessages::ACTIVATE_PLUGIN, array( 'url' => $profile_url ) );
$active_tab     = isset( $_GET['page'] ) ? sanitize_text_field( wp_unslash( $_GET['page'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Missing, WordPress.Security.NonceVerification.Recommended -- Reading GET parameter from the URL for checking the tab name, doesn't require nonce verification.
$license_url    = add_query_arg( array( 'page' => $tab_details->tab_details[ Tabs::PRICING ]->menu_slug ), $request_uri );
$nonce          = $admin_handler->get_nonce_value();
$is_logged_in   = MoUtility::micr();
$is_free_plugin = strcmp( MOV_WC_TYPE, 'MiniOrangeGateway' ) === 0;
$sms_remaining  = get_mo_wc_option( 'phone_transactions_remaining' ) ? get_mo_wc_option( 'phone_transactions_remaining' ) : '';

require MOV_WC_DIR . 'views/errormessage.php';
