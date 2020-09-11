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
define( 'DB_NAME', 'madeira' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'WPMadeira' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ody2d3sp1OZ0oO5m' );

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
define( 'AUTH_KEY',         'A>,oF!xdydL2vXuuXm`4}N#NJft:;k,r@L-*n Qyd+Rwl1qI(6xNoi%m]?,RQy*&' );
define( 'SECURE_AUTH_KEY',  'enMc0{.f.(kyHcF?@.`1-KLANAcAQq![Ow9%s,~TN_&W:P`D@fbI;okgsh36~{Dx' );
define( 'LOGGED_IN_KEY',    ':NdP+7L@v)#_T?lj&[KJ5`_=,)GSs]G%|B01g@c%+JfkMAoX?6pOH]lJ{qO)PV*x' );
define( 'NONCE_KEY',        'Afu?OuON%NgKW%k,IM(b3)]#H7SLE,iH;pMz6r6aW t%<Md^Jp]6LJUJ)yI*f6=Q' );
define( 'AUTH_SALT',        'dbfi>8*<$QBFNv2:fHpSNeyP5XP.B9Q4P<j7UjG6[7-_C+Au%[a@3;n?j:b)YG.A' );
define( 'SECURE_AUTH_SALT', 'cE4jRhSu6rF?`K!5ORF_$ZvmIi_{J@S&EqL!^-kJd7>6s5Z|^viU|5M,G1EsAam~' );
define( 'LOGGED_IN_SALT',   'g1?Ug,;&Qf>w ,?:TeWHY@}tV.mDN,Oua,p~#P,# 8}@K<xeV-TE|!Z~)QNP1gV$' );
define( 'NONCE_SALT',       ':h(D/w[hL_>ZF7|Xbmn/bs:fqhcMimz2*IWLIwn` JMqsaZy/7ZEdPfu{vm]}g)+' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
