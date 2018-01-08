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
    define('DB_NAME', 'lintfm');

    /** MySQL database username */
    define('DB_USER', 'root');

    /** MySQL database password */
    define('DB_PASSWORD', 'root');

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
    define('AUTH_KEY',         '*Y,/J; u.7N[T|)b`LS|?r@|H-C:;}b}Z<Hw:AB@b,?>&&,0KH*W(}u{X:AMS`?j');
    define('SECURE_AUTH_KEY',  'gc%+KR4Y_P<]ZU^*:g9R>?,gtJnbx04U2HK-MV{y>O;)]4kWk>Z>oe+D*D/]slqX');
    define('LOGGED_IN_KEY',    'sS*Q?+~hAiO51~DB]vD.MXGgT}+i>{==&}{]ItrKp7JSYI7pyP(T v?#WwzeP!xR');
    define('NONCE_KEY',        'J0_r)utOtBwu.-W@#$9afj2|D,NUn]}^*5v.jS(J?V8URP~E`@d6f$xftTETcg^(');
    define('AUTH_SALT',        'e?) ,w.DqZK|Ri_96[AEZ;Y1#j1e!_V;JLySi(o{-;f$@[1;01LwGF2qiX02_r8s');
    define('SECURE_AUTH_SALT', 't~e6 1^9Ljt^Xdd-VC(j0pa+]o*>mUv3eJ9$)F:k^_W<^;TbHE <d]E#SZ2O4czq');
    define('LOGGED_IN_SALT',   'P^>XOL*D6v9*f4hv55NA(v$##9)]d~G~iuoG lN+|2O}{hU#CHHKbBZI|ot)mu#8');
    define('NONCE_SALT',       '%?&MmmD/:%{cae26)d.m:qx?+6E!a<^4BZt#AbJj71-78efYYI,K!}-}{{Jbw|.p');

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
