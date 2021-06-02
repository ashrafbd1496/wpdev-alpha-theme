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
define( 'DB_NAME', 'ashraf' );

/** MySQL database username */
define( 'DB_USER', 'ashraf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'k]8!q9S5Gp' );

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
define( 'AUTH_KEY',         '63ce5pblo5xoowaf4flzv7ibxgp2zad0t41u9nq5q67dlqso9rq31ez0mcx2nevk' );
define( 'SECURE_AUTH_KEY',  '0qpkd5dobdvrlpju7flvb0i5sbelilon3vcugystjsrm92hmubdxxqxodpql6y2j' );
define( 'LOGGED_IN_KEY',    '4x669rsgminc7sdvhzcbjmruyvit8b07mwhqyrkn03vwa3d12yfr89p9kqnbqfyw' );
define( 'NONCE_KEY',        'nmghhkqijh9yhu5qrmsbjchprhto7qoj2r90xw2imndhz75sukexoleb1z8u5qgx' );
define( 'AUTH_SALT',        'lj9rb9pmdaddcylmrzqpzmijlcmei21tqg7u6b7vdnxw8vkjsgsaauzbb8effivn' );
define( 'SECURE_AUTH_SALT', 'wkh1uxue579psig3xhi2eh6iyji8bovb4kh3hwfzizt4uwsxqouztvesj7u5euw6' );
define( 'LOGGED_IN_SALT',   '5qrpv8roeh2yzeyh14k344hhjhnwfthzu77gjv5jfvj9ezk6c94xhehp7ymiykay' );
define( 'NONCE_SALT',       'qgpjfyx9gduycdvgiwh5zilbipxxnrf8ijljwcaacdiurwoaayfqecdlbvhqwtsi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp6m_';

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
