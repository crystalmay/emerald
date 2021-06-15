<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "emerald" );


/** Имя пользователя MySQL */
define( 'DB_USER', "root" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "root" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qO=.aa=DQ@&e^qo?}|LVF4m<nXG2Th_3cTp1FVY&^3`B4N@jqoOn3uz<3)7/RMH5' );

define( 'SECURE_AUTH_KEY',  'XN_JjGXD/W9EX;cNsG/^4CN`Xxs=1ORL9hm5 ?uzFTg(7$~#9<g5L/W[W-4Vmi.*' );

define( 'LOGGED_IN_KEY',    'Vg/=(I9KI2!3<+es.qxOR`6=90VsH9V}<XO2 Go[.=yeaH4q_ ff4A@ZvLHijv0.' );

define( 'NONCE_KEY',        'ZmFB;fJfoi]zdxKZrnJ+-17Gnl_`lrb3Me<~cgS}Jo$,-}RibA|*3<UsNP|TY4:w' );

define( 'AUTH_SALT',        'f(,BvF5eqI6)R@~pp,(hmAczAl`oP5`uS.zSv+<{vannJ`I?wV|TVL{o|C;dO2!u' );

define( 'SECURE_AUTH_SALT', '(%Xa4flh$x&)syhJ,@XY/d-PTl~OB@G YW12m!Q578. ?d<Sb[20%F2SS6nLi~_&' );

define( 'LOGGED_IN_SALT',   'D=s(B7tWA;36WdWD:/4Drh>W6CQG<gb)tpa$lck@GZS&d61Di#]<jr|i7W,.jq[(' );

define( 'NONCE_SALT',       '#`^?bD=[zV;bfKW}ls$]mq[`,1`*z&|Y)=?+aVM>PRrjEM.j13-7o]U#K60 N}p+' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
