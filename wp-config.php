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
define( 'DB_NAME', 'simpl_vintage' );

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
define( 'AUTH_KEY',         'Gmv:l)R$]=D<yaK9s8iRZECQ#KZQy}my@3(7I!67@%cZa!qtMB,L:iG!JJwt8Z>|' );
define( 'SECURE_AUTH_KEY',  '#jHi1mKfn:LVr.4:~U:-(#d29#YpK7:&(onkVHy+1`a&z)Y%&PJ,/vRk]MNRTG=s' );
define( 'LOGGED_IN_KEY',    '![N>&uG+<x/QrRnjzS ;L&{7s8E~/OSu[23>}IUJm9xTv>4ASf3L]Js!4hI_;k%(' );
define( 'NONCE_KEY',        ']GB@QCe2z1?hd!7T!o,l`bP<u-:3Z;v51hPjgc<n)$XwJBO(PIpvY>sIhd;@V,lQ' );
define( 'AUTH_SALT',        'gVUxTX%PT}mdDpz@gs[7nZkPnDx.:QMbtTL$*G|wy^<eEvqG6& WW/uw8tj1Y 03' );
define( 'SECURE_AUTH_SALT', 'IXRnG9noRS$y<Zzaqj$T;Xf+8V<My:t9A_HFZ5Y)X:I=:1v>B@N)-wOMz1=Md0LR' );
define( 'LOGGED_IN_SALT',   'jG#OqH?D(Q[>nx(xnFHwS4C?zy Hpb%)QMtEcK}GJtH5Wn @N1ydZtFgCYwnE/:a' );
define( 'NONCE_SALT',       'sC1?x,;6WnYrB,~2t9ih>pm`oV(.wH!R{Rg3NTWH+1b:f-Wxc[>:fktDM:h)E7k3' );

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
