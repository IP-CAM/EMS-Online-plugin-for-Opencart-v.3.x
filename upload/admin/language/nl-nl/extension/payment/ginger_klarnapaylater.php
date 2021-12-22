<?php

/**
 * General Admin Settings Page
 */
$_['heading_title'] = 'EMS Online: Klarna Pay Later';
$_['text_ginger_klarnapaylater'] = '<img src="view/image/payment/ginger_klarnapaylater.png" alt="EMS Online" title="EMS Online" />';
$_['text_extension'] = 'Extensies';

/**
 * Entry points
 */
$_['entry_status'] = 'Status:';
$_['entry_order_completed'] = 'Bestelling afgerond:';
$_['entry_order_new'] = 'Nieuwe Bestelling :';
$_['entry_order_expired'] = 'Bestelling Verlopen:';
$_['entry_order_cancelled'] = 'Bestelling is geannuleerd:';
$_['entry_order_processing'] = 'Bestelling in verwerking:';
$_['entry_order_error'] = 'Bestellingsfout:';
$_['entry_sort_order'] = 'Sorteervolgorde:';
$_['entry_ginger_api_key'] = 'EMS Online API Key:';
$_['entry_ginger_total'] = 'Totaal:';
$_['entry_cacert'] = 'Bundle cURL ca.cert:';
$_['entry_order_captured'] = 'Bestelling gevangen:';

/**
 * Text strings
 */
$_['text_button_save'] = 'Opslaan';
$_['text_button_cancel'] = 'Annuleren';
$_['text_enabled'] = 'Ingeschakeld';
$_['text_disabled'] = 'Uitgeschakeld';
$_['text_payments'] = 'Betalingen';
$_['text_issuer_id'] = 'SWIFT/BIC';
$_['text_settings_saved'] = 'EMS Online: Klarna Pay Later Instellingen bijgewerkt!';
$_['text_edit_ginger'] = 'Bewerken EMS Online: Klarna Pay Later Instellingen';
$_['text_yes'] = 'Ja';
$_['text_no'] = 'Nee';

/**
 * Error messages
 */
$_['error_missing_api_key'] = 'API-sleutel is leeg. Stel de API-sleutel in en probeer het opnieuw';

/**
 * Information text
 */
$_['info_help_api_key'] = 'Kopieer uw EMS Online API key van uw merchant portal.';
$_['info_help_total'] = 'De betaalmethode wordt alleen getoond als het totaalbedrag van een bestelling hoger is dan dit bedrag.';
$_['info_plugin_not_configured'] = 'EMS Online: Klarna Pay Later plugin is niet ingesteld.';
$_['info_help_klarnapaylater_ip_filter'] = 'U  kunt specifieke IP adressen opgeven waarvoor de betaalmethode zichtbaar is, bv als u wilt testen  (bijvoorbeeld: 128.0.0.1, 255.255.255.255). Vult u niets in dan is de betaalmethode voor alle IP adressen zichtbaar.';
$_['entry_klarnapaylater_ip_filter'] = 'IP-Filteren:';
$_['entry_klarnapaylater_test_api_key'] = 'Test API Key:';
$_['info_help_klarnapaylater_test_api_key'] = 'Vul hier de API Key in van uw test webshop.';

/**
 * Refund text
 */
$_['empty_price'] = 'De prijs is leeg in de productinformatie voor terugbetaling.';
$_['wrong_order_status'] = 'Alleen voltooide bestellingen kunnen worden terugbetaald.';
$_['order_not_captured'] = 'Restitutie alleen mogelijk bij opname.';
$_['refund_not_completed'] = 'Terugbetaling is niet voltooid.';
