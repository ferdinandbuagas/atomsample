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
define('DB_NAME', 'db_atomsample');

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
define('AUTH_KEY',         'D8ET+?KVO@A:*p,uU~|Gsp+T$tJ|QW+9l<i7[S*-yg2&*gw<ua/2]Ry;/oV}Ryw.');
define('SECURE_AUTH_KEY',  '7|} `@:U~%_%;@FpQ7oBZ<iB_H>DnvKZ1@cQroXgkiFZ8JY#@BHZ?Kg^jvRUP0Hn');
define('LOGGED_IN_KEY',    '`TZh4y~;O9DS-6-x<MEX1)dmMp^l:^yRJ >w+%n&r.bhYPPB[5gge oqUG%f~{xX');
define('NONCE_KEY',        ';8K?H gxNbVKa2YDVipO;fkfu<FG0Bmz]_5?)ZwcomhHN(L7C*_$j(:%}qhEbG.g');
define('AUTH_SALT',        'Bi&L|Q|/FHrnc>HA @yp~(y2_iZk.SW 0}O,QClS|DC+L&59>K$^YycZc@7sRRm4');
define('SECURE_AUTH_SALT', '+j=4Cg,Dc}8Cke`0 tApx,72qhRDBjwe~452_?3y3i&Q5OA]z 2m9KM@nPoCMC|R');
define('LOGGED_IN_SALT',   '2qT]T#0_fF)0{dk7tZ#+1+GNzY04?C P&Vm?k&$.Ppuen@Y5F!)JC<a$OP:ip6JY');
define('NONCE_SALT',       'Kb+L^)9^zUPDF#bqC1?q,d0IXj]wbLChr/T/-a+fAr$]@_3znczAd2RJjF3=:65k');

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
