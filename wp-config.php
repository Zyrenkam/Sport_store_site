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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kazligh1_wp_w1w31' );

/** Database username */
define( 'DB_USER', 'kazli_wp_7arux' );

/** Database password */
define( 'DB_PASSWORD', '?RR*u~cBHYK&62J6' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY', 'Re1HO4Q+[;|mAgdoX5SM6TlxQ8/!0wg|5iI[K5X:-FK30h1D63#D78Q%0qe_Vv92');
define('SECURE_AUTH_KEY', 'iO~@4(_4cQSF-%4P(In6X3C:3#_5)7y&)t48/aUAbW+68rh1i([j+5!k~-!5E49:');
define('LOGGED_IN_KEY', 'g5O5|M3rQ3F1|vr_6[571!d22G2-6nFR(T70Z6|j6eDw&1|Zl1!767S9E24(N|W+');
define('NONCE_KEY', 'R3h+LBdxt]OZo0/DgxE+|[ueat4:!;2PLjV2#755Z8Hg7@2l79#6%hn!D]Kz08FC');
define('AUTH_SALT', 'wu;jBon0dLUnD+7#6V6[|7hu6/kr*HDkBO7DiPB%%vI6!4w86*6q+@@%R;04#LBr');
define('SECURE_AUTH_SALT', '*2frtm-*B/EIc0UCurtjK_z8#8X~q2270s-0q0@c9mP#(Ui525z2-AHixxV:1IGP');
define('LOGGED_IN_SALT', 'kyR~JH/]q9K&j6Xp55_e154fXYs8r!4]dA7JuAx&q7F(!5:~F]2Kwb[9ngrScnP)');
define('NONCE_SALT', 'o;OQmUdz0X55]Z-~tblP|4E%_-wMZ0*j9T4!32ro&S_uYZ+[-t_HN4%q40ZbhO/r');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vpN63yx_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
