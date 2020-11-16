<?php
/**
 * Plugin Name: WP Plugin With ShortCode Demo
 * Plugin URI: https://www.muddoo.com
 * Description: A template codebase for Wordpress plugin with short code support.
 * Version: 1
 * Author: Digitally Amar
 * Author URI: https://twitter.com/digitallyamar
 */


 function wp_sc_demo_func() {
    $retStr = "<h6>Hello From WP Plugin With ShortCode Support!</h6>";
    return $retStr;
 }

 add_shortcode('sc-demo', 'wp_sc_demo_func');