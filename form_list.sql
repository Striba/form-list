-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 19 2018 г., 22:05
-- Версия сервера: 5.5.53
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `form_list`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cc_callcenters`
--

CREATE TABLE `cc_callcenters` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cc_callcenters`
--

INSERT INTO `cc_callcenters` (`id`, `name`) VALUES
(1, 'CC1'),
(2, 'CC2'),
(3, 'CC3'),
(4, 'CC4');

-- --------------------------------------------------------

--
-- Структура таблицы `cc_desks`
--

CREATE TABLE `cc_desks` (
  `id` int(11) NOT NULL,
  `id_callcenter` int(11) NOT NULL,
  `desk_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cc_desks`
--

INSERT INTO `cc_desks` (`id`, `id_callcenter`, `desk_name`) VALUES
(1, 1, 'Desk 1'),
(2, 2, 'Desk 2'),
(3, 3, 'Desk 3'),
(4, 4, 'Desk 4');

-- --------------------------------------------------------

--
-- Структура таблицы `cc_teams`
--

CREATE TABLE `cc_teams` (
  `id` int(11) NOT NULL,
  `id_desk` int(11) NOT NULL,
  `team_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cc_teams`
--

INSERT INTO `cc_teams` (`id`, `id_desk`, `team_name`) VALUES
(1, 1, 'Team 1'),
(2, 2, 'Team 2'),
(3, 3, 'Team 3'),
(4, 4, 'Team 4');

-- --------------------------------------------------------

--
-- Структура таблицы `cc_users`
--

CREATE TABLE `cc_users` (
  `user_id` int(11) NOT NULL,
  `stage_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `cc_users`
--

INSERT INTO `cc_users` (`user_id`, `stage_name`, `team_id`) VALUES
(2, 'Maksim IT', 1),
(6, 'Vlad', 1),
(36, 'Kirill', 1),
(37, 'Dmitriy', 1),
(38, 'Edik', 2),
(39, 'Roman', 2),
(40, 'Prince', 2),
(41, 'Aleksandr', 3),
(42, 'Nastya', 3),
(43, 'Denis', 4),
(46, 'SergeiS', 4),
(47, 'ViktorS', 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cc_callcenters`
--
ALTER TABLE `cc_callcenters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cc_desks`
--
ALTER TABLE `cc_desks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `desk_name` (`desk_name`,`id_callcenter`);

--
-- Индексы таблицы `cc_teams`
--
ALTER TABLE `cc_teams`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cc_users`
--
ALTER TABLE `cc_users`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cc_callcenters`
--
ALTER TABLE `cc_callcenters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `cc_desks`
--
ALTER TABLE `cc_desks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `cc_teams`
--
ALTER TABLE `cc_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
