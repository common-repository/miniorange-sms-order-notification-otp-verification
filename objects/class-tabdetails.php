<?php
/**Load Interface TabDetails
 *
 * @package miniorange-order-notifications-woocommerce/objects
 */

namespace WCSMSOTP\Objects;

use WCSMSOTP\Helper\MoUtility;
use WCSMSOTP\Traits\Instance;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'TabDetails' ) ) {
	/**
	 * This class is used to define the Tab details interface functions taht needs to be implementated
	 */
	final class TabDetails {

		use Instance;

		/**
		 * Array of PluginPageDetails Object detailing
		 * all the page menu options.
		 *
		 * @var array[PluginPageDetails] $tab_details
		 */
		public $tab_details;

		/**
		 * The parent menu slug
		 *
		 * @var string $parent_slug
		 */
		public $parent_slug;

		/** Private constructor to avoid direct object creation */
		private function __construct() {
			$registered                    = MoUtility::micr();
			$this->parent_slug             = 'mowcsettings';
			$url                           = isset( $_SERVER['REQUEST_URI'] ) ? esc_url_raw( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
			$request_uri                   = remove_query_arg( 'addon', $url );
			$woocommerce_notif_request_uri = add_query_arg( array( 'addon' => 'wc_notif' ), $url );

			$this->tab_details = array(

				Tabs::WOOCOMERCE_NOTIF => new PluginPageDetails(
					'M4.455 13.88l-.571-.486.571.486zm.88-2.042l-.745-.084.745.085zm13.33 0l.745-.084-.745.085zm.88 2.042l.571-.486-.572.486zM18.32 8.794l-.745.084.745-.084zm-12.64 0l.745.084-.745-.084zm10.022 10.47a.75.75 0 10-1.404-.527l1.404.526zm-6-.527a.75.75 0 10-1.404.526l1.404-.526zm8.468-2.487H5.83v1.5h12.34v-1.5zm-.595-7.372l.345 3.045 1.49-.169-.344-3.044-1.49.168zM6.08 11.923l.345-3.045-1.49-.168-.345 3.044 1.49.169zm-1.053 2.443c.585-.688.95-1.54 1.053-2.443l-1.49-.169a3.067 3.067 0 01-.706 1.64l1.143.972zm12.893-2.443a4.568 4.568 0 001.053 2.443l1.143-.972a3.066 3.066 0 01-.706-1.64l-1.49.169zM5.83 16.25c-.887 0-1.45-1.122-.803-1.884l-1.143-.972c-1.42 1.67-.306 4.356 1.946 4.356v-1.5zm12.34 1.5c2.252 0 3.365-2.685 1.946-4.356l-1.143.972c.648.762.084 1.884-.803 1.884v1.5zm.896-9.04C18.65 5.045 15.628 2.25 12 2.25v1.5c2.83 0 5.242 2.187 5.575 5.128l1.49-.168zm-12.641.168C6.758 5.937 9.17 3.75 12 3.75v-1.5c-3.628 0-6.65 2.795-7.066 6.46l1.49.168zm7.873 9.859c-.323.86-1.213 1.513-2.298 1.513v1.5c1.685 0 3.152-1.017 3.702-2.487l-1.404-.526zM12 20.25c-1.085 0-1.975-.652-2.298-1.513l-1.404.526c.55 1.47 2.017 2.487 3.702 2.487v-1.5z',
					'Woocommerce Notifications',
					'mowcnotifications',
					mowc_( 'Notifications' ),
					mowc_( 'Notifications' ),
					$woocommerce_notif_request_uri,
					'sms-notifications.php',
					'Notifications',
					'background:#D8D8D8'
				),
				Tabs::FORMS            => new PluginPageDetails(
					'M7.393 3.921c-1.062 0-2.009.168-2.657.815-.648.648-.815 1.595-.815 2.657s.167 2.01.815 2.657c.648.647 1.595.815 2.657.815s2.01-.168 2.657-.815c.648-.648.815-1.595.815-2.657s-.167-2.009-.815-2.657c-.648-.647-1.594-.815-2.657-.815zM5.421 7.393c0-.979.173-1.393.376-1.596.203-.203.617-.376 1.596-.376.98 0 1.393.173 1.596.376.203.203.376.617.376 1.596 0 .98-.173 1.393-.376 1.596-.202.203-.617.376-1.596.376-.979 0-1.393-.173-1.596-.376-.203-.203-.376-.617-.376-1.596zm8.005.001a.75.75 0 01.75-.75h6.472a.75.75 0 110 1.5h-6.471a.75.75 0 01-.75-.75zm4.5 7.018c-1.061 0-2.008.167-2.656.815-.648.648-.815 1.594-.815 2.657 0 1.062.167 2.01.815 2.657.648.648 1.595.815 2.657.815s2.009-.168 2.656-.815c.648-.648.816-1.595.816-2.657 0-1.063-.168-2.01-.816-2.657-.647-.648-1.594-.815-2.656-.815zm-1.971 3.472c0-.98.173-1.393.376-1.596.203-.203.617-.376 1.596-.376.979 0 1.393.173 1.596.376.203.203.375.617.375 1.596 0 .98-.172 1.393-.375 1.596-.203.203-.617.376-1.596.376-.98 0-1.393-.173-1.596-.376-.203-.203-.376-.617-.376-1.596zm-11.284-.751a.75.75 0 000 1.5h6.473a.75.75 0 000-1.5H4.67z',
					'OTP Verification - Forms',
					'mowcotpformsettings',
					mowc_( 'Forms' ),
					mowc_( 'Forms' ),
					$request_uri,
					'settings.php',
					'tabID',
					'background:#D8D8D8'
				),
				Tabs::GATEWAY_CONFIG   => new PluginPageDetails(
					'M21 12.75a.75.75 0 000-1.5v1.5zm-18-1.5a.75.75 0 100 1.5v-1.5zm.287 3.123a.75.75 0 10.513 1.41l-.513-1.41zm1.922.896a.75.75 0 00-.513-1.41l.513 1.41zm13.583-6.54a.75.75 0 00.513 1.41l-.513-1.41zm1.922.897a.75.75 0 10-.513-1.41l.513 1.41zM4.624 17.21a.75.75 0 00.964 1.15l-.964-1.15zm2.113.185a.75.75 0 10-.964-1.149l.964 1.15zm10.527-10.79a.75.75 0 00.964 1.148l-.964-1.149zm2.113.184a.75.75 0 10-.964-1.149l.964 1.15zM6.851 19.42a.75.75 0 101.3.75l-1.3-.75zm2.05-.549a.75.75 0 00-1.3-.75l1.3.75zm6.2-13.74a.75.75 0 101.3.75l-1.3-.75zm2.05-.55a.75.75 0 10-1.3-.75l1.3.75zM9.698 20.734a.75.75 0 001.477.26l-1.477-.26zm1.738-1.217a.75.75 0 00-1.477-.26l1.477.26zm1.127-15.032a.75.75 0 101.478.26l-1.478-.26zm1.738-1.217a.75.75 0 00-1.477-.26l1.477.26zm-1.477 17.727a.75.75 0 101.477-.26l-1.477.26zm1.217-1.738a.75.75 0 10-1.478.26l1.478-.26zM9.96 4.744a.75.75 0 101.477-.26l-1.477.26zm1.216-1.737a.75.75 0 10-1.477.26l1.477-.26zm4.675 17.162a.75.75 0 001.3-.75l-1.3.75zm.55-2.049a.75.75 0 10-1.3.75l1.3-.75zM8.15 3.83a.75.75 0 00-1.3.75l1.3-.75zM18.412 18.36a.75.75 0 00.964-1.15l-.964 1.15zm-.185-2.113a.75.75 0 00-.964 1.149l.964-1.15zM5.773 7.753a.75.75 0 00.965-1.15l-.965 1.15zM5.588 5.64a.75.75 0 00-.964 1.149l.964-1.15zm14.613 10.142a.75.75 0 00.514-1.41l-.514 1.41zm-.896-1.922a.75.75 0 10-.513 1.41l.513-1.41zM4.697 10.139a.75.75 0 10.513-1.41l-.513 1.41zM3.8 8.216a.75.75 0 10-.513 1.41l.513-1.41zm3.801 9.903a.75.75 0 001.3.75l-1.3-.75zm4.4.63A6.75 6.75 0 015.25 12h-1.5A8.25 8.25 0 0012 20.25v-1.5zM5.25 12A6.75 6.75 0 0112 5.25v-1.5A8.25 8.25 0 003.75 12h1.5zM12 5.25A6.75 6.75 0 0118.75 12h1.5A8.25 8.25 0 0012 3.75v1.5zM18.75 12A6.75 6.75 0 0112 18.75v1.5A8.25 8.25 0 0020.25 12h-1.5zm2.25-.75h-1.5v1.5H21v-1.5zm-16.5 0H3v1.5h1.5v-1.5zM3.8 15.782l1.41-.513-.514-1.41-1.41.514.514 1.41zm15.505-5.643l1.41-.513-.514-1.41-1.41.513.514 1.41zm-13.717 8.22l1.15-.964-.965-1.149-1.149.964.964 1.15zm12.64-10.606l1.15-.964-.965-1.149-1.15.964.965 1.15zM8.15 20.17l.75-1.299-1.299-.75-.75 1.3 1.3.75zM16.4 5.88l.75-1.298-1.299-.75-.75 1.299 1.3.75zm-5.224 15.115l.26-1.478-1.476-.26-.26 1.477 1.476.26zm2.866-16.25l.26-1.477-1.477-.26-.26 1.477 1.477.26zm.26 15.99l-.26-1.478-1.478.26.26 1.478 1.478-.26zm-2.865-16.25l-.26-1.477-1.478.26.26 1.477 1.478-.26zm5.713 14.935l-.75-1.299-1.299.75.75 1.3 1.3-.75zm2.227-2.21l-1.149-.963-.964 1.149 1.15.964.963-1.15zM6.737 6.605L5.589 5.64l-.964 1.149 1.15.964.964-1.15zm13.978 7.769l-1.41-.513-.513 1.41 1.41.512.512-1.41zM5.21 8.729L3.8 8.216l-.513 1.41 1.41.513.513-1.41zm14.29 2.52H12v1.5h7.5v-1.5zM8.9 18.87l3.75-6.495-1.299-.75-3.75 6.495 1.3.75zm3.75-7.245l-4.5-7.793-1.299.75 4.5 7.793 1.3-.75z',
					'OTP Verification - Forms',
					'mowcgatewaysettings',
					mowc_( 'Gateway Settings' ),
					mowc_( 'Gateway Settings' ),
					$request_uri,
					'mogatewayconfig.php',
					'GatewaySettings',
					'background:#D8D8D8'
				),
				Tabs::OTP_SETTINGS     => new PluginPageDetails(
					'M7.114 8.5H4V7h3.114a2.501 2.501 0 014.772 0H20v1.5h-8.114a2.501 2.501 0 01-4.772 0zM4 17h8.114a2.501 2.501 0 004.771 0H20v-1.5h-3.114a2.501 2.501 0 00-4.771 0H4V17z',
					'Advance Settings',
					'mowcotpsettings',
					mowc_( 'Settings' ),
					mowc_( 'Settings' ),
					$request_uri,
					'mowcotpsettings.php',
					'OTPSettings',
					'background:#D8D8D8'
				),
				Tabs::WHATSAPP         => new PluginPageDetails(
					'M7.73 21.045l.32-.678a.75.75 0 00-.443-.062l.123.74zm-4.794-4.816l.74.12a.75.75 0 00-.06-.438l-.68.318zm.439 5.542l-.124-.74.124.74zM21.25 12A9.25 9.25 0 0112 21.25v1.5c5.937 0 10.75-4.813 10.75-10.75h-1.5zm-18.5 0A9.25 9.25 0 0112 2.75v-1.5C6.063 1.25 1.25 6.063 1.25 12h1.5zM12 2.75A9.25 9.25 0 0121.25 12h1.5c0-5.937-4.813-10.75-10.75-10.75v1.5zM3.498 22.51l4.355-.725-.246-1.48-4.356.726.247 1.48zM12 21.25a9.21 9.21 0 01-3.95-.883l-.64 1.356A10.71 10.71 0 0012 22.75v-1.5zm-8.385-5.338A9.212 9.212 0 012.75 12h-1.5c0 1.623.36 3.165 1.006 4.547l1.36-.636zm-1.42.197l-.712 4.395 1.48.24.713-4.395-1.48-.24zm1.056 4.922a.25.25 0 01-.288-.287l-1.48-.24a1.75 1.75 0 002.015 2.007l-.247-1.48zM16 15.111v-.436c0-.542-.33-1.03-.833-1.23l-.466-.187a1.08 1.08 0 00-1.368.52s-1.11-.222-2-1.111c-.889-.89-1.11-2-1.11-2a1.08 1.08 0 00.519-1.368l-.187-.466A1.325 1.325 0 009.325 8H8.89A.889.889 0 008 8.889 7.111 7.111 0 0015.111 16c.491 0 .889-.398.889-.889z',
					'OTP Verification - WhatsApp',
					'mowcwhatsapp',
					mowc_( 'WhatsApp' ),
					mowc_( 'WhatsApp' ),
					$request_uri,
					'mowhatsapp.php',
					'WhatsAppTab',
					'background:#a2ec3b'
				),
				Tabs::ADD_ONS          => new PluginPageDetails(
					'M6 5.5h3a.5.5 0 01.5.5v3a.5.5 0 01-.5.5H6a.5.5 0 01-.5-.5V6a.5.5 0 01.5-.5zM4 6a2 2 0 012-2h3a2 2 0 012 2v3a2 2 0 01-2 2H6a2 2 0 01-2-2V6zm11-.5h3a.5.5 0 01.5.5v3a.5.5 0 01-.5.5h-3a.5.5 0 01-.5-.5V6a.5.5 0 01.5-.5zM13 6a2 2 0 012-2h3a2 2 0 012 2v3a2 2 0 01-2 2h-3a2 2 0 01-2-2V6zm5 8.5h-3a.5.5 0 00-.5.5v3a.5.5 0 00.5.5h3a.5.5 0 00.5-.5v-3a.5.5 0 00-.5-.5zM15 13a2 2 0 00-2 2v3a2 2 0 002 2h3a2 2 0 002-2v-3a2 2 0 00-2-2h-3zm-9 1.5h3a.5.5 0 01.5.5v3a.5.5 0 01-.5.5H6a.5.5 0 01-.5-.5v-3a.5.5 0 01.5-.5zM4 15a2 2 0 012-2h3a2 2 0 012 2v3a2 2 0 01-2 2H6a2 2 0 01-2-2v-3z',
					'OTP Verification - Add Ons',
					'mowcaddon',
					mowc_( 'AddOns' ),
					mowc_( 'AddOns' ),
					$request_uri,
					'add-on.php',
					'addOnsTab',
					'background:orange'
				),
				Tabs::ACCOUNT          => new PluginPageDetails(
					'M11.587 2A5.138 5.138 0 006.45 7.136v.001h.75l-.75-.002v.001a5.121 5.121 0 005.104 5.138H11.587a5.137 5.137 0 000-10.274zM7.95 7.137a3.638 3.638 0 113.637 3.637H11.557A3.621 3.621 0 017.95 7.14v-.003zm-2.45 12c0-.798.555-1.703 1.692-2.448 1.116-.733 2.682-1.227 4.402-1.227 1.712 0 3.279.49 4.398 1.218 1.14.742 1.697 1.642 1.697 2.436 0 .385-.124.672-.347.913-.24.258-.624.495-1.181.69-1.123.392-2.729.543-4.567.543-1.829 0-3.435-.145-4.562-.534-.558-.193-.944-.427-1.184-.684a1.254 1.254 0 01-.348-.907zm6.095-5.175c-1.992 0-3.848.568-5.226 1.473C5.01 16.325 4 17.633 4 19.136c0 .766.27 1.416.753 1.932.466.498 1.099.838 1.79 1.077 1.373.474 3.19.616 5.051.616 1.874 0 3.69-.148 5.063-.628.69-.241 1.32-.585 1.785-1.085.48-.518.747-1.168.747-1.933 0-1.506-1.02-2.809-2.379-3.693-1.38-.899-3.235-1.461-5.215-1.461z',
					'OTP Verification - Accounts',
					$this->parent_slug,
					! $registered ? 'Account Setup' : 'User Profile',
					! $registered ? 'Account Setup' : 'Profile',
					$request_uri,
					'account.php',
					'account',
					''
				),
				Tabs::PRICING          => new PluginPageDetails(
					'M12.57 4.712a2.75 2.75 0 000 3.89L15.4 11.43a2.75 2.75 0 003.889 0L22.116 8.6a2.75 2.75 0 000-3.889l-2.828-2.828a2.75 2.75 0 00-3.89 0L12.57 4.712zm1.061 2.828a1.25 1.25 0 010-1.767l2.828-2.829a1.25 1.25 0 011.768 0l2.829 2.829a1.25 1.25 0 010 1.767l-2.829 2.829a1.25 1.25 0 01-1.768 0L13.631 7.54zM4 1.25A2.75 2.75 0 001.25 4v4A2.75 2.75 0 004 10.75h4A2.75 2.75 0 0010.75 8V4A2.75 2.75 0 008 1.25H4zM2.75 4c0-.69.56-1.25 1.25-1.25h4c.69 0 1.25.56 1.25 1.25v4c0 .69-.56 1.25-1.25 1.25H4c-.69 0-1.25-.56-1.25-1.25V4zM4 13.25A2.75 2.75 0 001.25 16v4A2.75 2.75 0 004 22.75h4A2.75 2.75 0 0010.75 20v-4A2.75 2.75 0 008 13.25H4zM2.75 16c0-.69.56-1.25 1.25-1.25h4c.69 0 1.25.56 1.25 1.25v4c0 .69-.56 1.25-1.25 1.25H4c-.69 0-1.25-.56-1.25-1.25v-4zm10.5 0A2.75 2.75 0 0116 13.25h4A2.75 2.75 0 0122.75 16v4A2.75 2.75 0 0120 22.75h-4A2.75 2.75 0 0113.25 20v-4zM16 14.75c-.69 0-1.25.56-1.25 1.25v4c0 .69.56 1.25 1.25 1.25h4c.69 0 1.25-.56 1.25-1.25v-4c0-.69-.56-1.25-1.25-1.25h-4z',
					'OTP Verification - License',
					'mowcpricing',
					"<span style='color:orange;font-weight:bold'>" . mowc_( 'Licensing Plans' ) . '</span>',
					mowc_( 'Licensing Plans' ),
					$request_uri,
					'pricing.php',
					'upgradeTab',
					'background:#D8D8D8',
					false
				),
			);
		}
	}
}
