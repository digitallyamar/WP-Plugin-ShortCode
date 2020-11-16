# WP-Plugin-ShortCode
A template repo for Wordpress plugin with short code support.

## How to run this plugin?

    - Copy this plugin folder to your Wordpress installation directory's plugins folder.
    
    - Install the plugin in your Wordpress by visiting http://yourdomain.com/wp-admin/plugins.php
    
    - Activate the plugin by clicking "Activate".
    
    - Create a new post in your wordpress website and at the end of the post add the shortcode:
        [sc-demo]
    
    - Publish the post and view it.
    
    - You should now see the below string printed from the plugin:
        
        "Hello From WP Plugin With ShortCode Support!"

## Things to note regarding Wordpress plugin development

    - There must exist a PHP file with the same name as that of the Plugin folder.
    
    - This file needs to contain Plugin header info that looks like this:

        <?php
        /**
        * Plugin Name: WP Plugin With ShortCode Demo
        * Plugin URI: https://www.muddoo.com
        * Description: A template codebase for Wordpress plugin with short code support.
        * Version: 1
        * Author: Digitally Amar
        * Author URI: https://twitter.com/digitallyamar
        */
    
    - This much is sufficient for the plugin to become available for installation in Wordpress plugin menu

    - Every shortcode must be confined between [] when used inside a Wordpress post.