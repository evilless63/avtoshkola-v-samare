<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'avtomowm_63');

/** Имя пользователя MySQL */
define('DB_USER', 'avtomowm_63');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Yu45ionfs');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cz4cG2<l_z.[[<l-=GDJ.x`#@<wYv7Ff},%f(]B-;bH#{t+p8_A+WCp)6}1=BU8=');
define('SECURE_AUTH_KEY',  'yVNM pJXL5:;-K/Xof[W4*VV#fy_@!-Bw#Zl&C[z<k(A^(o*-e7%e-Gz=>vd7GdQ');
define('LOGGED_IN_KEY',    '+~+A,uSk77X}yE[>9|}EY|YSG+J[WL-e*q~{t6Md{A25hFlJ%X]lT.sU-#miin<8');
define('NONCE_KEY',        '$*>V4O0>,],Zg}slE,P+@[G)Qn9KXanVW:8ec}ytB#N$QIK+thRTLPlRTQ.j$Ihg');
define('AUTH_SALT',        'x@A>u.-+e)a)WB+Qes^*N*wG5W:p!_wg9+m|Xgnej} TWxF&{ttF[`)X=B>[E)tH');
define('SECURE_AUTH_SALT', 'C/1:1$8_d97;9n?/Xa @z#g?|&3S95Q6%yN{6@2i./!ni`}~cp$ui.Y%=m]t>mrg');
define('LOGGED_IN_SALT',   '>_v~]`6&f!k{i/Rk_e+W.u2`-=nIr0J?_;/lWj_?XT9^FZU-2`OYE/r#EkyJa(lg');
define('NONCE_SALT',       'SWtRA.r:2)5FiSVHfRCKe(Cr>6h=!J(l[Hh8X3WUf`<9^){+{e]Gl])?A@@}=H:G');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
