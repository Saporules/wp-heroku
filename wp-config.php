<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */

if (isset($_SERVER["DATABASE_URL"])) {
 $db = parse_url($_SERVER["DATABASE_URL"]);
 define("DB_NAME", trim($db["path"],"/"));
 define("DB_USER", $db["user"]);
 define("DB_PASSWORD", $db["pass"]);
 define("DB_HOST", $db["host"]);
}
else {
 die("Your heroku DATABASE_URL does not appear to be correctly specified.");
}
//define('DB_NAME', 'database_name_here');

/** MySQL database username */
//define('DB_USER', 'username_here');

/** MySQL database password */
//define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
//define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
//define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Fn6Z*/<PY.yE#,Uo|:0Ve~V,-RJWV-Vf{4$2ypN}IX?-@s<j>/FZ/sY30!K|0++l');
define('SECURE_AUTH_KEY',  'G6;vxG9;zWoRFNj}emuX,x4il5]]|X%]|D$zK/23z~gN7i;>3@V@Q2lDOBhhUUEv');
define('LOGGED_IN_KEY',    '!/ZKUX+},OQtF|s-{X)ht**#]Js/R)$Dceu+z{j[$;<QoSa9^_9 -;eMs m p:&<');
define('NONCE_KEY',        ')3|DRlyO21^{Rt+eCRuVvHs)vB7zf3O.*(`D#j?R_[R6XCyNO7SoKBll~FKTjd>p');
define('AUTH_SALT',        '`ja,Hd2F[Af_zion}]Z0F0S|XylGoqiNTJb=->}c<r-{y8h5/o@ia/CwF05(0W_K');
define('SECURE_AUTH_SALT', '|ybncS,@JnIeS#00Db-ew*|1s-ynoA7%.spZCOY%F{<wA{L*HMAow|%Cp>9|s-F`');
define('LOGGED_IN_SALT',   'zZEc.%ac1C*^-iDt]Hh`F?JI%x+1<UAFEOUNJbI0+mo50nP3Ky^E:[rhUrmMlr4C');
define('NONCE_SALT',       '7-hN ]~rCC,TuPsaF~poLJuD*/|dA658bTM%v|t,d{J&i`5l,TMPsF__RO ;gIUN');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

//Add some deployment-awareness, so links will work locally as well as in production:
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
