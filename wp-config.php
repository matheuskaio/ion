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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

define('FS_METHOD', 'direct');


define('DB_NAME', 'ion');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '04072512@Lella');

/** Database hostname */
define('DB_HOST', '127.0.0.1');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2Q}e!9M%5g QSe{ZUQ]]{O:$gWpd.sWaqQjvNd9P*zx:#,BfcE?`WK52o5Kw:ZDz');
define('SECURE_AUTH_KEY',  'c<_?Mk=b^:;Mq~j1@%S0H~N3Bxuz/hdf8K&xQ~R(O$dQv2?:y4,:~s=5~*O^_O3U');
define('LOGGED_IN_KEY',    '}u/QY1>NWgw,sAUGT$>3_*zxl@[[Ym2ruhQpmm/AA_s[VJ_?u!;%k?Bs#aOEXOob');
define('NONCE_KEY',        'k(38,K(itxY)wQ@ }6JhR@:i!}J*2o7:A,_gRJUvuQUizIQ!WlVt9n3)(}]`eUQw');
define('AUTH_SALT',        '^4i]};*j rZ VILq3EU)(fIMOkupI~{Y#6]Xd?x@SafRf8gloOgc$w:n,~}d}]tG');
define('SECURE_AUTH_SALT', 'PYOH!=[Wuc*HFLrl8@]Pjh~Q(<GXr$<R=)ma4d(%b,>8&@7,`^oxJL>L5jci^`#b');
define('LOGGED_IN_SALT',   'Q8gdgVCngB_kZ%Bnp.,0<NY/p2R]Ij4ImI:P{7CnuQ%G=(m.Vw6HCJvb@jI*Z/*-');
define('NONCE_SALT',       '_=To@4gNCWIrpqsL;M?fyg@T[,K6nW [R6WaAxb>30n0Vh@lBv8t~&u]9`zIHc[_');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
