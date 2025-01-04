<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'vs/;Ugi1Kp/3lvDsv@4$?)A!-=oa5oImq-3B<jS}p|L_vN=bX6SZl9{?C4120nvS' );
define( 'SECURE_AUTH_KEY',  'dD.uW(z4NM{)G*`kZICL3Q07U5u/5HWLoF-M!X.IO};J4}kQiLdD|n iy!Yd)I~Y' );
define( 'LOGGED_IN_KEY',    '#O,y^..4Csw{;#8*85#IoW ot_eN%Ey5r^lnOlp$J%XFMlRMG(4.uImyJPX5zd,`' );
define( 'NONCE_KEY',        'z[Q_(?0aX$[rjylEy*wCJD.ZSz!gf%2i0k9D9Rf6(yO9m^OJ7;ynVKU^DBm;u)ss' );
define( 'AUTH_SALT',        'p1j+D[CA|@5G6gPuQ(L41CY[P$o #RAY3Z>&n$9LDjd, ](hC5707yMBw7|j/-g ' );
define( 'SECURE_AUTH_SALT', '-;*Z>J?:hn$PN$gt=pQPsJhsRq~]?tmG2czLKwPu%|$(A_pkzCB;8RL`>i8g9$YK' );
define( 'LOGGED_IN_SALT',   'qeKp%QOTNF<Gwol+<2b35Lp8N<==x!W*x5/67f=>zn^7mq(bB;n$9t;L*r|=6qQm' );
define( 'NONCE_SALT',       '1;~3(&-D$^hxhti=3<|lk49Rd-,IMzg]0Cp+6=w+zwk 5.Kb^xkYhXd@rS}OY-|w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
