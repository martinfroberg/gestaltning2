<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'fridhemsnews');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8mb4');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^zM9iJ,Aguu@TNNVpafxv s9qp:Q 5LTQjg<{64GYa htH%6i*W#86[Nl=WJ.%r2');
define('SECURE_AUTH_KEY',  'W,mG8XVH]X~Ir>2Fa,;U7}d)RQhjWs/dGQ&7Snt|b**mg%up!sRMWb|SA(7!-~Sx');
define('LOGGED_IN_KEY',    'o05]lTr|1h`7X;W0c-$C$)vB_6RFJBQy*tb0.ss;s=OQH!ZleE[IF#cHLHvrQrsk');
define('NONCE_KEY',        'N+EFpU0E(8pKW!_N0g=|0$!PzTN|lrY>:U#YN%W}6)NcUp8L[0O1]`{^j!_2/{qF');
define('AUTH_SALT',        '{2D^XgY#73V/^/~p}%z`>pTiH6qGb^0Sxnj_2{cdQJA?:`>Y;{%@?1j=<BTd%k1Q');
define('SECURE_AUTH_SALT', '&{3%[~HCO:])G<$Ix^QpEcR1_Fexk*|AuTFScwenOCP/U_skpF,WOAYPF2?,Z GX');
define('LOGGED_IN_SALT',   '].fiU7]uN@+Tu-Vt4;sBXL0h?OCT0)8Q%jg1yWO,h%1WCEm?hk7wB/S% 3W?3-g2');
define('NONCE_SALT',       'fa0mIFAs`,8gO_j^fV,`G2]NUJ<opDu3V!omuDc*6=.OuIY,k!Czo6iZtw[Y|y3I');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');