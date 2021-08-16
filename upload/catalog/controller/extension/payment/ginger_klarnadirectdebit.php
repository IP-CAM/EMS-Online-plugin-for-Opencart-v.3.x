<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerOrderLines;
use banktwins\GingerBankPluginController;
use components\GingerBankConfig;

class ControllerExtensionPaymentGingerKlarnaDirectDebit extends GingerBankPluginController implements GingerOrderLines
{
    /**
     * Payments module name
     */
    public $paymentName = GingerBankConfig::BANK_PREFIX.'_klarnadirectdebit';

}
