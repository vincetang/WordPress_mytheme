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
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'sPV1zX4JDU&fn_v2eiBj`vK?GSP4)IsIx-@-T!`v)CSsgq1%AblemteCGEsTfkY6');
define('SECURE_AUTH_KEY',  'y2WUD#G;|ZbyAD:v2-mxGfZamn_*EPAWR*!ua_L+a!Z[0TMhij4!7Y#09KB&tC2O');
define('LOGGED_IN_KEY',    '`V7<HV lOqzLL6_v=2BC`iB1Sl3)||zk2v93<h21u@9:dhRJcu:Eo?%EElTrv|Rt');
define('NONCE_KEY',        'm@ZTH)GJ_~u(8/53|[]58kjHPW?N;[%Po:D,chUm9<*5BFScZ>|w}<EkUI@J66#l');
define('AUTH_SALT',        '#Q^=w#n+8.fA7 9Z:r|:#EEgLMmWaHPbVhdR-*=mQ0GY?5BuSzE&QW45f AE0AWg');
define('SECURE_AUTH_SALT', '5,M</;JeW+EW5weC31sKRA`zl%Kz_^C /c<@uSl oTGU?p,C:SpB5_$;5!`FrQrm');
define('LOGGED_IN_SALT',   'ZP_-TH(o/)UQw*|0/NDhsSWgfg?S|JDbMs4[:uA!R!*|8+~1msNr?u A:BZ|]-Lr');
define('NONCE_SALT',       'ITP+RWAP`h.m0zlC|=[5DC|j]l9wpI/QaX(?D<y[(]h&RF|?+dUjhx}1#V+0!bgv');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
