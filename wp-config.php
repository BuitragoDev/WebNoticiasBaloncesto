<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '10231514_news' );

/** Database username */
define( 'DB_USER', 'wpabuitragonews' );

/** Database password */
define( 'DB_PASSWORD', 'talquistina$1981' );

/** Database hostname */
define( 'DB_HOST', 'PMYSQL107.dns-servicio.com:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'XuV]R!:XJ)j00C-Lq2o)Ms#C~g+7879-+44/Ac5/IcH%Xpm|LE5nxny6WBX%!8w#');
define('SECURE_AUTH_KEY', '9!|r59w@zHsR(s/k|@F_-K;9b5%-Bx_vDk981@#d;FcKvye(T[|SIK*Ws~b79#k;');
define('LOGGED_IN_KEY', 'WK8[Q|474n87K#x5yfcx&)5wNj@S@4!C-#2k6I27G]C43b[]&|Y]auy+*6y#Q4C1');
define('NONCE_KEY', 'd_96MzRb@VyHX3BQTK714MSywxuiTtQ@wi@UzN16n9tmgp6c3_%0UL03/QjSP[D4');
define('AUTH_SALT', 'TC[7lQlwfknYr#-]#~1Ce5Z4KWk&0]2wN4|*hDfWp#Z|7j3*_eqg9uv];~-(0&Z5');
define('SECURE_AUTH_SALT', '3!-:ImB4[5@QnR:_SY2SgN9|p:9v+[8KbM1)[BH4_01[[x06P3Lj_3nX%!xB@&g1');
define('LOGGED_IN_SALT', '&2wA2Q5lpA||b6[3Vf(|V32Q7(3:1J5S89HVX5;3P(5[NeqX_h11I57D(T|8WoM_');
define('NONCE_SALT', '&s:*xcnuTGBD0Vo0lB95G4;(p4%*4[#%m9-s9xO6%b15Cp~Oxw7h41V-8Drh@j83');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'news_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
