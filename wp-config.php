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
define( 'DB_NAME', 'batch3_db' );

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
define( 'AUTH_KEY',         '=HD;R^5^e:%a?(8&%3`0w5oT?)Lh6U]`!:1Rck?{2q9=qIJaaT]8pg`?$$.B6Tpa' );
define( 'SECURE_AUTH_KEY',  'GtgF-+*o{@-WyQg @`r2P0.68I*Ed!lIssw7Q(g(qzm$aQ)P/}RU`1KGA{yxWhZ!' );
define( 'LOGGED_IN_KEY',    'kH.hx;U9.k[9FEVfnsEu7Ifp7Vm;%d!v,]V`gPWg|s]d3~nvZeA.AE.fquuS(6bD' );
define( 'NONCE_KEY',        'DP[4?f; Xxj7G2EL.2>i ;W*5J8Oa`2yGz>pijT Ll?_tFxI8>F,5&=S6$+WQMX6' );
define( 'AUTH_SALT',        'zyjh&hH4g,-L*W~_ QW~8vAzNcpDU+b/{;5u.vDx@/4.$Z9/JlEH.*$]lo=24a=)' );
define( 'SECURE_AUTH_SALT', '/R-C^mxC[rDn*[ztV9d5?2NF@p=e3mbvn&kW:!@-mKs*<[O1K%9!znL[#2c0qC/;' );
define( 'LOGGED_IN_SALT',   ']h-P_?1UX[c9%NKsj6vQ2[J[>}Ig/B:!MrZ{`L&B)UT90s,2US0r%qhY3w0xILNu' );
define( 'NONCE_SALT',       't1tv!<N=Px@bU%wfK7a3[Kv<gJ <rD/PUOjX)m:$DKaP!&-g3`w7bGo6zX?#r4EE' );

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
