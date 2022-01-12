<?php
define( 'WP_CACHE', true );

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

require_once dirname(__FILE__) . '/../etc/php/lib/CloudezSettings.php';

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', CEZ_DBNAME);

/** MySQL database username */
define('DB_USER', CEZ_DBUSER);

/** MySQL database password */
define('DB_PASSWORD', CEZ_DBPASS);

/** MySQL hostname */
define('DB_HOST', CEZ_DBHOST);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', CEZ_DBCHARSET);

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', ini_get('memory_limit'));


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G3+!M%@wkD;vAENa4v4.t wBD%T{_2Zr[X;ZA{^4#aQS{gN!YnxDSjB|]12v');
define('SECURE_AUTH_KEY',  'ULx@>G2}}hSNwYaF]h9F@L;cEZ@Y9qtT+:RJAar0a+!7+)_UqtJRxdQHf1kc');
define('LOGGED_IN_KEY',    '%tY8::5QwV:VR$H1r1@gL|fD@K(VR`WL/VPt0:v.`10+ts2+f!n+Y}gn;jJR');
define('NONCE_KEY',        ';L5k3Y+Sjfgv5E%cAp<r]P@+KVQZx0N)];EU#Z5UnFNM3uXX[(Sb_3@s9cqu');
define('AUTH_SALT',        'k*:guav*1QweDs%:3K/[n{`]}}y#3Q9;qGVb<z}3^rgd*u}cf(t8w$M[<b./');
define('SECURE_AUTH_SALT', 'Ux;;HRsJJ(8!3B[2cXs)%G6RG0r`.7BfuCC^dCR@M,reFA[C_g_0AN,k7Rdg');
define('LOGGED_IN_SALT',   'z<HC#m3VN4({V3Z@6]4[4Pg{,#Cv;U`dpF:+m8WB*0s7.,dy4wtH<w/dTQ{P');
define('NONCE_SALT',       'zW`P0mjT/%%+hM426z0m3Zv3>c$Vbey{R{4BFTH[HwhcbC}!F_;.uFm!;Z+c');

define('WP_SITEURL', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://esbm.org.br');
define('WP_HOME', isset($_SERVER['HTTP_HOST']) ? (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? 'https://'.$_SERVER['HTTP_HOST'] : 'http://'.$_SERVER['HTTP_HOST'] : 'http://esbm.org.br');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define("DISABLE_WP_CRON", true); # CLOUDEZ-WP-CRON

/**
 * security
 */
define('DISALLOW_FILE_EDIT', true);
define('CONCATENATE_SCRIPTS', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
