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
define( 'DB_NAME', 'laia-restaurant' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Password@123' );

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
define( 'AUTH_KEY',         '<3KH8mMo 879wHV)$DV^B^%db$4|b78G<l+~1j|(!FQPB-N^O}z7ZP*2tT?d[BQ.' );
define( 'SECURE_AUTH_KEY',  '<MLldgmH959W1QAn[1qI=aEP<0gQCi:]OY=@+{aUudD@k6,qbjmGf&50kllwlgCX' );
define( 'LOGGED_IN_KEY',    '{3Mzrp|`S4oG#UK(*ft_.x#+QdW}u&`e`M!fk*7GB()?)?-pB#(c-Y)sfvZ*N6F}' );
define( 'NONCE_KEY',        'SVA%rV<xa>]?Jxk}BEGGT z7sPC))Cv93#!`7=`sK.|&;%$8tTE|4uuWt7zA3!f&' );
define( 'AUTH_SALT',        'q=~htLs&QuDY,zH#xgyfsDhU4]8gtsmV:$t~Ivj2/}a;HYtIXHI}f5O0Vg>{zHSQ' );
define( 'SECURE_AUTH_SALT', 'SI%nT;lRf?1tz&CVH_^(x+lV^$3U`$9FI8=-c/yfHgP]qp?`:.aQ~ >N}GXGD|A3' );
define( 'LOGGED_IN_SALT',   '-BHvXYALr GVg-@CDsAO&HY7LS_Abd3i>mJU{z8YM}QBdAyX$J%rX.qv,I7+*c1[' );
define( 'NONCE_SALT',       ')`O$HMWcO.+-]B#CDaP*z[|g~^?;1)(AJM)e#`pi`CCnA0@JQhDh84IyNCD<DLn_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptn_';

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

/* Add any custom values between this line and the "stop editing" line. */

define('WP_MEMORY_LIMIT', '2024M'); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

