<?php

/*
* Make sure that the plugin adds the og meta tags, etc. on template builder pages
*/

if(!function_exists('avia_wpseo_change_init_priority'))
{
    function avia_wpseo_change_init_priority()
    {
        if (function_exists('wpseo_frontend_head_init')){
            remove_action('template_redirect', 'wpseo_frontend_head_init', 999);
            add_action('template_redirect', 'wpseo_frontend_head_init', 9);
        }
    }

    add_filter('init','avia_wpseo_change_init_priority', 20);
}
