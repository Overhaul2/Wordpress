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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         'PB5#C*:<wcyIfhnysCK6@,0okXNig9E&1c(^:Ec:iqSx;]Z0L^8?{p:KJb{B7X?q' );
define( 'SECURE_AUTH_KEY',  '8p66]1!vv/E<(y4*9P[g_xRL!@$bSH5$XOSl$.8~/q.5P_m+f6v}&Y7gcD;|9JO5' );
define( 'LOGGED_IN_KEY',    'W<y*^;T/zUs)i,kNf9/F8cRJ<}Nwu5h2ug#MiUzW6:+i*$MzAhJZ@:poMqu[rP9]' );
define( 'NONCE_KEY',        '91 @m~`sz$oG)|SjLR6kS%1X#O L^,dv3f9BC.B.OeN?Ja_*=6#!-x*2mSxod|.|' );
define( 'AUTH_SALT',        '>BW;3`3i>|_Vq!>T(twY-mu(G}A+H1,Gw{od-XOIxF#J<0p%K89Kv]vTlS=oqfBo' );
define( 'SECURE_AUTH_SALT', 'P4 58,~|7L$<8jsY#9AEwh}Y*l>@YO_&IfP.gF5S?3G(}(i:<W7@Kh#y$;nq2zi`' );
define( 'LOGGED_IN_SALT',   '#PzB1)UHB5PCs{Y0hr1N_m-iR39Km@-(,:7m1<qVe<Q@33.kz1O23deow^Cr.wp;' );
define( 'NONCE_SALT',       'ip3gvUoCOtJL4;$nDY_Y^u]8e65`edA[S1z8!Y~8&Gy1P_crZ|;3UONl >Q/F%mw' );

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
