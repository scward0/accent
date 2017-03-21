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
define('DB_NAME', 'localwp');

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
define('AUTH_KEY',         'q,E*|LSC(;`pDl`$Iv).$>R<TY;M~NEc0tDFa)K2ax+wv@%(mmXZPKQ3B@W=](po');
define('SECURE_AUTH_KEY',  'djaSanErX?r1cFQ:,W3I8cF6.3z&|?yl#kl`=83OGHb.j4T}g$C}>xT6Xq&-3FD]');
define('LOGGED_IN_KEY',    'd>dV6xlILTfYVikhzT4SQeewM)xsi),HU}c)tx(4Z#a^Dk&_?!C6p(M^y|#.|mYe');
define('NONCE_KEY',        'YS)mQv~pEIk7Uqb}Fq6wz<8^HGwD|:BOb,^yzCTh_[Db{I6R[G},=`N`3`$93uim');
define('AUTH_SALT',        'Vb_uQrFLz{h8HBIax+hdxQLC%`jrEAknAu-hm.]TzAw!E>B{s]CaX[<*g~v[5H{`');
define('SECURE_AUTH_SALT', 'duSybrA}jF3ex1M}kQDN~*31}]!D;P?K| 5tc-|~A?t/?:Ql[H1fNV`qH<FZntBr');
define('LOGGED_IN_SALT',   'b(Uw(z]?F,OC<_So-!zu-P)468}Ry?,q1GCSCCgBc.U{3)d).`+8;PwP2?;.etL9');
define('NONCE_SALT',       '(<lPlo<laUCvWf=T:C-dyub{j@XlnhZ<4h-PnNf*>%Hzq|7&AV1DyJGBs7TV`x08');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_ad_';

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
