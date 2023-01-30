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
define( 'DB_NAME', 'wp-sorties' );

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
define( 'AUTH_KEY',         'T+uw)oQt Aij/py/ c<|SJg {?u 0bJwP_~|/cS*234hAwry#$$LSvQXz1%C`T!s' );
define( 'SECURE_AUTH_KEY',  'Q)y^V)O%^&|Bf*``9&J|>`;^IkzQ^-!M3^5i.veSCDdtS,SK9|0Bw;77oz2u tmH' );
define( 'LOGGED_IN_KEY',    'wy,Pp+9z)!@XX>sBz-*3$B=`k*Khoqf#H+~{At&yQmv}eB(+h=Z`PDR)*~AvEj#6' );
define( 'NONCE_KEY',        'bJ!Yj^Zk4nShT|=Kd>BQ^^:Q_~JGE2%4;Al1G7UvSM1&DTm@yev<)P%8J>YE.6Q7' );
define( 'AUTH_SALT',        '6)Bv*X*E+b@<v:4_NH_?rr1UElE05PrS:|T29hhM-2XL+ =J}HR.lYc@DHUe7GSP' );
define( 'SECURE_AUTH_SALT', 'j8F#x2-}0G98JDYNy`vn-!XPSQ*Pfg0f/ZZ:?D0bVP<QoZw_xk>7Dm`<es9AG+LQ' );
define( 'LOGGED_IN_SALT',   '(hpUtDH8G1p-.`CBcys@~wv|?LEv,:h+b )9|<R)!o=tef.raR:M,~m3RaX-*-t4' );
define( 'NONCE_SALT',       'K&PK26 j+/tF5iTj(AXx%gGRHOYO#x{:wOB0W?q%A+Uz9fxM(3IO<e+j28?,w?oY' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
