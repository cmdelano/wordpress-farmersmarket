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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'farmersmarket');

/** MySQL database username */
define('DB_USER', 'becca');

/** MySQL database password */
define('DB_PASSWORD', 'conley');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5y=7S+2xpgv7|8H3QAtTc~ajS:/5Q]EP?N]F=uw#aih<<zf7&>tFgz`>kdj@^[-D');
define('SECURE_AUTH_KEY',  ' mX%D@!]3u6l:00T-r$(N{|+Nvktuy!T6Dw@A~N:[Ub[h{Jc!cI3F_|^|/K&NY*7');
define('LOGGED_IN_KEY',    '0T-U:nbpztPU^(Zywr6g#+&&:dzAg(%+/]$ZJci{Ygvpm]A@na1DXf;[CYgO:WLi');
define('NONCE_KEY',        'xF6@oVT0vlr{-JkoJ>lre]0(W~!#kYiSgGQxua=^uLr.5rpM>Hd;1:%GpEv1 W?,');
define('AUTH_SALT',        '?P~wD,O( -sN)1Xgx>`43qyF6Ktv@~]EeFa/=r{Pi;#1_--Da-[dhd|9j9/VSO|O');
define('SECURE_AUTH_SALT', 'q3,RY`LQVdxeM^=va4WZ7dFfPB{?QnAL:(oW~<8!8rWtBCo-vWU[Fy3U+OF!7Foj');
define('LOGGED_IN_SALT',   'xzf=4N>9xgABxc[LaW5B2lS*JhFA>2SDROE !@7scZ9ScfAPLzSrxU;*q>%[G.#C');
define('NONCE_SALT',       'q,lz$w@nTthV5mBP^=6D~WxyfYR1P%CV2;;68k&C~AFSUTd70t2hRX}Xz!en]n4-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
