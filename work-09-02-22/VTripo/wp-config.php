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
define( 'DB_NAME', 'webtezpn_wp522' );

/** MySQL database username */
define( 'DB_USER', 'webtezpn_wp522' );

/** MySQL database password */
define( 'DB_PASSWORD', '2p.M4Sp6P)' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'q0puypvbcum8tzng9emfmsoqaokdr6rru96edeo7szm33xxmoae8grmz5iajikoc' );
define( 'SECURE_AUTH_KEY',  'vayizsntvvttaza0imagwb7s6cdlehrtarw57f4n941svdjjg5maftyyietqyg7o' );
define( 'LOGGED_IN_KEY',    'ehgy24rrfegosnkw8sikenj7de4511u9hdljlmmvlhkhpiqigorttz3h7c5m39zk' );
define( 'NONCE_KEY',        'q1rdcgtmb4hrk6ehssvahvxyqvov2sa1r7olobyj7by7kkgmq191j9y0zrpph17h' );
define( 'AUTH_SALT',        '3jhnwwgekxynjbjckxmvltokxv6o6idv2jv5rovyd7n9jzlkobscfwmbb9u0finq' );
define( 'SECURE_AUTH_SALT', 'tynt3tusljbmepavev74fnojeemgphixvsrsn05s68vcizonkvn1yl9duujj6v4u' );
define( 'LOGGED_IN_SALT',   'unhbl4d9unz4t1ofqboqsazn2avwk4k1heltwov385qdcjmwyymu9esfu5fm8u4l' );
define( 'NONCE_SALT',       'hbdgk1vpf7nhh9mcv6dasmlalwc2sg0yb4rb3fnzizrd4lkbblqgwnzaa3zkwptb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpzy_';

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

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* Add any custom values between this line and the "stop editing" line. */



define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
