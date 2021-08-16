<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerSofort extends GingerBankAdminController
{
    public $paymentName = 'ginger_sofort';
}
