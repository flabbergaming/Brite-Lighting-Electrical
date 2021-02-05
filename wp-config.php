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
define( 'DB_NAME', 'brite' );

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
define( 'AUTH_KEY',         'g@Ale)I^pfUcCE6+h%%kr#hMwm}Ai5,j=wBjR4Sx LynpyEe#NK#>c{6iX TTxO1' );
define( 'SECURE_AUTH_KEY',  '~LrT8Lhl4/2;7d4QU5}?CLnOZPsa{:B0s).9UK5X?Puz=AU?xoI.C8@]vj`T2W3$' );
define( 'LOGGED_IN_KEY',    'EfRlX[!$gcM[F/O)sN3m&:evnfWMi69Trt%]d=_0.t,Z8>S;_yOePAqCD|uW;?K^' );
define( 'NONCE_KEY',        'j5LD(}.0q]=97K?vh0TRCBfouyB`tr`|lw;ZA[wGI/4-rt)OH-j$n7HM2wI$*tpF' );
define( 'AUTH_SALT',        '_dI].R#hLC24qOd,O!ohP?M`DMwlk3P<;!]0oogNGZB1<!@KK{I&D*sTc=08|T~.' );
define( 'SECURE_AUTH_SALT', 'na].eK.bC^Sf5pOCoOy0:Cko/Y~DPm3U5+*-IIq|H,{=g:G6%w ,Izm?f(FmxZg>' );
define( 'LOGGED_IN_SALT',   't]&I2%]k>vDhHzx&!T.o,Mx1=8nPD~ HV)H4NPHq)Owr5_RGK<2WsM&&wa/($b(G' );
define( 'NONCE_SALT',       't$m)^I^zL3/W20u-Xdya$PO/o!Kljisy=rJ*Td3)_ *+w?`;: &y49MEsh^I}qzL' );

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
