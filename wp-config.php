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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bekey_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://'.$_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://'.$_SERVER['HTTP_HOST']);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#zTK /3X^`{%`4;vX87,N+Q7[N@yxLR[@ANG}<%4={OB{B}TS 4G:vIjQma|dby|');
define('SECURE_AUTH_KEY',  'X-iG]*QBeFJ=sZ-y*N _u(:4YP,!6GOw4rjWy9AO2?AvkS|R&`G}Jb<tx&w!5R(=');
define('LOGGED_IN_KEY',    'tjI{k4IOBY=D7_E,=N#aO.xe`S0DJ[d.^4g!f63OSO@1Vk+3y:9K@::H=TCI ,yx');
define('NONCE_KEY',        'G|uJ25[+hDn>U|$>|1Vl]iISBL=yBEV4$EVIe M$~o_21DM1(5 ;86OW5_r(zr=F');
define('AUTH_SALT',        'Ji=G-W|B)[|c[9rtA-BG.Tgpon5w#-,=Mgt+{q||.++DP ;4wQhrEAnWX>@ad|Sq');
define('SECURE_AUTH_SALT', ':O]_G:)xiNn0+Fb/-x6tE1cS#Z74/]t_)NjI?.3O;@|[+!Je=3Q~+@J5n~H|Zu1k');
define('LOGGED_IN_SALT',   'B|@<LEp?@:H9&(61hi?8=tfvol.X7i,SFD{UH72v.B!I-SJ=ySrN&FUDuDsjAB]o');
define('NONCE_SALT',       'Nj/`O!_rH#fjz6*>Nmg$,&}P-*!v9vhkVA!xy>:e5S,:FOjX:&oYpBWU`j n5SC1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
