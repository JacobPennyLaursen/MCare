<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */ define("FS_METHOD","direct"); // tillader mig at hente temaer og plugins på localhost

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mcare' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>H?&3v*xIkBwO) iLj0K%%M?2#6*CW[12C?2V%F6HO^ZQDjl$7j*YcfL)_NRb^Y:' );
define( 'SECURE_AUTH_KEY',  ')m5IBY@0>6UdpKmoxK(Am#NoS97WTX@v1S5:qr*v{-[T!Ql59Sz@YSh1MAm:v&3-' );
define( 'LOGGED_IN_KEY',    '$wx0y)$fv0m*PuHVT1nUZ1cS!g5@;t#vUxIsMSLuB${E1c1s13*V/?L:cNTt9S^8' );
define( 'NONCE_KEY',        'Y})GXY_>x[l&kq+W*#7Y3%=F8Q[5+kgKOsK/fh0r}iua$sS;knK)sxnIR]EQhh!3' );
define( 'AUTH_SALT',        'xy7o:=q5ipuh{F;=!Sj^b!-GFZo!ZyoW%;Qjpu/3Mf2@,(b|Iy(;j4#=}P9Xcq3~' );
define( 'SECURE_AUTH_SALT', 'q-VDO<aMmL3wS<g%uU2H]GB8X=:k5>#4:96.@Vji=(OZWtH&P9R6OOls&VG%5Xg,' );
define( 'LOGGED_IN_SALT',   'q(t1kEHxJ_m{x~|qXvc@50&]sa){^-F)&f~230 ?n%`:gG56GGm2mvAhe!?!r*C-' );
define( 'NONCE_SALT',       'pC[D8lF.|?u9JvZluIcS t/(Lz=:42qWzDfp#(A%$jix>u5q-,(l7^52&:6md~Ri' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
