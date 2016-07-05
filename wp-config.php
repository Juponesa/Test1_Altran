<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'heroku_b7a5be1da9f1c56');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'bf5c3a4f63b22f');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '8c19139b');

/** nome do host do MySQL */
define('DB_HOST', 'us-cdbr-iron-east-04.cleardb.net');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qjQbTb?vKG[(MvT2*BB!ISH7X91F>}d6+oqjz)U<C4Uwg|xDCI^%40Gifb.TD6T{');
define('SECURE_AUTH_KEY',  'Egtua^tngTh0UQz%9K2$L;rBr8jk&D$Xojs30By}#&*.5Q~JU><.`;H_TYzy>tOs');
define('LOGGED_IN_KEY',    'cB)d^5~?](nkXo!i~7?-O*6Ve^uZsI9<^LT#[gn7X+j*9Ys^}FPA;X@k8S;VQBmv');
define('NONCE_KEY',        'jdxXho^gh!/WSb|#MdBifZU,ZKWNw*.9+}83^wPwN.G)d#h1yu+/!d:g51P&$xV4');
define('AUTH_SALT',        '@tKfR2;V@la^6G*EgeMywakGWu5p;VyWxYB6tCCq5Zm?>}Ie(3Rf,5tCjYExf r-');
define('SECURE_AUTH_SALT', 'o;)+[!iiT)jsU+F>Mr%-K=;iX(r $6>:K3t9$Rs97u#lN(LlAO$y:s1#L@5dJv6e');
define('LOGGED_IN_SALT',   'M!N&16l![x|d<n?wMJ!&%:7Q0bD(n{VO [Q?Y1vcYys^di(CTu/gjj2NB[iq=,E5');
define('NONCE_SALT',       'GwWprdp4,izeig06:7gvbWuOTY~Bo$OMr|PyL9M4G*HfgW*.Ax7mAYBCnJ{=Bgrv');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
