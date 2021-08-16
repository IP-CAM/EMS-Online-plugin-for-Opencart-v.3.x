<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');
use banktwins\GingerBankAdminController;
use interfaces\GingerCapture;

class ControllerExtensionPaymentGingerKlarnaDirectDebit extends GingerBankAdminController implements GingerCapture
{
    public $paymentName = 'ginger_klarnadirectdebit';
}
