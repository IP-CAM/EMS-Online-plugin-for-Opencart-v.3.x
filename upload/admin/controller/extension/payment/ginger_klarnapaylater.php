<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerCapture;
use interfaces\GingerTestAPIKey;
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerKlarnaPayLater extends GingerBankAdminController implements
GingerCapture,
GingerTestAPIKey
{
    public $paymentName = 'ginger_klarnapaylater';
}
