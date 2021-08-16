<?php
require_once(DIR_SYSTEM.'library/ginger/autoload.php');
use banktwins\GingerBankAdminController;

class ControllerExtensionPaymentGingerWeChat extends GingerBankAdminController
{
    public $paymentName = 'ginger_wechat';
}
