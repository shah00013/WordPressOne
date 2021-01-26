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
define( 'DB_NAME', 'wordpressone_db' );

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
define( 'AUTH_KEY',         ']^@7+a@<,|A-[Gf>]wZ,8Cn>koJq&mht$K~RwaDq/)>5iO!V6o5?T 32~LvXdtD|' );
define( 'SECURE_AUTH_KEY',  'NIE#B>;Z5UN+Ww#DJ+QzF.+=T3^cl-8*r)a3&mV K2qb?Lx>[gxh%I3zv1hPa=>1' );
define( 'LOGGED_IN_KEY',    'g,w>`7XR!5&Y0S<-SWjzy<8}Ll&wqcVB-|#DyUgn^n!cnU:$Fr8<a=~(#3C;U}y=' );
define( 'NONCE_KEY',        'ds*vdQ17$c8uC_s$}fcxk,#{jDXa;x`NpQ*bp,|w}J<olM)VnGMNTU7^LA2vf:>R' );
define( 'AUTH_SALT',        'pE_E7$e0FQ;8?SN3<M}8>Pv0}K$#`Ls++S_48T*r]Rct$Yx=9]:/o*.4uv{,t,j!' );
define( 'SECURE_AUTH_SALT', 'xP)+cvU5f0>S5<{Kp7nIA.#-qz]?+&/:j1|3-8Dy}UT>uS$[]?v>=uDUBTa&JEWk' );
define( 'LOGGED_IN_SALT',   'a{5#@b,fzIBK[MstNg)f5U3EYg[w%Soc/<@1*Bve{%e0V]7J`?S/h<D|3#Qp/G_&' );
define( 'NONCE_SALT',       'm`^_K|8<F(BrHCY!e@(u{Dq=Jb`pxXZn`b]*!M8cu!Y6n9,VWO[o={c/gP7pbFE[' );

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
