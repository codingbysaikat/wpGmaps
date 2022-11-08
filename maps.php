<?php
/*
Plugin Name: Gmaps
Plugin URI: https://github.com/codingbysaikat/wpGmaps.git
Description: Display Google Maps in your content
Version: 1.0
Author: saikat mondal
Author URI: https://saikat.me
License: GPLv2 or later
Text Domain: gmaps
Domain Path: /languages/
*/

/*function wordcount_activation_hook(){}
register_activation_hook(__FILE__,"wordcount_activation_hook");

function wordcount_deactivation_hook(){}
register_deactivation_hook(__FILE__,"wordcount_deactivation_hook");*/

function gmaps_loaded_textdomin(){
    load_plugin_textdomain( 'gmaps', false, dirname(__FILE__ . 'languages') );
}
add_action( 'plugin_loaded', 'gmaps_loaded_textdomin' );










function gmaps_display(){
    $defults = array(
        'place'=>'khulna',


    );
    $pram = shortcode_atts();


    return ;



}



do_shortcode('gmaps','gmaps_display');