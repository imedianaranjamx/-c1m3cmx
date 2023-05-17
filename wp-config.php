<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'adminc1m_c1m3cmxW3B' );

/** Database username */
define( 'DB_USER', 'adminc1m_4dm1nC1m3cMX' );

/** Database password */
define( 'DB_PASSWORD', '7bq8]I%s-BGr67PZk%' );

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
define( 'AUTH_KEY',         'q=131`;0g* y,}iI_>G2[Bp@hK:Ax3cm9RTC3&lSA9-XAb0P[26oF_@F#f-OBbuY' );
define( 'SECURE_AUTH_KEY',  'P$ OUiKNa#YprE6C]PTi;JY Hz2IO#@B(;/B7Gn+7=0&D;`!-BH;DSdFZAHb?tI!' );
define( 'LOGGED_IN_KEY',    '47s_K)j*;>q|eRreb]Xrgg6^jTWd$6zVN@*g;bPPV^.u]&=s#nuD7x{POyCwx/B>' );
define( 'NONCE_KEY',        'Asoh `.sIK}t[G0-k3{nUB>*bImOxP(kX,HaXR)  aaNhM 3OrZ],6kmLrjF7#|9' );
define( 'AUTH_SALT',        '{xvs_3[}g|eu/X|6W^CWp];rdH~4@BNs8`[S]cLJ!+euk*4(*ZtAE([QKx^d^aBp' );
define( 'SECURE_AUTH_SALT', 'heF{]F;R0H;ekpGao`xuvE)@-^d-IJgr3Ww{hSf!yP.y*8V>u9GA|T{&FwcKLjB>' );
define( 'LOGGED_IN_SALT',   '@?gZnPV{s*L_d_#5/EQ.La@R}N%EDkG:,4=^h|y>?5H@$g!0-Xj=vlf~XGG>I_ `' );
define( 'NONCE_SALT',       'u&y&M,yJ{?3*1L,LKyX[pA*XVKBdw/RCmOq]qF{6}M5,Zd<5:NZ0FX&3TR^X}~.m' );
define('ALLOW_UNFILTERED_UPLOADS', true);

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'CMX_';

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
