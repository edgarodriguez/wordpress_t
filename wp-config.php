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
define( 'DB_NAME', 'wordpress_t' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         ' 9t-#6_AZL~D.gT9_x6]IRp!EZlD/a2U[LP}o!o7wt5Jh=H-@dQklF^MmY;jtMDV' );
define( 'SECURE_AUTH_KEY',  'Ub5}6#_ze?{S{S3^)r[_RL#1Pb.?>$Zz`o+)L]!ji]`_PzEuqYzBzwqS(nzu5TbZ' );
define( 'LOGGED_IN_KEY',    'govvn&>De4,|#BW/k8:+^nBZWU1zcAvs2I^nbDdZVIK&ifJCo|tE_m$/VNND&jH}' );
define( 'NONCE_KEY',        'hwt%XF,5*mvkY=^Ukr%KVIIx,zO_SRO>p%yw*/o?:)==Z&QcKM`zQ[?% )-]OGrJ' );
define( 'AUTH_SALT',        'IFozo_4A.i*$`sKvgh(Adp]#&dMX9MTBdLnG6F&Oo EdYgT ._RhRaye*$fTHsZ?' );
define( 'SECURE_AUTH_SALT', 'WBfm$~-H0UrlA^Q$5<H[G^$,HsA0ii8fDxe*HCB%T*i~<ea=yBOwfx %QuSSkKc7' );
define( 'LOGGED_IN_SALT',   'VbHdOl-u`(gN0#eL,wp3vR&;8p=Z~R+6tgt}!FLy3ca%R_r)a30*q~^Ol]ATr-[%' );
define( 'NONCE_SALT',       '-uvoCI6Uir3tRLz+|p*I_Qkn3ZA.vl!)2;!@R<Yf5%dKH]89C3gR&~R/5F1)QR^F' );

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
