<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'myquiz' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XeBk<.a9fZWyM-0A5d1AL60VLp?4g>z,hB%j%5ge>zaXBcD>50#nrzhwNBW@31D5' );
define( 'SECURE_AUTH_KEY',  'VX.gZxafzA?I3w.A9+]*B9-y:,w7nGilM!(+Zdu=G[n0h(v&-8qB*HMQs9 JBdu ' );
define( 'LOGGED_IN_KEY',    'E>@_j6oCLaGaxZMGc7>l*K#HXER|5Fy16wJ^&Vs5V={8Y;xt+c(%?fv:JUYkj8Zw' );
define( 'NONCE_KEY',        'vFZB$8-r]AEe*V l/B9#:#!64tw1>Y).Ryj8E[umpeB{aROo{vt^NTk/N}aW0J7d' );
define( 'AUTH_SALT',        'YHy^Y7,4]J{^Ap%:k#,Z>Lu:-SFWvJ_v> Qx9plN/)>$;vqDK$4ck%}TD6+Rmyh<' );
define( 'SECURE_AUTH_SALT', 'X@Y#73Va$3DV)K;I$oPuqc-qHZDGs+_hzCB:mq.I2yIm7MR1UDbjDFh@>lPGVn<0' );
define( 'LOGGED_IN_SALT',   'V,(G(*zI7Hqp(P.Kc;Pg~C6|o,#LjJ9w5MxH9D?{-|*;*6]933Z?1@f*1RaeTu!w' );
define( 'NONCE_SALT',       '`/K9EbP+<9cb?5.Rt_j-Y5 eZu@8i~7qX53_hMbtXVE9aMM^o;6<NS. X&cB.Vz:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
