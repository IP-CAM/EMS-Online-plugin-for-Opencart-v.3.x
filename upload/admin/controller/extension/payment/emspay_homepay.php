<?php

class ControllerExtensionPaymentEmspayHomePay extends Controller
{
    const EMS_MODULE = 'emspay_homepay';

    public function index()
    {
        $this->load->controller('extension/payment/emspay_ideal', static::getModuleName());
    }

    static function getModuleName()
    {
        return static::EMS_MODULE;
    }
}
