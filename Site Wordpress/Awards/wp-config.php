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
define('DB_NAME', 'p1216_5');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'p1216_5');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '6xl31ESwq358');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'cl1-sql23.phpnet.org');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2moMCvTh!]-F5Mqqk[?vj+aF@Cpu-D[`hNBZGN^]N&&EhW9D`:W+y*7%MeJg&Yum');
define('SECURE_AUTH_KEY',  'PC^-2@m%@&QT0Fv7QMnC7;^@3;:ybyxG.L&Sv`7t3JdmZePposl7vXU=fuGLZ}eE');
define('LOGGED_IN_KEY',    'G`Y&9kISa(Hl`zP|aE&=@(U!n*0}RP4!*)D)?h9[Wy.Qe`k@,=FQb909sIeC.M%x');
define('NONCE_KEY',        'uhogp:DlEJ?Ms}mk2dOLe0viy{9A%KkBs/AS.jDL85WxioM@?[48Hz7a4`y2`|:[');
define('AUTH_SALT',        'g(^|at`}.{:2!kbJ-`;#qX@E1C/jLab`8lpUWiedmQv1S{GRr8*7%5zF#3uZgTb;');
define('SECURE_AUTH_SALT', '//m3)ScjUKi1[n%T-fjbdbE-TL![aQ4nn4z])NOcrSJ3`PmkbJmm?VHSOlpeqZO;');
define('LOGGED_IN_SALT',   'ndkTzuuh73stqm`,4d):;+nZ!Jlk}CtkxUHa(8:U`|b,S%ycxp]!]M#:7alJ#!QL');
define('NONCE_SALT',       '?i#MTp%RWdc8R*7Vzjmsd,ptF-Cm{@6*si8K0.OvL8tQf(/R#muoKRTW&C:8OBj^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

// if (!session_id()) {
//   session_start();

//   $_SESSION['test'] = 'test';
// }

// Forcer le HTTPS dans l'administration
define('FORCE_SSL_ADMIN', true);