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
define( 'DB_NAME', 'wordpress-db' );

/** MySQL database username */
define( 'DB_USER', 'wordpress-user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'maddy007' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '#x^5~1s`ym!:}zP_Q:UYaoWI!X7bqZ@53JIMj;zv*z#H%T-&[t8CSQVE%)S7A3+=');
define('SECURE_AUTH_KEY',  'd(ZSpX?cu-A9Hp-Cy!3LGTWOx6xt>epCok`c 546oXyw:@q6.Pu6,{4!r]-U[=2-');
define('LOGGED_IN_KEY',    '(vq~CrdLyYQzfSz!X73#jqie+k. 4HWN(rfIGq|JZs+,P=.wQ`pf|9Dy^OSvK=]!');
define('NONCE_KEY',        '#-uY2XEV] ]EXcC{1]f];PRIQsSW{+Zo]TCk2:{:g@o$iR,@:0~PT*Y6Se4LE|1m');
define('AUTH_SALT',        'Cr~Q|X0;vbl0[c@.?p+1YhJ3,oBZELH`gW)$wy6~|nH HAaUSm7L)vs1S3=&+,67');
define('SECURE_AUTH_SALT', 'z{P1U{5}?(kqMSC~WX]Pbglt5jb]OhcL)(G9#!mhX ugXBo=;5:gJ|{!!<cda14v');
define('LOGGED_IN_SALT',   'D+AQ|!p/,F}+^<,ILO%1<`_*&#+t{&9SwS]^yF>5Y@U*7,O!DbFsynog6q^-lB:&');
define('NONCE_SALT',       '| +jc|2w|~k498Gio;#l_n J^0c#Ii/bF:_*mhtU,Uw&(^l~t@F: W5a+$F-D.oy');

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
