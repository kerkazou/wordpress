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
define( 'AUTH_KEY',         'oZu&.#wspuKZGM,dag&II>8Dzj/v+^X-Kd/w^2Fy]haC]w)Vms6[HnlIND%j&9;X' );
define( 'SECURE_AUTH_KEY',  'gi%Z2&r1T#V)g[aG=g {trJ7|GGUJ`1%QD]sZS**]?IgLTxuO7D)r^4 [ZMrx1U0' );
define( 'LOGGED_IN_KEY',    'J!;>xqQxi#fa]R4Q<nd>KxVD}Zc)i0Eht)U.CFlO{t|~@K}|]sws$!/ikAzX|3f+' );
define( 'NONCE_KEY',        'dnM7lVm]LV<;7/6uPBI2R*cn+|Gnxcl2r5IEj?<iDbS0D-TGba^N2Ei+p2R1#F<j' );
define( 'AUTH_SALT',        'XFjH+6~y2~*s#s]7xJMh?MjS,J9@!t%NiA`{GI;dM6L A_JaqS83^X}kA6VLF+iz' );
define( 'SECURE_AUTH_SALT', 'b&p 8>FZUmmRxlOKQi7YmW$%^h}^FtvU@F5o1ZZb*8g7H5{_!SVGM:2*Ry~td@j4' );
define( 'LOGGED_IN_SALT',   'XFl(|WxXb6<9@,!f&ZJOZE+P&j4pvk0y]dT W-d35E9_XWs{g()gU:s$lj.=tF9g' );
define( 'NONCE_SALT',       '!V5f68FdA?.E<PA,4/%2IsO|zs5x<uPHMicMrABJk3sF<S}^{}PUx>ON>sb=e:<q' );

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
