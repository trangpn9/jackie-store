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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store_jk_db' );

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
define( 'AUTH_KEY',         'XWMD#L~;!<D)`Y[Llrt@&99@?j80=Us<(]tfqx0zI[H7%H6M9J~j<|E=M/jHs*+e' );
define( 'SECURE_AUTH_KEY',  'p:j@E2f3aw1E=u7-tMo$m(K[Ji3{BFi4o bF7H,~?D[K_u^A+Z-X[tNya{%# %9V' );
define( 'LOGGED_IN_KEY',    'fJru-Ipc&Jk&5Eq36E8<,KnU|=CKF(Go;Q%(a9ARmK[0!Y%xg<!8y;?]H-YT7ovs' );
define( 'NONCE_KEY',        '<.xpt@SA>ej`?QM4f*)^3_KC9r{#&UHrm|es-uMEwoKt!TE-X:#VAT4g_E#sYmbR' );
define( 'AUTH_SALT',        '(<0lnSLIZk~X=?D[z8~95zLhs*U~c:dicW)g&:kg|/lvz-<#ivl,=TPv}eY4Vwu?' );
define( 'SECURE_AUTH_SALT', '3wrQ>8ek7#<k>QC0[:k|YW*$wH`krJFR?P#sZnW@]yVn/c3iY?Td_[6j:9dq?pbh' );
define( 'LOGGED_IN_SALT',   'wWjhn<fQ.G;L{XF$jafN|y!7[@5C6%KfJ4`}Tc*o$#@aDb`n %&~CM3#g754?TcP' );
define( 'NONCE_SALT',       '|#6l37.f2dgb.[:a*s:;+e]PLBI {Qu2jvi]N2#^-R<cp8v`!r*jbos%#_8|[,QS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jkdb_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
