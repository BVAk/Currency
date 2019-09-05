-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Вер 05 2019 р., 21:08
-- Версія сервера: 5.7.19
-- Версія PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `test`
--

-- --------------------------------------------------------

--
-- Структура таблиці `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `currency`
--

INSERT INTO `currency` (`id`, `currency`) VALUES
(1, 'EUR'),
(2, 'USD'),
(3, 'RUR'),
(4, 'UAH'),
(5, 'BTC');

-- --------------------------------------------------------

--
-- Структура таблиці `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `date_change` timestamp NOT NULL,
  `change_amount` float NOT NULL,
  `change_currency` varchar(255) NOT NULL,
  `get_change_amount` float NOT NULL,
  `get_change_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `history`
--

INSERT INTO `history` (`id`, `date_change`, `change_amount`, `change_currency`, `get_change_amount`, `get_change_currency`) VALUES
(1, '2019-09-05 17:54:04', 100, 'EUR', 100, 'EUR'),
(2, '2019-09-05 17:57:19', 100, 'USD', 91.31, 'EUR'),
(3, '2019-09-05 17:58:23', 2526.35, 'EUR', 2779.85, 'USD'),
(4, '2019-09-05 17:59:39', 200, 'EUR', 5567.06, 'UAH'),
(5, '2019-09-05 18:01:11', 200, 'EUR', 220.07, 'USD'),
(6, '2019-09-05 18:01:12', 200, 'EUR', 220.07, 'USD'),
(7, '2019-09-05 18:01:50', 200, 'EUR', 5567.06, 'UAH'),
(8, '2019-09-05 18:04:55', 100, 'BTC', 36108.6, 'EUR');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблиці `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
