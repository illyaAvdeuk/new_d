<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'door2');

/** Имя пользователя MySQL */
define('DB_USER', 'u_door2');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 't0anvbKq');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!9o/2~,A=Svp=f+->HAo=AS#0qPz*!cWeh]z-N1_ufL.*20[d+k7+J^plN sL0$H');
define('SECURE_AUTH_KEY',  'MqL,B>;h&)A?<^Jkt+6GJ.,VFZ-.w%fwTz4KE,+wQfoqb*BsT;J@9n5@6,%11*kC');
define('LOGGED_IN_KEY',    '>nj-~2wn-e;tP(&ZDJZ?YTh9`2=faO(qwQ{,u:mb 0W)G%k%?[8,<u9ptYunU.FS');
define('NONCE_KEY',        '|7td+rLzp-3T;9E`pd6+dXZ?V]CMa6Qd#79|KO#Uev1U!Ru9#Az6VS+|i9Ij!c/<');
define('AUTH_SALT',        'ND47yR+Ch) vxQRn+_)pM@jIE.-H?9,a5w3F%U>B]LFpIr6Eym %Qhf&RAX]1|r@');
define('SECURE_AUTH_SALT', '3nf++D5W?5ZY&bb|{-*h|VMmqA9t8L5jFl3rPRCf(QXge4v8Ker/$/+5%U![l-i[');
define('LOGGED_IN_SALT',   'Oti BY]dzs9TAJ|)dx9!2QPd-o#zv-`gw4p6J*f`p`|bJU/Pr(<5>K`g(S)fd+v{');
define('NONCE_SALT',       'qCdkN8r6AFO^|-&f#v}BMzPV-JVR3|S_s7ngu|*qw,ealGdu>Qem4.vHCqb163-Y');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
