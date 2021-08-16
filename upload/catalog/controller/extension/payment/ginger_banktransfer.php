<?php

require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankPluginController;
use components\GingerBankConfig;
use interfaces\GingerIdentificationPay;

class ControllerExtensionPaymentGingerBankTransfer extends GingerBankPluginController implements GingerIdentificationPay
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_banktransfer';
}
