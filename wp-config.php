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
define( 'AUTH_KEY',         '=7F}+){EfsSjYtwWBrj7Zd+Tt4=<gU(xR$hXe3m+=q~YPwD~;0u/~).z_Po e%jI' );
define( 'SECURE_AUTH_KEY',  '6]p%WWoG{`}$GeHN+4MfNmwd$h+|<{.k9#!@Ux8*sFZERQZmg7)8hz_~@4*|,u g' );
define( 'LOGGED_IN_KEY',    '(ke*CG`$N]%CKEH/XT^-/FzLAeuHet[(i`#HPb#-sd38C,&OzF0yXFe|neRP!-4+' );
define( 'NONCE_KEY',        'AjX{#gi?AAS|T}tAMJ!66:cXfu+Lb@o9L? BFjs<,bn{aaapk7VWAw:y6VFJy>cu' );
define( 'AUTH_SALT',        'S}6H9^$za)#AnsbDRVAPH_@N(0|tQRvQZ*Pf&]l~ExTgmmq;e}4/)uj-LM$)QK9)' );
define( 'SECURE_AUTH_SALT', '+o+Fi3zuMV$!*pR|+LKVdjk,S;tUU[rN)EwYt3C0RL+OWt,4e2q[t}Y!BH.s)nX~' );
define( 'LOGGED_IN_SALT',   'V@wtu)]f?Jno$Sc9tVA%BmmKv@@x^|a5F0@pD&P $p#/kI]K2^v?Z~5]:H(nlf[W' );
define( 'NONCE_SALT',       'vat/-v>&[XjfNKZP:.`Jy{kDJB|b) FAzv]<9RGio|U@qm`lmnr(J[I&/]fM~E$3' );

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
