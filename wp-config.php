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
<<<<<<< HEAD
<<<<<<< HEAD
define( 'AUTH_KEY',         '{[cnB)h+~/`GR9]sk?*O7~MzN9:B(XSoZnZ[~ZFFCUKjjCu13OQatnOvj0w9Iw|S' );
define( 'SECURE_AUTH_KEY',  '<g`2ks~O8dLR<pWd%Mo*0_.MWAR)0MGEmr/6f[s{wa+/Ir]8Q{W,nxCzB]U=:8fx' );
define( 'LOGGED_IN_KEY',    'R_MgnDtdF+^KRV[2D8M- 4y#@lqiEBaK)g%Qj7EUfx(E2%3y.4C~FM*i!b4_W?W>' );
define( 'NONCE_KEY',        'Onw`O @6&sBd|0YWtsB&wObhb09u*(G<y=wDPq!2[W=8i)sy2ya^}^XZi{?@.?,k' );
define( 'AUTH_SALT',        'EtR{j%i#gTp3ReH}#P~R>2@t(Qpx,.8EZd5Kc!bu+m 2@xh/X07EOU0n-|;yQq(C' );
define( 'SECURE_AUTH_SALT', '`8Th=EL^6=v5@:ssQ-gd.rf-; yjI!nj|^!z*|/<d~:}yq7egf!eZ.~;f_f=^yBR' );
define( 'LOGGED_IN_SALT',   'f(I#u~Axy/*l4ai`9TSiang MlI`8_< fNd~Bi0[b)S#(p6cN#=?h]_NtfV2QOK(' );
define( 'NONCE_SALT',       '[mA%Dv}jSgI{GQ&I5f _CXUKAuG8?#*ce44UwGZVK;6QKU5^g6%:3<M>D]V{oI(S' );
=======
define( 'AUTH_KEY',         '2d>0X[;5#6qU,,3TkclX#AX^YF&W8nd`L^}u eJyn*,G<kZoEJ2?1P/ MHfC[@[>' );
define( 'SECURE_AUTH_KEY',  'S8qs5I&O^l4q!m;uO][B!TJ|{0mhaENfVyjRu<fj.|{+^9hkHsN{Whnw ;Pemi<}' );
define( 'LOGGED_IN_KEY',    '9OHj8/^.2 ZxLBhim&U.?kUGU3It8RMp#Azoj?)Qd[M-fU{{7s+NvYxGTOg7I^0L' );
define( 'NONCE_KEY',        'WVp-nFnIK1TT./)Z__`zLG?&xrI9hK23Q563Q.i>IIlyUoJ-Xl(f}2wZ,qc9u(2I' );
define( 'AUTH_SALT',        ' %sE9cvhfT4P3%}R~7,yXUy*Htd,vAofS]7qM2L,Z@j=IYCQGjX?52zYU]-`xw.2' );
define( 'SECURE_AUTH_SALT', 'fEkzkp(H0%nH;w[k9z_H0t1b-AH+TTgdgny@8@XlEYHhb19eV1O}U-csv1V4NH$>' );
define( 'LOGGED_IN_SALT',   'J;[VWeCd852}$}[e}>lIj<G[ V/F~ ZpgSG&xAp7ieiN]A1Jm&,Qo2KX:`PVk*%K' );
define( 'NONCE_SALT',       '/5UIv8ftn0xN|t4TQ%TdlxF=)>(RxTW=^k(N:13<&)r>|p+Kt_9FjhjG:sDrZ1-2' );
>>>>>>> 289b0084f420a7e1b4b1ad6d79a59a0ed91dce25
=======
define( 'AUTH_KEY',         '`$9M>y3^Wf-|vX+_|MqJI<++dRsuG,I9wydY+g%p[1iH??kY^qZL=]p2XVry<pT9' );
define( 'SECURE_AUTH_KEY',  '~5+rTE[C^9XMWgzZ8Y<IQVglsggFufuvOl^p`k<_7Fn9JJ*y8V:9oiTc!<5qt@1+' );
define( 'LOGGED_IN_KEY',    '(;] F&^c<;[N~9tc:lp|))z4/5c+ckkR<F6~XGl =$2.j3mJPx]ZUUz|}eaYN1)+' );
define( 'NONCE_KEY',        'M:XI&0ZP}TZZ-h`Z4;VrnZY+bU:u?9V#cldYj+5/+Kub![xcxi<AX.!gCxtq-d,2' );
define( 'AUTH_SALT',        'prmn}y}cbsfYGcJDxP40gc4Gb/U`C^ 8E<|yZw$2N4&VOb!P@@pT8((xnK3by|8F' );
define( 'SECURE_AUTH_SALT', 'W!}7|Y52<|<%3dm7-}=S#-V4.r_nN@Jzo:.wDU!y${Xkqu/O;0}3)w8A9*3`RzdX' );
define( 'LOGGED_IN_SALT',   '>!K4,7`7cc+-nJKJ6R%_&&yGb>gx-R7LWd(qA*ot?|z>4H~1FXKgo]z|1gN<sc(l' );
define( 'NONCE_SALT',       '-H$1!Lw*nO&WdGLTs8ajD80Zbu(`1*CbE]jmCELzFbHPz`<BCR<o=tSF#Z^[,&_9' );
>>>>>>> D-12-Dien

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
