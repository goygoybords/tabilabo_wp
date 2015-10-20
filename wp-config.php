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
define('DB_NAME', 'tabilabo_wp');

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
define('AUTH_KEY',         '{ q2AuzEo:+bz2-=bm,8l<C7sc~,*g-gooxO@%TYFcc <HkJ)b` [ -+ZS!|i#H%');
define('SECURE_AUTH_KEY',  'nXhD8k`>q@wtxE(YVR3VSPmnuqhstF-pJR&2`%yT%VV-.+++H54%U=$B8N%[2z;C');
define('LOGGED_IN_KEY',    'Ar)1E.s c#-Z.GQd_cIQ8_At3Pi?Jh?p[Bwr367R*/iTqLe>[dK~vw.mG.E/l5K[');
define('NONCE_KEY',        'sfAEwP jd1}Ls3|GQN[8WwHlfn[[PgD+(va Nny<.{jXztl!CJ,1}DL;+#J&@L3n');
define('AUTH_SALT',        '(DmzqPSkfhG8W|1-HHS4-Ci&`R[.k$8H=X/B>?Ve7RvqBT^hX9T PI:dUN_n&Y~(');
define('SECURE_AUTH_SALT', '(x*t!qJ$5lntJyaB45?0EAI=/Wv`?Vbl58!Dj.o{gjs:8EA`w610g1q*{PZWSJY|');
define('LOGGED_IN_SALT',   'UH6u6d8G1v>P(8$;dm/lBr0~`ob6P`N h64hTa9g@nX;-`>I{*r;Sob#lD.$aw(6');
define('NONCE_SALT',       'O8iq}N<uxOtz/Fg7Cb(6?q?mZU=YH#d1Mu>8:23jb</ppgd!TNP-NxduKE%SZ&r>');

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
