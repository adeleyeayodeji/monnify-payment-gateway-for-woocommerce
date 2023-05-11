=== Payment Gateway for Monnify on WooCommerce ===
Contributors: Adeleye Ayodeji, biggidroid
Donate link: http://adeleyeayodeji.com/
Tags: Monnify, woocommerce, payment gateway, adeleyeayodeji plugins, adeleyeayodeji, verve, ghana, nigeria, mastercard, visa
Requires at least: 4.7
Tested up to: 6.2
Stable tag: 1.0.6
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Payment Gateway for Monnify on WooCommerce allows you to accept online payments from local and international customers

== Description ==

This is a Monnify payment gateway for WooCommerce.

Monnify is on a mission to deliver a safe and convenient payment experience for customers and merchants. Monnify provide Nigerian & Ghanaian merchants with the tools and services needed to accept online payments from local and international customers using Mastercard, Visa, Verve, Bank Accounts

To signup for a Monnify Merchant account visit their website by clicking [here](https://monnify.com)

Payment Gateway for Monnify on WooCommerce allows you to accept payment on your WooCommerce store using Mastercard, Visa, Verve, bank accounts

With this Payment Gateway for Monnify on WooCommerce plugin, you will be able to accept the following payment methods in your shop:

* __Mastercard__
* __Visa__
* __Verve__
* __Bank Account__

= Note =

This plugin is meant to be used by merchants in Nigeria and Ghana.

= Plugin Features =

*   __Accept payment__ via Mastercard, Visa, Verve, Bank Accounts
*   __Seamless integration__ into the WooCommerce checkout page. Accept payment directly on your site
*   __Refunds__ from the WooCommerce order details page. Refund an order directly from the order details page
*   __Recurring payment__ using [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) plugin

= WooCommerce Subscriptions Integration =

*	The [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) integration only works with __WooCommerce v2.6 and above__ and __WooCommerce Subscriptions v2.0 and above__.

*	No subscription plans is created on Monnify. The [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) plugin handles all the subscription functionality.

*	If a customer pays for a subscription using a Mastercard or Visa card, their subscription will renew automatically throughout the duration of the subscription. If an automatic renewal fail their subscription will be put on-hold and they will have to login to their account to renew the subscription.

*	For customers paying with a Verve card, their subscription can't be renewed automatically, once a payment is due their subscription will be on-hold. The customer will have to login to his account to manually renew his subscription.

*	If a subscription has a free trial and no signup-fee, automatic renewal is not possible for the first payment because the initial order total will be 0, after the free trial the subscription will be put on-hold. The customer will have to login to his account to renew his subscription. If a Mastercard or Visa card is used to renew the subscription subsequent renewals will be automatic throughout the duration of the subscription, if a Verve card is used automatic renewal isn't possible.

= Suggestions / Feature Request =

If you have suggestions or a new feature request, feel free to get in touch with me via the contact form on my website [here](http://adeleyeayodeji.com/)

You can also follow me on Twitter!! **[@adeleyeayodeji_](https://twitter.com/adeleyeayodeji_)**


== Installation ==

= Automatic Installation =
* 	Login to your WordPress Admin area
* 	Go to "Plugins > Add New" from the left hand menu
* 	In the search box type __Payment Gateway for Monnify on WooCommerce__
*	From the search result you will see __Payment Gateway for Monnify on WooCommerce__ click on __Install Now__ to install the plugin
*	A popup window will ask you to confirm your wish to install the Plugin.
*	After installation, activate the plugin.
* 	Open the settings page for WooCommerce and click the "Checkout" tab.
* 	Click on the __Monnify__ link from the available Checkout Options
*	Configure your __Monnify Payment Gateway__ settings. See below for details.

= Manual Installation =
1. 	Download the plugin zip file
2. 	Login to your WordPress Admin. Click on "Plugins > Add New" from the left hand menu.
3.  Click on the "Upload" option, then click "Choose File" to select the zip file from your computer. Once selected, press "OK" and press the "Install Now" button.
4.  Activate the plugin.
5. 	Open the settings page for WooCommerce and click the "Checkout" tab.
6. 	Click on the __Monnify__ link from the available Checkout Options
7.	Configure your __Monnify Payment Gateway__ settings. See below for details.



= Configure the plugin =
To configure the plugin, go to __WooCommerce > Settings__ from the left hand menu, then click __Checkout__ from the top tab. You will see __Monnify__ as part of the available Checkout Options. Click on it to configure the payment gateway.

* __Enable/Disable__ - check the box to enable Monnify Payment Gateway.
* __Title__ - allows you to determine what your customers will see this payment option as on the checkout page.
* __Description__ - controls the message that appears under the payment fields on the checkout page. Here you can list the types of cards you accept.
* __Test Mode__ - Check to enable test mode. Test mode enables you to test payments before going live. If you ready to start receving real payment on your site, kindly uncheck this.
* __Test Secret Key__ - Enter your Test Secret Key here. Get your API keys from your Monnify account under Settings > Developer/API
* __Test Public Key__ - Enter your Test Public Key here. Get your API keys from your Monnify account under Settings > Developer/API
* __Live Secret Key__ - Enter your Live Secret Key here. Get your API keys from your Monnify account under Settings > Developer/API
* __Live Public Key__ - Enter your Live Public Key here. Get your API keys from your Monnify account under Settings > Developer/API
* Click on __Save Changes__ for the changes you made to be effected.





== Frequently Asked Questions ==

= What Do I Need To Use The Plugin =

1.	You need to have WooCommerce plugin installed and activated on your WordPress site.
2.	You need to open a Monnify merchant account on [Monnify](https://monnify.com)

= WooCommerce Subscriptions Integration =

*	The [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) integration only works with WooCommerce v2.6 and above and WooCommerce Subscriptions v2.0 and above.

*	No subscription plans is created on Monnify. The [WooCommerce Subscriptions](https://woocommerce.com/products/woocommerce-subscriptions/) handles all the subscription functionality.

*	If a customer pays for a subscription using a MasterCard or Visa card, their subscription will renew automatically throughout the duration of the subscription. If an automatic renewal fail their subscription will be put on-hold and they will have to login to their account to renew the subscription.

*	For customers paying with a Verve card, their subscription can't be renewed automatically, once a payment is due their subscription will be on-hold. The customer will have to login to his account to manually renew his subscription.

*	If a subscription has a free trial and no signup-fee, automatic renewal is not possible because the order total will be 0, after the free trial the subscription will be put on-hold. The customer will have to login to his account to renew his subscription. If a MasterCard or Visa card is used to renew subsequent renewals will be automatic throughout the duration of the subscription, if a Verve card is used automatic renewal isn't possible.


== Changelog ==

= 1.0.6 =
*	Updated Readme

= 1.0.3 =
*	Fixed a bug.

= 1.0.3 - June 19, 2021 =
*   Added option for quick checkout

= 1.0.0 - December 24, 2020 =
*   First release

== Screenshots ==

1. Payment Gateway for Monnify on WooCommerce Setting Page

2. Payment Gateway for Monnify on WooCommerce on the checkout page

3. Monnify inline payment page