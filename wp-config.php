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
define('DB_NAME', 'wp_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'wONriHYW00DUWD5k');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '4E([1<7dI&b-GK}ys)~:I(ev;I70S(_qFVOsODu3-m,?*[T;G?>pw|U9r):r|+ y');
define('SECURE_AUTH_KEY',  'eNYA_Dea@H|EY9EH;o`j{W2!H9)vut?@>Lzd8bgIu#He%T~elu5tH/]7+IUCRlDZ');
define('LOGGED_IN_KEY',    'K4W9+of)CFW24[BKGU#22>uaoq=yM@~EPFf>pcGlui3eg{h3Cj58PHA6Fd-^V>J^');
define('NONCE_KEY',        '_E_rWv&d7g_>tQ;C7r,qn#:poC0pRyN(d`YX2>+&Z9$~aA%p*%iM#[6RP;^Mpq=I');
define('AUTH_SALT',        '3HWAOp,72q178hhw4X %H8$gA2;4Hc#EBQ`R}XC,l?DnN<e&5lg1)UqA051T06c[');
define('SECURE_AUTH_SALT', 'ZR]pcu|%;RQeS-jW:v,P7Rb6|>VEz!?7JmCjBtB^vfNLC4v-2=(w?y:`|@j;oh{d');
define('LOGGED_IN_SALT',   'PuZfZL]yeWcR.@KRvH>+bL6X?$zpiF(~F$,(Exf|$y2xnCqgb#l_,op!+!oZGK@-');
define('NONCE_SALT',       '_.G)[z*.C/xN/7q!=EyiKK7I8p+=eu`+}5|FyJsaV$7*4N1>oDX8AHa}8Ikq&_s9');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_db';

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
