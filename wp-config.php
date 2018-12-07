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
define('DB_NAME', 'ead-vg');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?A8nPrmq0Sq8pHRUv|@|NV&wIO3_:Ps)y*Febm]r.cKOr18SH83}_>|>K_D G>ey');
define('SECURE_AUTH_KEY',  'U`0xFpF`SVTZ>|6x{f>sU?Dl:>nMe_={H{Gsp].TEfyDzH-dIc2J_?},emEd K*s');
define('LOGGED_IN_KEY',    ':q1=kv:Mz*&QLCzA[|z{*=vrxA]NKAP`#F5gjRLWV]r=O_$7%+x>HKX{Nx/C_+MO');
define('NONCE_KEY',        'N^GhY*Va<Rw|rl&#GK`L0H<=s}dNf6r.w!h;:8Zi?Ove]?=hH(y)<!B(~GZnPsSF');
define('AUTH_SALT',        '}h1TM})|in(bViB:PN}ssQ.pp3b$rs0%yU5?;{C@dA)`L^V$7OSZwWvkZK@M<:6h');
define('SECURE_AUTH_SALT', 'f{1/DfR),?|#=Ksmb1<oz$q`@*^IQFrp.v4DLM%lg.`A$6d2Ph;*nX)*/k);d)Z@');
define('LOGGED_IN_SALT',   't)RBIhHio%a-I6mdAR~MPW`v>hX)-0`&$qf WEBv!5g>=uFu(mj2;mjW:Hq+8v{M');
define('NONCE_SALT',       '}p~K9#uXWeL9)FM8w.S=-VY41YF.vb=sr}|_{{=;}X0U]tLxcd3B(L7&k.j``|(B');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'eadwp_';

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
