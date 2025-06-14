<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'u718393549_F5aBi' );

/** MySQL database username */
define( 'DB_USER', 'u718393549_nAthg' );

/** MySQL database password */
define( 'DB_PASSWORD', 'spTW4ztFPU' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '@<#}wk&?X?MR?4u)Z@,`HeBZ/11g[i+d$/[X{by6KR|H p~(N{C3=QP~[DNcik&4' );
define( 'SECURE_AUTH_KEY',   'B2f[^AI4F6#HT+ zf1[wLi)<A)bZH7]!E5sqtt*HrfE+_dY3#sl!=[tfB,-`rw5_' );
define( 'LOGGED_IN_KEY',     'R0v!:K[70s#t{6+mRW? Mj=`8DfQ#Pj6wl0;L+>d:2]a#:KC6BMs;CCy<=*& E3H' );
define( 'NONCE_KEY',         'JiA? eW@1S(O*N[e&{!Y0Gw|!kfGdTCw.RZa]pb[C|NC n,+Y8x]t&)TECAYChpc' );
define( 'AUTH_SALT',         'g*7IEk7[cMY(vH0(AGQycJpP_u,8Hh1g2o_12XTbpyyG0NA3KGy`{k,aG?(cE-1[' );
define( 'SECURE_AUTH_SALT',  ')BxF_8e%-g[v/]Fz=VtYvq1]XN`zBVhwPBoq(F5lt9!6{Js:ztu`WDyo-3`]PN22' );
define( 'LOGGED_IN_SALT',    '>?F 62aIw_.?<h8aVyDH)_]@>uvt$iA*@knDbG;}UFX5a^)XJ>CA.<U{eb<.U&y(' );
define( 'NONCE_SALT',        '}bMPWpTk@ZIC~m7nBh.38PDV3J XS=GdOZJ mGBkSZyU!#=zil@K3iGQ7D`oveGO' );
define( 'WP_CACHE_KEY_SALT', 'W:vDK$ )`ejkwi+J8qM!1ebx/P5Yq)EaJxB,oQIhn9H]%-}h!Iv*)Zh=:NFC(oW0' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
