<?php

/** Global Folders */
define( 'APP_ROOT', $_SERVER['DOCUMENT_ROOT'].'/DAW-project');
define( 'APP_ADMIN', APP_ROOT.'/sections/admin' );
define( 'APP_IMAGES', APP_ROOT.'/src/assets/img' );

/** global pages */
define( 'W_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/DAW-project');
define( 'W_ADMIN', W_ROOT."/sections/admin" );
define( 'W_IMAGES', W_ROOT.'/src/assets/img' );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daw_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
