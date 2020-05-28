<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet4a_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?1l3-<-8d`:hu.f]s>V[]1UY)86dM~tQ>G4R8>*qciGd~T5#[]#>nn3Ja7a5maj$' );
define( 'SECURE_AUTH_KEY',  'nnIyQV2>a.nHXf!EzF?iL^g)*KkU0PqDvOG=)qWQwl*NK!C|81K0MTa?ynehJkfY' );
define( 'LOGGED_IN_KEY',    'v$Z<Z$g~(YGB=)K}o)Ixg ~~,@B.u_ae}$ET(/c2W*aNog5I?|+k.bsL}0`m *D/' );
define( 'NONCE_KEY',        '0:hHOmSg=R0jrvn,!RZSW>*zV9%.035h_AqwSBh=l&H8tb[Jf!c  g+0d;9mkM6G' );
define( 'AUTH_SALT',        'MF#I1/RP(Xv7Uq{_jG,CS`Ya$*]][Y]1#}F{9}A_IgD5&g>KjS(E>t rKh/_@)Zb' );
define( 'SECURE_AUTH_SALT', '4F,sxDiKs2sI?jKYdf*JvbTR3bpdB,#>`Ja4-?*wn^.]vS_{$6y1*Q{/Olvh(*Z_' );
define( 'LOGGED_IN_SALT',   '^M WV|xCkD(:|yW:R+o*1xxoYnE#1x<pX%76wJh8wX9;;$N!gi^UO_Ck=Vo4l]f;' );
define( 'NONCE_SALT',       'fH|e+bz~:E1tI^32oxAIC]AV):aw%ZD[6tiI3.k(yrF6f@oT^r%[cOKbgbeMT`n|' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
