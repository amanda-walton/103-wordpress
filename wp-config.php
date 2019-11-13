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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#-)@DAo%`sf/^;V&13M&5P(?U`|~u|Scz,.2&$,k>fz-j%JMr-Q/=O9ohCH7#%KM' );
define( 'SECURE_AUTH_KEY',  'W<p#2w-qG;>e-G$;9}(r8OqxAD,i%b#Qc:Tit(&p}YLY]zB7^^c($ y/hB;=]bW>' );
define( 'LOGGED_IN_KEY',    'aH3c{xVRu;u%[$az9cRL3QLovJj9T#bO) c?7i=>XL6Z5]N[K2-bt(BnzO^B,_We' );
define( 'NONCE_KEY',        'h/&mx6UX>>v1K8gSceV])!>JCjp#!`N#:0+YNn9Z^[d{H@zUqw<vZKFIRD=^M<>]' );
define( 'AUTH_SALT',        'vHz%K$&Tl|h|jcWVQDw4(x6sNr<~;U@Hl>V2_eIhL>X3?[c$7e.f-y]jw$2I&b M' );
define( 'SECURE_AUTH_SALT', 'yLzwj]iF%fbF~v2%f@kVHi!:Qi}[;#HbHbyqDM83V)/j;Ddf#,Uw18`;14DH@[X8' );
define( 'LOGGED_IN_SALT',   '(gzw|b,xrHZZ*0l,n2pR1&IZG*t#@Hoe^sIwmDd/a[P Vzs:Zp/g]<^C&b%Sj38d' );
define( 'NONCE_SALT',       'gi {;]AQ[MTar80!j4*1uw@G^J&+ G5?2.<PaiUJ$ur}1<rWYyubVu,BQf+Q?U|!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
