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
define( 'DB_NAME', 'ecommerce-wp' );

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
define( 'AUTH_KEY',         '.cd`8?VNHna==s:W~d^l&_`N^ &EqIFg2/ebPIDAVd!AZKVl%(Cl`S^y{sV;N%b*' );
define( 'SECURE_AUTH_KEY',  'N/K4c27f /5f&_*-o/t(Jf_K8v8 f`m.~@6h)TV_G(.deGK>}[aM!oi-BLtq+Gi8' );
define( 'LOGGED_IN_KEY',    '%g_|a 48OYggJxHqLD),Rtqk}:taJ-wAuweHXhZ?kw4OD51&Q+/, ktXNa,0E~50' );
define( 'NONCE_KEY',        '@Tn**obO=vdAMPQFKo_}oMfeg.0Jnz&-8mdj.Pu8%D,7(Y,&&IeD-0=I}f?g2J%m' );
define( 'AUTH_SALT',        'AwB`Y3x}%/K?^;)A d6,5 2Q$R<j=V|5Hn n/*S,]&tPQq39Y~pW[M,juTn#Waq)' );
define( 'SECURE_AUTH_SALT', 'o!^,u}ygLA?jG_4#?Wqqn;Q/@j<V!FNNOmX=kLXj}lHVL@RSP_|yM=dKdzfh2}u)' );
define( 'LOGGED_IN_SALT',   '*{d?(X+Du^b5%W, 1H1<ys%b5D?>vb^o0jSi+umXe-PD2196d}WpV3jNRVI7w6=?' );
define( 'NONCE_SALT',       'gP~@hoj{;{gUVB]uYTBwH8SY=Hz-w|k&vb.X}#pZ*R`h*V&32:oBn#+FVw[_2/ob' );

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
