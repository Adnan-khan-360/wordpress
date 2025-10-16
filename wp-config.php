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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'adnan@123' );

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
define( 'AUTH_KEY',         '=)j2hAz[(];?8A^!Ir{2pwhU Bj!.Q16LDpgvMYb,(afx0cBr25Ez!sJ2 N# 6vr' );
define( 'SECURE_AUTH_KEY',  '9JL9!O)rNiz_fA y8)~27Bm2,+^piFdOo6b6JXJ4yX{j;cL_M,<p=$YVw,N1]bnk' );
define( 'LOGGED_IN_KEY',    '/=bg0&&e~UO -iw7leyxCsTiz)gnzA<5]z!qm?/>B/bG>KqL.+hgn2+{B-4;;#iK' );
define( 'NONCE_KEY',        'W6/`?/$JW2/S$3:[Bfuyg`]ICj.(d  DvZ/:V@].yZX1s_O8@YM10jy0Dkn1Tk6W' );
define( 'AUTH_SALT',        'dH~#T$h%H1l!S`85|Thy?:~50W)QmDH/sBGkIM(Xc<1lbRQ!jPP@;5UN3l-c=s O' );
define( 'SECURE_AUTH_SALT', '#VG*<7Eb)*Hhw8Ew)@|WE4UCbioX]%s*59ae-}a4=TRJnS-zaVIID(+B/phZ:tDz' );
define( 'LOGGED_IN_SALT',   'c|r4 S,.7vw)Uxr/O=B)wSnFf[gRl8Qr60TR|Z1!Tf%.GrncQ&p&Kyrk.AT%!]j8' );
define( 'NONCE_SALT',       '25y`>bHgD$k[K{~0EgoKyk_$%f^1x1.t@S;,B1V6<^$do5$VvhY|`>(:?O#rsG;Q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
