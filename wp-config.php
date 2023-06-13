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
define( 'DB_NAME', 'wordpress01' );

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
define( 'AUTH_KEY',         ')aGRrt*NX}x^mCnR~d;4Nv@p*SZj2m~_/O[>-Nih/,Dz+}cN ]M0gu)QDPc;MxIn' );
define( 'SECURE_AUTH_KEY',  'hQ[*%mytD3.{2sFi<YG;leGqL+fi.el)CcAVI~FReRPLN,3dywkr48^Qh>@BhA{?' );
define( 'LOGGED_IN_KEY',    'r15#|vLcz+!^IA1.AqfBI8x5onV:]I|j&kY3h+`X$Z+I=W5k10ASbsTRGGX|%>**' );
define( 'NONCE_KEY',        'Onr{U7?+KlVQsw! U~`DDg|/3O qJb4htE$4r[)TI0G6b-.>J0Wa?0r0SNAvF#.6' );
define( 'AUTH_SALT',        '>}FZju-&P,*=BZ~R8}fX=A@:Er:%5rqQXO6bavo`N-i9)A-S=$Xu)k(#Z.k&_~)-' );
define( 'SECURE_AUTH_SALT', ' lx]~xX|7=L25q`?oL5X~ZiNkDqa(1.RP s|9jLa?f}nAU5_B#DA*]vwa|}+Q:F&' );
define( 'LOGGED_IN_SALT',   '8wo!L]XJ&hJzG<Lof0*zhv>XWv^W?]mu(;A&*_&|aD)$q~B@]E;FHQuoNJ_%`{+S' );
define( 'NONCE_SALT',       ',cUPZ+>V;7ySMGkB1gt(fp[lD3!=>47Tgm#5K^:5WUxNUUPzf6rwLYz&-fCUu+`i' );

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
