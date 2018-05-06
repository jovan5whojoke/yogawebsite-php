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
define('DB_NAME', 'wpproject');

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
define('AUTH_KEY',         '-T94IU<eT(@aQb,6UteIcAfN,y;}DcdbdmPD@B3-=k`~8uHYTY@P7)OEM-N]maB%');
define('SECURE_AUTH_KEY',  '6#NFA6q6G~dScpg~c$ed;,$Bk#UZ3g%{cFs>e(&RUWISB=MkVCUzf[CP=HJ[zAe2');
define('LOGGED_IN_KEY',    'sBpvj8+X`e/_X!xYv-%4s@I&4drKo~3;]Ydt=xT,#Oi;dyzKsmJuky>S[&lEFU~B');
define('NONCE_KEY',        'Wp}Uz.p]JhpFgzpT8t PbU#TcbS)Z_OD%N/GKw8at(,]]K2K#u<yS9~]N_zf3{-g');
define('AUTH_SALT',        '!+YqFZHA1o1|@SdU]&$Ue`ZMiiV}lu~18jiAm!.`Pr5 #ZxX/=LT8*#~ 6clm0yc');
define('SECURE_AUTH_SALT', 's{[.f.CHx z7rqk2)V5eh|s.30;qc*y!Z+.cxvMWNCKdr1X~2frxxEa8lHSx>4!Q');
define('LOGGED_IN_SALT',   'kSJZnIi4^06e+cou2AM6_VZm*EniChpVpd-lU2`1AJ=_MKlh8Xu{)xK7?sKNsTxq');
define('NONCE_SALT',       '-7z Btm3]S}w#rMG7WQ$4,*Ao(2cnJW.WO, sw@0;y3MtLGl|-#Zeh%AW:mvHny^');

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
