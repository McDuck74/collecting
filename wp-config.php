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
define('DB_NAME', 'meentwijck');

/** MySQL database username */
define('DB_USER', 'meentb_adm');

/** MySQL database password */
define('DB_PASSWORD', 'qFdEgVcQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '#Z:Ws/Eha?3[Xt-cERa9ALU$3c{nOK?<+(o$4oA}MUoUP2<+->;;}U#ravgU=@N#');
define('SECURE_AUTH_KEY',  '_ZDLFsf0UqqY7z><uNI<nJEf+8wV=kHeUI0U(Y=a%c%nNI|QI-${I3+>}q+wLc2q');
define('LOGGED_IN_KEY',    '8UCr;~-|7TEyw$H5RV8Grqg#5}ji@ZxO~-{{vp~`;!O`_Q!.^1j&V|y37M%?vLc>');
define('NONCE_KEY',        'j^K/VK_ $:CUk70nPJ)p#%yBYqjJ20I-|nY-#VNT^R|2~8o,:iZ=i6L$Riqu8077');
define('AUTH_SALT',        '<BB3A[xJR9W-;fx/LyIaY)Q^,$IHOsJc$=$b{Yx@(VVK_)ZvTIJ;e!6{U,v %:I6');
define('SECURE_AUTH_SALT', 'g<~8j&(W}=p[@-?yf[n@p7rr#$}|-C_WF,23R=7#vWsQ)p&/I*.,M4~%>{UO,^.6');
define('LOGGED_IN_SALT',   'zGe9Pd=P@rT@-fb>]}%q=>2[s_fq$,=-v_zX+rm@E]|Mr_@Ou18wn@M}|T!>H:Y>');
define('NONCE_SALT',       '--*)4t<]K.srOEjK2DL;n.h7Hd]>i^ek!0#V5+1Qjdvq3p<mbx~L@-kGKI25{JnK');

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
