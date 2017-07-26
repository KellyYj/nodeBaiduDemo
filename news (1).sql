-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-23 06:30:59
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mynewsdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `id` int(20) NOT NULL,
  `newstype` char(200) NOT NULL,
  `newstitle` varchar(200) NOT NULL,
  `newsimg` varchar(200) NOT NULL,
  `newstime` datetime NOT NULL,
  `newssrc` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `newstype`, `newstitle`, `newsimg`, `newstime`, `newssrc`) VALUES
(1, '精选', '习近平主持召开中央财经领导小组第十', '', '0000-00-00 00:00:00', ''),
(2, '百家', '央视网消息（新闻联播）：中共中央总书记、国家主席、中央军委主席、中央财经领导小组组长习近平7月17日下午主持召开中央财经领导小组第十六次会议，研究改善投资和市场环境、扩大对外开放问题。习近平发表重要讲话强调，要改善投资和市场环境，加快对外开放步伐，降低市场运行成本，营造稳定公平透明、可预期的营商环境，加快建设开放型经济新体制，推动我国经济持续健康发展。\r\n\r\n　　中共中央政治局常委、国务院总理、中', '', '0000-00-00 00:00:00', ''),
(3, '娱乐', '央气象台7月17日06时继续发布高温橙色预警：\r\n　　预计，7月17日白天，内蒙古大部、吉林西部、辽宁北部、甘肃中西部、陕西关中地区、江汉、江淮、江南、重庆和新疆南疆盆地等地有35℃以上的高温天气，其中，内蒙古西部和东部偏南地区、甘肃西部、浙江大部、江苏南部、上海、江西中部、福建中部、湖北东南部、湖南中东部、重庆南部及新疆南疆盆地等地的部分地区最高气温可达37～39℃，局地可超过40℃。', '', '0000-00-00 00:00:00', ''),
(4, '精选', '123', 'img/2.jpg', '2017-07-20 00:00:00', '22222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
