-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2020 年 07 月 14 日 08:45
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `ListView`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ListView`
--

CREATE TABLE `ListView` (
  `Id` int(3) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Birthday` date NOT NULL,
  `Address` text NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `ListView`
--

INSERT INTO `ListView` (`Id`, `Name`, `Gender`, `Phone`, `Birthday`, `Address`, `Email`) VALUES
(1, 'June', 'Female', '0911-987321', '2001-09-10', 'asd', 'dww@dwq.com'),
(2, 'Mary', 'Female', '0932-987654', '1988-10-10', 'Mary''s home', 'mary@gmail.com'),
(4, 'tom', 'Male', '0920-987654', '1956-09-10', 'qweq123654', 'dww@dwq.com.tw'),
(6, 'Jack', 'Male', '0912-345678', '1977-01-02', 'Jack''s home', 'Jack@sharetech.com.tw'),
(8, 'Test', 'Female', '0920-987321', '1988-10-31', 'asd', 'abcd@gmail.com'),
(9, 'May', 'Female', '0966-457862', '1988-12-10', 'Jack''s home', 'dww@dwq.com.tw');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `ListView`
--
ALTER TABLE `ListView`
  ADD PRIMARY KEY (`Id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `ListView`
--
ALTER TABLE `ListView`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
