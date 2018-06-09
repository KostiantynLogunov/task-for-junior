-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2018 г., 22:20
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `joon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `alias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `alias`, `title`, `created_at`, `updated_at`) VALUES
(1, 'laravel', 'Laravel 5', '2018-06-08 17:48:26', '2018-06-08 18:14:00'),
(2, 'yii2', 'yii2', '2018-06-08 17:48:44', '2018-06-08 17:48:44'),
(4, 'js', 'JS', '2018-06-08 18:01:30', '2018-06-08 18:01:30'),
(5, 'java', 'Java', '2018-06-09 10:35:37', '2018-06-09 10:35:37');

-- --------------------------------------------------------

--
-- Структура таблицы `categoryables`
--

CREATE TABLE `categoryables` (
  `category_id` int(11) NOT NULL,
  `categoryable_id` int(11) NOT NULL,
  `categoryable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categoryables`
--

INSERT INTO `categoryables` (`category_id`, `categoryable_id`, `categoryable_type`) VALUES
(4, 1, 'App\\Product'),
(1, 2, 'App\\Product'),
(4, 3, 'App\\Product'),
(1, 4, 'App\\Product'),
(2, 5, 'App\\Product');

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
(3, '2018_06_08_172625_create_categories_table', 2),
(4, '2018_06_08_192547_create_products_table', 3),
(5, '2018_06_08_203515_create_table_categoryable_table', 4);

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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `category`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'web game', 1, '<p>new game about btc</p>', '1528566618.jpg', '2018-06-08 20:24:02', '2018-06-09 16:50:18'),
(3, 'IOS APP', 2, '<p>YYYYSYSA</p>', '1528566608.jpg', '2018-06-08 20:34:21', '2018-06-09 16:50:08'),
(6, 'app ANDROID 3', 5, '<p>ANDROID</p>', '1528566562.jpg', '2018-06-09 10:35:06', '2018-06-09 16:49:22'),
(7, 'PHP 7.3 Alpha 1 Released', 1, '<p>The PHP team announced yesterday that the release of the first PHP 7.3.0 version&mdash;Alpha 1&mdash;is available. This starts the PHP 7.3 release cycle which is based on PHP 7.2. The pace of the PHP 7 release cycle is a significant plus for developers and moving the language forward at a quickened pace. We can expect v7.3.0 to land sometime around November 29 based on the timetable for this release.</p>', '1528566757.webp', '2018-06-09 11:02:37', '2018-06-09 16:52:37'),
(8, 'Factory Callbacks and Closure-Based Guards in Laravel', 1, '<p>Two undocumented (before today anyhow) features were recently added to the Laravel 5.6 documentation, and they are both fantastic! First, factory callbacks allow you to perform additional tasks after making or creating a model: View image on Twitter ....</p>', '1528566597.jpg', '2018-06-09 11:03:11', '2018-06-09 16:49:57'),
(9, 'Announcing Laravel Events', 1, '<p>Laravel Events is a brand new community site that I created with the goal of helping keep the community informed of conferences, meetups, and other events. My goal is to pull over the events for the Laravel News homepage and also integrate with the weekly newsletter. If you run a meetup or local event go add your future meetings. I want the site to look good and one way of doing this is to have images for each of the events. So, if you don&rsquo;t have a suitable image then I&rsquo;ll create one for you. Just leave that field blank and I&rsquo;ll come up something before I approve it....</p>', '1528566588.jpg', '2018-06-09 11:03:44', '2018-06-09 16:49:48'),
(22, 'newnewnenwe', 4, '<h3>Storage folder: files are not public?</h3>\r\n\r\n<p>We saw that, by default, Laravel stores the file in&nbsp;<strong>/storage/app</strong>&nbsp;folder. Why?</p>\r\n\r\n<p>It&rsquo;s actually done with a good plan &ndash; to hide uploaded files from users by default, to avoid illegal access or scraping.</p>\r\n\r\n<p>Also, you may ask how to&nbsp;<strong>show</strong>&nbsp;the file then, if&nbsp;<strong>/storage</strong>&nbsp;folder is not accessible in the browser? It&rsquo;s not public, right?</p>\r\n\r\n<p>If you do want those files to be public, you need to change two things:</p>\r\n\r\n<p><strong>1. Config disk change</strong>. Change&nbsp;<strong>config/filesystems.php</strong>&nbsp;parameter&nbsp;<strong>&lsquo;default&rsquo;</strong>&nbsp;&ndash; from &lsquo;local&rsquo; to &lsquo;public&rsquo;: then the files will be stored in&nbsp;<strong>storage/app/public</strong>&nbsp;(we will talk about filesystems settings later);</p>\r\n\r\n<p><strong>2. Symlink</strong>. Put a&nbsp;<a href=\"https://www.nixtutor.com/freebsd/understanding-symbolic-links/\" target=\"_blank\">symlink</a>&nbsp;from&nbsp;<strong>/public/storage</strong>&nbsp;to&nbsp;<strong>/storage/app/public</strong>&nbsp;folder, with one Artisan command:</p>', '1528566577.jpg', '2018-06-09 16:14:41', '2018-06-09 16:49:37');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.admin', '$2y$10$DtNxtde6nXJQPMdNpEUFp.ylUs677ZY/mLzTI/A31oCbiuU4J4Fg.', 'cwh8oY5ddlkLRBOhcdSwiyQ2XxU4u9G3LG0kiJ6HmxnouMOv81vA9UFeEkcD', '2018-06-08 16:01:43', '2018-06-08 16:01:43');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_alias_unique` (`alias`);

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
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
