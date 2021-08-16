<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerBankTransfer extends GingerBankAdminController
{
    public $paymentName = 'ginger_banktransfer';
}
