<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'meirluxury' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iA$aY@F&<0J62LBt)NKv$P?$3OZ$v_qttf*c5#1*8Bm^1#aWBuaOtPd:Xfgn(PI0' );
define( 'SECURE_AUTH_KEY',  '`c3=[g3Z[gbe/E{j^XPf7(Bw?E%g~VMO,cYcB1{mB[e-PzCDlr*Q{ilEQWe8a*QT' );
define( 'LOGGED_IN_KEY',    'C2}*4:zNo*ZkD9]5n6Ao4^~-eT`O$z$U7:#RfWQnt:!8%rR?A4C#vcps*QA_n5mg' );
define( 'NONCE_KEY',        'I{ye/Re0G8w&;_M<t9>bY4LM6[3Oy1&Q{/nHHBM6)^jj,pE<C#)x8/@oi1{V7#K~' );
define( 'AUTH_SALT',        'WLb)!Ts1Th@V/U_[#?xj496-t*7rjZ@x2%^S<-z@Y{P>6%^2nwr5o%jreK6!b3| ' );
define( 'SECURE_AUTH_SALT', '<o2ANm>A;W8RuC&zudz6461Ya/ MNoS:;ER2&&A0$=Q0~8[I}P5H]Qha4^L>cJ+]' );
define( 'LOGGED_IN_SALT',   '0$%nvfP1e|p)p35{1gBp<AGjJ!^}w7,SkvbX-6798qdFPso!UM5k5Dx2;iX/n8_X' );
define( 'NONCE_SALT',       '+PDNSX|ve^I;j$(Y(3q`?%q$:O>beP}rpuk0D,>t;Z}qdVPj#[g=a>H@#TP1m-1~' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
