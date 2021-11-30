<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sarahbeagle' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_,;0eIIh:yed:2sw7$f%[^U]1eou3#`iA(:QC,(r:?U6r08(HTt9Jmt#91:K~*oS' );
define( 'SECURE_AUTH_KEY',  'X7|5iZqil[[<r4@`~7q6O@+*KVn5WL#AJ(o8c{$l{!V_>|uoc=yIt:q-H(hT[^MD' );
define( 'LOGGED_IN_KEY',    '?0`OG1N~qPXPvX{!wKw07X=Y>4UZA9TA<./>s9Ls7~Q(5+<xMV9o6;`z0|M>zc>M' );
define( 'NONCE_KEY',        '%`Mz`VhUk?d6q2{5)Obn%X>7TE E*O*7J=7a9JfrTRu;WpvuB`/PU?L$wK T21n1' );
define( 'AUTH_SALT',        '-,Hpv=H%b4K8hzk6y%^|?GS+`=*L]a9eNm:|~2;cVwvUJ/_A;krB=pe2LWml%lmx' );
define( 'SECURE_AUTH_SALT', 'w-{M?WhKAl}>?hCM_7<BzFo,HdoK}b<~4PdT-v=W!$Za,j*U9j?ON)/8JeW16$X+' );
define( 'LOGGED_IN_SALT',   '=:C~v&V^It9s;j$|T{h)NHU3#*rkz4zOQHB/42(M==cVu)#kU.PaW.-|3ktR>b*-' );
define( 'NONCE_SALT',       'T=g-?QN[l}.b,5d<RLI[i#8dsPVR2x#!Q2*U#Yr3CUupmWj8c7%Xsw1Z5&{ub.4r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
