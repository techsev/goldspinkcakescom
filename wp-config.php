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
define('DB_NAME', 'goldspinkcakescom');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '#2RBAkLI>|1.JW]y`,9UL=)W4F^}&`N?5MUVYuU*bEQU^7cYe?pGmW1/<q*H|ir!');
define('SECURE_AUTH_KEY',  'um=-27un{E+M7f9KAK1nG=zi[J{4Q(6$HgtNh_9-1YO+w&L;2EaWoRr_P&:,>Hct');
define('LOGGED_IN_KEY',    'KvkTDt!#&+& ~_E14!]=l 8Lb=e*hw}r=@ >7I:ae1tJk:V gc,w/W]5Sp1>*`zO');
define('NONCE_KEY',        '_uiBv4=?~u#v67KlxwkVv7Gb9H?YMdwKM=(8d-;VVP(QAZT^*?S+:~ylyu]w?}3-');
define('AUTH_SALT',        'Y1[e5b~{s38Q~ufWq?j06_ViVF8Hp-HI+f304OZ0N/q8M|L~%|XMv`k*oxqSbRL$');
define('SECURE_AUTH_SALT', 'g7B*3!j5*={B0;HgB8zPkuU#1Cchz!T1Fu6.Qe2{#wO3S{ty]FnKeMi4ZN[!9OtT');
define('LOGGED_IN_SALT',   'V{X]1gKg(6ZFp)QUM+Yf,nk>gey[)[b`$)z$uXL7G4=!tbdum!BpeaMn>3k:xH_x');
define('NONCE_SALT',       'im&;J8m>r;R,h[B0qNsZg/8=IYSvv^Np5!s32f8r *wU7mi78.U*6N7$en&-:wF:');

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
