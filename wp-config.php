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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Djay@2023' );

/** Database hostname */
define( 'DB_HOST', 'wordpress.cffv7muuaidm.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         '(6XRGrdWDHQhfHdL?D)*oOVpBJWWGOAcR(3T#Lyo#.|/Huk7Ruzrn}7vIU*O@xd2' );
define( 'SECURE_AUTH_KEY',  'aYI21zu71[md&te@z-<0]fqN 4X2&&3$D7)aaD4V#gf|/Tg$VS<uTUHD%pIL/NBX' );
define( 'LOGGED_IN_KEY',    'VN=3nZM!~}m$c]/0rt=lzM{`HHm(^1+IOV8sX#r;@V>10a<M8f3YNx>Rf4/(n0z&' );
define( 'NONCE_KEY',        '|p ddYK@+qw^{,(m5Dix<2+3n:x;K=wx3<p`$cujEE9BbpUDpz7,E6?cxs}:Mxk/' );
define( 'AUTH_SALT',        'T|0 thyKFs/7A^t>Fx~PjaI:DU` 2[=(/0dG{ZQ*{~V|YM?-z9l+OP2y/Ib2H]%]' );
define( 'SECURE_AUTH_SALT', 'UD-^3(OtI//_T)=AzYW,;n3?M2Pd69k}+Q(doI_do(7sXvOmg#77Jb6my]WU#b }' );
define( 'LOGGED_IN_SALT',   'y$DaCK5!,wpvtq^T^ajO_d6HBDopbDfq+h`K]&#b4=[xyoy{AS_|iV(X&^j61s..' );
define( 'NONCE_SALT',       'bp0DP+,[*15<O5R|2imSv~UaN(CB#=~9?mNfD{?wg;Y(Y[3pr*LdA%`7he1BvQ+D' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

