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
define('DB_NAME', 'lognwordpress');

/** MySQL database username */
define('DB_USER', 'log_db');

/** MySQL database password */
define('DB_PASSWORD', 'logn123$');

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
define('AUTH_KEY',         'p;dTvI}z5R*FO-hD1d!qU!_=zWh*Xv7K,5I5-G(*b)p+xsk?vRe|b}+Tvc49E~&A');
define('SECURE_AUTH_KEY',  'W2=eYyl#5tMl5X;Q7A>1yZlh0}O!xw-jJOUN$(}57`SjF|yPMlV*2WhB3GJxq:L5');
define('LOGGED_IN_KEY',    'L8G1F/A$Oj$m_LG:#Pbkb1uZIiN6At?M.YJh*aHpD{J?lko0!:?bzMT1|||]Ho:z');
define('NONCE_KEY',        'do=F/.zoT6K}6NGk);,{bR}?+P0T.d}-4)n$<HzWbQEN<|,X<un1-(u?v7Y</koX');
define('AUTH_SALT',        'sf~-t|ldjeXf#O$XElc<p/(%.zI4mDWDt17z*B]ue0|w_2?CtEly>j]Q=vuJvN{i');
define('SECURE_AUTH_SALT', '|UXnmdpsPu*cW> w,6/pyx|;Hk P*IP ~X6$g)0%PkhZO3v[/.;?y!h79s7OgYWQ');
define('LOGGED_IN_SALT',   '>L7JLUh/?j#TB)_MH%Z`CM{4xEjq6(6tN`[2R-oKl;;JqUMB%d_z*nYT1-ghUnle');
define('NONCE_SALT',       'Jk6~G%yW5-7La{Z*Lk><]mYv{|u`@v4[y f%va#6=[4lC32ra0%|WafQ[lts^KeS');

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
//set_time_limit => 60;
