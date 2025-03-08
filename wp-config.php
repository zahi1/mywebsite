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
define( 'DB_NAME', 'zahielhelou' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );


/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Xlp3>4|COE=.;c,rxuILyDrae<D3:M#cE59Y:+g>aF$EO(^JN0*o8J4ta<=4nBO8' );
define( 'SECURE_AUTH_KEY',  '@l`WM(P#n@|;3.d#uX1hCrXYa;18g(x&8aRoCPHl0q&dP)EhrEB-jB-xfz~s_7-D' );
define( 'LOGGED_IN_KEY',    '$Arn8b2$k]/$nA~RiJ>;Q[C `HRHQ+mS+2*W`^MzXt1]1/QVX04*D|uNiM2`]`5u' );
define( 'NONCE_KEY',        'poQMrC0}&%%M[&&fHb1+xhHIRdn]4$VyQ:ks8*!2&F(VoRG%8kwqdQ(`eeUT.fG6' );
define( 'AUTH_SALT',        '8~&#b;S+K8?B#7lzsacDZ3O_*MW}:^7M/!UOFh%(oDwKlLy~gt^^{f~AUuA$mB8*' );
define( 'SECURE_AUTH_SALT', '!ofxstL;+u4H9a-XIg^8h<!HKq3!tnx,nn;nHj>8lg<[m:c!ui@CrT}p;2<eFq6{' );
define( 'LOGGED_IN_SALT',   '(;I EMa+o3xFPglFEx+6E5Cs.|KSa;)$#A1Y0dA/?hfm:mEL(x54iaQn ^VP&q5/' );
define( 'NONCE_SALT',       'vF>^32 2Z.X4Jei~NO5oMisCjTT`OQdm5:usf=1LSTN3AIm58Gy&S%c;eA(PE1< ' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
