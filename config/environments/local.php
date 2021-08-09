<?php

/*----------------------------------------------------*/
// Local config
/*----------------------------------------------------*/
// Database
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost');

// WordPress URLs
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITE_URL', getenv('WP_SITE_URL'));

// Jetpack
define('JETPACK_DEV_DEBUG', true);

// Encoding
define('THEMOSIS_CHARSET', 'UTF-8');

// Development
define('SAVEQUERIES', getenv('DEBUG_ENABLED'));
define('WP_DEBUG', getenv('DEBUG_ENABLED'));
define('WP_DEBUG_DISPLAY', getenv('DEBUG_ENABLED'));
define('SCRIPT_DEBUG', getenv('DEBUG_ENABLED'));

// Themosis framework
define('THEMOSIS_ERROR', getenv('DEBUG_ENABLED'));
define('BS', getenv('DEBUG_ENABLED'));

if (!WP_DEBUG) {
    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL);
}