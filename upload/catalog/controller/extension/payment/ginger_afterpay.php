<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerCustomerPersonalInformation;
use banktwins\GingerBankPluginController;
use components\GingerBankConfig;
use interfaces\GingerTestAPIKey;

class ControllerExtensionPaymentGingerAfterPay extends GingerBankPluginController implements
GingerCustomerPersonalInformation,
GingerTestAPIKey
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_afterpay';

}
