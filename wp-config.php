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
define( 'AUTH_KEY',         '`$9M>y3^Wf-|vX+_|MqJI<++dRsuG,I9wydY+g%p[1iH??kY^qZL=]p2XVry<pT9' );
define( 'SECURE_AUTH_KEY',  '~5+rTE[C^9XMWgzZ8Y<IQVglsggFufuvOl^p`k<_7Fn9JJ*y8V:9oiTc!<5qt@1+' );
define( 'LOGGED_IN_KEY',    '(;] F&^c<;[N~9tc:lp|))z4/5c+ckkR<F6~XGl =$2.j3mJPx]ZUUz|}eaYN1)+' );
define( 'NONCE_KEY',        'M:XI&0ZP}TZZ-h`Z4;VrnZY+bU:u?9V#cldYj+5/+Kub![xcxi<AX.!gCxtq-d,2' );
define( 'AUTH_SALT',        'prmn}y}cbsfYGcJDxP40gc4Gb/U`C^ 8E<|yZw$2N4&VOb!P@@pT8((xnK3by|8F' );
define( 'SECURE_AUTH_SALT', 'W!}7|Y52<|<%3dm7-}=S#-V4.r_nN@Jzo:.wDU!y${Xkqu/O;0}3)w8A9*3`RzdX' );
define( 'LOGGED_IN_SALT',   '>!K4,7`7cc+-nJKJ6R%_&&yGb>gx-R7LWd(qA*ot?|z>4H~1FXKgo]z|1gN<sc(l' );
define( 'NONCE_SALT',       '-H$1!Lw*nO&WdGLTs8ajD80Zbu(`1*CbE]jmCELzFbHPz`<BCR<o=tSF#Z^[,&_9' );

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
