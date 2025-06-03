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
define( 'DB_NAME', 'iemerchwp6' );

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
define( 'AUTH_KEY',         '<Vj5Oo-Dmv<BqUBp,wdSD:Vl48!M1fZ[yuB4N:GDM^wsMF$$NBAj,C/21xME;8,)' );
define( 'SECURE_AUTH_KEY',  'of2*?^+1*#/G22bx0#iC.eUWp1(KI)vFJM-FH1|U2h8|oE$$^{%-}r;[O521cojt' );
define( 'LOGGED_IN_KEY',    'O$p0ht-FqchErf_Z,`-l7/`x}]:PKnuYp8hJ@R`8D>&95Vuh>fBR] Zk(AH0qzX,' );
define( 'NONCE_KEY',        '5Xe!~5ruww=Nxn%r[n1^[sZCr#Aj~}t;C,#}.(Du/.2 wnNxXJOCZ;@`x&ME$<xq' );
define( 'AUTH_SALT',        ',P4j;q.V:[r!2Ne-Adsrv!=<1Z{)D2}nQMrc7)$MA;P!0Vp5SkopWlN+$.g@@}<{' );
define( 'SECURE_AUTH_SALT', '{BNNdCic](ytIM4`Rs$mVMOj(Y3{H{US=%T2,5pU*WcmJxW|HN%>|E0,1uZtEFi(' );
define( 'LOGGED_IN_SALT',   ' ~n G`{6z7sJerL*=DDcB,3tUg7RcIhB%+_r[-}{|]&2VpvPe)*{C?*jgejG2kzk' );
define( 'NONCE_SALT',       '7kjTN=l(2q8!Ji.kqCw{LrJ[7o-+e:_%7>M45T]irM~iUuO5cY^N,a-*3L}yTxy7' );

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
