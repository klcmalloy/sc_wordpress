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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '%{dv-a,S/9Z/^,cRufwAt]VR}j4d%*8Kzm>~B4{@V^=},V9JK*,,bP.^>q&5^|6H');
define('SECURE_AUTH_KEY',  '2=h5:hpT?KzVJeZjTBL2(0}{9HZqPRYe%F,3hyA>T{~l0=dN;>/|I#`.E:GS%D~y');
define('LOGGED_IN_KEY',    'GL&OsP4@E0t6t>?BC)Vr`;!!uK}B!|uL?n1hpT+=$B<F]H@n}#^kT]Q9YE|[26|R');
define('NONCE_KEY',        't>$B~laN~nrUC(=.1@-[Z^7{`q7u:$3z=E)<Z%y)#0E6ghzMT=M]&{=ZsJpr8RZO');
define('AUTH_SALT',        'D2;^Z#RgT8s.V-=G^~/Z[vowq-6+5;d0dCj_W58#W6B(LK@m;G~bH=1$ #78@i|F');
define('SECURE_AUTH_SALT', 'sq!Ucx$Yd?tY|/Te9<|rsTU<dqx^.hW1JIX=}YdHcmgl0d=C[X]efPPlg/(k{mXn');
define('LOGGED_IN_SALT',   ',OXRY2u!OOrd#!eGQe8X9-JJ(=$k]hY} h)M^uG+>9_7SxTmd#x<*>VBzJK>E8x_');
define('NONCE_SALT',       'R7xQk,-9AF*HAIIfa<MUp,X+W9/CIFoP|:0}iERnj+9Jc&y(^OM.u1jxV;GYS/0^');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
