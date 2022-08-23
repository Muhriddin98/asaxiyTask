-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 23 2022 г., 06:55
-- Версия сервера: 5.5.62
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `asaxiy_topshiriq`
--

-- --------------------------------------------------------

--
-- Структура таблицы `eslatmalar`
--

CREATE TABLE `eslatmalar` (
  `id` int(11) NOT NULL,
  `nomzod_id` int(11) NOT NULL,
  `intervyu_vaqti` datetime NOT NULL,
  `eslatma` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `eslatmalar`
--

INSERT INTO `eslatmalar` (`id`, `nomzod_id`, `intervyu_vaqti`, `eslatma`) VALUES
(2, 2, '2022-08-24 20:05:00', 'intervyu belgilandi');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1660992044),
('m130524_201442_init', 1660992053),
('m190124_110200_add_verification_token_column_to_user_table', 1660992054),
('m220821_083352_create_nomzodlar_table', 1661072793),
('m220821_085648_create_eslatmalar_table', 1661072793);

-- --------------------------------------------------------

--
-- Структура таблицы `nomzodlar`
--

CREATE TABLE `nomzodlar` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `FamilyName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CountryOfOrigin` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Education` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `EmailAddress` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `Status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yangi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `nomzodlar`
--

INSERT INTO `nomzodlar` (`id`, `Name`, `FamilyName`, `Address`, `CountryOfOrigin`, `Education`, `EmailAddress`, `PhoneNumber`, `Age`, `Status`) VALUES
(2, 'Muhriddin', 'Shuhratov', 'Toshkent shahar', 'Uzbek', 'Oliy', 'muhriddin98@gmail.com', '+998998563167', 24, 'Intervyu belgilangan');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'Admin', 'gSExtvYktUDReWzKGdITmvucV87kxlcE', '$2y$13$qqLHdyeFw2jkmlhIDz./duMw2AmTfcNr/WJ.bQiFyI/xMkSILWvQS', NULL, 'muhriddinshuhratov98@gmail.com', 10, 1661068787, 1661068787, 'XnGWp5Ty7B4Puv71Jnuam8QuT6O8a7FO_1661068787');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `eslatmalar`
--
ALTER TABLE `eslatmalar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `nomzodlar`
--
ALTER TABLE `nomzodlar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`),
  ADD UNIQUE KEY `PhoneNumber` (`PhoneNumber`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `eslatmalar`
--
ALTER TABLE `eslatmalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `nomzodlar`
--
ALTER TABLE `nomzodlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
