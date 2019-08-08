<?php

class ControllerExtensionPaymentEmspayKlarna extends Controller
{
    const EMS_MODULE = 'emspay_klarna';

    public function index()
    {
        $this->load->controller('extension/payment/emspay_ideal', static::getModuleName());
    }

    static function getModuleName()
    {
        return static::EMS_MODULE;
    }

    public function install()
    {
        $this->load->model('setting/event');

        $this->model_setting_event->addEvent(
            'emspay_klarna_edit_order',
            'catalog/controller/api/order/edit/after',
            'extension/payment/emspay_klarna/capture'
        );

        $this->model_setting_event->addEvent(
            'emspay_klarna_add_history',
            'catalog/controller/api/order/history/after',
            'extension/payment/emspay_klarna/capture'
        );
    }

    public function uninstall()
    {
        $this->load->model('setting/event');
        $this->model_setting_event->deleteEvent('emspay_klarna_edit_order');
        $this->model_setting_event->deleteEvent('emspay_klarna_add_history');
    }
}
