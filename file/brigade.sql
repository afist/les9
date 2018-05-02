-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 02 2018 г., 16:50
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `brigade`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brigadier`
--

CREATE TABLE `brigadier` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `dailySalary` int(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `idWorker` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brigadier`
--

INSERT INTO `brigadier` (`id`, `name`, `description`, `dailySalary`, `position`, `idWorker`) VALUES
(1, 'Vlad', 'work in kitchen', 250, 'brigadier', 'id1'),
(2, 'Oleg', 'work in garden', 300, 'brigadier', 'id2'),
(3, 'Paul', 'bricklayers', 400, 'brigadier', 'id3');

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `listOfTools` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dailySalary` int(30) NOT NULL,
  `idBrigadier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`id`, `Name`, `listOfTools`, `position`, `dailySalary`, `idBrigadier`) VALUES
(1, 'Oleg', 'Hammer, Mallet, Ax', 'worker', 20, 'id1'),
(2, 'Vasa', 'Hacksaw, Level ', 'worker', 40, 'id1'),
(3, 'Nikita', 'Screwdriver, Wrench ', 'worker', 50, 'id1'),
(4, 'Ivan', 'Monkey wrench, Chisel ', 'worker', 35, 'id2'),
(5, 'Viktor', 'Pliers, Scraper ', 'worker', 43, 'id2'),
(6, 'Vasa', 'Scraper, Sandpaper ', 'worker', 34, 'id2'),
(7, 'Nikita', 'Sandpaper, Plane ', 'worker', 47, 'id3'),
(8, 'Valik', 'Bradawl, Paint thinner', 'worker', 31, 'id3'),
(9, 'Slava', 'Workbench, Bolt ', 'worker', 56, 'id3');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brigadier`
--
ALTER TABLE `brigadier`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brigadier`
--
ALTER TABLE `brigadier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
