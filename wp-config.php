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
define( 'DB_NAME', 'assignment_wp' );

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
define( 'AUTH_KEY',         'BD4;wBIw(5Y(eX4 L!!MAAzP! >`L[IyM1 !u?ASSLdrvUbeg29P@{K,3g#~|&-c' );
define( 'SECURE_AUTH_KEY',  'S4*dQ|R9:91mew9nC>md_4S2-3X:g$PBXFmAS]Z0p_PW|H..R>Rqv5[u<[5v3&d~' );
define( 'LOGGED_IN_KEY',    '0Nc+OxGU`8X7V06.8~S:mofXRk$[XpcCq[Y[E@rGC>*pe@3rX17/%]3AU-HSjTLu' );
define( 'NONCE_KEY',        '=:wX3}6qNzg`yMq5w,?=jD)dj;mAUKsM%O5zS7M0ln%(W!OLM*L[}y~0~c?_]Sb$' );
define( 'AUTH_SALT',        '+m8[Sm.zBlx$ToptDRuZJuOo^^fkad *1av-M[D4gFJttC%8oxldR9>!A)DQ%Ba1' );
define( 'SECURE_AUTH_SALT', '=hU`k:)X#qGgp)QZ5~sxQMQ?2|Dbc]Se0bgTQ>ILq7az-plgpCP=,+bW`du98/A~' );
define( 'LOGGED_IN_SALT',   '$ytgl9n/z0es@0n:i!Ni-emHMY& dDIC]b>PhZ:Z`YV7o^IQwWg[xg`&+6E[*xHG' );
define( 'NONCE_SALT',       'VD@#OT#zvw}H[~Y/T8_TA^yP1Qp:<6!,kg|cvU<1s*yt5,+Q08Zcz/vAx-ryBfJq' );

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
