<?php
namespace components;

class GingerBankConfig
{
    const BANK_PREFIX = "emspay";
    const BANK_LABEL = "EMS Online";
    const PLUGIN_NAME = "ems-online-opencart-3";

    const BANK_ENDPOINT = 'https://api.online.emspay.eu';


    public static function gingerPaymentNameMapping($paymentMethodName)
    {
        $paymentMap = [
            'emspay_klarnapaynow' => 'klarna-pay-now',
            'emspay_afterpay' => 'afterpay',
            'emspay_amex' => 'amex',
            'emspay_applepay' => 'apple-pay',
            'emspay_googlepay' => 'google-pay',
            'emspay_bancontact' => 'bancontact',
            'emspay_sofort' => 'sofort',
            'emspay_banktransfer' => 'bank-transfer',
            'emspay_creditcard' => 'credit-card',
            'emspay_ideal' => 'ideal',
            'emspay_klarnapaylater' => 'klarna-pay-later',
            'emspay_klarnadirectdebit' => 'klarna-direct-debit',
            'emspay_payconiq' => 'payconiq',
            'emspay_paypal' => 'paypal',
            'emspay_tikkiepaymentrequest' => 'tikkie-payment-request',
            'emspay_wechat' => 'wechat'
        ];

        return $paymentMap[$paymentMethodName];
    }


}