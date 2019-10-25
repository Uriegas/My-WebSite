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
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Blog' );

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
define( 'AUTH_KEY',         '1}jRSaO4i3Tgo^:p>2qS2d?EQx|~7O&M/`w+u-lD@f[J3{f[|;tj3`Y>5I#E8bG]' );
define( 'SECURE_AUTH_KEY',  ']gx*vLZYEQ%k$32gpC%=?+;1g,8xaQUKL-T5l50hG^<ksQD*9 ?9cJ^B~/?QV j]' );
define( 'LOGGED_IN_KEY',    'WCVod4MKuZ=,WJJ>bHd@(}8kfs*%it59/PAVG[{593|hckp256HHc}8fU 2*fHBC' );
define( 'NONCE_KEY',        'b|Bvq2@` rL(C<?[~rsf kPt9Z#(c#=t3A~ .E%4HE{FE{0k~3PnUoGO!nz^pv/6' );
define( 'AUTH_SALT',        'Os,@JlV,z!Uy}Ed,<..DLpMW9D8-FYosalJ>,R%nt5kX5PqPDw,FcY-]3Q-{QB0?' );
define( 'SECURE_AUTH_SALT', 'CQ^_&A4Pdae?>yQy|sUEFjCa!id19<F[dXz_jRWQ[s_5NBw4xOSYfx6<>O*l~X}w' );
define( 'LOGGED_IN_SALT',   'i}{v<1<;l~IMb3zm/:{O6uz&jgQ<kTy#w +Y^+ap0M7-:6Bq|>k_ZB_w?$TA#2Kk' );
define( 'NONCE_SALT',       'Sh`9+xc0AH^px,mt8-NaF-Q*S!MZ>`Jjy}dF|jawmLo^glxSXZn&7C#xhErk+@#9' );

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
define('WP_MEMORY_LIMIT', '256M');