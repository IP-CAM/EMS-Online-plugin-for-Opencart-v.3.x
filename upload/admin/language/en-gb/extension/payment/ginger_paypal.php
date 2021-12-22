<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'EMS Online: PayPal';
$_['text_ginger_paypal'] = '<img src="view/image/payment/ginger_paypal.png" alt="EMS Online" title="EMS Online" />';
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
$_['entry_ginger_api_key'] = 'EMS Online API Key:';
$_['entry_ginger_total'] = 'Minimum order amount:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
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
$_['text_settings_saved'] = 'EMS Online: PayPal settings updated!';
$_['text_edit_ginger'] = 'Edit EMS Online: PayPal Settings';
$_['text_yes'] = 'Yes';
$_['text_no'] = 'No';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'API key is empty. Please, set API key and try again';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Get your EMS Online API key from Payments merchant portal.';
$_['info_help_total'] = 'The checkout total the order must reach before this payment method becomes active.';
$_['info_plugin_not_configured'] = 'EMS Online: PayPal plugin is not configured.';

/**
 * Refund text
 */
$_['empty_price'] = 'The price is empty in the refund product information.';
$_['wrong_order_status'] = 'Only completed orders can be refunded.';
$_['refund_not_completed'] = 'Refund is not completed.';