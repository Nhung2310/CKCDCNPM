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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp5209248' );

/** Database username */
define( 'DB_USER', 'wpuser98661' );

/** Database password */
define( 'DB_PASSWORD', 'lz3hiGrpz3AazlW' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'F21F|>vu%CO|nW]fX5(,4/CuKFbs&fSzFmK7(woT9=dhxWQ=!y+i] zA8}a*H kB' );
define( 'SECURE_AUTH_KEY',   'kJP~p3+A(89.i0kV{F~r|S@PCGA~aAXLaFSS{CQ0W=cYfbpX:6onMyD(Et[zjBxP' );
define( 'LOGGED_IN_KEY',     'B}OKsk4jV2Qy:#<.8uEwr^k0RbK5RTM{ip}R8v@sjYPi6(aEb(WZ&QOeTm[>~&)v' );
define( 'NONCE_KEY',         '-$~N4$hF(NqkNKiSRQT+n~|L;h~pJ<V^qbLQ@Enpd x)#)W9w6w~LL*-*h?aB]Ou' );
define( 'AUTH_SALT',         '8CJy&/^Cihy;pAJ:%fBDm4hrvHW)yLE-yGIZkvielRZmPtVFtBhje<X/(LCXqg#V' );
define( 'SECURE_AUTH_SALT',  '+k}ofR-m gRk]9k;JCHgdjxnfhN`|ryQQv ]1fe@R3nAR;>Cj!;dOGRra:Oj5Xph' );
define( 'LOGGED_IN_SALT',    's92X[w#IK9<Ixi|{kxlnlkK(!c%.;WnDjZ]nECKWcmrxK$*lgrEs{jgapfDH9!h>' );
define( 'NONCE_SALT',        '_(et+Dbm`^p+i?FjeaMHZG^!k8kYoHy<dJDhX`w8Gvk%4R^3(D,(n:G8fQ}$AC]u' );
define( 'WP_CACHE_KEY_SALT', 'rdX_`7df!)$a0d.ai$WNql^4SXpZ$Dk8OGbSh4_YNPO:p?$>n~>tsTd/kN*!ufmZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

define( 'FORCE_SSL_ADMIN', false );
define( 'FS_METHOD' , 'direct' );
if (! defined('WFWAF_STORAGE_ENGINE')) { define('WFWAF_STORAGE_ENGINE', 'mysqli'); }


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
