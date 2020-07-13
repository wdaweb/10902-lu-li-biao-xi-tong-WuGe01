-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 02:16:26
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
-- 資料表結構 `res_skill`
--

CREATE TABLE `res_skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `power` int(10) NOT NULL,
  `type` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `res_skill`
--

INSERT INTO `res_skill` (`id`, `name`, `title`, `text`, `power`, `type`) VALUES
(3, 'CSS-01.png', 'CSS', 'CSS 網頁樣式表，可彈性自定變化網頁元素顯示樣貌，節省工作時間。', 80, 'image/png'),
(4, 'html-01.png', 'HTML', 'HTML 是基礎網頁技術，網頁瀏覽器可以讀取 HTML 檔案，成為視覺化網頁。', 90, 'image/png'),
(7, 'JS-01.png', 'JavaScript', 'JavaScript 是最流行的腳本語言，能在靜態頁面上添加一些動態效果。', 80, 'image/png'),
(8, 'JQ-01.png', 'jQuery', '以 JS 為基礎的函式庫，號稱能讓開發者能寫的少，做的多！', 70, 'image/png'),
(9, 'BS-01.png', 'Boostrap', '熱門的前端框架工具，用於設計響應式網站、排版、格式和介面。', 80, 'image/png'),
(10, 'PS-01.png', 'Photoshop', '學習影像處理的主流軟體，用於規劃網頁版面或編修圖片應用。', 80, 'image/png'),
(11, 'AI-01.png', 'Illustrator', '熟悉貝茲曲線運用，不失真的向量圖形格式，廣泛的應用在網頁等設計。', 80, 'image/png'),
(12, 'GIT-01.png', 'Git', 'Git 為分散式版本控制系統，可以把檔案的狀態作為更新歷史記錄保存起來。', 70, 'image/png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `res_skill`
--
ALTER TABLE `res_skill`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res_skill`
--
ALTER TABLE `res_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
