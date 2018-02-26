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
define('DB_NAME', 'mint');

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
define('AUTH_KEY',         '!zqN5H|l!.i~t$UzAsCFXgq{!FnoKZ]56iIsx*Z/oXfuw&*M_tP(*Af5%aCzU+Jt');
define('SECURE_AUTH_KEY',  'q.{ R,YECl|b7Z-S58>jKG$Dp8jCigg*^BbnzVBb@9MGhevs>TEspZ}k39>LXXib');
define('LOGGED_IN_KEY',    'o6yg;o#3z]I&:ayM9Ft;j(owpHSpX}>z2NFtMrr,?bYH#M50H(Dp0F0SRcsgI{O!');
define('NONCE_KEY',        'c+[nne}$0Z@Xd{f(2!j:T_,EOw!w~B`o ^,r*oQJDC0:T,(|g)+>AA#E[h/o`;JL');
define('AUTH_SALT',        '?e!&j`IC@Q#qdWbfeV_gb(|G^^()$FTuyrVi2#a*>TkkePXymxMb9hWf/_A34upW');
define('SECURE_AUTH_SALT', '^/szkEE6WFe6*h{(eqjmbh]~w6zN:Zv<;-AiSJn)8k~yM9$=e({_BsYx;tn=w=t$');
define('LOGGED_IN_SALT',   's|&ku$G8=u~s+tIZW^&u?A.R:FWaxVM1k2Niy:A9f`=z0aT9r]DwjMon{6Z5$}|8');
define('NONCE_SALT',       'X8p-)nfUvG?+0404C}WN,3EM[^={hVzlJ;Yf;uU?0c;wYGIR2;J-#33]c0NkJ0i~');

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
