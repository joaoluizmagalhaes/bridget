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
define( 'DB_NAME', 'bridget' );

/** MySQL database username */
define( 'DB_USER', 'bridget' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K9V!nw-y4rZ76U' );

/** MySQL hostname */
define( 'DB_HOST', 'bridget.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',          ']9gF|%Kg]0Yj4xgzHP&z}gvlZ_]2![=K3v6 ?MM#+vM?pCdHZSn]Qq*%%IJ8#F)G' );
define( 'SECURE_AUTH_KEY',   'PrIdn.MsAo*_Og4q2Hlx?lqFxt}D{p0I65 #DmzQqt,O|$`R2&1?F}Ig-LU)HQlw' );
define( 'LOGGED_IN_KEY',     '@YkvRo7VV$(_)@#BW_7D7$^[+#UaxI6zCn?vw!khdTp1[DD>5U?OV{y|}Z/yQCWD' );
define( 'NONCE_KEY',         'sUyTdlP~(:6fnhw>jXkW*ow;xc>{Ra)SX39E3+tdgO44N[%a2dS?WNR9+C@^/O<V' );
define( 'AUTH_SALT',         '2qC! d(kNuiS/^}|3ewF-%F>R`d*LG;GbLdu,<yUx{V68wE&Qi5WlhH7l+$}S &K' );
define( 'SECURE_AUTH_SALT',  ' nlOkf-bXZwQoyGSo6|]}ne3UK4?niDsPNXD4p8)>*G5l.$)F%c=ht]M.oiA3xri' );
define( 'LOGGED_IN_SALT',    'x6oDpI.wk20GiT 2I<WqC6P]D`fTRFZK:uA0W(~~j083!x/wzIf!+Td(Wv]Q-G^Y' );
define( 'NONCE_SALT',        '$z?<asA-/59sSgaJVW|10qni:~|>ibj]3eLkCo@p}jr[xs-(,jnUHS/0!CJVxw&Z' );
define( 'WP_CACHE_KEY_SALT', 'v^pJ3_Gwz$vrYe=<04koc.q#:0|kk#vGI(SriHwmM0MuQu1%2G<`jLqrFSR{*06o' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


define( 'SCRIPT_DEBUG', true );