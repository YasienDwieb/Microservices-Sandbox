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
define( 'DB_NAME', 'wp1' );

/** MySQL database username */
define( 'DB_USER', 'wpUser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpPass' );

/** MySQL hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'T>Z45]eVk{T6%K//4Lrby(Cnaf*:Nh`p~:tXiAUf6s2UwtQ*Mi|$Vyi<y[6Ln]3.' );
define( 'SECURE_AUTH_KEY',  'c~3zPSLS^(Bx]M^9m/oA)urz4.GTeI!>b-s8Y>Ofx9D!TDjM#73/R.mldk+V`7x@' );
define( 'LOGGED_IN_KEY',    'u?FDGg(-KybwSkh$K_{S^5J& Hs-vO^>?qG/pK^R=cItBj<?]:n7$icW9_J}1XOT' );
define( 'NONCE_KEY',        '9#E9>oO0s_x`vF</)b4Gk-df<0XVZqnGMC^}24}srL.$I2B~iPNxJcmETMr5+Qr2' );
define( 'AUTH_SALT',        ';bu,fHk!asJ6eF~|1u?6N#}Ag?BvL}tiu(JAy]<1>}O*I>Bs^a?Oj*zX}4|kQSTq' );
define( 'SECURE_AUTH_SALT', '~;fbQaZe1.=Xbd`we-k&%WYXn-CXeADA?(Jt=vqAuUKIaV,:%EcW2Rwk(L<3W$tm' );
define( 'LOGGED_IN_SALT',   'ksQOM~zy`B$[N!SyH|j(=?o?.T0oo?CLo]?bt.R<F2.cGEmNE@<SgdB14,e!+A,,' );
define( 'NONCE_SALT',       'Z!_)VX~jGF!YIw*%/9Z_BQ3-!R?AnRHbD(}ut~T?y# m8mA60~i5XXm_e#2K{,[`' );

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
