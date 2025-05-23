<?php
/**
 * Class Becs_Payment_Method
 *
 * @package WCPay\Payment_Methods
 */

namespace WCPay\Payment_Methods;

use WC_Payments_Token_Service;
use WCPay\Constants\Country_Code;
use WCPay\Constants\Currency_Code;

/**
 * Becs Payment Method class extending UPE base class
 */
class Becs_Payment_Method extends UPE_Payment_Method {

	const PAYMENT_METHOD_STRIPE_ID = 'au_becs_debit';

	/**
	 * Constructor for Becs payment method
	 *
	 * @param WC_Payments_Token_Service $token_service Token class instance.
	 */
	public function __construct( $token_service ) {
		parent::__construct( $token_service );
		$this->stripe_id   = self::PAYMENT_METHOD_STRIPE_ID;
		$this->title       = 'BECS Direct Debit';
		$this->is_reusable = false;
		$this->currencies  = [ Currency_Code::AUSTRALIAN_DOLLAR ];
		$this->icon_url    = plugins_url( 'assets/images/payment-methods/bank-debit.svg', WCPAY_PLUGIN_FILE );
		$this->countries   = [ Country_Code::AUSTRALIA ];
	}

	/**
	 * Returns testing credentials to be printed at checkout in test mode.
	 *
	 * @param string $account_country The country of the account.
	 * @return string
	 */
	public function get_testing_instructions( string $account_country ) {
		return __( '<strong>Test mode:</strong> use the test account number <number>000123456</number>. Other payment methods may redirect to a Stripe test page to authorize payment. More test card numbers are listed <a>here</a>.', 'woocommerce-payments' );
	}

	/**
	 * Returns payment method description for the settings page.
	 *
	 * @param string|null $account_country Country of merchants account.
	 *
	 * @return string
	 */
	public function get_description( ?string $account_country = null ) {
		return __(
			'Bulk Electronic Clearing System — Accept secure bank transfer from Australia.',
			'woocommerce-payments'
		);
	}
}
