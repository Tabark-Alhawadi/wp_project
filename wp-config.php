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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_project' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '(+ =U,]W7CQ27hSJRqr eNWxlSoK0/`kT%kIE$s1QVk_n-?b<l I]%I0S2xJT:]6' );
define( 'SECURE_AUTH_KEY',  'VM m9;.<pb5C#utbq;e&MKtrZRMZzjukG`:Gu{!`#W7&*(6(aWl6]QQDCjNgBz%m' );
define( 'LOGGED_IN_KEY',    ':>n|2?ciz?v7=jRbU3G$MCOxR5-~2<HmJVLa#~K 8SyqZbTeBsz,Y$~{*V?CsP7~' );
define( 'NONCE_KEY',        '5x$7 w]e)qC^d3zUUi&h)zj/SqDl<fVHw&*x@1;|wFTR.Bi:5VS/6;%Bm(ae@}rZ' );
define( 'AUTH_SALT',        'AqYXJr_PW8tqNXOxpQ;mQF%2=}oWaB<gg[@~G:FCM+dB<8w q.0|aDywdG$oDC?m' );
define( 'SECURE_AUTH_SALT', 'WD@E6aKhj>PO<_%n,085)LQ327!H 7Z:T[@B+[5h8-%ukEFfmxsG}By::.CX<g+.' );
define( 'LOGGED_IN_SALT',   'CyFbsWYQ.p).NC`Vp^CAeJbka@#F0#J<rz$u p(CRklkj]F xu1TlxJ!4fJ/).a`' );
define( 'NONCE_SALT',       'd/ DQ6CS$W1{MuU%a(p6|j >b-%wOmPxQOJvH9i3:)B6IR=Cxg3:q`?=1UZl=8rp' );

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
