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
define('DB_NAME', 'tilted_lamp');

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
define('AUTH_KEY',         'nV*.uD~r*oFJ/f(Mr4G/N;u0RA$XII` n3xNy4eSAj@%e|PA!p5O.Zx`]::/^T2b');
define('SECURE_AUTH_KEY',  '1!7B]GJH#TV<~q{,W:dKUCJ#:S=]t>$$a{dRZ=h/A+ydPUiQ_5ngPQz2)e{ bT+d');
define('LOGGED_IN_KEY',    'o3ta*aJy@lz[2&x^h2]rdVV9xp*;rE~(o.xu-=8g>gwr:irm?tFq~hPk%Q+>fY`?');
define('NONCE_KEY',        'XAm!*{QU4,//:jc)G0#A05UU:*W0YABk6_Ci}R?FXoGgA@UV;a9;l|=13 d}H4/h');
define('AUTH_SALT',        'Ss^7<RN&bjid9)2oC!`&Y_8`1?ND~4O+=t|!xfbSl<F,hvwJyMa%iMJY}?BGGyEV');
define('SECURE_AUTH_SALT', 'FOrsY^75R0FUA-0bIQHJPL<,? _+t ;14os..8-Nf# P!/*X #+i{yL.9oI*={AH');
define('LOGGED_IN_SALT',   'PV^b+56fwAx&(hYVzleqUFrz.G ]ncs7HM|C)!sBWkQsP YU`+qzAmI[!oYdD3Hw');
define('NONCE_SALT',       ')s?GjdwP0erBx*1s@/uESVhfnLS1S=ukLr?8H@_eZ{s8^u2Z5ni^oZ-#pu(~{6F>');

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
