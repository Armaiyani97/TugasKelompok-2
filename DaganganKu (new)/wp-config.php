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
define('DB_NAME', 'daganganku');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LCs4eIgW6+P;s4v:X R:mb:c!O<11N a7Bol*Mf(Hc#3eQZ&EiG;<c- m!,-fl)M');
define('SECURE_AUTH_KEY',  'XM21)-x7m*t(` U*Bz_58^^C$ifR`HDgUA#~^P:ej`S96;cKZE@sA{X!N]?ubI(Q');
define('LOGGED_IN_KEY',    'iNK?w.j)[m([^^8@+6LAf[,T&m~N]UN;LQ*!^1kPC?j@Ij2somShbx-{H/|R!q!0');
define('NONCE_KEY',        '/1wI,.? qbwLe6Y;L!: -Hl:0oxf$GvqgqlkOFS}=hd3(,W,v!z`nd!yvFYR?8gA');
define('AUTH_SALT',        'm!<Oi#SbQYZwOH 146@|{rNxI;_pSY9z,[jOulKCTs3u3k+$RTjl`X0p2/.s7 /r');
define('SECURE_AUTH_SALT', '(co9rK0P?(wmz]MTHh~Jm|bq.Dl@[vG1R]X<8[-id%>l%AL4kp#_j1NmJAt&up/p');
define('LOGGED_IN_SALT',   'vf/m:Qhq.T)Z;@gU/}s^?@BVO2S{y*BU#bTLhrha{6|6eEs(x?yoWAmP@UbYA!i6');
define('NONCE_SALT',       '{?0>@s8hppngr,hKAd}2c~|z9MtT#Z+L/*E+_ny6m@+-XQ- I_VR/~V<JC9z+DpV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
