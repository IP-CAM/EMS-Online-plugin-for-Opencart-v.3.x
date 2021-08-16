<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankPluginController;
use components\GingerBankConfig;
use interfaces\GingerOrderLines;
use interfaces\GingerTestAPIKey;

class ControllerExtensionPaymentGingerKlarnaPayLater extends GingerBankPluginController implements GingerOrderLines, GingerTestAPIKey
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_klarnapaylater';

}
