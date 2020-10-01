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
define( 'DB_NAME', 'crystal' );

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
define( 'AUTH_KEY',         'gGr(vNDpWO:Daz9hpi?nSR-:G+rPD1;z3R7 3EJSxlszB)kFy[wW4O?e/J))*{W`' );
define( 'SECURE_AUTH_KEY',  'tWqXWmYhOFMf$9vEwVTg1M!@`D`)s+ 0CF;.!C35N~;hwJFXwg0D u}(-mULtc3_' );
define( 'LOGGED_IN_KEY',    '<}KcRkk}2mpN&bbhxxFN]X>}wPDP4V?M{jtV?wi<*U*dccFvkDBwMe`Ciy+ -Vv9' );
define( 'NONCE_KEY',        '#7LvVEuR|liql_wHB5OC4ZqI^8{vU2<?MqCY*by8)~]LW/lickEU;Hg*|$f2Zi)#' );
define( 'AUTH_SALT',        'Yi>Hqkpj-tI(4n||?o&:h|bi$XyK6k109eBMGzVej=(^8dEv4.m$#6~mXhbnb}9~' );
define( 'SECURE_AUTH_SALT', 'yAgvl>HG}Kfrn`j}RhqfNWN6~%oz`7&BKfpZ/Hnw,HFT_d`aOYHLQ%5tj?lSwl3V' );
define( 'LOGGED_IN_SALT',   'H}v{MKg,U-Dh*5ri8j*,WeDV&)&#S`%)>m0]78O+U 2T^_TM~K&}!iCJU/zp9,g5' );
define( 'NONCE_SALT',       'fFh$xF(fL|0KC^Tm31iCIswmuWgD*cFXsqqVu(~>t^Uf8c=a-djE+`Pz:E]{27oM' );

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
