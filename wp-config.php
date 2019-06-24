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
define('DB_NAME', 'uvp_online');

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
define('AUTH_KEY',         'h&$T0XGLaq0]K:Xf1c>*w=VVBjKiVYy]dw[8`oH=dHVV*~mMTF!,cM ;Yc{a0|gO');
define('SECURE_AUTH_KEY',  'UyD%0L|eh/(f.6)%zsx<aK[}5n#5}:yM$)u_cvOGFZuT$rV!+HG)_.(CkoJ46~|B');
define('LOGGED_IN_KEY',    'iim!#_X]+B/`&b(5iOx{]#wPS%``P9>d#*GM.Y9S*kH~~a,;uj0CS`MSnasb2b4;');
define('NONCE_KEY',        'AdO,WCO#P(]tkQ^3odpEFn(=m[HsNCl(BCp5Nf-S|0J>s0l]IS+_;}$5OA[Mm!rk');
define('AUTH_SALT',        '<}KNj%9:HdCIML8f%`v/{lG1H+MiES=,.H:jfFfhMKh_;*VtSmm)$jO(X,`BawO+');
define('SECURE_AUTH_SALT', '&B`~s1oD3aX58t}`KW1Vk|[7UM:je{m+~Zafw2/BZWt{f>-8$-5&`TbzGhe&#4~e');
define('LOGGED_IN_SALT',   'b!_UML@f2}yOMrrEVz?QJZ-EVl$7|UnV3K?#<rjWc}*g}6v^(4b intULYnAEAF3');
define('NONCE_SALT',       '-`^#5)B{Tk`4o(|<k&vwy5/K5JxZ!,(c8Be>)~)L000yb0#$V.2xKpqD.ttd9Wjb');

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
