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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'sandor');

/** MySQL database password */
define('DB_PASSWORD', 'bgfkszm');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '|1*-z_`!#m$if-kNWk!LWs-E`ib+h}jaQ#b$q0#t<cW^wXuAyf3(g|ULRWA`=;@u');
define('SECURE_AUTH_KEY',  '|IR}k+bo.W|Q[*ENe|%_yP-ZIH.)uZr)p~4LTA3!Vv:#=05~=|7bCf_-j+$i=0;|');
define('LOGGED_IN_KEY',    '@I|X-g>0Z!NRyFi]u$UPP8yUm),~jUI95|%R9-2|;KP<_Fe3u62Ne,S{Y/vV;PQT');
define('NONCE_KEY',        'P{{SPfI;hQpZl[P<k8-jexMV&we>gP[BQ3sNFctH*E!G[4Ne(1zD)BKq-`=auf&m');
define('AUTH_SALT',        '_ZWgvdl0WJOI=%X|8 H_59;a,=nKP`nyr[rEssVg.Ph4yzq4X)gu~C|MoCT57pcV');
define('SECURE_AUTH_SALT', '2.9]>c|q}d|rV+%h7arSTeXQ[M&a__s%n}Xu^0}-n4%gS&)Jw*)y&-<}WTR54x0?');
define('LOGGED_IN_SALT',   '+kFry1+Y_pt7vV@?@$k<J+Xw@I}WcH7E^/jH&L35xpu2Z^PUI)d3/u/&iFu|-jla');
define('NONCE_SALT',       '$[)Bv~}](|mbk`?i<W[)!9CcM;Gq0CGDGhAx,wKW-h?#mDki>i`5sgel!0>Vun:-');

define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app' );
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
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
