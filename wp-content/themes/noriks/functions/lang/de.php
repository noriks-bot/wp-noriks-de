<?php

add_filter( 'gettext', 'translate_attribute_labels_de', 20, 3 );

function translate_attribute_labels_de( $translated_text, $text, $domain ) {
    if ( $text === 'Choose your size' ) {
        $translated_text = 'Groesse';
    }

    return $translated_text;
}

add_filter( 'woocommerce_checkout_fields', 'custom_billing_phone_placeholder_de' );
function custom_billing_phone_placeholder_de( $fields ) {
    $fields['billing']['billing_phone']['placeholder'] = 'Mobiltelefonnummer';

    return $fields;
}

add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number_de' );
function change_woocommerce_order_number_de( $order_id ) {
    return 'NORIKS-DE-' . $order_id;
}

add_filter( 'default_checkout_billing_country', '__return_de_country' );
add_filter( 'default_checkout_shipping_country', '__return_de_country' );
function __return_de_country() {
    return 'DE';
}

add_filter( 'woocommerce_checkout_fields', 'fix_country_to_germany_and_hide' );
function fix_country_to_germany_and_hide( $fields ) {
    WC()->customer->set_billing_country( 'DE' );
    WC()->customer->set_shipping_country( 'DE' );

    unset( $fields['billing']['billing_country'] );
    unset( $fields['shipping']['shipping_country'] );

    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'hide_checkout_fields_de' );
function hide_checkout_fields_de( $fields ) {
    unset( $fields['billing']['billing_state'] );
    unset( $fields['shipping']['shipping_state'] );

    return $fields;
}
