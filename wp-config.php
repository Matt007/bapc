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
define('DB_NAME', 'bapc');

/** MySQL database username */
define('DB_USER', 'bapc');
define('FS_METHOD', 'direct');

/** MySQL database password */
define('DB_PASSWORD', 'peterpan!');

/** MySQL hostname */
define('DB_HOST', 'matts-life-db.cqrqabagncxq.eu-west-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'ba;rE>l-6O$U(W4TdhBIJz6(i5ov0u KtHtDj9X<}GLePs!{oucWu[x$/4a2Z_]l');
define('SECURE_AUTH_KEY',  'xHTp`&o-L-$2[+ea?lZ{{(7^6R4+P`2c.GGa]iY+Ofn4ox<[f<@DAj+YX@kqtM4$');
define('LOGGED_IN_KEY',    'V]9LZZ`1!ln2.xoSkVmtJj[QU-YQvaa{}KWS.C)f|gpY~{^T<# ,F3EsTI&39bk<');
define('NONCE_KEY',        'Xfyh|f5s-^_I[?#YsY] =SJw>::o*Uh+}Nea/4NdSun2%,Cz`1QJ+F)e;_^Ot>%w');
define('AUTH_SALT',        'G1b$?uQ-.;KF J2^^Wr.1/?HAhTR6p!XDYNz|~6={ykuhX2&b%]$jEtgN1f~Z-7T');
define('SECURE_AUTH_SALT', 'N9f*~vD43z^!$aYMN?ZUY4.o%s*X&2{R]*?~.2I?ux|jTm?`a,+62VPz_*p8@i{?');
define('LOGGED_IN_SALT',   'Y.3NXBm31_BX(tqzo0fVS*a;::2<g)|2khO3k4><9=$Lwn*t)%RP:rEDne2DVx}$');
define('NONCE_SALT',       'ng{wCA6!03de69y!,d;H*L,?l~+W;o2-<AQvvr9o1wTopJ?pPSlMt7dUJK6=]GTw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_bapc_';

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
