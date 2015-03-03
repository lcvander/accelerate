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
define('DB_NAME', 'acceleratedb2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'K& 5EaxXMGv0NBoSfL9I6sc15GOo&,sP9yf i*);mcxH-z2xBO#jT]rnV8PN+-o,');
define('SECURE_AUTH_KEY',  'D<,f%w55<w-_^r{MC0@k-bG+33uTz@Kv1&^w9+aI8-e1D=2P;%-R#pS[f~UfRhI=');
define('LOGGED_IN_KEY',    'P![TQ#`Cm`FFIVl!*`scWRYT/+lG;1,:BPe93)O!j4US<c<9zFvD)|R](um=I}^-');
define('NONCE_KEY',        '<)91kz~Nsy;a;`1A[X0# TQMVcc.&Xt|8vNCEg-+A1VuyO]|rgQB-&K/Q}iOx%%.');
define('AUTH_SALT',        'r{^+k1-BF[!y03305NKG4.MSdj7>!JF~{kS0+Qs=398c>V]h:Ixrp7l& SRbNlV:');
define('SECURE_AUTH_SALT', ':cU,L,s-yi0S,nZihcnIT|~-v|_@=z>`IW*L/9;(D^pqQ4q3y+M$ou*o5r&#dA+R');
define('LOGGED_IN_SALT',   '-iN106GPjUp?Qe62gv~W40BzY9]w<;|2s|AD_ts>*MbT,Rb)5XZ8e3lc?L`M/E2B');
define('NONCE_SALT',       '35h=rp@,;+3:J`-x3+_UvJQTQ9FsIqlH}Ud-(J;1`ueMHw_)D3F%,Y 28+nQ(-|d');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
