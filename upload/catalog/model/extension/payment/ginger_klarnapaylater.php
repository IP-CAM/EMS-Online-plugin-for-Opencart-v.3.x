<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankModel;
use interfaces\GingerIPValidation;
use interfaces\GingerTestAPIKey;

class ModelExtensionPaymentGingerKlarnaPayLater extends GingerBankModel implements GingerIPValidation,GingerTestAPIKey
{
    protected $paymentName = 'ginger_klarnapaylater';
}
