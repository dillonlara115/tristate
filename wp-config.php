<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tristate');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'aUbyv#pueS5mnA{/#--WP^NUHO:bJ<6GaDwRZ=rt*~SIZyoSL0q-p{)B*aV$dwi+');
define('SECURE_AUTH_KEY',  'C^z-7xjvrXs}?3DxlO5ClB=uC?-E-L[Y)7av6ybLS!+sQC>?H[_;{G9T`)N6a#[G');
define('LOGGED_IN_KEY',    'Hm eb]:eobET)kJO{-T;ux4@<e<`8d,>^>R*hJ&$>sF0wi,LetS`lFlq<=g6{}KJ');
define('NONCE_KEY',        'n$r-QTvZRUbkf:/3Mg*/N-UC~L-4|Z#dytn- (VF*WYSxPQfSP8bw<)v<J7yHYr7');
define('AUTH_SALT',        '5Y$ufBARH= &2.-CyMh+]:E*|T*IjG&dGD?~v]5g59?sxg@apD}-2OeSLn:yz*x}');
define('SECURE_AUTH_SALT', 'e[!}+h?3)%8I=3DJR7)$&85/8f[{Wi.D<xZ(ahC&TQK?6}q+y]48j:MLhfuf^;NU');
define('LOGGED_IN_SALT',   '`g!bC1nCc!]+_*5~_H+eP:v_aBs?DbF27y4+#]xU9YDe!d-g]25wbq6<-s!z4~0k');
define('NONCE_SALT',       'sa_|pIXM1IhOx4JA<$j4EZ)|,-N/)3C6#7~YyDA~hx8nn|.!WP#nsHQe_YKft z@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
