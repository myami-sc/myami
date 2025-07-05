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
define( 'AUTH_KEY',         '5[yx07G@a$,}<G[FeF+}F=NSt8CB9e`svR/+dFN+qBF:ldjAFTYK$~;D2rrPA:8~' );
define( 'SECURE_AUTH_KEY',  'HIw}x+/Z7W+W&(YT4w`RlZ9QYZKM-xoE+&53aj&ojp:mI.qyG2VyJAR.6ZM_4N7C' );
define( 'LOGGED_IN_KEY',    'gnZgLNoq3Y:+mhT%#-dfp<4w{kL1:VLabSS{N*3y2f*RX5bD~)zk,&6lmD_uJF`D' );
define( 'NONCE_KEY',        'o!k>r:P~Z[H-&_mfW9/JBi b^,tQnip}Upd;;^cz[K4r/zl?{|4(}Mt3ZDXY2$tS' );
define( 'AUTH_SALT',        't:9Moj=,9)$%)}5t^AUhohUnK~w?jJy{Z5[`;5qD o||K<[h97lg yyRW9#CW@p:' );
define( 'SECURE_AUTH_SALT', 'U<QveH{sB[S3nOP9H%NWc`@crT$.4Y0}zt3TU[fK!P:<SlU@t`p8]YK)IZ?z(%&S' );
define( 'LOGGED_IN_SALT',   'YD-{H?v6DfDx}+rTd[w.7goK.)=E|LVcz`3orK<y|l-]10n2Cj&:h6bzHX_k58hC' );
define( 'NONCE_SALT',       '^)YyTCqr$a,nXf>DY9*96|bVH8HjM %C&}9SIS>kP(_g6Hy#Y-iumU)(aQoDp-xJ' );

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
