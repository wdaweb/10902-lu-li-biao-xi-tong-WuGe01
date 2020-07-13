-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-07-13 02:16:04
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
-- 資料表結構 `res_exp`
--

CREATE TABLE `res_exp` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sh` int(1) NOT NULL,
  `time` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 傾印資料表的資料 `res_exp`
--

INSERT INTO `res_exp` (`id`, `name`, `title`, `text`, `sh`, `time`, `type`) VALUES
(3, 'EXP-04.png', '爵恩設計', '印前業務兼平面設計,職責\n\n1. 公司印刷業務處理，發稿發件印刷廠、跑印刷業務(B to B)。\n \n2. 公司商業CIS設計：LOGO、DM設計、海報、形象設計。\n\n3. 整理公司合約書，並擬定合約條例。 \n</div>', 1, 'Oct 2018 ~ Dec 2019', 'image/png'),
(4, 'EXP-03.png', '美食映象', '平面設計與人事行政，職責：<br>\r\n1. 公司商業CIS設計：LOGO、DM設計、海報、形象設計。<br> \r\n2. 公司印刷品管理、盤點、發稿發件印刷廠、跑印刷業務(B to B)。<br> \r\n3. 公司新創雜誌助理、負責雜誌資料收集，與文案編輯。<br>\r\n4. 公司舉辦商業加盟展(一年三次)、場地布置、及現場工作人員。<br> \r\n5. 公司舉辦座談課程(兩周一次)、場地布置、及現場工作人員、活動前準備。 ', 1, 'Oct 2016 ~ Oct 2018', 'image/png'),
(5, 'EXP-01.png', '私立世新大學', '工商管理學士（BBA）\n企業管理學系', 1, '2008 ~ 2012', 'image/png'),
(6, 'EXP-02.png', '國立三重高', '高中文憑\n文組', 1, '2005 ~ 2008', 'image/png');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `res_exp`
--
ALTER TABLE `res_exp`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `res_exp`
--
ALTER TABLE `res_exp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
