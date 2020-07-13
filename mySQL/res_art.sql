-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 02:15:59
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
-- 資料表結構 `res_art`
--

CREATE TABLE `res_art` (
  `id` int(10) NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `res_art`
--

INSERT INTO `res_art` (`id`, `name`, `title`, `text`, `link`, `sh`) VALUES
(2, 'AA-01.jpg', '萬年曆', '使用PHP製作取時間的萬年曆', 'http://220.128.133.15/s1090202/calendar/', 1),
(3, 'AA-02.jpg', 'JS闖關小遊戲', '純JS製作配合使用套件Sweetalrt', 'https://wuge01.github.io/little_game01/', 1),
(4, 'AA-03.jpg', '調色盤', '純JS製作選顏色的小工具', 'https://wuge01.github.io/SeclectColer/', 1),
(5, 'AA-04.jpg', '數字時鐘', '純JS製作使用動畫效果', 'https://wuge01.github.io/DigiClock/', 1),
(6, 'AA-06.jpg', '指針時鐘', '會隨機分布背景齒輪的時鐘', 'http://220.128.133.15/s1090202/RoundClock2/', 1),
(7, 'AA-07.jpg', '一頁式網頁', '配合BS製作一頁式網頁', 'https://wuge01.github.io/bookBS-Project-Hotel/', 1),
(8, 'AA-08.jpg', '餵熊貓JS小遊戲', '使用JS製作的網頁小遊戲', 'https://wuge01.github.io/Gopher/', 1),
(9, 'AA-05.jpg', 'canvas時鐘', '嘗試純用canvas製作的時鐘', 'https://wuge01.github.io/RoundClock/', 1),
(10, 'AA-09.jpg', '統一發票兌獎系統', '結合資料庫與PHP製作的個人使用兌獎系統', 'http://220.128.133.15/s1090202/invoice/', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `res_art`
--
ALTER TABLE `res_art`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res_art`
--
ALTER TABLE `res_art`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
