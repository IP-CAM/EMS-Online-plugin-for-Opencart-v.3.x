<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerCapture;
use interfaces\GingerTestAPIKey;
use interfaces\GingerCountryValidation;
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerAfterPay extends GingerBankAdminController implements
GingerCapture,
GingerTestAPIKey,
GingerCountryValidation
{
    public $paymentName = 'ginger_afterpay';
}
