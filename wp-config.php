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

define('DB_NAME', 'lalin');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8mb4');
define('DB_COLLATE', '');

// define('DB_NAME', 'u475861_2');
// define('DB_USER', 'u475861_2');
// define('DB_PASSWORD', 'i_G4o_6NGs');
// define('DB_HOST', 'u475861.mysql.masterhost.ru');
// define('DB_CHARSET', 'utf8mb4');
// define('DB_COLLATE', '');
// define('WP_HOME', 'http://mobile99.ru');
// define('WP_SITEURL', 'http://mobile99.ru');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Xs498xd1?i%:C73IY~{U0//R<zDMB!9i?%m{FS~ ?@4My6]U$$niuCW).(CzMtO%');
define('SECURE_AUTH_KEY',  'B_+<+BOF-@#gcrp5h(IB_x>jyv&oS98<<,u;#^3&GB!W)9!D7Y+-TaOW^a=!>xml');
define('LOGGED_IN_KEY',    'jvE,pWlN0^ujDe2_ywr~Ob[#?;FM7~t/yX~*GtW#V3m&W$YC{Qa2JzQvU51/+g/t');
define('NONCE_KEY',        'PJ|Ljx_[JS*A!=f}8s>QAqqpZW7@Q^JZmkgqr/tMQ94M@hZH;-ifPx?j5=S2ulA<');
define('AUTH_SALT',        ']?l5W{:opUF.CwZJ_IA~B~f0g_K!odw|:s3&9eEVLNI6JGV)lpG1E!NJ[3zi+s49');
define('SECURE_AUTH_SALT', ')g/ft-#1Bk9a]Kc`^*T)0C]p)Deij,FXmVMV:YhR,$w*RjYyOw}%#guP=_iX`d#z');
define('LOGGED_IN_SALT',   '(lsIJG;2>1{z|ti[]eeL*~l<+p7w&4z5W;D(|9[?4*@AxI/Am.8joF6bQ054#Ca6');
define('NONCE_SALT',       'TOGY[W/#>Z+GC:A66n{8(_ |5He_e]h_l0L LM*$Ju1p.MF#g.r/t,%CFSRKT39C');

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
