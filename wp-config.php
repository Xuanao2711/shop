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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         '89P,[?X+S/e`^q*jf.m]-t~3qc3 7_x0?tzz!]^NvEO.v]+,BbaOAJ {EH{l}Xy%' );
define( 'SECURE_AUTH_KEY',  'XQT+lHOf Y^|Hfwa>!`6S5I/K}IfDf.-S32e9<oNXmsim o^8}9c$_Ovce:`7]!2' );
define( 'LOGGED_IN_KEY',    'n/gk-Uq5viz91ffUE1rIU[BTl%c!2Q+}lISnRt@-YnRTxa9$(#f(MG$_$1<SjLU2' );
define( 'NONCE_KEY',        ' kSg^`h4nq.z%|f7-]~doRwg_68e-nnAAUY+4j-8;2pxn-z!%g@&OmocI,D-1 dq' );
define( 'AUTH_SALT',        'h_Lc8O)pq]}HL-~WDX8zT}Vgv:EA4ze~KzQyBF>vq^}.Od1Jg0WS<#u)NH*B+F2k' );
define( 'SECURE_AUTH_SALT', ';czqR7v5`O9;-VW, Feg$:WcY,.[tsS?cs^P{{>p.}CT~RP_#_N6F!+b,e)jAzii' );
define( 'LOGGED_IN_SALT',   '!M[*.P8P~~rA!x2u%xm-MM{Erpn3{yGGkVIaCeMC<4SJH1D^;v,2EP.r<=j7.Mb]' );
define( 'NONCE_SALT',       'P;c]ZtP5o:@k4-ilSJPW+kkm&_+K)l/vLu--U>(67;sGlYVZZ/,jgWlA)#Q}b&z1' );

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
