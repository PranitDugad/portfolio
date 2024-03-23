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
define( 'DB_NAME', '150572728' );

/** Database username */
define( 'DB_USER', 'pranit.dugad@gmail.com' );

/** Database password */
define( 'DB_PASSWORD', 'Pranit@7721851108' );

/** Database hostname */
define( 'DB_HOST', 'https://portfolio-pranit.wpcomstaging.com' );

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
define( 'AUTH_KEY',          'Ey5@>zr?MR(:xoz)w(ZKQlReRy,cXL[@?,4$mwPvP+H|mp9N9Ali3#VuB>Tq{TY9' );
define( 'SECURE_AUTH_KEY',   'hZ|]s>y+cEO7$4bqR~0=jK4z~PFt2_@RqKb4]bI2N<W}.=(i@qD$THTA|<-jop&S' );
define( 'LOGGED_IN_KEY',     'eMK=)e-*]jL)mv}o.]#tOUJo+VnDDhjU4~~D5(^y&W7zNX4fuMj}rQ0~U`jtl9IM' );
define( 'NONCE_KEY',         'xS@G%C;j2{zz06wOK<#js`p|8C&_u=7nkRs1Jx0gy]b0T>3SaXDdQCd*} 2dX$Gl' );
define( 'AUTH_SALT',         '):pZ=v^)Mc%o5J!2ZOk:Mx+Ejt<tVpG&NC&`J~n+J#V[Gqty[87eOhU>kW5hj}eh' );
define( 'SECURE_AUTH_SALT',  '9zb9UM5T[ppFHxT)Oq{&4o~=sSRaFQwWT/2o2ppNbVxh$|wY<$e]8Q#3@WOgMJ>?' );
define( 'LOGGED_IN_SALT',    'QmNST}tJbywnoSG,3O9ySJ</V ~vp$vV/hijfp96_~nOMU_B,DRD,,>~dx[{d9(q' );
define( 'NONCE_SALT',        '-z+e-k/%A<Jzd*YBb3<:(f2eU4G3c;r/q{nRA(t^<)_1MPDghfs#1oC:X!]`SChM' );
define( 'WP_CACHE_KEY_SALT', 'n%$iga4[::uq>CqD.1{lgSj1l,L6jkPqY`[u2`5]2NppV,%g`{eT`/|Tv38k/tCY' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '__wp_';


/* Add any custom values between this line and the "stop editing" line. */



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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
