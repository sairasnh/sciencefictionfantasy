<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.3998505613756873');
define('WP_SITEURL','https://diy-pwa.com/scope:0.3998505613756873');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

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
define( 'AUTH_KEY','yEBcol)8JqP0]&w2]5G>rx9)%&&H0Ks-Bu(6Ti-d');
define( 'SECURE_AUTH_KEY',')v8ZXTD(kFVdNX9tjQi?H465nNqMzS]<y(OShV-[');
define( 'LOGGED_IN_KEY','-=SkWbZ(09@JD/EKQGg10lb&!L6+@m+-H>nYPP7@');
define( 'NONCE_KEY','QR<yNIoh?f?5cmHgeH&,vW>@w*3O^mh1T3f)u=_c');
define( 'AUTH_SALT','q.vMz*NEtv<2y-y)gDwJwH9x0L%.&i5YqX,+YA*T');
define( 'SECURE_AUTH_SALT','argxmbku!#s!Z*yN#Y6gH]^5>u0eq[NtuyuiHQ7!');
define( 'LOGGED_IN_SALT','4-wr$hcOJp6G??b3&ipYBEY4SNMP]@hXQr)zJbt!');
define( 'NONCE_SALT','w9G>sL#G)Xi2dikKLj-]d&QqlVND2mDYkQQ?Lx%R');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
