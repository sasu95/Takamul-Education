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
define( 'DB_NAME', 'dxambdmy_tkEducationWpDBDec22' );

/** MySQL database username */
define( 'DB_USER', 'dxambdmy_tkEducationWPDBUser1222' );

/** MySQL database password */
define( 'DB_PASSWORD', '6y82.Dby[P^%' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'M}^jP@l6>k!XG]czD_C9)@O.G-cYU|pC?Ks9;O%-7jGtuE.F)[rZ5X/A)(%_n[~|');
define('SECURE_AUTH_KEY',  'Z=+?`6Z?}<N0d`?ZM*gXSl#vo$#7hHJ1mDaxtfq$E=Bz@oPpx~+]K^5bb&H<rmm}');
define('LOGGED_IN_KEY',    '!E^:u,A7^fL]ZJnkG(iqvs>^t5rlxJsiY8aX]~dtD+`RJXx+IJg3nY=Xknv*~*,7');
define('NONCE_KEY',        '{~5fO!)Vl#|!WgQri9wr>hG{i^rCQU,BvG>B65R2NHD-6uD+Hg!:|Pg.j`snUBo0');
define('AUTH_SALT',        'susix*^3PY$J6+:G|N|l`DOQ8XPNxjj9Ehy-;q3L-zlTvEd9ZkD#ejV(56_oyq>*');
define('SECURE_AUTH_SALT', '(*o1RI)Y$7nx)`M2+}(N.(pR7DaS^pX-7=N!R=p-o)wK:V@k#<e/w~Ji4q&XU<5$');
define('LOGGED_IN_SALT',   '5p:SJ@o$>/o[%o5U98zbn$aJzq+[G,fFw(yD> O@r+LKCwJQ8wAjQv;,96zWx%uJ');
define('NONCE_SALT',       '&J~!iP$IpV4?i|OdB1ST6[j>UPYm$D}%]f(Kb&3sXNJ4.{#.B`4{f}*cyi>n=PJ?');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
