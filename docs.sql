-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2021 г., 22:34
-- Версия сервера: 5.7.29
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `docs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `mdate` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL DEFAULT 'nofile',
  `addtime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `name`, `title`, `content`, `mdate`, `file_name`, `addtime`) VALUES
(5, 'nomi', 'Lorem ipsum dolor sit amet.\r\n', ', consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '23.05.2021', 'nofile', '2021-05-23 23:14:09'),
(7, 'nomi', 'Lorem ipsum dolor sit amet.\r\n', ', consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '23.05.2021', 'nofile', '2021-05-23 23:14:13'),
(8, 'nomi2', ', consectetur adipiscing eserunt mollit anim id est laborum.', 'elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia d', '21.05.2021', 'nofile', '2021-05-23 23:14:13'),
(9, 'Dasturlash', 'LifePC GrouP Esanov Otabek.', 'LifePC GrouP o&#039;z xizmatlarini taqdim etadi.LifePC GrouP o&#039;z xizmatlarini taqdim etadi.LifePC GrouP o&#039;z xizmatlarini taqdim etadi.LifePC GrouP o&#039;z xizmatlarini taqdim etadi.LifePC GrouP o&#039;z xizmatlarini taqdim etadi.', '2021-05-19', '5a26f6a79d0f8e020e9d193cec9b7167Invoice-80790.pdf', '2021-05-24 00:04:18'),
(10, 'Dasturlash', 'Mr Unknowndan uzr so&#039;rayman bilmay uni yozganlarini o&#039;chirvoribman.', 'Mr Unknowndan uzr so&#039;rayman bilmay uni yozganlarini o&#039;chirvoribman.\r\nMr Unknowndan uzr so&#039;rayman bilmay uni yozganlarini o&#039;chirvoribman.', '2021-05-14', '32ca87005413f10b327b7f1d010ceff0-1900-05-21.docx', '2021-05-24 00:08:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `table1`
--
ALTER TABLE `table1`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
