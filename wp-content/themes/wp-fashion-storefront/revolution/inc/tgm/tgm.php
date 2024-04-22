<?php

require get_template_directory() . '/revolution/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function wp_fashion_storefront_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Google Language Translator', 'wp-fashion-storefront' ),
			'slug'             => 'google-language-translator',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'FOX – Currency Switcher Professional for WooCommerce', 'wp-fashion-storefront' ),
			'slug'             => 'woocommerce-currency-switcher',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'YITH WooCommerce Wishlist', 'wp-fashion-storefront' ),
			'slug'             => 'yith-woocommerce-wishlist',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'Woocommerce', 'wp-fashion-storefront' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'wp_fashion_storefront_register_recommended_plugins' );