<?php

if ( ! defined( 'APP_ROOT' ) ) {
    define( 'APP_ROOT', __DIR__ . DIRECTORY_SEPARATOR );
}

/** Global Folders */
define( 'APP_IMAGES', APP_ROOT.'src'.DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR.'img' );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daw_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

echo APP_IMAGES;