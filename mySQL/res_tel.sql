-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 02:16:30
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `res_tel`
--

CREATE TABLE `res_tel` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `word` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telTime` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `res_tel`
--

INSERT INTO `res_tel` (`id`, `food`, `word`, `place`, `tel`, `email`, `telTime`) VALUES
(1, '月薪35000元', '全職/全端網頁/工程師', '台灣台北市、台灣新北市', '0988-857-062', 'bc781208@hotmail.com', '周一至周五下午六點至十一點與周六周日');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `res_tel`
--
ALTER TABLE `res_tel`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res_tel`
--
ALTER TABLE `res_tel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
