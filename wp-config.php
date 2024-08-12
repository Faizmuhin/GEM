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
define( 'DB_NAME', 'gemconsortium' );

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
define( 'AUTH_KEY',         'H|](_r1D!,o?.Fp.t>,0pxu=EmJug?BZ|A5*>Yl.4naubDO4hGSW,=3y2<TDQ*7v' );
define( 'SECURE_AUTH_KEY',  '/sI_$UMA!<]GtO]Bo2:N_o=y;RA[O8M> !$Yq^^ priLhi0dyDxM^?1>O)/msg`3' );
define( 'LOGGED_IN_KEY',    'vxhOqU<Hdu?#PKHm5jv=rS(l5a!>t-E/`_gQH|Oez-t$Ze<G1O0sDQp$Zw PF7sO' );
define( 'NONCE_KEY',        'vO,FYOKgr@q[4P.E{+mgl{Uxt37Hei~ayd&PBEdw%+viUD7_5~a>a{2;2<!^Zl5|' );
define( 'AUTH_SALT',        'u2=2DZ!c7^ri!Nt_S:4WEb-&H4(=20];L{C8Y@jHz^rkTeTeFY;.4!shW{)}VEw6' );
define( 'SECURE_AUTH_SALT', '._zq5Qcqfl1/L@WDnxF|6LA4h+$~hqUQ9gOL0N(S`/1$6c]XCQf,|;y5!1~!>k%m' );
define( 'LOGGED_IN_SALT',   'jU51D[1iI]Rce$5{/N74]O!ikV7LWrWTxipGoS!_LK]8K{o8BhmvBKkc/^TP3)kR' );
define( 'NONCE_SALT',       '4KW[~lSM 5X({Q^;RHY+vyR6XB%`zQqlYH]!2OmXqCAb$(SX}JHQ(AVK}]tW1Rl&' );

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
