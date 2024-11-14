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
define( 'AUTH_KEY',         'iRx:/>MJ4u`amDYET9OtoQd[u_zT]cE%$g-1~O&x+my{gw(f~q]s^e&)I+:::?}l' );
define( 'SECURE_AUTH_KEY',  'psk8#tTQ(1qij#xZ!p~Bynj_[o]U@R<rWb}a99|HQ<R:h%)[zLZ#Fr!Wi&&&PkAC' );
define( 'LOGGED_IN_KEY',    'hnAX][RHo~7Us9*~Ai6(p&}&U.Aa8;kxWeizbYz0fUsL=z}q5}h-^!qgA~pk$eBP' );
define( 'NONCE_KEY',        'p%o.6FvD]$qNT9:G(y%I6`hzm~ $rSk.7xHI:Z75^!#*#nSfyn@>)=Vaj/[&0^b,' );
define( 'AUTH_SALT',        '8HGN=GP9C?J|LU (O(]t=;ErYl:Gc#bno%=JnfR4Jg4IP+3:Gnvy](VT6O|V%!$h' );
define( 'SECURE_AUTH_SALT', 'z27VdP|NW53|*~Q?y;`Pa#IDWAe=Qt(5Nj)w67|xj4cIX(xvxd[W6#CN*)7cauMb' );
define( 'LOGGED_IN_SALT',   '>B])v:mDu#?5`(08gPgt*Zk ;%Sie15_w#Sod.y_,&1#}4|SZGau|({Odh}q^r3k' );
define( 'NONCE_SALT',       'xgCl^XZ!26<c~B+%y`q%+Vc[PU~TA#A1&2rQ-r/v`(D$@PE-kW[MSKxo):$@VBg/' );

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
