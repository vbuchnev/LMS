-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 06 2022 г., 16:53
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kursach1`
--
CREATE DATABASE IF NOT EXISTS `kursach1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kursach1`;

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `preview_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Информатика', 'бла бла бла', 'images/EmSB3dLTv3TJeaytorRQCkYx6lDFc7imFKHjbMay.jpg', '2022-02-03 02:56:11', '2022-02-03 22:54:19', NULL),
(2, 'Математика', 'курс про математику', 'images/1QSdS2EcwhRwFPUkDSiPgnjXSBKWhXFNJZqHdits.jpg', '2022-02-05 00:54:56', '2022-02-05 00:54:56', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(2, 'default', '{\"uuid\":\"63acc7c8-4801-4bb0-9274-8f8de83e9b12\",\"displayName\":\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:49:\\\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\\\":11:{s:2:\\\"id\\\";s:36:\\\"d7280c23-7595-493f-9716-0ea333975095\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1643892819, 1643892819),
(3, 'default', '{\"uuid\":\"74d914c2-cd62-4c1e-82c6-3c743b931071\",\"displayName\":\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:1;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:49:\\\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\\\":11:{s:2:\\\"id\\\";s:36:\\\"6e9e2474-0238-446e-8807-df71db4ea49a\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1643892847, 1643892847),
(4, 'default', '{\"uuid\":\"9d1c62f0-0e17-4b7e-bcd3-207d50fc20df\",\"displayName\":\"App\\\\Mail\\\\User\\\\PasswordMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":13:{s:8:\\\"mailable\\\";O:26:\\\"App\\\\Mail\\\\User\\\\PasswordMail\\\":29:{s:8:\\\"password\\\";s:10:\\\"xqmiYXm6h2\\\";s:6:\\\"locale\\\";N;s:4:\\\"from\\\";a:0:{}s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:13:\\\"user@user.com\\\";}}s:2:\\\"cc\\\";a:0:{}s:3:\\\"bcc\\\";a:0:{}s:7:\\\"replyTo\\\";a:0:{}s:7:\\\"subject\\\";N;s:8:\\\"markdown\\\";N;s:7:\\\"\\u0000*\\u0000html\\\";N;s:4:\\\"view\\\";N;s:8:\\\"textView\\\";N;s:8:\\\"viewData\\\";a:0:{}s:11:\\\"attachments\\\";a:0:{}s:14:\\\"rawAttachments\\\";a:0:{}s:15:\\\"diskAttachments\\\";a:0:{}s:9:\\\"callbacks\\\";a:0:{}s:5:\\\"theme\\\";N;s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";s:29:\\\"\\u0000*\\u0000assertionableRenderStrings\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1644145622, 1644145622),
(5, 'default', '{\"uuid\":\"e356c308-5d7f-4e00-b672-a1aa4b0c9ad8\",\"displayName\":\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:2;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:49:\\\"App\\\\Notifications\\\\SendVerifyWithQueueNotification\\\":11:{s:2:\\\"id\\\";s:36:\\\"7297e660-0a4f-4220-8086-60757545728c\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1644145622, 1644145622);

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `content`, `course_id`, `preview_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Программирование', 'adsfasdf', 1, 'images/xtP5AfWr1qylQfap4obE2jC2FoqvGd4SZPXf43Vf.jpg', '2022-02-03 22:53:06', '2022-02-03 22:54:19', NULL),
(3, 'Основы БД', '<p><i>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In lacinia \r\nlobortis tortor, vel viverra erat malesuada et. Morbi varius nisi vitae \r\nviverra laoreet. Ut molestie, orci eu sagittis tincidunt, dui mi laoreet\r\n mi, in molestie ipsum urna vel velit. Quisque tempor lorem ex, at \r\nrutrum eros pulvinar in. Nam in efficitur est. Praesent ac finibus diam,\r\n nec aliquet nunc. Proin nec mollis enim. Vestibulum consectetur, urna \r\nvitae maximus convallis, arcu nunc accumsan dui, et imperdiet sem purus \r\nin felis. In ac enim efficitur enim molestie suscipit nec ac magna. Cras\r\n pulvinar sem lorem, id elementum felis dictum id. Morbi scelerisque sem\r\n quis magna elementum, lobortis fringilla nisl rutrum. Interdum et \r\nmalesuada fames ac ante ipsum primis in faucibus. Donec in dolor mattis,\r\n consequat dolor quis, egestas ex. Aliquam non nunc congue, efficitur \r\nnisl non, lacinia mauris. Sed non commodo turpis.\r\n</i></p>\r\n<p>\r\n<u>Aliquam imperdiet risus nec quam dictum, id faucibus lectus consectetur.\r\n Mauris vel erat quam. Pellentesque habitant morbi tristique senectus et\r\n netus et malesuada fames ac turpis egestas. Fusce velit purus, \r\nscelerisque a efficitur eu, egestas in massa. Nulla id neque id mi \r\nornare interdum. Suspendisse potenti. Vestibulum accumsan massa ac augue\r\n dapibus bibendum. Orci varius natoque penatibus et magnis dis \r\nparturient montes, nascetur ridiculus mus. Aenean sem nisl, fermentum ac\r\n tortor ac, facilisis faucibus velit. Donec tempor sem sem, imperdiet \r\nporta turpis congue at. Sed quis orci suscipit, congue massa sed, \r\negestas elit. Etiam id lacus turpis. In at maximus metus. Phasellus \r\npharetra facilisis volutpat. Nullam tincidunt pretium velit sit amet \r\nlobortis.\r\n</u></p>', 1, 'images/8XWr7oMQNRucbA6jmwzcdoZqnHU0nbVGbeVhxFER.jpg', '2022-02-03 22:53:29', '2022-02-05 04:07:31', NULL),
(4, 'Лекция №1', 'бла бла бла<br>', 2, 'images/JA41ABaebRGJFcnBqoKnwEBnBvWbxF2p6mGY3BY0.jpg', '2022-02-05 01:00:33', '2022-02-05 01:00:33', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lessons_tags`
--

CREATE TABLE `lessons_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons_tags`
--

INSERT INTO `lessons_tags` (`id`, `lesson_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `lesson_user_favorites`
--

CREATE TABLE `lesson_user_favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lesson_user_favorites`
--

INSERT INTO `lesson_user_favorites` (`id`, `lesson_id`, `user_id`) VALUES
(4, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_26_171440_create_courses_table', 1),
(6, '2022_01_26_171540_create_lessons_table', 1),
(7, '2022_01_26_171617_create_tags_table', 1),
(8, '2022_01_27_052608_create_lessons_tags_table', 1),
(9, '2022_01_27_141841_add_column_soft_deletes_to_courses_table', 1),
(10, '2022_01_27_154957_add_column_soft_deletes_to_tags_table', 1),
(11, '2022_01_28_080104_add_columns_for_images_to_lessons_table', 1),
(12, '2022_01_28_135313_add_soft_deletes_to_lessons_table', 1),
(13, '2022_01_29_063144_add_soft_deletes_to_users_table', 1),
(14, '2022_01_29_065826_add_column_role_to_users_table', 1),
(15, '2022_01_29_161906_create_jobs_table', 1),
(16, '2022_01_30_061550_create_lesson_user_favorites_table', 1),
(17, '2022_01_31_144756_add_columns_img_to_users_table', 1),
(18, '2022_01_31_153623_create_questions_table', 1),
(19, '2022_01_31_153801_create_questions_options_table', 1),
(20, '2022_01_31_153939_create_tests_table', 1),
(21, '2022_01_31_165037_add_pivot_questions_table', 1),
(22, '2022_01_31_165557_add_pivot_option_table', 1),
(23, '2022_01_31_165611_add_pivot_test_table', 1),
(24, '2022_01_31_181950_add_column_for_image_to_courses_table', 1),
(25, '2022_02_01_062512_add_title_courses_table', 1),
(26, '2022_02_01_103205_add_columns_sname_users_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `question`, `score`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Сколько будет 3+2=?', NULL, '2022-02-03 22:32:45', '2022-02-06 00:14:17', NULL),
(2, 'Чему равен корень из 25?', NULL, '2022-02-05 01:25:59', '2022-02-06 00:14:41', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `questions_options`
--

CREATE TABLE `questions_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `option_text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(1) DEFAULT 0,
  `question_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `questions_options`
--

INSERT INTO `questions_options` (`id`, `option_text`, `correct`, `question_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '5', 1, 1, '2022-01-31 17:11:24', '2022-02-06 02:07:40', NULL),
(2, '6', 0, 1, '2022-02-04 20:21:07', '2022-02-04 20:21:07', NULL),
(3, '1', 0, 1, '2022-02-05 01:23:10', '2022-02-05 01:23:10', NULL),
(4, '5', 1, 2, '2022-02-05 01:26:32', '2022-02-05 01:26:32', NULL),
(5, '20', 0, 2, '2022-02-05 01:26:46', '2022-02-05 01:26:46', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `question_test`
--

CREATE TABLE `question_test` (
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `question_test`
--

INSERT INTO `question_test` (`test_id`, `question_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tags`
--

INSERT INTO `tags` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Информатика', '2022-02-03 05:50:50', '2022-02-03 05:50:50', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lesson_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`, `course_id`, `lesson_id`) VALUES
(1, 'первый', 'нах 123', '2022-02-05 01:32:04', '2022-02-05 08:02:52', NULL, 2, 4),
(2, 'да хуй его знает', 'ебнврт блять', '2022-02-05 02:48:31', '2022-02-05 02:48:31', NULL, 1, 3),
(3, '123', '123123123', '2022-02-05 06:01:09', '2022-02-05 06:01:09', NULL, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ava_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` smallint(5) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `f_name`, `s_name`, `email`, `email_verified_at`, `password`, `remember_token`, `ava_image`, `role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'админ', 'админович', 'админов', 'admin@admin.com', '2022-02-03 12:54:46', '$2y$10$pHkH33ay5BTWILhtRCyt4eKUEaRsJzx4vmxro93QFN6e0MK9nmNKW', NULL, NULL, 1, '2022-02-03 02:47:37', '2022-02-06 04:19:32', NULL),
(2, 'юзер', 'юзерович', 'юзеров', 'user@user.com', NULL, '$2y$10$5DaQN1C90.TwHB2HjqXovute2CX0SAfq5DmPM73IuIw2Ae48l2DaS', NULL, NULL, 0, '2022-02-06 01:07:02', '2022-02-06 01:07:02', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_course_idx` (`course_id`);

--
-- Индексы таблицы `lessons_tags`
--
ALTER TABLE `lessons_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_tag_lesson_idx` (`lesson_id`),
  ADD KEY `lesson_tag_tag_idx` (`tag_id`);

--
-- Индексы таблицы `lesson_user_favorites`
--
ALTER TABLE `lesson_user_favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `luf_lesson_idx` (`lesson_id`),
  ADD KEY `luf_uer_idx` (`user_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions_options`
--
ALTER TABLE `questions_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_fk` (`question_id`);

--
-- Индексы таблицы `question_test`
--
ALTER TABLE `question_test`
  ADD KEY `test_id_fk` (`test_id`),
  ADD KEY `question_id_fk` (`question_id`);

--
-- Индексы таблицы `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_fk` (`course_id`),
  ADD KEY `lesson_fk` (`lesson_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `lessons_tags`
--
ALTER TABLE `lessons_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `lesson_user_favorites`
--
ALTER TABLE `lesson_user_favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `questions_options`
--
ALTER TABLE `questions_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lesson_course_fx` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lessons_tags`
--
ALTER TABLE `lessons_tags`
  ADD CONSTRAINT `lesson_tag_lesson_fx` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lesson_tag_tag_fx` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `lesson_user_favorites`
--
ALTER TABLE `lesson_user_favorites`
  ADD CONSTRAINT `luf_lesson_fk` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `luf_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `questions_options`
--
ALTER TABLE `questions_options`
  ADD CONSTRAINT `question_fk` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Ограничения внешнего ключа таблицы `question_test`
--
ALTER TABLE `question_test`
  ADD CONSTRAINT `question_id_fk` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `test_id_fk` FOREIGN KEY (`test_id`) REFERENCES `tests` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tests`
--
ALTER TABLE `tests`
  ADD CONSTRAINT `course_fk` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `lesson_fk` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
