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
define( 'DB_NAME', 'appservice-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(YE~=jg,IY{09YC|zw`PTNyc;(Sb $?$j-JR/+>AmjCbKpiP=RNY|{]apLuzGH;(' );
define( 'SECURE_AUTH_KEY',  '.6mG56(-Mkxi1X,y(GCo?c4RFV kmCU4jvz(#*>DNAR=$FAmnNfEo<#8j1v]rWY7' );
define( 'LOGGED_IN_KEY',    'r^q]KtQ2lhFM=jI l}:+Hi[^ap]cD&`R~5CCt8W?}Y::dBM;5 bOdI@,27xM!` c' );
define( 'NONCE_KEY',        '2A>w<%D=-3fO[b&IGkNe1zee}iJmX:_oZp1?ev?meK%eEU:[JCC3_ySc8Cgs5yIZ' );
define( 'AUTH_SALT',        '+)},=:#G}!pQx$(Hl`@7Rz<KtTxdL;@l8Ddqr,R6p>V`{zr;k8h#5$%&2AhecB>~' );
define( 'SECURE_AUTH_SALT', 'AGAUr>*z&|tD#^>+eSaF}~<pG:vniB)tUFK(zKl%~$@^Sn:*O4^KX@d3unESQ{@S' );
define( 'LOGGED_IN_SALT',   '$-ar]}rf9F!WAhf6y2q<5Zl?qR8azhxEOD8f ^I.pf]^NfHi}0<uPUpcVf?9:ywr' );
define( 'NONCE_SALT',       '3V:-*?HjH{OP(K! v[3<@z[Js:@*f.<O@IY4~vYBQkpF?Z1ou#pSHV<hpPwWDKH,' );

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
