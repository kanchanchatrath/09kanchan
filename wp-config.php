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
define('DB_NAME', '09kanchan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_Zui]DSr}scVU|#5U.QbMdvKz*E7k{bcHT:^HYYHXrMLb@sie)aT]|X|Xd]w8>VD');
define('SECURE_AUTH_KEY',  'uB$A^ Og[YGGnHcN@U}XejI%cd~VuD`xH%sg%)rIrufZSpn/I|onm;Z_HsuuZpf[');
define('LOGGED_IN_KEY',    'k3I1bI3cih0G/.gM/G6RxIgih7{XVV407%Zar/(/q&U^@Qe28|R)[u;s^A8j+jVO');
define('NONCE_KEY',        'JJC5+V;mG4|sLw@we]yrL5VX@.Mf?7=E=$9+<VN5xmPrY^H)xkjGSAB^UuLmU8P8');
define('AUTH_SALT',        'ACg8)08cD}.>=M$#$dbM~fjxx@@IOWJ3rTiN^fu#(D)(+:gk@XSY388ab;5Myq%.');
define('SECURE_AUTH_SALT', 'xL8^+^7,&HCEW]dEdx~$iv!*^N[w[ n5E C>I6&[-Mf(KM(*hS,Qt}G!ukeg>2mc');
define('LOGGED_IN_SALT',   'h2v|m8&E6I[<2*[o[_C=AvzH>c;zvNhJ}g#)TdID|B_9WXycg<]xa,Hy 4PZ.,?V');
define('NONCE_SALT',       '/64Q+~i@cWR<lR w/$|cRO3WHr`mf0+(jr]3~~ >;-G6VrPBlbxw;lsMJms1yl?r');

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
