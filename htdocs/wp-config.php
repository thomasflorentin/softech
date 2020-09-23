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
define( 'DB_NAME', 'softech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '( h(hDv}NpJ48/}@{d{|Rg%*Qy04H[w[.Sit>qCWDaw$g9]EO8kU$[f0q5V]8s|-' );
define( 'SECURE_AUTH_KEY',  '=3V9Kl)^Ag7s2b-)k.[ad}6LvGb(D}]}7:pcQVJax a* D#&v2/-srm#G2;uv:J1' );
define( 'LOGGED_IN_KEY',    'j`__Qr&?jxQKDz$WSarAC`qop)48oGmc8BN%6a@|,1dRM2.H/7}M d9k5Y]:XZ9T' );
define( 'NONCE_KEY',        '#1~V+@h]bz@-$9;vXd)!yf9nHbB<)_D/YcX}<9(ps X}-#MaFa9u7sx -+)e43;O' );
define( 'AUTH_SALT',        's_E~oh`9DU+(<6 d75*}-:&Q$Qw$?/wm%z}|S:bV<CkH(B-Pab!d9F[AW3FI* Fj' );
define( 'SECURE_AUTH_SALT', 'OTZxbVC%Ahm{^WEALI.(Qv.JOk!z6(+iOMZ3sml?:TsU. (HDHF #vq1JhWlZ-(B' );
define( 'LOGGED_IN_SALT',   '+L/w`(~.Hgi0ee)iw:uPxMxFl((,k:gNb-:&GkUlg}Z#P^A-?b5hG$ydRSFxlT5>' );
define( 'NONCE_SALT',       '@w=%5ye=UdyEA^:Gil+P*PpNbK$aG! Jjpr>P{RH(U(S8.( dfBY8[l nq!Ss`[1' );

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
