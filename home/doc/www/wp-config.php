<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'octo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'octo');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'octo432');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q|`xM-d)lj~o:IjmJF-5%Xorp<LP&<(k<-F<3l-qjZ1bG*o,xPxFXq++~]/k[gTo');
define('SECURE_AUTH_KEY',  't:(:f7/4wdb;l3<izFnJ&@0K,%H>>o%?LH{XK]EYs{TFkT{<b5Nb)w7A?=.9N!C~');
define('LOGGED_IN_KEY',    'Ac<%D{O&JQVYh34~O.+)szyZ @):=Jd ~u3w }(5^_H0A2+&d5>L_iPW#zP|;n_;');
define('NONCE_KEY',        'cL|zbRMje;opd r6P#-=-x^f6]Pj2z,<e1ZDZ(8HBSCPX 3JLJSXPi kT3B|L+kU');
define('AUTH_SALT',        '*;/;7 #ct/f <PicB-{X<)U3,8j;kr2I$Ys!g_SU3>jv])Z&Wq%{<i]-Mce36giY');
define('SECURE_AUTH_SALT', '60qp-Ez0[u1-!r|w!m-><xT3ccx;!T~uRU//3:-V-h1at5)yLB>#LoNfcP+koiNB');
define('LOGGED_IN_SALT',   '_cpp_%edu|+vREHf9F?+VM[6(m>+E8fLr6>&paD+a8f`-ZBuS+wMT7d|o*xhgaVN');
define('NONCE_SALT',       ':Q}7X&ieNVvukPL$>d:)qTFK+e[:C; )0~-dMg&X^A^-+/O]008YUeAAKjzBYJ(T');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');