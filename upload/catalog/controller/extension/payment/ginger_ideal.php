<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankPluginController;
use components\GingerBankConfig;
use interfaces\GingerIssuers;

class ControllerExtensionPaymentGingerIdeal extends GingerBankPluginController implements GingerIssuers
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_ideal';
}
