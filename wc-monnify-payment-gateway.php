<?php

/**
 * Plugin Name: Payment Gateway for Monnify on WooCommerce
 * Plugin URI: https://www.monnify.com/
 * Author: Adeleye Ayodeji
 * Author URI: http://adeleyeayodeji.com/
 * Description: WooCommerce payment gateway for Monnify
 * Version: 1.0.7
 * License: 1.0.7
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: wc-monnify-payment-gateway
 */
if (!defined('ABSPATH')) {
    exit;
}

if (!in_array("woocommerce/woocommerce.php", apply_filters("active_plugins", get_option("active_plugins")))) return;

define("WC_MONNIFY_VERSION", "1.0.2");
define('WC_MONNIFY_MAIN_FILE', __FILE__);
define('WC_MONNIFY_URL', untrailingslashit(plugins_url('/', __FILE__)));

add_action("plugins_loaded", "monnify_method_init", 11);
//Notice user
add_action('admin_notices', 'ade_wc_monnify_testmode_notice');
//Admin URL
add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'ade_woo_monnify_plugin_action_links');
//Methods
function monnify_method_init()
{
    //Init  class
    require_once dirname(__FILE__) . '/includes/class-wc-gateway-monnify.php';
}

add_filter("woocommerce_payment_gateways", "monnify_method_init_payment_gateway");

function monnify_method_init_payment_gateway($gateways)
{
    $gateways[] = "WC_Monnify_Payment_Gateway";
    return $gateways;
}

/**
 * Display the test mode notice.
 **/
function ade_wc_monnify_testmode_notice()
{

    $monnify_settings = get_option('woocommerce_monnify_settings');
    $test_mode = isset($monnify_settings['testmode']) ? $monnify_settings['testmode'] : '';

    if ('yes' === $test_mode) {
        echo '<div class="error">
        <p>' . sprintf(__('Monnify Payment test mode is still enabled, Click <strong><a
                    href="%s">here</a></strong> to
            disable it when you want to start accepting live payment on your site.', 'wc-monnify-payment-gateway'), esc_url(
            admin_url('admin.php?page=wc-settings&tab=checkout&section=monnify')
        )) . '</p>
    </div>';
    }
}

/**
 * Add Settings link to the plugin entry in the plugins menu.
 *
 * @param array $links Plugin action links.
 *
 * @return array
 **/
function ade_woo_monnify_plugin_action_links($links)
{

    $settings_link = array(
        'settings' => '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout&section=monnify') . '"
        title="' . __('View Monnify WooCommerce Settings', 'wc-monnify-payment-gateway') . '">' . __(
            'Settings',
            'wc-monnify-payment-gateway'
        ) . '</a>',
    );

    return array_merge($settings_link, $links);
}
