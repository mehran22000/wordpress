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
define('DB_NAME', 'asl');

/** MySQL database username */
define('DB_USER', 'b4ea925a107940');

/** MySQL database password */
define('DB_PASSWORD', 'bb2e148a');

/** MySQL hostname */
define('DB_HOST', 'eu-cdbr-west-01.cleardb.com');

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
define('AUTH_KEY',         '5LLY7nP=3*m~+1%vG3 ZQB}YWqq<NtjF[O]X:zu7;Qz||;yz[Nd3l$^):7U/X5 R');
define('SECURE_AUTH_KEY',  '@Ex(&DP<xm81.[9lVYc H_r1)Bf{Q=>O{11j/FVE1$i*xDpDit^;vC^?&IV2$C|6');
define('LOGGED_IN_KEY',    ' 2eq@v|>sj>u}PO:RI>/Kqz8B1Lm$)Z1fUGx3IL4bd(9~EV1J-R#h6%ug9&[N:*v');
define('NONCE_KEY',        '*P{3@2Pqzy-2*E|_K%[:{*AJ$d)(^ (CH@8y?{%jTXK#Mu<C(i3&O(1EL`PN.1s7');
define('AUTH_SALT',        'Y.d>}&$6k|)Rw/`X[0pBIs{4X]-V^p:|cuvI|9RV)3l)avfx mm-:S6Y3qsDi]]j');
define('SECURE_AUTH_SALT', '-wB =oJ:>Z]L50U%c<djpSn$mH YeH80UT# VS1ebFLJ9h}$b]Ekap`I{N.4W/`6');
define('LOGGED_IN_SALT',   'Wm002/%3+x(0B||8GsfM}H|Pw.HOE%x+A4Lgv&$VT@.w1LQNYCky4[c):.4N^>Vx');
define('NONCE_SALT',       'N=+Xoi8x+ev B1`Gk`|gg4]Loi_)-8BVucl7G6`)vcQO&p91:f6O@hW^wqkuX|o%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'asl_';

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
