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
define( 'DB_NAME', 'vay_von' );

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
define( 'AUTH_KEY',         '+TZdE~+E-SOU!-_;YN *dSNO9)i`^hv=?R&9,}}EIokR~a5?d@mTVI{g(ZdWY|B@' );
define( 'SECURE_AUTH_KEY',  'N<Us5+J{bj-2dV0>wx![(l>p !F}!`;<.U@/.L*,F_;FTOnn.bf2NRo:Xlcbth_)' );
define( 'LOGGED_IN_KEY',    '^i4tld6FRr&oFuV:{Xter|4,aY{7O7E~RV<p^ErW`tECllPY1EcOO[/u??N+pw_|' );
define( 'NONCE_KEY',        '|?{l`kU!{pkr_3T&W`|Re,Pc#,Ogft(BhuZs(>jlslU-R%[wsY]j=c6?1_Ip`2O.' );
define( 'AUTH_SALT',        'QD^4`U%RtYsn-`G_K]BXXTmf6 =DJI:DXV-zaCftZsS?pEQ}XGd=gmB]^;$&phfE' );
define( 'SECURE_AUTH_SALT', 'tO.~SyV!(&tf7{#X9%}Uf>, (kf},-xy)bbqN0N)vFI!~@|DuE$+lB{4grGyBk%J' );
define( 'LOGGED_IN_SALT',   'b?+rC3|gsW.#$4?%!YDx1f78A>VWKu}K.~ae;|]W>9x6V7L]`8gY}b+S<l26dyvY' );
define( 'NONCE_SALT',       'TzPN;T?{w)ssYsw-V5i30NM/ra5MoTiqI~7XnlFBEUSoC|K6`*ALA,I452mcPDf_' );

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
