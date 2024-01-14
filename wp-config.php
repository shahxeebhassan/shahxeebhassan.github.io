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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'ZNV+Xz[<et~=*~X)`)Ju>ga9qp;+X~R(h@k47bwI+1XZ<!OEgChc2Yu2;]!a|bpn' );
define( 'SECURE_AUTH_KEY',  'Hjwc=U{ >>?S($34-;7D@}2KdUh,<sUy3;9L;V`UKsSV~!bt^lYev2YD*w$AbFSM' );
define( 'LOGGED_IN_KEY',    'N^_#dN:|t|kmVOLhu&UzmaDnl 1HO}h{<iCt{Swyhbs+bmO:]wMp4L+ 2ttdX*G_' );
define( 'NONCE_KEY',        ')Zt1|{0c[#x/BsRbCkIjceVr=Ajm_X[*W`xdE<ZhxEDr.4~kEl{M-O7=+YtgW}UV' );
define( 'AUTH_SALT',        '>1`_Zz(VvtlBC1KP%}wb|uA/07LdDpu(o!NCjBQ;*{o%9W1a@Hb!UGd+<ZxzKO@o' );
define( 'SECURE_AUTH_SALT', 'z/f2c<0)3[Ek@DBy*0%OQuu4qcYsnrg_}F)`(SJT]J#[eQ<(/M+HOOd6e%Xc_7=N' );
define( 'LOGGED_IN_SALT',   'QS1Ha=[K+_9x{jG3R}/HS9xK}_#LM;Tobg>++w.H=9mDqW?MCu&*fLP8QA`WC.eb' );
define( 'NONCE_SALT',       '$2(vP|V~Ya)2ZJ:?[A`4%GW|_11K-|,p.+i_taui{;X>9t<#(jw#Y<:L i.d:,7x' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
