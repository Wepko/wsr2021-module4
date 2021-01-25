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
define( 'DB_NAME', 'module4' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_^tKXtjSxZ=bYjW,p]ir;RbV7wA2o_1}`1{WgzKNVQ=0l6amq` -Z+IMqp 5S9HA' );
define( 'SECURE_AUTH_KEY',  'DcWmk.#U}Z=MT0OQa)XGnM-VvJB}NGv!e:9E]uDS3<)XoxFU+EY-G@8e>!,ss8Oq' );
define( 'LOGGED_IN_KEY',    '[Tie*)*;0F6Xf5_Ls`2z/.# $wZ&+1hkb;!kL8/*/lf^a+-8X}bM{1>d.ru;L_Tt' );
define( 'NONCE_KEY',        ']]Y3CZ+`V47&bJ_~U~Q6G$/h%~DFPp@zVze+.[_@Bv?cy2C(B &rp>a[CUnFC@VX' );
define( 'AUTH_SALT',        'YKI)Y!y0oP;gn}g`a,!P%k:];9#wvtfHozC`gf&$A~t^~LTJi7TJ[bbYlQLf08Nl' );
define( 'SECURE_AUTH_SALT', 'vS)o&M%1+^]HebM,G;Y+x[K[ELcQ1n-{~p .2yhS5{L(b7(jco,JJz0SbneO;ap8' );
define( 'LOGGED_IN_SALT',   '-uzg$&Nqc{~|r%twH/$0mZGuP{p9AmBxD#qgN=TKSym}lQ3{DEHh3#Q}Q^Z:*le!' );
define( 'NONCE_SALT',       'a!*~cz~]VBvFz)~oYQ*hv0p_6dBf&7*i,}WfGU<S__qj^kW2IX?5Wuv%kx.PI_#k' );

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
