<?php
/**
 * Load admin view for common messages tab.
 *
 * @package miniorange-order-notifications-woocommerce/views
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

echo '

	 <div class="mo_registration_divided_layout mo-otp-full">
		<form name="f" method="post" action="" id="mo_otp_verification_messages">
		    <input type="hidden" name="option" value="mowc_customer_validation_messages" />';

				wp_nonce_field( $nonce );

echo '
			<div class="mowc_registration_table_layout mo-otp-half">
				<table style="width:100%">
					<tr>
						<td>
							<h3>
								' . esc_html( mowc_( 'EMAIL MESSAGES' ) ) . '
								<span style="float:right;margin-top:-10px;">
									<input type="submit" ' . esc_attr( $disabled ) . ' name="save" id="ov_settings_button" 
										class="button button-primary button-large" 
										value="' . esc_attr( mowc_( 'Save Settings' ) ) . '"/>
									<span class="mo-dashicons dashicons dashicons-arrow-up mocw-toggle-div" data-show="false" data-toggle="email_message"></span>
								</span>
							</h3><hr/>
							<div id="email_message" style="margin-left:1%;">
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'SUCCESS OTP MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##email## in the message body will be replaced by the user's email address )" ) ) . '</span></div>
								<textarea name="otp_success_email" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_success_email ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'ERROR OTP MESSAGE' ) ) . ': </strong><br/></div>
								<textarea name="otp_error_email" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_error_email ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'INVALID FORMAT MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##email## in the message body will be replaced by the user's mobile number )" ) ) . '</span></div>
								<textarea name="otp_invalid_email" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $email_invalid_format ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'BLOCKED EMAIL MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##email## in the message body will be replaced by the user's email address )" ) ) . '</span></div>
								<textarea name="otp_blocked_email" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_blocked_email ) ) . '</textarea><br/>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="mowc_registration_table_layout mo-otp-half">
				<table style="width:100%">
					<tr>
						<td>
							<h3>
								' . esc_html( mowc_( 'SMS/MOBILE MESSAGES' ) ) . '
								<span style="float:right;margin-top:-10px;">
									<input type="submit" ' . esc_attr( $disabled ) . ' name="save" id="ov_settings_button" 
										class="button button-primary button-large" 
										value="' . esc_attr( mowc_( 'Save Settings' ) ) . '"/>
									<span class="mo-dashicons dashicons dashicons-arrow-up toggle-div" data-show="false" data-toggle="sms_message"></span>
								</span>
							</h3><hr/>
							<div id="sms_message" style="margin-left:1%;">
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'SUCCESS OTP MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##phone## in the message body will be replaced by the user's mobile number )" ) ) . '</span></div>
								<textarea name="otp_success_phone" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_success_phone ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'ERROR OTP MESSAGE' ) ) . ': </strong></div>
								<textarea name="otp_error_phone" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_error_phone ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'INVALID FORMAT MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##phone## in the message body will be replaced by the user's mobile number )" ) ) . '</span></div>
								<textarea name="otp_invalid_phone" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $phone_invalid_format ) ) . '</textarea><br/><br/>
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'BLOCKED PHONE MESSAGE' ) ) . ': </strong><br/>
								<span style="color:red">' . esc_html( mowc_( "( NOTE: ##phone## in the message body will be replaced by the user's mobile number )" ) ) . '</span></div>
								<textarea name="otp_blocked_phone" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $otp_blocked_phone ) ) . '</textarea><br/>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="mowc_registration_table_layout mo-otp-full mo-otp-left">
				<table style="width:100%">
					<tr>
						<td>
							<h3>
								' . esc_html( mowc_( 'COMMON MESSAGES' ) ) . '
								<span style="float:right;margin-top:-10px;">
									<input type="submit" ' . esc_attr( $disabled ) . ' name="save" id="ov_settings_button" 
										class="button button-primary button-large" 
										value="' . esc_attr( mowc_( 'Save Settings' ) ) . '"/>
									<span class="mo-dashicons dashicons dashicons-arrow-up toggle-div" data-show="false" data-toggle="common_message"></span>
								</span>
							</h3><hr/>
							<div id="common_message" style="margin-left:1%">
								<div style="margin-bottom:1%;"><strong>' . esc_html( mowc_( 'INVALID OTP MESSAGE' ) ) . ': </strong></div>
								<textarea name="invalid_otp" rows="4" style="width:100%;padding:2%;">' . esc_html( mowc_( $invalid_otp ) ) . '</textarea><br/>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</form>
	</div>	';

