<?php
/**
 * Load admin view for WooCommerceRegistrationForm.
 *
 * @package miniorange-order-notifications-woocommerce/views/forms
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

use WCSMSOTP\Helper\MoMessages;

echo '	<div class="mowc-formsettings-container" id="' . esc_attr( get_mo_wc_class( $handler ) ) . '">

			<div class="flex">
              	<label class="mowc-checkbox-container flex-1">
	        		<input type="checkbox" ' . esc_attr( $disabled ) . ' 
	                	id="wc_default"  
	                	class="app_enable sr-only" 
	                	name="mo_customer_validation_wc_default_enable" 
	                	value="1"
		            	' . esc_attr( $woocommerce_registration ) . ' />
                	<span class="mowc-checkmark"></span>
                	<p class="mowc-title">' . esc_attr( $form_name ) . '</p>
              	</label>
				<div data-show="false" data-toggle="wc_default_options" class="mowc-toggle-div before:content-none border flex items-center justify-center rounded-full border-slate-400">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
					  <g id="cf1c2c78ec352f0270e96d78305c5454">
					    <path id="93332177decf5e9e6e1c64452e49f2f8" d="M7 10L12 14L17 10" stroke="#28303F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
					  </g>
					</svg>
				</div>          
            </div>';

echo '		<div class="mowc-form-options" ' . esc_attr( $wc_hidden ) . ' id="wc_default_options" style="display:none;">

				<div class="mowc-otptype-radio-container">

					<div>
						<input  type="radio" ' . esc_attr( $disabled ) . ' 
					        id="wc_email" 
					        class="app_enable peer sr-only" 
					        name="mo_customer_validation_wc_enable_type" 
					        value="' . esc_attr( $wc_reg_type_email ) . '"
						    ' . ( esc_attr( $wc_enable_type ) === esc_attr( $wc_reg_type_email ) ? 'checked' : '' ) . '/>
						<label for="wc_email" class="mowc-otptype-radio-label" id="wc_email_registration_div">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
							  <g id="2500ca1d51c4344f9af74fabf3c0a9a0">
							    <path id="31503c81468ad79fcb98b748e7e5efa0" fill-rule="evenodd" clip-rule="evenodd" d="M3.20215 11.9688C3.20215 8.59745 3.79798 6.59034 5.0541 5.38795C6.31992 4.17628 8.44047 3.60205 11.976 3.60205C15.5114 3.60205 17.632 4.17628 18.8978 5.38795C20.1539 6.59034 20.7498 8.59745 20.7498 11.9688C20.7498 15.3397 20.154 17.3469 18.8978 18.5494C17.632 19.7612 15.5114 20.3356 11.976 20.3356C8.44053 20.3356 6.31996 19.7612 5.05412 18.5494C3.79796 17.3469 3.20215 15.3397 3.20215 11.9688ZM11.976 2.10205C8.36859 2.10205 5.72724 2.66717 4.01687 4.30437C2.2968 5.95086 1.70215 8.50214 1.70215 11.9688C1.70215 15.4351 2.29681 17.9863 4.01684 19.6329C5.72719 21.2702 8.36853 21.8356 11.976 21.8356C15.5834 21.8356 18.2247 21.2702 19.9351 19.6329C21.6551 17.9863 22.2498 15.4351 22.2498 11.9688C22.2498 8.50214 21.6551 5.95086 19.935 4.30437C18.2247 2.66717 15.5833 2.10205 11.976 2.10205ZM18.025 8.44284C17.7068 8.17774 17.234 8.22071 16.9688 8.53879L16.9688 8.53884L16.9687 8.53895L16.9678 8.5401L16.9622 8.54668L16.9378 8.57541C16.9158 8.60125 16.8823 8.64012 16.8385 8.69015C16.7507 8.79028 16.6215 8.93479 16.4588 9.10886C16.1325 9.45794 15.6757 9.92113 15.1513 10.382C14.6242 10.8452 14.0449 11.2917 13.4734 11.6188C12.89 11.9527 12.3841 12.1217 11.987 12.1217C11.5898 12.1217 11.0815 11.9524 10.4941 11.6179C9.91899 11.2905 9.33497 10.8435 8.80329 10.38C8.27428 9.91886 7.81301 9.45541 7.48327 9.10615C7.31885 8.93199 7.18823 8.78739 7.09945 8.68719C7.05508 8.63712 7.02123 8.59822 6.9989 8.57234L6.97421 8.54356L6.96859 8.53696L6.96759 8.53578L6.96751 8.53568L6.96746 8.53563L6.96744 8.5356C6.70051 8.21901 6.22749 8.17865 5.91078 8.44549C5.59402 8.71239 5.5536 9.18554 5.82049 9.5023L6.39404 9.01904C5.82049 9.5023 5.82059 9.50242 5.8207 9.50254L5.82098 9.50288L5.82176 9.50381L5.82422 9.50671L5.83265 9.51662L5.86324 9.55228C5.88961 9.58284 5.92779 9.62671 5.97677 9.68198C6.07467 9.79247 6.21599 9.94886 6.39256 10.1359C6.74481 10.509 7.24175 11.0087 7.81763 11.5107C8.39084 12.0104 9.05839 12.5266 9.75194 12.9215C10.4332 13.3094 11.2108 13.6217 11.987 13.6217C12.7639 13.6217 13.5397 13.3091 14.2185 12.9206C14.9092 12.5253 15.5726 12.0087 16.1415 11.5087C16.7131 11.0064 17.2056 10.5065 17.5546 10.1332C17.7295 9.94605 17.8694 9.78958 17.9664 9.67902C18.0148 9.62371 18.0526 9.57981 18.0788 9.54921L18.1091 9.51351L18.1174 9.50357L18.1199 9.50065L18.1206 9.49972L18.1209 9.49938C18.121 9.49925 18.1211 9.49914 17.5449 9.01904L18.1211 9.49914C18.3863 9.18091 18.3432 8.70799 18.025 8.44284Z" fill="black"></path>
							  </g>
							</svg>
							<div>
								<h5 class="mowc-title">Email Verification</h5>
								<p class="mt-mowc-1">Send OTP to user\'s email address</p>
							</div>
						</label>
					</div>

					<div>
						<input  type="radio" ' . esc_attr( $disabled ) . ' 
					        id="wc_phone" 
					        class="app_enable peer sr-only" 
					        data-toggle="wc_phone_options" 
					        name="mo_customer_validation_wc_enable_type" 
					        value="' . esc_attr( $wc_reg_type_phone ) . '"
						    ' . ( esc_attr( $wc_enable_type ) === esc_attr( $wc_reg_type_phone ) ? 'checked' : '' ) . '/>
						
						<label for="wc_phone" class="mowc-otptype-radio-label" id="wc_phone_registration_div">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
							  <g id="d6fe3fb9ee105594196980c1a008f938">
							    <g id="1544579de007486fbb799905ff5ca424">
							      <path id="c5064f11818786f081c4308488a05998" fill-rule="evenodd" clip-rule="evenodd" d="M8.20049 15.799C1.3025 8.90022 2.28338 5.74115 3.01055 4.72316C3.10396 4.55862 5.40647 1.11188 7.87459 3.13407C14.0008 8.17945 6.2451 7.46611 11.3894 12.6113C16.5348 17.7554 15.8214 9.99995 20.8659 16.1249C22.8882 18.594 19.4413 20.8964 19.2778 20.9888C18.2598 21.717 15.0995 22.6978 8.20049 15.799Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
							    </g>
							  </g>
							</svg>
							<div>
								<h5 class="mowc-title">' . esc_html( mowc_( 'Phone Verification' ) ) . '</h5>
								<p class="mt-mowc-1" style="color:orange;">Register with Phone only</p>
							</div>
						</label>
					</div>

					<div>
						<input  type="radio" 
					        ' . esc_attr( $disabled ) . ' 
					        id="wc_both" 
					        class="app_enable peer sr-only" 
					        data-toggle="wc_both_options" 
					        name="mo_customer_validation_wc_enable_type" 
					        value="' . esc_attr( $wc_reg_type_both ) . '"
						    ' . ( esc_attr( $wc_enable_type ) === esc_attr( $wc_reg_type_both ) ? 'checked' : '' ) . '/>
						
						<label for="wc_both" class="mowc-otptype-radio-label" id="wc_both_registration_div">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
							  <g id="30c5d8e64afd22ad42224d69d89f2847">
							    <path id="04e3417dcc03b9344b217adc1e69f79b" fill-rule="evenodd" clip-rule="evenodd" d="M11.9998 2C8.48966 2 5.91083 2.57552 4.24305 4.24329C2.57527 5.91107 1.99976 8.4899 1.99976 12C1.99976 15.5101 2.57527 18.0889 4.24305 19.7567C5.91083 21.4245 8.48966 22 11.9998 22C15.5099 22 18.0887 21.4245 19.7565 19.7567C21.4242 18.0889 21.9998 15.5101 21.9998 12C21.9998 8.4899 21.4242 5.91107 19.7565 4.24329C18.0887 2.57552 15.5099 2 11.9998 2ZM3.49976 12C3.49976 8.5731 4.08074 6.52693 5.30371 5.30396C6.52668 4.08098 8.57285 3.5 11.9998 3.5C15.4267 3.5 17.4728 4.08098 18.6958 5.30396C19.9188 6.52693 20.4998 8.5731 20.4998 12C20.4998 15.4269 19.9188 17.4731 18.6958 18.696C17.4728 19.919 15.4267 20.5 11.9998 20.5C8.57285 20.5 6.52668 19.919 5.30371 18.696C4.08074 17.4731 3.49976 15.4269 3.49976 12ZM16.0905 10.1573C16.3834 9.86439 16.3834 9.38952 16.0905 9.09662C15.7976 8.80373 15.3227 8.80373 15.0299 9.09662L10.8141 13.3124L8.9704 11.4695C8.67745 11.1767 8.20258 11.1768 7.90974 11.4697C7.61691 11.7627 7.61701 12.2376 7.90997 12.5304L10.284 14.9034C10.5769 15.1962 11.0517 15.1961 11.3445 14.9033L16.0905 10.1573Z" fill="black"></path>
							  </g>
							</svg>
							<div>
								<h5 class="mowc-title">' . esc_html( mowc_( 'Let the user choose' ) ) . '</h5>
								<p class="mt-mowc-1">Prompt will be shown to user</p>
							</div>
						</label>
					</div>
				</div>

				<div class="" id="wc_registration_with_phone_only_option">
					<label class="mowc-checkbox-container flex-1">
	                    <input  type="checkbox" disabled ' . esc_attr( $disabled ) . ' 
	                            id="wc_registration_with_phone_only"
	                            name="mo_customer_validation_wc_reg_with_phone_only" value="1" class="sr-only"/>
	                	<span class="mowc-checkmark" disabled></span>
	                	<p class="mowc-title">' . esc_html( mowc_( 'Enable Register Using Phone Only' ) ) . '</p>
						<div data-show="false" class=" before:content-none flex items-center justify-center">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none">
												<g id="d4a43e0162b45f718f49244b403ea8f4">
													<g id="4ea4c3dca364b4cff4fba75ac98abb38">
															<g id="2413972edc07f152c2356073861cb269">
															<path id="2deabe5f8681ff270d3f37797985a977" d="M20.8007 20.5644H3.19925C2.94954 20.5644 2.73449 20.3887 2.68487 20.144L0.194867 7.94109C0.153118 7.73681 0.236091 7.52728 0.406503 7.40702C0.576651 7.28649 0.801941 7.27862 0.980492 7.38627L7.69847 11.4354L11.5297 3.72677C11.6177 3.54979 11.7978 3.43688 11.9955 3.43531C12.1817 3.43452 12.3749 3.54323 12.466 3.71889L16.4244 11.3598L23.0197 7.38654C23.1985 7.27888 23.4233 7.28702 23.5937 7.40728C23.7641 7.52754 23.8471 7.73707 23.8056 7.94136L21.3156 20.1443C21.2652 20.3887 21.0501 20.5644 20.8007 20.5644Z" fill="orange"></path>
														</g>
														</g>
													</g>
				            </svg><span class="text-yellow-500" onClick="otpSupportOnClickWC(\'Hi, I want to use Register with Phone only functionality on WooCommerce form.\');">Premium</span>
				</div>    
	              	</label>
              	</div>

				<div class="' . ( esc_attr( $wc_enable_type ) === esc_attr( $wc_reg_type_email ) && ( esc_attr( $wc_enable_type ) !== esc_attr( $wc_reg_type_both ) ) ? 'hidden' : '' ) . '" id="wc_restrict_duplicates_registration_option">
					<label class="mowc-checkbox-container flex-1">
	                    <input  type="checkbox" ' . esc_attr( $disabled ) . ' 
	                            id="wc_registration_restrict_duplicates"
	                            name="mo_customer_validation_wc_restrict_duplicates" value="1" class="sr-only"
	                            ' . esc_attr( $wc_restrict_duplicates ) . ' />
	                	<span class="mowc-checkmark"></span>
	                	<p class="mowc-title">' . esc_html( mowc_( 'Do not allow users to use the same phone number for multiple accounts' ) ) . '</p>
	              	</label>
              	</div>

				<div id="wc_do_not_show_pop_up_option" class="' . ( esc_attr( $wc_enable_type ) === esc_attr( $wc_reg_type_both ) ? 'hidden' : '' ) . '">
				<label class="mowc-checkbox-container flex-1">
				     <input type ="checkbox" ' . esc_attr( $disabled ) . ' 
				            id ="wcreg_mo_view" 
				            data-toggle = "wcreg_mo_ajax_view_option" 
				            class="app_enable sr-only" 
                            name = "mo_customer_validation_wc_is_ajax_form" 
                            value= "1" ' . esc_attr( $is_ajax_mode_enabled ) . '/>
                	<span class="mowc-checkmark"></span>
                	<p class="mowc-title">' . esc_html( mowc_( 'Do not show a popup. Validate user on the form itself' ) ) . '</p>
              	</label>
				</div>

				
				<div class="ml-[32px] w-full mowc-input-wrapper group mt-mowc-4">
                	<label for="mo_registration_table_textbox" class="mowc-input-label">Verification Button Text</label>
						    <input  class="mowc-input" 
						            name="mo_customer_validation_wc_button_text" 
						            type="text" value="' . esc_attr( $wc_button_text ) . '">
            	</div>

				<div class="flex">
					<label class="mowc-checkbox-container flex-1">
						<input type ="checkbox" ' . esc_attr( $disabled ) . ' 
					            id ="wcreg_mo_redirect_after_registration" 
					            data-toggle = "wcreg_mo_rediect_page" 
					            class="app_enable sr-only" 
                	            name = "mo_customer_validation_wcreg_redirect_after_registration" 
                	            value= "1" ' . esc_attr( $is_redirect_after_registration_enabled ) . '/> 
                		<span class="mowc-checkmark"></span>
                		<p class="mowc-title">' . esc_html( mowc_( 'Redirect User to a specific page after registration.' ) ) . '</p>
              		</label>';
					wp_dropdown_pages( array( 'selected' => esc_attr( $redirect_page_id ) ) );
echo '			</div>
			</div>
		</div>';