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
define( 'DB_NAME', "dnz_ldp" );

/** Database username */
define( 'DB_USER', "root1" );

/** Database password */
define( 'DB_PASSWORD', "vietTech@1234" );

/** Database hostname */
define( 'DB_HOST', "103.163.214.134" );

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
define('AUTH_KEY',         'xg%6.ynY;c|ZT2RbI!kaqY-Ea-pMiR@RoPbPj>kB6Ia)IeH&(W+;C/eIUwEP#|Nd');
define('SECURE_AUTH_KEY',  'TEt+na5-@oKMOznCxiXgb[|y^x{-vN&?geA:3ryVJ*$C~cf|eB#cbI0*[D!mk:(y');
define('LOGGED_IN_KEY',    'W]i{+Bf6}G&C8]Ig?<7|IV/iEP$4.t{w(/-gjjSn8&`;4t<RE+udL|Xv-~FZwUB&');
define('NONCE_KEY',        'IR5)(kMiW vy)k5RVLC~<Yub@:WHKoGgn-2h6^U $=[0;~.0AeEcIZFS LKxr.&;');
define('AUTH_SALT',        'Uj#JM&O:=b_Z;)A2/jKzM^]wHy6$+ibIQ?Uf^:/Q]f~FLbY u|tM)J7HPKm|uh>a');
define('SECURE_AUTH_SALT', '0K-.k/G#4K:$=#}Z&?R#x+v6Y0UD9C0/xQ-VTDOK3#FyiK*Hp+[.HMp!{r/d*[ud');
define('LOGGED_IN_SALT',   '+.]??Jx3(sudVnU.G#k0Hu[Dfsw<$]IH:J1mz]WfC50F)Ak1)zH;3<~fXyI2_)^Y');
define('NONCE_SALT',       'T%6Vx(N97}fE3lS}wTLK;XK0I#>=ec(uEx26M9bB:j2tHE-*XVzW/hs~`[5|/>_r');


/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_SITEURL', 'http://localhost:880/ChuyenDoiSo/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
