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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '3BTD-s9cRa*Zrzlg' );

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
define( 'AUTH_KEY',         'OaI >;]]q*#VgY(hI`KAy*<]BdYda(&>I7{R+4e[#W/-)+XQ@t,)-3UGg`r&B:7d' );
define( 'SECURE_AUTH_KEY',  'C$5)/JfX2YG?M %d>3+%H,CIqCq9ZK~r/:iirVJ_0tpqED?[/2t#9V:fK$VPN5-p' );
define( 'LOGGED_IN_KEY',    'bB^Z|)ODmNf;Ky#cB{&Z D%*e.4;:EuWo@iF`QP]g*^V]FNAURv=rQVrJ[IN.>+_' );
define( 'NONCE_KEY',        '`D`W$>aJiRuXo!IgAN:h!U(H^cMNtR^dD[|BIFoi8tLTj 3?.=ek71u!y7KBGt,q' );
define( 'AUTH_SALT',        '-U?/t6|Y#W9pEC(llKGwLvV13rn%c/Qhkq`{JHH9`EGP9Njhhvgpn`~mX/ lZBo4' );
define( 'SECURE_AUTH_SALT', '>,+b&/Nz}%P>3Q|<>F)n[f|U9`{+xaAhXXtvx0bI)U*vUbaCfQ[mP8=sN)V7H_7L' );
define( 'LOGGED_IN_SALT',   'L/,q1u3lKnh(DV6:*_y=#rh=K!W`.oF1-xPp]B%>AEx>4zbOXu|?t0BVQkZAgp[}' );
define( 'NONCE_SALT',       '$a;-Z4sy!K6oD(3 sH,c9wn:U*%+K9y.`KJzy2FgzZ:p]Ud)uh!a2VT~?GbgRW#H' );

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
