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
define( 'AUTH_KEY',         'fwingBw7{/hZ(&?5ru1LUQZHhjxfnDIa xj26SG;|y7M8I[tD6OcOxSS%O1wg~h:' );
define( 'SECURE_AUTH_KEY',  '.2Bwf4Im=yp)%LfLuF*IWTuJwzNAL8#udA@x46*6y+CcJ!A6GxY55rVe@Io.mql^' );
define( 'LOGGED_IN_KEY',    '~}4@FmFJT^OoGmNjLQ/rw2 f70MVR:egj.Q3.xt,)*CMG!@vXg?EV7dhu5KKXzCp' );
define( 'NONCE_KEY',        'o/0T7rEJ$DYf]fjbD9nfK(<rg[j48D!-,}&.cfI>n?@r!-dVlIEiME?0@edpj7rO' );
define( 'AUTH_SALT',        '24+Ek,F+ZhP@Jg]FN~K@prc9YQSQWP,{1H8(I.]_Ee9w-&3{etjI>En$(ANPD.I+' );
define( 'SECURE_AUTH_SALT', 'i>qy.s{5ZXdKrW`LzO(wX,%r[&pMdY@/u$nB4&q<=e7K}h>mA^=X{y%:WDecmy`}' );
define( 'LOGGED_IN_SALT',   '}}-la(}l&pfGwb,.A6Q(oxKxW xSsVTOl.cr)^mhp}j/e@QLYubJim1R*#q6$x&+' );
define( 'NONCE_SALT',       '(32SO*!~uT|i..^=J8=_yWX78xlIo&JP2asCP8%8du%9h&{3gK^uu>E/|2`Q#&DX' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

