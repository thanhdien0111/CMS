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
define( 'AUTH_KEY',         '{[cnB)h+~/`GR9]sk?*O7~MzN9:B(XSoZnZ[~ZFFCUKjjCu13OQatnOvj0w9Iw|S' );
define( 'SECURE_AUTH_KEY',  '<g`2ks~O8dLR<pWd%Mo*0_.MWAR)0MGEmr/6f[s{wa+/Ir]8Q{W,nxCzB]U=:8fx' );
define( 'LOGGED_IN_KEY',    'R_MgnDtdF+^KRV[2D8M- 4y#@lqiEBaK)g%Qj7EUfx(E2%3y.4C~FM*i!b4_W?W>' );
define( 'NONCE_KEY',        'Onw`O @6&sBd|0YWtsB&wObhb09u*(G<y=wDPq!2[W=8i)sy2ya^}^XZi{?@.?,k' );
define( 'AUTH_SALT',        'EtR{j%i#gTp3ReH}#P~R>2@t(Qpx,.8EZd5Kc!bu+m 2@xh/X07EOU0n-|;yQq(C' );
define( 'SECURE_AUTH_SALT', '`8Th=EL^6=v5@:ssQ-gd.rf-; yjI!nj|^!z*|/<d~:}yq7egf!eZ.~;f_f=^yBR' );
define( 'LOGGED_IN_SALT',   'f(I#u~Axy/*l4ai`9TSiang MlI`8_< fNd~Bi0[b)S#(p6cN#=?h]_NtfV2QOK(' );
define( 'NONCE_SALT',       '[mA%Dv}jSgI{GQ&I5f _CXUKAuG8?#*ce44UwGZVK;6QKU5^g6%:3<M>D]V{oI(S' );

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
