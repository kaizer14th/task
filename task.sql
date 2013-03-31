-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 31 2013 г., 23:09
-- Версия сервера: 5.6.10
-- Версия PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `task`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `text` varchar(600) NOT NULL,
  `short` varchar(100) NOT NULL,
  `addTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `changeTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `name`, `text`, `short`, `addTime`, `changeTime`, `user_id`) VALUES
(5, 'dfbsdfbsdfbgf', 'fbsdbadbsdfbdsb', 'bfsgbsfgbsbd', '2013-03-31 17:33:26', '2013-03-31 17:33:26', 2),
(6, '43534534', '34534534535324', '3453455345', '2013-03-31 17:33:30', '2013-03-31 17:33:30', 2),
(7, '342323', '3f3223f23f234f', '322frf34r2', '2013-03-31 17:33:36', '2013-03-31 17:33:36', 2),
(8, 'f23434f', '4f3f433f3f44e', 'f4ef4f', '2013-03-31 17:33:54', '2013-03-31 17:33:54', 1),
(9, '433r4fr4', 'fvw34fswregefavwqg554', 'efe4fwgr', '2013-03-31 17:33:59', '2013-03-31 17:33:59', 1),
(10, 'fdsdrv34erg', 'grgerdev34v5', 'gvregsregvg3', '2013-03-31 18:02:46', '2013-03-31 18:02:46', 1),
(11, 'asxce', 'frsdgareg3tg3f\r\n', 'efarearfr', '2013-03-31 20:17:39', '2013-03-31 20:17:39', 1),
(12, 'regsg', 'gtgwstgbtwtg', 'gsrtgtsg', '2013-03-31 20:17:47', '2013-03-31 20:17:47', 1),
(13, 'tgwrt', 'wtrbwrtbwrtbw', 'wtrbvwtr', '2013-03-31 20:17:52', '2013-03-31 20:17:52', 1),
(14, 'dfsfbg', 'bsbsgbfbgb', 'sgbsbgbf', '2013-03-31 20:18:05', '2013-03-31 20:18:05', 1),
(15, 'rgwe', 'brtbttrbbs', 'wwetbwrtb', '2013-03-31 20:18:19', '2013-03-31 20:18:19', 1),
(16, '34543f3', '3rf3rfr3gferger', '434f43f3rf', '2013-03-31 20:19:54', '2013-03-31 20:19:54', 1),
(17, 'wsvfvwrvbw', 'tbrtbrtbtrbvsgrfbsgfb dfgs', 'trbt3tb', '2013-03-31 20:20:41', '2013-03-31 20:20:41', 1),
(18, 'vsdfvsdv', 'bdbfsbfgbbb53g554bwt', 'dsfvdsfvbsdbsdbds', '2013-03-31 20:58:59', '2013-03-31 20:58:59', 1),
(19, 'errtvsbv', 'stbstbstbstdbsrbv', 'bvstbvstrb', '2013-03-31 20:59:04', '2013-03-31 20:59:04', 1),
(20, 'ergg43gg', '254g45gg254', '54gw545', '2013-03-31 20:59:08', '2013-03-31 20:59:08', 1),
(21, '5gewgwe5g', '5v555g54wg4gwstrgv4', 'vswevwgbw', '2013-03-31 20:59:16', '2013-03-31 20:59:16', 1),
(22, 'eg5c245vc3', '6gc34gv63y6hc', '345cggwrgc', '2013-03-31 20:59:21', '2013-03-31 20:59:21', 1),
(23, '336h36hv', '3v5h356vh36', '45hg6vh3c56h6', '2013-03-31 20:59:27', '2013-03-31 20:59:27', 1),
(24, 'efawe', 'wervwervev454g54g', 'rfvrev4tg', '2013-03-31 21:01:35', '2013-03-31 21:01:35', 1),
(25, 'ewrgb65', 'n46nh46nb6', 'h56hb5nh4', '2013-03-31 21:01:41', '2013-03-31 21:01:41', 1),
(26, '5636h65', 'fh6gh6vhgrtetgvg', 'v456hf46fh6', '2013-03-31 21:01:48', '2013-03-31 21:01:48', 1),
(27, '6v746vh47h4', '7vhv464hnbvv65', 'h465h45h47vh', '2013-03-31 21:01:53', '2013-03-31 21:01:53', 1),
(28, 'фівама', '', 'амавмвма', '2013-03-31 21:44:20', '2013-03-31 21:44:20', 1),
(29, 'wferrevrd', 'man   men   girl   cdscs', 'vrdvregvre', '2013-03-31 21:47:36', '2013-03-31 21:47:36', 1),
(30, 'wferrevrd', '   men      cdscs', 'vrdvregvre', '2013-03-31 21:48:31', '2013-03-31 21:48:31', 1),
(31, 'wferrevrd', '***   men   ****   cdscs', 'vrdvregvre', '2013-03-31 21:48:51', '2013-03-31 21:48:51', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(32) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`) VALUES
(1, 'qwerty', '123456'),
(2, 'qwert', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
