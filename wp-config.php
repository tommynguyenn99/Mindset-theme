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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Mindset');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', 'root');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'VKV5>.|K,9$Or^DzZVw7Slme!H8a-1m).qIIU;@Td,I{QbQ/g!=$/mmt|REH#r<U');
define('SECURE_AUTH_KEY',  '}?<8)f4-Th>V.Z3_@+7EY|K&iC[7#-yPN[QT5^(C-iex3G+=JPmm?j2#RbLC{}+[');
define('LOGGED_IN_KEY',    '7pTkl+YBZSbmfP%cQ<sV;S1RT@`aX)MsOVD&en!0iNx>H0qUC(G+jMmP~u/y4?^A');
define('NONCE_KEY',        'Fu 2K(O--V;`#jq{-/}+,f,) @_UeT5);~2&?N})rg4w#A{(Jv| kfRY!&J5L60|');
define('AUTH_SALT',        'i~Y!|#JhSI6zsFGQI=IJwJWo36_8g~b=c]^/xnd+b`MX(AkX-|LJP/J:yCG]5Y?=');
define('SECURE_AUTH_SALT', '>`wKrqu-0P?gd9(:EUhI5MIB?#mThU{Kl,S8K,pqJBJJ><ulD}`5&[bAPG9M+%yz');
define('LOGGED_IN_SALT',   '/>Z~fV,pzx[!cwk<J(~7!m?cez2]gF9be{0>pMVh_A8en:l#&#/GH.+NNA0s4.}x');
define('NONCE_SALT',       'TQ<17O,,?#C.o.}`T.#EDohy.K-.]P7#Jl:/}e{[KN1ejfoG6m)sdL])v1`c<+sJ');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
