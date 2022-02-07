<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']*CCP61e)TNTO,~im /jx*Ef6,:N.p_6kgmRKs)-PDCHLuRt^Ks^U$wbda!$dR48' );
define( 'SECURE_AUTH_KEY',  'Xi.%0~3Tv-|fq!q_iHZpj4F0>!+SNCH&fGG<:oPIh)So>Q6,/%#SAik)er3_@;rt' );
define( 'LOGGED_IN_KEY',    '08I6){-AJP7yjo$0BSM>Nucw>Wm#jc-nx_{_!s!M}P09WESDv,f;Rtf!t}gUa]FT' );
define( 'NONCE_KEY',        ')[B~X6V<Wg@IZgZ=Pp[I^R;N}6.~Uyh+p%Rl2Us`Nk8HJu(v*{odL6stkvyn9PB,' );
define( 'AUTH_SALT',        'G(h%Agi?5Vq5|}IQ~8GEb?,w#&M?u +8K1?O}U><A]#KEZ~85SB9R}o@S+5E#^2K' );
define( 'SECURE_AUTH_SALT', 'p%/.La9;ss|P>6[:/i}a,`ef#>yMS4=y)#;Aob*0FB7XCo#c2bk#v_zq@2{ctJL ' );
define( 'LOGGED_IN_SALT',   'g0Gk(hd2O%5<!1xv^/:BXvGUDO]s&8[ivfW8f7)Ckw^#W.N/~x,jk,TvUlIVg$!W' );
define( 'NONCE_SALT',       '%3HgEJ8m}:Oq)AnimeW*(avHDgz]E^.6#a1tCU cbHol[zj*SLdl5o#U){o&+Oa+' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
