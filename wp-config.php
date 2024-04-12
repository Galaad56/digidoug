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
define( 'DB_NAME', 'digidoug' );

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
define( 'AUTH_KEY',         '/,:EwFQ:=/cBXvU5256Jl{g,W|r3}}+=s(t|vK]*kW>EN);Wq*lFt2d$wAZ4q^i?' );
define( 'SECURE_AUTH_KEY',  '@Frh/Td2{poZU9sFu]i9t`uPH4HfR0j;}Ko-/_%zCu<1%A]0AAqQI%5$d1lu<Q~5' );
define( 'LOGGED_IN_KEY',    '%+q=A^QBV:IeEXsk5pzNIn~O$n2I~4{[bnO(8Y,e?91a%?+?&{{M_{Q26Pe*~*#.' );
define( 'NONCE_KEY',        'XjQ@7vM<{q*Pq!(lXd$N9B)H?qrG)kuP<UiMUw}I>gN)bwfNkWS,n/FknbM!+@vX' );
define( 'AUTH_SALT',        'rkcxjwCYu>r*x0zQ.[{ N*y^jGa,Yg!Qw5U)$`ufKs>-S,b<joT=n(m<{`QNL0AU' );
define( 'SECURE_AUTH_SALT', 'kx1X@$,;a$A>.~`yTlCQB7!7t^9s9J>pI3~DtY$i#}Q(U.KF#HV#RLsr%F/,#:ul' );
define( 'LOGGED_IN_SALT',   'WGa)drJW@;4?1WJEJBl91rT7UV^#F(A;snDEeg{t#PbeTh5`]/H9,xlDNLU4eel(' );
define( 'NONCE_SALT',       'Z^I~8Bz~xw+=CT3x:2d%<#-p5pP@H?_7p$e}34%&%A~18R?JzSlL6e5_Rntg:fGb' );
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
