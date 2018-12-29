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
define('DB_NAME', 'green');

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
define('AUTH_KEY',         'E99|@4l]BL4sw^`&pT,p|q,2Uvo#+cJXaTjD>jx-G~Rx|5x7D<Wkd&4{X[ue&yb1');
define('SECURE_AUTH_KEY',  ']}Vh:V<S0OKtR(lh39/{K5/}7YQOM$Xo6LEwAsqv UzD2o=h=bKN<&%}G<LZFL|1');
define('LOGGED_IN_KEY',    't#gF7g%f!WlR_^MhMGZ<]oXo5}Cg/*tmm}*.&|MI#rd5?Wzm-nlS-O6&o/f+p/<V');
define('NONCE_KEY',        '/mh} x`jE<]5`hwg`C#6du*F^Li&uHtB/PtiSm+6S@.iraE=k*jF(jqw.{Vm]Twd');
define('AUTH_SALT',        '/|CfrMLeFTiF`n_Lt0@*l`L/>m,q0b&}9z)kx>U.*IrUrxwR]dg)MyELyD2Wp$on');
define('SECURE_AUTH_SALT', '3;%2AA[T;+>w~+}Qbo@66i!%IA~}2%+:9cBV/Ysygni&G_r^,]MXD9ETlD)+#T#l');
define('LOGGED_IN_SALT',   '&b$7W98vU02AIcYSJf}l_]/S8Uiv2#[!jL(vSAgo9r7/J 5$<t.a%P2WBQ]6:T6b');
define('NONCE_SALT',       'CfgNV?79.k]76tV1|PoMkfZ{I1v*^3(z1r;N:~]7:*,_xPf5WzR2(=wZO5$b&CU~');

define('SMTP_HOST','smtp.gmail.com');
define('SMTP_AUTH',true);
define('SMTP_PORT',587);
define('SMTP_SECURE','tls');
define('SMTP_USERNAME','pramit.acharya27@gmail.com');
define('SMTP_PASSWORD','minaacharya');
define('SMTP_FROM','pramit.acharya27@gmail.com');
define('SMTP_FROMNAME','Prameet Acharya');

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
