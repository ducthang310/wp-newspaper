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
define( 'DB_NAME', 'fastee_cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Fke~w[@,Fj*u.0R<?A>*Zc_-]0bJ~Ka^^ fYC{XHOZiE,=WmIg|vbzv=0Y?|T:k.' );
define( 'SECURE_AUTH_KEY',  '>$`04BE8RqQ?wyTc3+Wnc<Yu/L|mYh,Kh2;js%h:@_y36?b~9LV0hcPNh8(=oo&m' );
define( 'LOGGED_IN_KEY',    'ul<([#)Xh5|o#)ZcY@P#rU?L*6u},)>YvSUYX]U_[.FTy4rh_yE,O;w37eI%L=y/' );
define( 'NONCE_KEY',        'b7+`6C(SEPH^@s#z-j^]RWJX4R8AqLhp&2Ft]cdKQ~H?,l~Z5sQ3U?|dd#|8]=>}' );
define( 'AUTH_SALT',        '%J+KBhUgkaxA|QBLLsObqNh5_^sWLHu.kgF8C5S/uUD8A)~`q]D29jHU*.#VA=<9' );
define( 'SECURE_AUTH_SALT', 'q,LHtBWK@BX-1`Y/#[{3U]xB7HKUt,b317}jV2K>zK7PivUY$)m=/GX~p5h4|Wr3' );
define( 'LOGGED_IN_SALT',   'nTr=-@-YT<SiiKpr9?W+2!aT2;]&Rg8OkbF[8c9~Mm;J8bQdG*a$5yA{TK9}P:;W' );
define( 'NONCE_SALT',       '9+TJaiexm~UN{m<1qw4W>MIvLn7x*,ArYoLKtAKEt&Torn5vty@r-0u8/MF*:5g3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cfc_';

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
