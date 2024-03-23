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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


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


define('AUTH_KEY',         'Eu/TUb1IhZULjkZZqZeecoMJxjRx1XFfF1qszBDjRTlS74z/l1opOsAJSXvpw8C2NSFj7+mpYkGhcixPUaXp3A==');
define('SECURE_AUTH_KEY',  '6A3kttxgDvqzMypBEpBwXGxPGxgxDYr17+asrwHb04N00hv3Rp6abx4ra3vUNj9z3ZfkaVKvLsUW5Lyz5JiElg==');
define('LOGGED_IN_KEY',    'EiTkY4KZsblu2ljwI7XNfjGZ+OW99iWpmbtb2hh8dY7g0cfHPP5ZAf51QuorYECThKC8ecAstDY3x8JKT7+wvw==');
define('NONCE_KEY',        'rrFCxdFl/pVc2/RvbolgChWSspIj2X6hWCbxnBsCqQcPGnZG9lXZ4Ah3Vzh7OWgScXZ+MrhIzns7ry0HUdiuqg==');
define('AUTH_SALT',        '9lXmRwKrvBmAeE7kbLyAh6ozdLPNyUXNDUV8VMzxQOz/VbkgLemLigjTvmiZN3Oz53uUuaKvjo6oyb6ok4UYng==');
define('SECURE_AUTH_SALT', 'MjJ3Y6dYqCpmtcAjbXZ9b/OmtebQOmYtPNKUCXPJ+IqsFMrOVEL625Zw76k+V4uSQpYJrADPTODEosCBaUo4KQ==');
define('LOGGED_IN_SALT',   '3wMSljJMhA+duKUMemCOYQJqDh7u0reAs1abvtDuE11qd+6mLY675v0Lm6+V6LUPeP6e9O5u8FZA/F8VP0J0+Q==');
define('NONCE_SALT',       'K4CGq4W611w8Ycfa3UNh6uHS/LlajEcCbDuxK5nt2NUhz1kVse1uBdRh++3l+0xE8FO+nbuJ7GrUf/DzKErwuA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
