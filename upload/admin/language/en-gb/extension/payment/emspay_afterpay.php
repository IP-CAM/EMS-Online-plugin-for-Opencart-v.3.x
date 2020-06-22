<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'EMS Online: AfterPay';
$_['text_emspay_afterpay'] = '<img src="view/image/payment/emspay_afterpay.png" alt="EMS Online" title="EMS Online" />';
$_['text_extension'] = 'Extensions';

/**
 * Entry points
 */
$_['entry_status'] = 'Status:';
$_['entry_order_completed'] = 'Order Completed:';
$_['entry_order_new'] = 'Order New:';
$_['entry_order_expired'] = 'Order Expired:';
$_['entry_order_cancelled'] = 'Order Cancelled:';
$_['entry_order_processing'] = 'Order Processing:';
$_['entry_order_error'] = 'Order Error:';
$_['entry_sort_order'] = 'Sort Order:';
$_['entry_ems_api_key'] = 'EMS Online API Key:';
$_['entry_ems_total'] = 'Minimum order amount:';
$_['entry_country_access'] = 'Countries available for AfterPay';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_send_webhook'] = 'Generate webhook URL:';
$_['entry_order_captured'] = 'Order Captured:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Save';
$_['text_button_cancel'] = 'Cancel';
$_['text_enabled'] = 'Enabled';
$_['text_disabled'] = 'Disabled';
$_['text_payments'] = 'Payments';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'EMS Online: AfterPay settings updated!';
$_['text_edit_ems'] = 'Edit EMS Online: AfterPay Settings';
$_['text_yes'] = 'Yes';
$_['text_no'] = 'No';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'EMS Online API Key is required!';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Get your EMS Online API key from Payments merchant portal.';
$_['info_help_total'] = 'The payment method will only be presented if the total checkout amount of an order is higher than this threshold.';
$_['info_plugin_not_configured'] = 'EMS Online: AfterPay plugin is not configured.';
$_['info_help_afterpay_ip_filter'] = 'If entered, only for those IPs payment method will be displayed. (Example: 128.0.0.1, 255.255.255.255)';
$_['entry_afterpay_ip_filter'] = 'IP Filtering:';
$_['entry_afterpay_test_api_key'] = 'Test API Key:';
$_['info_help_afterpay_test_api_key'] = 'If entered this API key will be used for testing purposes.';
$_['info_help_country_access'] = 'List the country codes (in ISO 2 standard) following by comma, that you would like to have AfterPay available for payment. Example: BE, NL';

