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
define( 'DB_NAME', 'spaceoptics' );

/** MySQL database username */
define( 'DB_USER', 'spaceoptics' );

/** MySQL database password */
define( 'DB_PASSWORD', 'spaceoptics' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define ('WPLANG', 'ru_RU');

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
define('AUTH_KEY',         ',1}%mDa;ZkMr !nsbM_+%B]KNuiXCt]L7*A@/a*uET*A3:)O8?BDK_;,xG<?NIm(');
define('SECURE_AUTH_KEY',  'c.m4h7dmDb2&)$^1z3Ptv1URS2IMP.a&Q9?qN;NLNOOx:_m-|~kzE2(O8Z[i[n27');
define('LOGGED_IN_KEY',    '@+./2P!K0f]>A+}d&+x[m.{#5ZJ*|61#qpZd!D<` 6[o93k<lDT[D|0FA%w$[X4]');
define('NONCE_KEY',        'XCD+H^-GBR+e.6m]B5[!}o>;[al8:j/n!Gb4fSfU{*lW,Y[bMnxM=%rnE03RDVD}');
define('AUTH_SALT',        ']4pd6eL{lQ|b*I>LHC%h2fvNA*773@*DQn*Q&gmu$+aPi~Nd><P[HR`!.T{4aQ;_');
define('SECURE_AUTH_SALT', '2U(m;y7Y_.y7PPJ&`y0zmP=$rV4Y^rw<L(xt$C(h|uYzkJn1vVS$nn++YNpGO;ut');
define('LOGGED_IN_SALT',   'c:GHcX2xnk}}{CH8P.,4,NxN=k:z8hu53-20-Af#>3T?9h;7=IR=aKMb*+:ZMS`4');
define('NONCE_SALT',       '||:|gF}es1C;dOr4tsRm[[%p&$9]W+&]@aiSxB,)#*Tst0-J4|$`L?|+/HqYG^l&');
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
