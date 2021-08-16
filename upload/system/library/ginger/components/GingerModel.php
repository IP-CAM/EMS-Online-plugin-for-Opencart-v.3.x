<?php
namespace components;
use banktwins\GingerBankHelper;
use interfaces\GingerCountryValidation;
use interfaces\GingerIPValidation;
use interfaces\GingerTestAPIKey;
use banktwins\GingerBankClientBuilder;


class GingerModel extends \Model
{

    public function getMethod($address, $total)
    {
        $this->load->language('extension/payment/'.$this->paymentName);

        $query = $this->db->query("SELECT *
            FROM ".DB_PREFIX."zone_to_geo_zone
            WHERE geo_zone_id = '".(int) $this->config->get($this->paymentName.'_geo_zone_id')."'
            AND country_id = '".(int) $address['country_id']."'
            AND (zone_id = '".(int) $address['zone_id']."'
            OR zone_id = '0');"
        );

        if ($this->config->get($this->paymentName.'_total') > $total) {
            $status = false;
        } elseif (!$this->config->get($this->paymentName.'_geo_zone_id')) {
            $status = true;
        } elseif ($query->num_rows) {
            $status = true;
        } else {
            $status = false;
        }

        if (!$this->currencyValidation())
        {
            $status = false;
        }

        if ($this instanceof GingerIPValidation)
        {
            if(!GingerBankHelper::ipIsEnabled($this->config->get('payment_'.$this->paymentName.'_ip_filter')))
            {
                $status = false;
            }
        }

        if ($this instanceof GingerCountryValidation)
        {
            $countryList = $this->config->get('payment_'.$this->paymentName.'_country_access');
            $customerCountry = $this->session->data['payment_address']['iso_code_2'];

            if (!GingerBankHelper::countryValidator($countryList, $customerCountry))
            {
                $status = false;
            }
        }
        $method_data = [];

        if ($status)
        {
            $method_data = [
                'code' => $this->paymentName,
                'title' => $this->language->get('text_title'),
                'terms' => $this->language->get('text_payment_terms'),
                'sort_order' => $this->config->get($this->paymentName.'_sort_order')
            ];
        }
        return $method_data;
    }

    public function currencyValidation()
    {
        if ($this instanceof GingerTestAPIKey)
        {
            $testApiKey = $this->config->get('payment_'.$this->paymentName.'_'.'test_api_key') ?: null;
        }

        $apiKey = $testApiKey ?? $this->config->get('payment_'.$this->paymentName.'_'.'api_key');

        $gingerClient = GingerBankClientBuilder::getClient(
            $apiKey,
            $this->config->get('payment_'.$this->paymentName.'_'.'bundle_cacert') ? true : false
        );

        $gingerCurrencies = $gingerClient->getCurrencyList();
        $selectedCurrency = $this->session->data['currency'];

        $paymentMethodTitle = GingerBankConfig::gingerPaymentNameMapping(
            str_replace('ginger',GingerBankConfig::BANK_PREFIX,$this->paymentName)
        );

        if (!isset($gingerCurrencies['payment_methods'][$paymentMethodTitle]['currencies']))
        {
            return false;
        }

        $supportedCurrencies = $gingerCurrencies['payment_methods'][$paymentMethodTitle]['currencies'];
        return true ? in_array($selectedCurrency,$supportedCurrencies) : false;
    }
}