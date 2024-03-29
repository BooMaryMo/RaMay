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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Y|L*~H+o`aeO0zOi?kLcSSOoer,~$-|=9E!HuWeC7n3m-<@H6aI;98sM+}Lbwt.^');
define('SECURE_AUTH_KEY',  '+fwN7(~h$(@.C{9MXq&eK|1*QyIa6AR4_]Auspx0mtqA;)YBc..*6[!zx5> y?AO');
define('LOGGED_IN_KEY',    '+X~x9un$:]8>v?rT/?+b|t(+6=vSYk)f_?,<Wo}iJ]%/DmB.5w#YPq~e#>V1+zW_');
define('NONCE_KEY',        '1/Ip,~=tTpK2A0|J/D@&|#yk*j5>&O<Ll(=bhg -ha9|c!^e3jY^Gu:S?*}X6!hS');
define('AUTH_SALT',        '%e0K d5T}_!(k4iu>Fa;=JSbo(?D*zVF=U`.7)|63@w6/JcY69YuC5gkDa>M+cxC');
define('SECURE_AUTH_SALT', '?XWatIH=l&Y=}}+t?u[#) DgWRYbx;1!-|:P[{ w<EJ_b8uRzy--GupP1rG.zP*9');
define('LOGGED_IN_SALT',   '(zxt^ e0Q@jf^Z~YI`W?X&/o~ycM v[<s4Gj*>C@Z8ZUG9g9M]Rj%hP-z=*sH$ %');
define('NONCE_SALT',       '+P X&U0so+/}pYTKr^y>@M1WtPpshMD#xQ/E;~YTY{`4nhsvmttv]slj$qgMT Fk');

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
