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
define( 'DB_NAME', 'jaycebatallones.github.io_db' );

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
define( 'AUTH_KEY',         'B]*Onvt3wu?H*3Hbs=,sjmI:PtJF0+`WK{0dl|(^YcEk_8S8( 1E=Q@+A,5YXql,' );
define( 'SECURE_AUTH_KEY',  ';g=jPwYBNt(8LX.-0C]y<BK E@Dc{BnOqe0pfAutN-,dZw%@itb|Jt)v.%h9d),`' );
define( 'LOGGED_IN_KEY',    'm%CHO<M/$0N>%%Q;hj>sSHR)k+]RWTH/N b{{~:IaCAbub={LfL(4,qF{.U>iadb' );
define( 'NONCE_KEY',        'p|BQ!;j=z_V]7#[%)=6N?d> 02>~~$9skx^iPNg/@H%qSp*S=f0Gbdq#IQ5bEg E' );
define( 'AUTH_SALT',        'r[VPENFV(zaA`*F&{!VwD0nMF)sggFYDXY`YDD{Sa0TOfR[^sV(l$,$BH(NEm^k1' );
define( 'SECURE_AUTH_SALT', 'py8eGB?Irn1<pS }<|uPRe)?wZA{z!!AiHxPh-9i;}c+@ =Kw`y`1.H%nR&=*N=f' );
define( 'LOGGED_IN_SALT',   '`TZ)&eZPjS&JCyK^A&?qd6K3*CPwF!BG*5P+H5{|jQ~LU`?a`09W <R4~Fn((B.x' );
define( 'NONCE_SALT',       'kKa]Z of&#gtE _6K|(rUIxD?gkc`[U*)CGy+s4BqF^Z/m)ERtoDU#-Rxf?#MqH6' );

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
