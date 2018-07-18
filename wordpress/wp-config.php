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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'J:rP6?G2K4ZNN1RSLF!h_w|{%@qPkyGQWN&[h=nwtirYT] o`v?/4vj,,1Up&n!a');
define('SECURE_AUTH_KEY',  '6M3QL!A-:{z>X627`A6=ttjGpMuT^X:W|Xz4}`_)&F}9 %j8u_cEfDKc<[Sc{hZc');
define('LOGGED_IN_KEY',    'BAG(x)7hO@RmAs5u%Ml&[%.Jm6-D]U$IY+R@T42n/1rvm_So~eD&nx2_20UNz!-G');
define('NONCE_KEY',        'P:h[F.La+.CWm!BBvJa33oA(?7T9,fLF{Eo1u81mXc=kUxAF!;~E]KfqlP9;[Hv[');
define('AUTH_SALT',        ')*q7PT$JQ(d,EIXj$x> zd8K<K(L11cMF})#hh`&^`h:rA<.3)HECj)UKpih)=@N');
define('SECURE_AUTH_SALT', '}:/-U:goVftAzP2H]W)@L5BjJ[n?9SLK-r@dQmx=w_, So,$^l0~e7k{Z`/L`/p(');
define('LOGGED_IN_SALT',   'CAecYd&d~NXC7nEYR%0W(;dem2JpcN_gns?Ia;twW.^f{?T@Yg1YnORrn+Btc_g7');
define('NONCE_SALT',       'Hq0/8)/4yEl^{X! q*Q`f[<As,+b,9cvcV:|A@~#!R$=KZHlx+.aD_NKbtJ}.I!D');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
