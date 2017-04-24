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
define('DB_NAME', 'coca');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Ban_seign-rw,20');

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
define('AUTH_KEY',         'ntn8f.9$uG5UM||&QXuvj(@tj0jRk{m*/-rYh5Q ETkOd:z2e*H*geI=0cQ?s?3 ');
define('SECURE_AUTH_KEY',  'B)Lp3OUu<v;oDsH[V6]h$7|EaygDii/13mY[Lr>kn,8W|6$,F_Gyg$?3)?d}x.N-');
define('LOGGED_IN_KEY',    '3l]a~#y5=cOB4`B9q3UQb/.$W^?fD$ Q}8bD).0;e?)tP;_Fx[ Px>WT6nI- .PU');
define('NONCE_KEY',        'o#4N_.U^;yDN%BS=le]YyEjv#Zk.aQa]_1uLUxV#~-hZj{h7J^q-60Z%eArQhj{n');
define('AUTH_SALT',        'CY}7?`!;FZGD^gDxcbaq:D6 Pr1K6i#fYwh7Gm|`1B{h+<{k/N(x%N|EI491B$qF');
define('SECURE_AUTH_SALT', ',4:F+HE%Kr{DuYH^ %j5,`J=x#m+tw%[Li;a.ge!oYO Z K@b6?U9TRq>G0ez>#{');
define('LOGGED_IN_SALT',   '*+<CJe.<iG*[nv.OXp{Y/8|16Ag5wI^Jh2F]h=Z7%Q}k1,+6r60cu#AOcK[BOVB1');
define('NONCE_SALT',       'GO@#e|i<3l @1;kd}E6@D4fDrSIsO>iu2QaByg%@(DM<Bp2al07;kTNvT?W<T?p7');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
