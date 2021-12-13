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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'iAJ4K7PeZXg1HSpR71D0tGrlbdWjuoegv4oAD5Jt+YaJxgr7CfhA9LhnEbSYXngrwbhU9a8AczT0FHIVetF+JA==');
define('SECURE_AUTH_KEY',  'XbG+o5fuaJ1JsiYXG2sYKDN8aHnos6Bw2bzAbAmGAqESFm/OLQrrMyjg1RUHZKiD0e2PyTByCcvVJchB5EyVow==');
define('LOGGED_IN_KEY',    'xw5Zjoa4DS0qjXzmxJUTzjcS3vQAq6+gKLZzYi0EsdvIVJ/cGx9Gic6YTMww/AQ47DmKzwVnZm6XLczU4KsaWA==');
define('NONCE_KEY',        'U6L8cSt8RrfJRFDp46ucbx6xVDFijnKmsqNWOzPP0vnOT7IOWy6HatM4hbflA6OSTdTVnmONMrhImOcvrkQXkw==');
define('AUTH_SALT',        'pnk052NZMPzY49kPX8/mV5iVIB1EkPqMS/rAYNlX5A4LBKTNchTyBKtDwic2xp7q8CaKQautUl8Y1Y0Id3QSzQ==');
define('SECURE_AUTH_SALT', 'xL7L7/Z1PTsKAxWufH1n6UIiuvjm5Ur9kgqJeifZzqnDpJmf1dY7QTYUZF9dSU5q3N48WUZCHCVrdizYRNHJHA==');
define('LOGGED_IN_SALT',   'guxxP3yUwumx34cw3r0Gpp2kgJxbQS9MkHDJhUrtE2IWuO+HLpQ7BgqdYA5OZ35AhD3ktAF7OIGIxyic8szpCg==');
define('NONCE_SALT',       'OB+Ky/AKVNkb6/8aziBUX6RT3iEYdrgHOka+ddQb8wiTI/BMfK5Edp1MbdWElGCEiUMEJ4LtLzqvojlcHYzFbQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
