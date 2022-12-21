<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerCustomerPersonalInformation;
use interfaces\GingerTermsAndConditions;
use banktwins\GingerBankPluginController;
use components\GingerBankConfig;
use interfaces\GingerTestAPIKey;

class ControllerExtensionPaymentGingerAfterPay extends GingerBankPluginController implements
GingerCustomerPersonalInformation,
GingerTestAPIKey,
GingerTermsAndConditions
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_afterpay';

}
