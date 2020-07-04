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
define( 'DB_NAME', 'casa-mica' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'F-H.`y7 =ZDR~]Y+t:*cn_ssN$H|)?b8l= NgY&UGQ<R&89_#;G)a:/SiNwUdRO*');
define('SECURE_AUTH_KEY',  '2[-JZ+!v=9CS/e$?&OzzOAG>xrGQVj 2)]v%_34f{pTtdtSLvi.)}+6xHOLhlQ+r');
define('LOGGED_IN_KEY',    'I=fNZ~,>JR8[PXK]+=c,12(W_?5q-9<F:-`aGB8dSQI)- 8-YviM_3f.Y-`I<=_W');
define('NONCE_KEY',        'R+g|_eRy*QU`|x>u}6%HUs8=m++`:lIg@ C+y9gh}=.GM;P3B/l`S!v-PX22d+U.');
define('AUTH_SALT',        'Jly>rcCa0 }T3dx-e ]|-CBT-<M@lz3[QeEs--g$y=?nGV|v{8_+.^T!-BljZtzh');
define('SECURE_AUTH_SALT', '=,^gR(<t-f>2G>)`:]yrZ`zt&0oKCb<NA|%|*cy<v:6xMaT+K0Dq-E}Hi}.S3=_6');
define('LOGGED_IN_SALT',   'P%a2k+s~j(vYQ@|37i>VS&/6I103!G0xBE#swrqG@609-<:o$ y5O*:9KB>,5tjr');
define('NONCE_SALT',       'P78`J.-|w5R1L>#0S/:[SZV6)E!]eIMq&s3um$/we-qBp#+2ONl=Y-LVW8vE3@p)');

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
