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
define('DB_NAME', 'zahabulit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#teB=&Q=@[L,+d%YLq(E;e`n>ve,q-q}F53Yg^1 ;`>[i-W*$d~ZkqZveh$fkk[f');
define('SECURE_AUTH_KEY',  ' fHNFx.(h0dG)qWBNl.jt.xF[dJz)6M4Q$<zX]zliP/ByFrNDSE=xxxl_(fBYyBv');
define('LOGGED_IN_KEY',    '|=QV cJF#.YrQ+!nL-^f,~gI7A/ /yzs,%Da+|]Bz=1_!nOr&EV4aP03{|#F2C<;');
define('NONCE_KEY',        '5n#d>:q;W-y.[6yoX_r)0CqV 6$[,=g-u+WDxoMo`d()A4mq_1^LM2w!u74tH5R^');
define('AUTH_SALT',        'O??>I5D2t?OkKJme//1b?Ndm@w2Ul*?Zr?A~]YE,hUOpanYy=<8DsO*^hW]9,4h1');
define('SECURE_AUTH_SALT', 'W-RP5[#V_0n>J^D-z1Xu:|gRFOegIYD{?6-Rbh,|lAVg{PP: 6Pl$jtpa)2CJ;LT');
define('LOGGED_IN_SALT',   'o;&m^TzJ[gCD7lv|cO9?<Gj.p$M9j&^f^tfkvD{r6kf{nvCh5(!E#(UV:}&*&ub5');
define('NONCE_SALT',       '{`IRi{<![p`*:Rurs5yJ>4Iq[5i^?y-3^>g!nG)+E|^^XVKZh3b.n 0#=-5_~%nh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
