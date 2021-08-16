<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use interfaces\GingerIPValidation;
use interfaces\GingerCountryValidation;
use banktwins\GingerBankModel;
use interfaces\GingerTestAPIKey;

class ModelExtensionPaymentGingerAfterpay extends GingerBankModel implements
GingerIPValidation,
GingerCountryValidation,
GingerTestAPIKey
{
    protected $paymentName = 'ginger_afterpay';
}
