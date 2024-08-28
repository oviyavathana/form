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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'forms' );

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
define( 'AUTH_KEY',         'w9s~C.f*1$:)3;I4U/?b2P}U])mN;:7v<19e[/1GzUyZx~m _m_I?hU5K!;bvDWy' );
define( 'SECURE_AUTH_KEY',  '!-!6J:p$Chb]P1WKv%X[>Co3]1dr XVJl)3k]OmS#SLVLO*|[v5Ewp@XLq-stHYk' );
define( 'LOGGED_IN_KEY',    '[Q{;U%n|&!7$I}fi5@D1AZ-{$4J)>bH&E=[NIE|[i7i;G!CLo3uwY|Nm?]WVRh:l' );
define( 'NONCE_KEY',        '8I%l`hR#XKf/Lyp%Jtr6LXQR<4z4`ku64>{3 nC}`Ry@.1!lU&d~1i#lP(k[r-gT' );
define( 'AUTH_SALT',        '&3tm&J8a!lE3tT/6DtFeUq6{?<b?`,&R>0,X-E,N0nE}MZ>H*e%@L4~-~=d@EjnG' );
define( 'SECURE_AUTH_SALT', 'Ic|,2ZKN1Y_cBV@+R#/P<SrLjp>v~4}//#gU/zGaxXWj_>a;s_*5Uv?lMqc<7fu0' );
define( 'LOGGED_IN_SALT',   ';aEC|[zPQo,O/v!4LS9:V =!0UH+0#=G7-^t3s<Boqdcr: f[fCa~28~76 Bp?%U' );
define( 'NONCE_SALT',       '.du{S]hFn,viT,21d1vK6uJrFfNTo i#usCmRMm}GtPcc?`J/vJLs*9qN[1&&5l6' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
