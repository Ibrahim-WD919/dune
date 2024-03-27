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
define( 'DB_NAME', 'dunes' );

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
define( 'AUTH_KEY',         '+cA|T*cug~r4@F*K^g^%rGyWLGhTjS^IszH^Gl[*_0J!-W`WG?dsSwV;y6M.1v]:' );
define( 'SECURE_AUTH_KEY',  '5Q 0*WwwU7xtR},NqA(yth2-6MjHynd6rHs]5qy eN8L]jY|BS3GV&?n;ZZO^)a3' );
define( 'LOGGED_IN_KEY',    '(FJ]Gw${7w<F(CAHr&:+MhlWjsYzkt7)~{Bxd6b@zKK->;;?DPTjmlXyVY+,%#Tg' );
define( 'NONCE_KEY',        'h#Frt4o@-tP(ivVSaFzH:cgI:*o(JP@xWq!9KXBEyG4&ybbkS/=:O2eu[@.B;bA,' );
define( 'AUTH_SALT',        'TmlvpbHl{WqjAj41EK-qK0adFr+%W[YTMd28+y`DB=:DW<] Mse4?p*=N3UG+SP&' );
define( 'SECURE_AUTH_SALT', 'v{|J]*kp#@.%(BKKXN+` FtxD$6z~xK.27j Nz)p;y7?|jFf9eWOr~c{|b^.nn>_' );
define( 'LOGGED_IN_SALT',   'Q$2wp[S@b%wT;7[LX=/:^!crcZgymIg*#B2!JV)*[P.K>&!.*u7W;m7b.Wc6d%AF' );
define( 'NONCE_SALT',       'a(waCCWhT5LRI_h.-x;w!4;<lfDwl,TMZd&VY,X%Fhz==R^2O2?9AFd*Qp7jQ`yL' );

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
