-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 30 2019 г., 13:53
-- Версия сервера: 5.7.26
-- Версия PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `guestbook`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(31) NOT NULL,
  `email` varchar(31) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(511) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`id`, `name`, `email`, `date`, `title`, `content`) VALUES
(1, 'Вадим', 'email@gmail.com', '2019-09-29', 'Отзыв про гатель', 'Все было очень красиво, кормлят хорошо)'),
(2, 'Гость', 'guest@gmail.com', '2019-09-20', 'Кравати', 'Снимали номер из девушкой, большое спасибо за мыло, но кравать скрипела!..'),
(3, 'lol', 'lol@lol.com', '2019-09-01', 'lol', 'lol'),
(4, 'Дурак', 'durak@mail.ru', '2019-09-30', 'Холодильник', 'Я у вас открыл холодильник, а там внутри два фиксика.'),
(5, 'Ето я', 'skoroplias.official@gmail.com', '2019-09-30', 'Мяч', 'Я у вас оставил мяч, шучу пятку, что мне делать?');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(31) NOT NULL,
  `date` date NOT NULL,
  `content` text NOT NULL,
  `id_article` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `name`, `date`, `content`, `id_article`) VALUES
(1, 'Vadym', '2019-09-30', 'Мой первый комент.)', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
