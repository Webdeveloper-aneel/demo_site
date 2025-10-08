<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_demo' );

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
define( 'AUTH_KEY',         'egdlIXxTo%NUd[V.JtM*txg!kI*bnLL)%s3cmow3.aSb4,G&>3Z5H%G?+Bpg<PH3' );
define( 'SECURE_AUTH_KEY',  '}|DXI amNS9tfJ_990irFX[VS>[<.B;}t6+N)dL}<NX5GXMUU]dcT|yKu+nx_o{;' );
define( 'LOGGED_IN_KEY',    'SIX_Yr9C-!)&Cl K[AEDnD>LPI6#G)L7(kv,7Wk/[/%{w`vk]B&ld*o&S&R#Wlg)' );
define( 'NONCE_KEY',        ',8p*UAMA[QZ-j9m}C`N`l1(O-@Az|2iG(eEG6/~9|%/oJZ9EP?:W/+8o`s+<QbZK' );
define( 'AUTH_SALT',        'M9rJ YJXsSGkH:!X%;pOV1n]pzf [0h%lu4}V/&$7sz~Uk(3Hd<h*~@nN7d_F~}W' );
define( 'SECURE_AUTH_SALT', 'bi>L5!iBq[9ZL:`?y`ML[(~oSpK)UE.-)-*!XAg:*t!$q%Nj.]{ngwXc$c#$ci;Y' );
define( 'LOGGED_IN_SALT',   '?A_+z-:K<KBE_Hrf-fVun0n{EO#Dbp*KWzI|OMTR2[M:S3w-*:@vM<.W6]U<:#^h' );
define( 'NONCE_SALT',       'ZMk.fn2N00q9s.(s#4-s^alSN>!!qDLDDnuf,L5g:,uZ`joYDn0Z/@kX6wRDy4lO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
