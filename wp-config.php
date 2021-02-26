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
define( 'DB_NAME', 'cake-shop' );

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
define( 'AUTH_KEY',         '40t~NM/z#+ac?&yO/D-c2P8c#lQ?~<(M@g&oCBap`f|(Z*_ 3G@fR&MsbJL?}fi~' );
define( 'SECURE_AUTH_KEY',  'IFe!=29R(P25[?xj]wxM8/CM&[Dab( z&Rg5T%VlBudp)a4sNv%hU8fTn<>p]LoF' );
define( 'LOGGED_IN_KEY',    'D3n*Z]$? !uv.>lz sJ6Amo(LgWa qeS::Vt#;p33zJ2ltLq)yu98f3u%~oo(mP:' );
define( 'NONCE_KEY',        '^RBP,r$P)pk:O P8v0zDSw|w$4h+g}m@>jW# <kc%:DIZ89 uG7`q@DxdhmQi{U}' );
define( 'AUTH_SALT',        ']/@I!ovvW=t6@K~29^_8y`1$*pKXtdTVDxtl]`_.b`W)/nJ)ZD^6c1Dfp]}mwnbv' );
define( 'SECURE_AUTH_SALT', '6.!NM:o(Ly]vvH$8>8xTMgqRmjD. mC]klQwK7Tix:fTNGFeY!O>wh|_Nd(w:Ggh' );
define( 'LOGGED_IN_SALT',   'bsg!Ebl&uDTd_[kRfS5)Rv3h_SEy1`p!!9y`)oK0pq UM$|1mAVYb.{0w1&ty[0V' );
define( 'NONCE_SALT',       'G$Le4Fj):>g:vOzLC zQjh}#%,/#5.Qx0D?38`VozKeV-+,`u!.?asgbjQMq0U! ' );

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
