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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         't;yVQRJ1QeH4Dj]P4Q3on,$|9<,qgAZ4QgyBV?zeS%]GQ}hmjq|7v4AQCv6:WtT(' );
define( 'SECURE_AUTH_KEY',  '80D|+Wn;`V7*)fx;i[b1lO!+}FzS/xhkn0m)/b>-9Xtyu36m&I@FOloerx6J,}bi' );
define( 'LOGGED_IN_KEY',    'TxdyAe#/`OhUNcE&.f1b1A67E#gFh3(e2<O!T<L=yEH5F1H5{b<&so6Ho]/R6Y+8' );
define( 'NONCE_KEY',        'vdc*LgZq&{]j&n_zaF4Dr9[@)nRR`,_BQ~@.i8!&:AkcP?qL8*Vb?xmZRWK$-WW]' );
define( 'AUTH_SALT',        'l$F8m-wa e`k*ZEQ%c&S#fo|zy[Zn+K*O:w L?i8&dvrKKEUx#[ro;MILs>x%xlL' );
define( 'SECURE_AUTH_SALT', 'By9,Y[)=*eYr7}^N)[`pYeD~9S4im*ea[6~C$8s2seoWZ:iVttb!kE-PH_t?nqI2' );
define( 'LOGGED_IN_SALT',   ')Mor3{UW;GmWi*7.7XzwDp2Ai)@LwIO7ig5,$x9HLo6qzVU*>-;{>3Zl~$,$y#@f' );
define( 'NONCE_SALT',       'e<.Wj{n0y^cDt~c)ruwU[;K_9Tx1G*yQuRs5)y?Ic.94b0`RLi)5AFFvzoFVJ_&C' );

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
