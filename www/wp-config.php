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
define('DB_NAME', 'aikido');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'V>0_/e=tf4lbhZ!RrLVTA%a:9TSd4]W6,/5q00|DLbEN?*Uqt9Yz;-ZyAWD>AM;h');
define('SECURE_AUTH_KEY',  ' 1JCaxWEv%kZ6>`g]Y^dIAh<&/:$tW~f>9r&YI`L_(}&}{i9kok:Fh3I@C)@Z~HC');
define('LOGGED_IN_KEY',    '3j%%fX lvq_[T.G68L&sV:=`ONdJN2>- +;L#<FyYFfz|Ki6lu.SoU.FB<x/KgTZ');
define('NONCE_KEY',        'yI,E[9Md>h1m>c2OYh[`2vne%%AK?M)q7Bx8{#942b~EKPqn<DHlguoSM&{B%w<t');
define('AUTH_SALT',        '[,p*a^/T_[/{p:.mDxl]N{Q7-L?]>0n=qZD7j:KglBJyCIIeG@>.;>UhZ)Ow`_5x');
define('SECURE_AUTH_SALT', 'G;`,u^@~/y3B[<yy~:S:,on{_w_a)vnV+8%A64c,eOR/ LHq(AlfyPmB7[rw~,JU');
define('LOGGED_IN_SALT',   'n?91Y|+1];%tJ<G&Qz5-;Z;^tvJ<P&clA~-JK2>%t$F|uSE+h_;9o5|c`.[{54LF');
define('NONCE_SALT',       'hR?JRo1hI~_ze4}}!ijZ:rt7CTJVL%4<qev`dcdv!RF{%upr3R7w+P$!?&_ |heU');

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
