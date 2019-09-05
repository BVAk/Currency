-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Вер 05 2019 р., 11:17
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
(4, 'UAH');

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
(1, '2019-09-04 09:13:24', 100, 'EUR', 100, 'EUR'),
(2, '2019-09-04 09:15:19', 100, 'EUR', 100, 'EUR'),
(3, '2019-09-04 09:15:26', 2526.35, 'EUR', 2526.35, 'EUR'),
(4, '2019-09-04 09:15:34', 2526.35, 'EUR', 69896.9, 'UAH'),
(5, '2019-09-04 09:17:17', 2526.35, 'EUR', 69896.9, 'UAH'),
(6, '2019-09-04 09:18:17', 2526.35, 'EUR', 69896.9, 'UAH'),
(7, '2019-09-04 09:18:48', 2526.35, 'EUR', 69896.9, 'UAH'),
(8, '2019-09-04 09:18:51', 2526.35, 'EUR', 69896.9, 'UAH'),
(9, '2019-09-04 09:19:59', 2526.35, 'EUR', 69896.9, 'UAH'),
(10, '2019-09-04 09:22:20', 2526.35, 'EUR', 69896.9, 'UAH'),
(11, '2019-09-04 09:22:28', 2526.35, 'EUR', 69896.9, 'UAH'),
(12, '2019-09-04 09:22:57', 2526.35, 'EUR', 69896.9, 'UAH'),
(13, '2019-09-04 09:23:05', 2526.35, 'EUR', 69896.9, 'UAH'),
(14, '2019-09-04 09:23:54', 2526.35, 'EUR', 69896.9, 'UAH'),
(15, '2019-09-04 09:25:03', 2526.35, 'EUR', 69896.9, 'UAH'),
(16, '2019-09-04 09:25:17', 100, 'USD', 2529.69, 'UAH'),
(17, '2019-09-04 09:26:17', 100, 'USD', 2529.69, 'UAH'),
(18, '2019-09-04 09:26:31', 100, 'USD', 2529.69, 'UAH'),
(19, '2019-09-04 09:27:00', 100, 'USD', 2529.69, 'UAH'),
(20, '2019-09-04 09:27:06', 100, 'EUR', 100, 'EUR'),
(21, '2019-09-04 09:27:20', 100, 'EUR', 100, 'EUR'),
(22, '2019-09-04 09:27:53', 100, 'EUR', 100, 'EUR'),
(23, '2019-09-04 09:28:03', 100, 'EUR', 100, 'EUR'),
(24, '2019-09-04 09:28:11', 100, 'EUR', 100, 'EUR'),
(25, '2019-09-04 09:28:16', 200, 'EUR', 200, 'EUR'),
(26, '2019-09-04 09:28:33', 200, 'EUR', 200, 'EUR'),
(27, '2019-09-04 09:36:41', 200, 'EUR', 200, 'EUR'),
(28, '2019-09-04 20:08:36', 100, 'EUR', 110, 'USD'),
(29, '2019-09-04 20:08:59', 100, 'EUR', 109.51, 'USD'),
(30, '2019-09-05 05:51:30', 100, 'EUR', 7362.08, 'RUR'),
(31, '2019-09-05 06:06:01', 100, 'EUR', 7362.08, 'RUR'),
(32, '2019-09-05 06:32:01', 100, 'EUR', 100, 'EUR');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблиці `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
