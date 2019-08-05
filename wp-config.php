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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '+@>^EC]Btot{!1~G@QG&Fa5O`,TU|/+|F[ozd9,:#TGhAwwc duZ{Ebzx$.5/87:' );
define( 'SECURE_AUTH_KEY',  '1;n8n]fYyd3Q$#_L]xR<USJDUK]{E-t9oV|o,u}j1(N.dB)ocxt73L[2q+Jj;$mh' );
define( 'LOGGED_IN_KEY',    '43_.1F,8,5p9-C&T/bb-##tE+p?fJT4Ttb|Y`5@*!c|f/O7V_`d!N`6qjF>g)(C#' );
define( 'NONCE_KEY',        '{_ t45_b=A-|%2b)@;nsDrJO|Qe7e`uNrbh;2e)T;W]u`9q~xRMKwe3+&d&4>qc`' );
define( 'AUTH_SALT',        '6 1G:jAGg)goBoS?vd0=]BJ0OXCyLW<&UV;W];wT;3NF&!R)F]k4A4}$TR>x0cl8' );
define( 'SECURE_AUTH_SALT', '1=ywn5`0|LoP?NZIR 5@[]oZ]5EBA>IsgBo8t6rwct7NJiD+n(_&GoQz??tU{9No' );
define( 'LOGGED_IN_SALT',   '1<GUqyBqG(ybRTllJpggsueKT + [?QGCckop.xy3w>A*QQ3E0sC}(MyHzS1!E7}' );
define( 'NONCE_SALT',       'FOBkggnxw7u;-XoD<xTSQ<+TRtEnOm?V{CY$.wY^pxuN#=,NdUVbBn1WEmyo=|P~' );

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
