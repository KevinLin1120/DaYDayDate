-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2022 年 06 月 12 日 12:51
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dddate`
--

-- --------------------------------------------------------

--
-- 資料表結構 `schedule`
--

CREATE TABLE `schedule` (
  `_id` int(11) NOT NULL,
  `userId` tinyint(4) NOT NULL,
  `title` varchar(4) NOT NULL,
  `stDT` datetime NOT NULL,
  `enDT` datetime NOT NULL,
  `link` longtext DEFAULT NULL,
  `invites` int(11) DEFAULT NULL,
  `color` tinytext NOT NULL,
  `note` longtext DEFAULT NULL,
  `isPublic` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `schedule`
--

INSERT INTO `schedule` (`_id`, `userId`, `title`, `stDT`, `enDT`, `link`, `invites`, `color`, `note`, `isPublic`) VALUES
(1, 1, 'test', '2022-06-11 16:40:03', '2022-06-14 16:40:03', NULL, NULL, 'red', NULL, 1),
(2, 1, 'Test', '2022-06-14 16:42:07', '2022-06-23 16:42:07', NULL, NULL, 'blue', NULL, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `_id` int(11) NOT NULL,
  `username` tinytext NOT NULL,
  `pwd` longtext NOT NULL,
  `email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`_id`, `username`, `pwd`, `email`) VALUES
(1, 'Kevin', '123', 'kevinlin1120a@gmail.com');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`_id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`_id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `schedule`
--
ALTER TABLE `schedule`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
