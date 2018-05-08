-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 08 2018 г., 17:14
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
  `idWorker` varchar(200) NOT NULL,
  `changeDate` text NOT NULL,
  `daysWorked` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brigadier`
--

INSERT INTO `brigadier` (`id`, `name`, `description`, `dailySalary`, `position`, `idWorker`, `changeDate`, `daysWorked`) VALUES
(1, 'Vlad', 'work in kitchen', 250, 'brigadier', 'id1', '', 0),
(2, 'Oleg', 'work in garden', 300, 'brigadier', 'id2', '', 0),
(3, 'Paul', 'bricklayers', 400, 'brigadier', 'id3', '', 0),
(9, 'Valera', 'hard work', 220, 'brigadier', 'id4', '', 0),
(21, 'Valerian', 'work house', 333, 'brigadier', 'id5', '[2018-05-07 10:05:54]-Brigadier add', 30),
(33, '1212', '21', 345, '213', 'id10', '[2018-05-08 16:22:15]-Brigadier add', 21);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brigadier`
--
ALTER TABLE `brigadier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brigadier`
--
ALTER TABLE `brigadier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
