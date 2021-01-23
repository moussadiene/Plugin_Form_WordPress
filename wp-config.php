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
define( 'DB_NAME', 'plugin_form_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'djine' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'mosila21' );

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
define( 'AUTH_KEY',         '&Rw!lAjB+42]rBxwZp>rcFHfeD}QB0X60ikB0NtgbpGa[,=H,n?~@Le*F?ZeW2~s' );
define( 'SECURE_AUTH_KEY',  '+MC~K<^aM-0Nap4.ST`UDnf=>4i4Raq$RM8qw=bh!EQZ&QSA3c]11apurB^uvnEG' );
define( 'LOGGED_IN_KEY',    'eRDGnidxc*CHOf]:q4qhjN;oml2n4rs2*-&*wFNJ~>#|+P}`0+=*Oj4E#Likc0|P' );
define( 'NONCE_KEY',        '<Ludd7pH#t&vRNMD!OGNB&]{CJx@N~z5$iefJLKR#5o0jinQC`B*pG2R4mpdQ/xi' );
define( 'AUTH_SALT',        '*4watn.wj_q}!yJXDReejv@3@[9g.*&90lukV$RL~E,o^ZJ@3e3m2^YEt1LBEh5!' );
define( 'SECURE_AUTH_SALT', 'PYQ/%YAs;<ud{;o5y^u+,fu%~NjSVQP_8e=iSI!4M.83LNrNo/Ew|Wq( wc,_ukq' );
define( 'LOGGED_IN_SALT',   'IFG|8zC~WFfN!t0Z)j-^ [[NFGh{M)gR!jsyk;H*UnE[j-F ze:pmTLyAd{&C{np' );
define( 'NONCE_SALT',       '!?q_Z[g&B!]h.?n& }{j4Ne1SKbJidI|8MBKO4Y8lc(91A#C+G$e//XltL}5xzk!' );
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
