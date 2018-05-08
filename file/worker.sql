-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 08 2018 г., 17:13
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
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `listOfTools` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dailySalary` int(30) NOT NULL,
  `idBrigadier` varchar(255) NOT NULL,
  `changeDate` text NOT NULL,
  `daysWorked` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`id`, `Name`, `listOfTools`, `position`, `dailySalary`, `idBrigadier`, `changeDate`, `daysWorked`) VALUES
(1, 'Oleg', 'Hammer, Mallet, Ax', 'worker', 20, 'id1', ';[2018-05-07 17:47:16]-daysWorked chenge 0 vs 20;[2018-05-07 17:47:36]-daysWorked chenge 20 vs 50;[2018-05-07 17:47:50]-daysWorked chenge 50 vs 60;[2018-05-07 17:57:22]-daysWorked chenge 60 vs 22 </br>;[2018-05-07 17:57:29]-daysWorked chenge 22 vs 33 </br>[2018-05-07 17:57:50]-daysWorked chenge 33 vs 27 </br>[2018-05-07 18:04:55]-daysWorked chenge 27 vs 30 </br>[2018-05-07 18:05:07]-daysWorked chenge 30 vs 31 </br>[2018-05-07 18:05:24]-daysWorked chenge 31 vs 35 </br>[2018-05-08 16:32:50]-daysWorked chenge 35 vs 40 </br>', 40),
(2, 'Vasa', 'Hacksaw, Level ', 'worker', 40, 'id1', ';[2018-05-07 17:47:26]-daysWorked chenge 0 vs 30[2018-05-08 15:57:39]-daysWorked chenge 30 vs 20 </br>[2018-05-08 15:57:44]-daysWorked chenge 20 vs 30 </br>', 30),
(3, 'Nikita', 'Screwdriver, Wrench ', 'worker', 50, 'id1', ';[2018-05-07 17:47:32]-daysWorked chenge 0 vs 40', 40),
(4, 'Ivan', 'Monkey wrench, Chisel ', 'worker', 35, 'id2', ';[2018-05-07 17:49:25]-daysWorked chenge 0 vs 20;[2018-05-07 17:49:28]-daysWorked chenge 20 vs 20', 20),
(5, 'Viktor', 'Pliers, Scraper ', 'worker', 43, 'id2', '', 0),
(6, 'Vasa', 'Scraper, Sandpaper ', 'worker', 34, 'id2', '', 0),
(7, 'Nikita', 'Sandpaper, Plane ', 'worker', 47, 'id3', '[2018-05-07 18:01:59]-daysWorked chenge 0 vs 20 </br>[2018-05-07 18:02:04]-daysWorked chenge 20 vs 30 </br>', 30),
(8, 'Valik', 'Bradawl, Paint thinner', 'worker', 31, 'id3', '', 0),
(9, 'Slava', 'Workbench, Bolt ', 'worker', 56, 'id3', '', 0),
(10, 'Valera', 'Pliers, Scraper', 'worker', 43, 'id4', '', 0),
(11, 'Valera', 'Pliers, Scraper', 'worker', 43, 'id5', '', 0),
(12, 'тест', 'ё12', '234', 23, 'id1', '[2018-05-08 16:20:51]Worker add[2018-05-08 16:32:58]-daysWorked chenge 21 vs 55 </br>[2018-05-08 16:33:03]-daysWorked chenge 55 vs 50 </br>', 50),
(13, 'Юра', '12', '21', 213, 'id10', '[2018-05-08 16:22:41]Worker add[2018-05-08 16:23:01]-daysWorked chenge 21 vs 20 </br>[2018-05-08 16:23:06]-daysWorked chenge 20 vs 30 </br>[2018-05-08 16:23:22]-daysWorked chenge 30 vs 20 </br>', 20);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
