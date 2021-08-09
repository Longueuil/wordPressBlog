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
define( 'DB_NAME', 'port' );

/** MySQL database username */
define( 'DB_USER', 'port' );

/** MySQL database password */
define( 'DB_PASSWORD', 'port' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Iv(hEH<;OTK+Uu7d-p#8I&@Q>9CPk9s,kE_!8i3# l(8TAI<>Gr;<yBBZp+|~cRq' );
define( 'SECURE_AUTH_KEY',  '0~dpiO~H.ZGgF~,fte,uJrA<7%O]Z:q{k($`@ix~g?SN$hX{_HY)WKE)%X!-JD1#' );
define( 'LOGGED_IN_KEY',    '+zI#keLNbW2k/>Z4)Q$t1}.oGn8q[@uZr}LD J:)_tZ=OM)>N8WH&5vnMX8~F{}P' );
define( 'NONCE_KEY',        '#S._Cr6Gs&$c2)7Kv6I1fa.b7[k9o]+643h8f;)>`zgRCr,.G:8b[Y_Js)akza+%' );
define( 'AUTH_SALT',        'W^rltp[UMN>B!lfbI9l<96zMAG4[0spN/%L%lD53-,e:-5.pUd`C+0WDxTo!&!t:' );
define( 'SECURE_AUTH_SALT', ']y9(U&1MCNUiy/oR:}T*T4Ak}$gfuGtp+tFU;{taj~)%`IR0AW3xf-DcOU-(=*Tv' );
define( 'LOGGED_IN_SALT',   'G9^A>_<2?ZyAq9PN=s[jw?HD()Ji/IG~PQlfVFQDKkKRCMJ!W@s5a/Q<2vuhxPbG' );
define( 'NONCE_SALT',       'ih5h!)z5v/-nW0A(_Y ;|M6|UmM[Vom<P%`>--.[OB3[M{SV)kDNY7[S!z:/H6/#' );

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
