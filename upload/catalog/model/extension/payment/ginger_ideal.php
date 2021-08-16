<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');

use banktwins\GingerBankModel;

class ModelExtensionPaymentGingerIdeal extends GingerBankModel
{
    protected $paymentName = 'ginger_ideal';
}
