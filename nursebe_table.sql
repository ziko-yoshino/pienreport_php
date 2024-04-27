 phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2020 年 6 月 7 日 05:20
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db4`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_an_table`
--
SHOW CREATE TABLE nursebe_table;

CREATE TABLE IF NOT EXISTS `nursebe_table` (
    `id` int(12) NOT NULL,
    `situation` text COLLATE utf8_unicode_ci,
    `feelings` text COLLATE utf8_unicode_ci,
    `thoughts` text COLLATE utf8_unicode_ci,
    `evidence` text COLLATE utf8_unicode_ci,
    `contraryThoughts` text COLLATE utf8_unicode_ci,
    `balancedview` text COLLATE utf8_unicode_ci,
    `indate` datetime NOT NULL,
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_an_table`
--

INSERT INTO `nursebe_table` (`id`, `situation`, `feelings`, `thoughts`, `evidence`,`contraryThoughts`, `balancedview`,`indate`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_an_table`
--
ALTER TABLE nursebe_table MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_an_table`
--
ALTER TABLE `nursebe_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
