<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankModel;

class ModelExtensionPaymentGingerKlarnaPayNow extends GingerBankModel
{
    protected $paymentName = 'ginger_klarnapaynow';
}
