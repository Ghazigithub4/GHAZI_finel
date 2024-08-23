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
define( 'DB_NAME', 'aljabri' );

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
define( 'AUTH_KEY',         '#Ca8!;/:d=.Y.iTiKrD?e>LA|[uckGX2]Y~&![g}J<Tq?RFw8;us%P.3G(aV6K/c' );
define( 'SECURE_AUTH_KEY',  '}+V-Y)Q[o=my$Cw<W5C(WL#GcrA)W,Z:.q ():{KW|o.A03{fn(O[g}y>O{N/)T1' );
define( 'LOGGED_IN_KEY',    'xPYZ.*,Lh,ft2o6C-@_K%6g~zn-S~:&IBl1j=qfv4|f#U7q wGkf:~fqcixDY~X!' );
define( 'NONCE_KEY',        'e*n9<WZ8v6_=j7d8/d#nLL$GnY4&g2%g0Fu`[&qh1&zCnDJ@~dT*4{$a-2-V/!7I' );
define( 'AUTH_SALT',        'PCkdDrF&l0L]_hCnVJa8W^~9KIbYI}&>8{3KpgaV[[<;hEwB>*a65HKH|KtHE2HX' );
define( 'SECURE_AUTH_SALT', 'xAI^a$`H|qvJts,.kbptW2h=uSAr}MtMS#h;K{okI~3l5E3h6d0lzgn)9-f5S|9A' );
define( 'LOGGED_IN_SALT',   'Azk@>c,/{HKrVd)Gl,z# {D>imGJ F>T`,1%qFLSTn[cY#a!XF#_c7=E;p2Wc.Xp' );
define( 'NONCE_SALT',       'yDyJ#JmU;dT1@N wBt>dR1{0w%3j(a<S45aJM%9^)C4rF*VM;1ol 3wDEahL<]1c' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_aljabri';

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
