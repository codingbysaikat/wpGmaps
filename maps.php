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

function gmaps_loaded_textdomin()
{
    load_plugin_textdomain('gmaps', false, dirname(__FILE__ . 'languages'));
}
add_action('plugin_loaded', 'gmaps_loaded_textdomin');










function gmaps_display($attr)
{
    $defults = array(
        'place' => 'khulna',
        'zoom' => '14',
        'width' => '800',
        'height' => '500',


    );
    $params = shortcode_atts($defults, $attr);
    $map = <<<EOD
    <div>
        <div>
            <iframe width="{$params['width']}" height="{$params['height']}"
                    src="https://maps.google.com/maps?q={$params['place']}&t=&z={$params['zoom']}&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
            </iframe>
        </div>
    </div>
    EOD;


    return $map;
}

add_shortcode('gmaps', 'gmaps_display');
