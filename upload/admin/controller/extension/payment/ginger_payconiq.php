<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerPayconiq extends GingerBankAdminController
{
    public $paymentName = 'ginger_payconiq';
}
