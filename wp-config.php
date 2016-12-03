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
define ('MEDIA_HOST', 'http://' . $_SERVER['HTTP_HOST']);
define ('WP_SITEURL', MEDIA_HOST);
define ('WP_HOME', MEDIA_HOST);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'infogate');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'Aij>M9>To|cw0GE$OS+plcaM8Y:>Px|Xd:X{<#Iyoqa51@A^827Fr<*);D =S:Qj');
define('SECURE_AUTH_KEY',  'ri 7$>|>:RaYd-XlVpvu#}pIvAN=|eePlq&gHIE#@{COo5BdL5)K],0LhZ)C,FbU');
define('LOGGED_IN_KEY',    '&K?S9Qr:{wn@)jSS?)B(BPJBtH2KnFGv/MVyHNxXg.;oziH/BS_!+20u5ir4Ei!0');
define('NONCE_KEY',        '0S.LjD|+&RFn[v,>jnXK>@ze@6B=k%vb/1WrV/z!*!i.NDEF-!y<Y5Z^c{]e6KD.');
define('AUTH_SALT',        'A+i ,i5ZurCArudbj73,[edf0! ;j4$eomtLH(kH,TuA+sxoSdf7Vd2jnj`&_;v ');
define('SECURE_AUTH_SALT', 'cJMz-A3p23ns`XyDO3~6CoJ}{CY2J 5%d/Ww=&:A;C5%;W~&|LKuuTk`;R)lWYu-');
define('LOGGED_IN_SALT',   'Es~P]IqbcBf:]8?D*qQ j+JPak*x)j8f0X!*XNRI38e$.zqFU$DaKTj=qn:%<1N2');
define('NONCE_SALT',       'a$M.G#7%pt#kXIyM?3jqhM9_[U~y$+2?T_/RTWg<+)-Lp]s%Q(HBiL`7`jI0jg.w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_5xyjnr_';

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


