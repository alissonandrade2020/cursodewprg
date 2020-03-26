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
define( 'DB_NAME', 'cursooficialdewp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost:3307' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '<kf(7Wr*VE/I~92^K7 *NEgP!.y`/:4!%$lB9~_q<S+T6rI* ]quI#Z.([&$V;3g' );
define( 'SECURE_AUTH_KEY',  'rqD @hSd:0{NQIa[,$5j3HFgcAh<bo2o>nQrMs|uaM>;BJx0A|*1!i!}-).[-K{E' );
define( 'LOGGED_IN_KEY',    '(LU-kTC:SaWwLYasY N<.zBCLR;,M6></`E_XXC]8+Z`8{O4#gx*6{<^W`lm^4:R' );
define( 'NONCE_KEY',        '+awOLB&W*cZGvdrZ{GP#iZIwr4GLa47aoRbAattnpH@_,s*)56)tG*050T+k eii' );
define( 'AUTH_SALT',        '2RrYb[,szgmA^9}W7/7jQQ(eMQq.a`0Am-8CAWoa@z+Hx&5?L-evh|.bZJWJLx&%' );
define( 'SECURE_AUTH_SALT', 'S,0SLx(!rbm)lyqSa2~Bjr][VHh5<B2.]PL|hmc{;EeDLZ3N+Wgb5?jr-o}J#-#K' );
define( 'LOGGED_IN_SALT',   '<}eUVta<.|y<0#4j/P[Yg>D5j8HrP#Ts}8{Y:#rx;tL( Gh@w!X^lLM0[kj9MDzm' );
define( 'NONCE_SALT',       '&R.Q[Bqm|5j{|+N+iA7MK7i_*<KPA<#WK$jTFG6!]*bq1FuMZ(0yWyH6TJ,42j`+' );

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
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
