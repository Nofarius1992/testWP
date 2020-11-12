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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'testWP' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'j7Q4aMa~>%II__gQEU}xSg0J C9KG&$l2@?hn^InWLT#JstnGtah@k`l `BQS-ms' );
define( 'SECURE_AUTH_KEY',  '$sy5xqg6;7Ogl%w&VOO$Ub=Ng&yV}{6f&L(sq:?]S=Iol`o-v}DBZ!RE,n7{oQQu' );
define( 'LOGGED_IN_KEY',    'owz.b!4,_z5:*ySN&?D:#gMA3[?Pw;xtUcp)+k|Q2Pr/(;.6:-lJYb3X@Cih-#q&' );
define( 'NONCE_KEY',        'ey6ec`AP%COE+)K_$[p4ozp0/fHB9%yCz{KIuZ]bc?n*`,fHFvKI06L,/WuK5MiV' );
define( 'AUTH_SALT',        'ZEE7To%-`L]Y1WdXg*)AI$P,2|~Rx?z]]9<Dw,N>HeR.;s*OW*o!3% Czb%;9nnh' );
define( 'SECURE_AUTH_SALT', '0PHA: 5I{Zoyx5jXNAcY?uXxq6AUML2gRLwo?twi6bF>I0x9_ pNyhR;0{LlN4q2' );
define( 'LOGGED_IN_SALT',   'QGdK]nq,yY{ya`A`)<F9[ <0{R9Z`12c1l355d|Nj-DW!OCWUj;4YrOQMUNSiRF.' );
define( 'NONCE_SALT',       'a{fb+Rg>d|m]ms6MWy`Mg[cr4B6)#ZN%:6fW^Sd(0[~|T.?^n*~$~%T*8#hkKDs7' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
