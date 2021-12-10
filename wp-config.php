<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'policelo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '||,|2#9ei+Fz6lDF@4A;lO Zcd$EI*nu-BpP{>;4ahw}0;g!)W+%@fO4zcCK-fM(');
define('SECURE_AUTH_KEY',  'U2Y-*7QY91;A>aM!q[+3h%%7XY:7kSd+b2lM5S]x)yVh6?.L/h8&yW#kFZ!`CbHz');
define('LOGGED_IN_KEY',    ';>Fb7lp+mKN}P,0ua1L:y:f]`mX;P(h:Z:}}V{h5C]PN9{Bl=,LTVp^G1phCS9GQ');
define('NONCE_KEY',        '+)m<+@%e( Xnt#@dxVKxwN{=WpkQp14<+X+t|.276-pgv/4!:uSYm4I5j7%3><u$');
define('AUTH_SALT',        'JGEj9dB-jcRF)P02c9laKvPh>xtY5g<^i|e@PT*&6D2X*7Y+;m+mD8:2Mz-[jx5k');
define('SECURE_AUTH_SALT', 'Dw_@bv2{_tHA8gegp<ZzY26H4Gs,ORfiwJX2QIjRhmN`rs#03>a*<0*-gy6>`%~W');
define('LOGGED_IN_SALT',   '7*2lsE5yGZ;I3-=)e@+,prpl)PGOszh{E/]L-npByEWPf<<R[{$8UW>z_1/pG]e*');
define('NONCE_SALT',       'a]Dt)G.I2+2VA:<(nx_e`ip uap+h,y{9DnI788.?I4WxsokH.uu|mrT6!-R[P_~');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', true);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

/** Configuracao para ngrok */
define( 'WP_SITEURL', 'https://44ae1838.ngrok.io' );
define( 'WP_HOME', 'https://44ae1838.ngrok.io' );
