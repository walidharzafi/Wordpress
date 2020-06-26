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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'M~,x[8~KY/{y.~O[P,U2KN5$gt4:Y]srOaEyF?^xHuL3>9b*cA`cVTARx``iL;_{' );
define( 'SECURE_AUTH_KEY',  '4ARy|&Rt@+>bjn5?FiMM]_`|L5[EK*gyBT,KTrZNgH8Cn8?l:K4]2R2X^K^K=.P5' );
define( 'LOGGED_IN_KEY',    'S;a-*#u9mPhch3/,MqN^wFZUuu!2lG@er*v&@fx_^SF]k/TV~)#*9?4|lsg`JOHc' );
define( 'NONCE_KEY',        'Rmj^^r?2)1H]&DYlum|d/A~YaFVid{lZFH>fYvz6;8NU7:5/~w:Y@fkp]7mQ5PW%' );
define( 'AUTH_SALT',        'pIEenqbc!Y<ooW&jKqo}]jC1o/t{k/q.C/d1d04c%s/iIVYcZF.Ml`N<60;vkVaT' );
define( 'SECURE_AUTH_SALT', 'wq|a2K4,mZw&b SjtE)t|5H!Rx8eC0W%$<^KS*8&E ]eW|{xS0?h2nJ^EUoF<0iS' );
define( 'LOGGED_IN_SALT',   '}JhIwh*e?P-us]r]EPxU#c+QfPqLAL(6GQq7oh<ZY3@ Zl7;s%[XW1,*5kxU$)%7' );
define( 'NONCE_SALT',       '`A/p~9;H(#Yhh57xr4B#+EXP8s(x-|`TY8US8 oS!pao6(^UF*+r;6=@A++ 2r1&' );

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
