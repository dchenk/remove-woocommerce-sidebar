<?php
/*
Plugin Name: Remove WooCommerce Sidebar
Plugin URI: https://widerwebs.com
Description: Remove the sidebar from single product pages
Version: 1.0
Author: Wider Webs
Author URI: https://widerwebs.com
License: Private
*/

remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
