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
define( 'DB_NAME', 'unitechsm' );

/** Database username */
define( 'DB_USER', 'roor' );

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
define( 'AUTH_KEY',         '/x P9<:j<-ge0XbZxIs|u|}9*]%q3-W9Nl:qI+AhrGnJeRc`XJ[>op$N<>K]C*,2' );
define( 'SECURE_AUTH_KEY',  '6aS^{{rLuN}QqDj#>,k#`<kKqMoz@)YBs*,<$<@h~:D9yR,TDk?l[$L$qx2-|5Vs' );
define( 'LOGGED_IN_KEY',    'L~IU$ cGOnTKY~x?x^wVZ<<rgr@b3^CaVpV03@K7&T>dvGdNnO2 IXgMM5!+I,&d' );
define( 'NONCE_KEY',        '{/aC1G+pC*6%35p]5F(V:N%Nym|hmTD~jHP=sY2B0BG~tcgZDr.ut5,H1Q,>`Z? ' );
define( 'AUTH_SALT',        'EoQ8A)NvW}S@5J(0Wwz* 6},;?M[I)u0sR6?OzI*8???W>=s!,Q,}Y&GJL0T&=HB' );
define( 'SECURE_AUTH_SALT', '> ]TT+Yy!a:pZR5=0ygDmR5=QGy%C~X@#p;$Z,U7b1926Kp&*O|f9I2!feB[^ rt' );
define( 'LOGGED_IN_SALT',   '#+M|=K`EK;O`dNz;~s(ZM=4Z~.Q=G7VdilvAtun.=RX5du-5x- P$:f:UJy/4`cW' );
define( 'NONCE_SALT',       ')]E+AHi|~&w$3k;3#hEuG}^i,SSIkFuIJRz5f vSB4L[<s&jUQ[6JnjZbbp!v;`.' );

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
