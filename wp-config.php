<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'lebonchoix' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[Z.~!:4F[~GJBR9UZe6XaZB)~@Edt@wU%H3.T%wa* =YJWl6N!X3D}?TppCORPB=' );
define( 'SECURE_AUTH_KEY',  '6]q~LbvN:`d]<v/lsyDyO1y+Wu9NhMa)yxb-Ckm(61sNd22kK-<5yt:=a]V#{.oR' );
define( 'LOGGED_IN_KEY',    'KYm*afzWAS%91JpffL0@8Nb6_{=&dx(@AEd<b-i&%Pvll[o_*@|FDoDoC^zh@PRO' );
define( 'NONCE_KEY',        '.EV[</[!o^?0;G:3R=&yH@iE=,{Hd%hJt=y%h(G[8arWj!qdnlH;jz^z|*PY}S4q' );
define( 'AUTH_SALT',        '~8#JT:Q$AW0byk|O>Q_oovpG@)Mk|Rc]Fd|smm8Hh]JVJ+NI6XJ|j>)$M31Pin[i' );
define( 'SECURE_AUTH_SALT', 'oo2-R}EGP@yE!-f1)iy,x ~&zP^BUhv~035?&b@w$I1jFol?W ,{+4rDsPzyb>Sp' );
define( 'LOGGED_IN_SALT',   '{ar+b0`>qKGy!tUWpWFqx|B30S.c<GhIQ2C+W=T[YhJU{4zM.!!L9QO:>ziUG/pm' );
define( 'NONCE_SALT',       'EjYME(q3Z2JAsM/$DxxA>qO.4FGa,SAE7V1QS$|{R@.SuE2^+eA]=ahS:&yfZxgf' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
