<?php
/**
 * Load view for Customer Order Complete SMS Notification
 *
 * @package miniorange-order-notifications-woocommerce
 */

use WCSMSOTP\Helper\MoUtility;
use WCSMSOTP\Helper\MoMessages;
use WCSMSOTP\Notifications\WcSMSNotification\Helper\WooCommerceNotificationsList;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$notification_settings = get_mowc_option( 'notification_settings' );
$notification_settings = $notification_settings ? maybe_unserialize( $notification_settings )
												: WooCommerceNotificationsList::instance();
$sms                   = '';

$sms_settings  = $notification_settings->get_wc_order_completed_notif();
$textarea_tag  = $sms_settings->page . '_smsbody';
$recipient_tag = $sms_settings->page . '_recipient';
$form_options  = 'wc_sms_notif_settings';

if ( MoUtility::are_form_options_being_saved( $form_options ) ) {
	if ( ! current_user_can( 'manage_options' ) || ! check_admin_referer( 'mo_admin_actions' ) ) {
		wp_die( esc_attr( MoMessages::showMessage( MoMessages::INVALID_OP ) ) );
	}
	$sms = isset( $_POST[ $textarea_tag ] ) ? ( MoUtility::is_blank( sanitize_text_field( wp_unslash( $_POST[ $textarea_tag ] ) ) ) ? $sms_settings->default_sms_body : MoUtility::sanitize_check( $textarea_tag, $_POST ) ) : $sms_settings->default_sms_body;

	if ( $notification_settings->get_wc_order_completed_notif()->is_enabled ) {
		$notification_settings->get_wc_order_completed_notif()->set_sms_body( $sms );

	}

	update_mowc_option( 'notification_settings', $notification_settings );
	$sms_settings = $notification_settings->get_wc_order_completed_notif();
}

$recipient_value = $sms_settings->recipient;
$enable_disable  = $sms_settings->is_enabled ? 'checked' : '';

require WC_MSN_DIR . '/views/smsnotifications/wc-customer-sms-template.php';
