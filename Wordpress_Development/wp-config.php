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
define( 'DB_NAME', 'my_theme' );

/** Database username */
define( 'DB_USER', 'meheraj' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'oZ6551yR@Z{:$N,,Hk33psfp*r:|V+=YuD9:c{G:a_W>`ZUy#XSHl?V?6[5w[9]P' );
define( 'SECURE_AUTH_KEY',  'v%PIR;oG8ap? C(!UQa .3[2^tJhaXQ$>,We]Ew?)q6<ioJiG[|UEP#UU{.;[YDf' );
define( 'LOGGED_IN_KEY',    'QJ}3vaC5@Fy 8(opp>6X(<5[&+v*}9XO`/h8&*~j=W|xK;L|zS]%I`ti#(I9@P$#' );
define( 'NONCE_KEY',        'VogrH1]v@],Jl8Z=wC//P4iHUf|x,_8yaYV6(/D9evU:,egzGY2Xr2~vtSX&Z*90' );
define( 'AUTH_SALT',        '(U%!,{Z=>5ky9:Kg_(@CwMBjEL$>%.0_N$GPj?Z>.he~ R+Ox2b_/2|DcYq/Y2TV' );
define( 'SECURE_AUTH_SALT', 'z,WMi@gq5#6L;!@=C--HgJS9~_jVV:XbFR<q8-~4pHU0;8Lx)=2ULSXw];~HI8QL' );
define( 'LOGGED_IN_SALT',   '*}/;~%y^HMaY]fLM(&f;8C)E_TOwgA}A{V9$_$bD&nTD)_IbcErZaDE8W]7nK&Jk' );
define( 'NONCE_SALT',       't4k[As+cO0D`^}D@`>GDnrVQ@fI}; .*F~K[0$.mm5/h%K[_CQ,<gz?@z+diKnNT' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
