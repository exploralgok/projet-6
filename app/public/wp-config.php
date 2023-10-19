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


define('AUTH_KEY',         'BM+leqDp86/HIdGBC5VuSoGhUGyKc7bWGXxsFFMCka4gT4kVZU12Fv6GT88dnmoSYVVWgv2loSei4L1uBeFBXg==');
define('SECURE_AUTH_KEY',  'Qsjl2btykmHPRoVcPqJy8o0znvyOivAEs8YqEm1U7oYmgHpAQoJayQMi5PGw3xsU6lycShrX2gHxKhKLywvgaA==');
define('LOGGED_IN_KEY',    'pF/5ZR3U38qUzvlh5Ul3BkA22lVZggPUTv+UodwS1A6/t4+3SFylJHJ8EfmuM65qoLRNCNHVHSM6e2Jarr07xg==');
define('NONCE_KEY',        'huuR1cjO0DKAjNW0OoLlrfETz/GO4tgW4KP6rp3ceef6WBs9eFiknVM+5bXfw7I9vPyAx+IHIVPRQxJm+DwZtA==');
define('AUTH_SALT',        'hzV0RDjtntPnAC2W4Ob13s+qBfeapSq4aWVmXehdsNsfYz3UvvchPcgflGEaOwwMkbV9OhgyOOpXlq7OUt6iSQ==');
define('SECURE_AUTH_SALT', 'oufGl0LNR1Oa4NdK7mwvAefBnK7RZMcateOp7ZJSJyhY2tvHZGT4izxDOEfRJIccwkwZXqeEmnz8lCXIzcPssA==');
define('LOGGED_IN_SALT',   'WoVlgodjrrCoMd+ZFFAWMfi8pqN8fNeFGs1By0n6NHLukQdtNJa4zYRYksM/D8ttD9eyHZNn819zcsIgq3YHwQ==');
define('NONCE_SALT',       '5BnVo3ZGz3bEobZMhNfF1BhuYzkhAMoaFNz3EWS5KdHH5jL4t8LEQZajHQGkbRPB7FfXmeNmqk7zgdJs1ZMPkQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
