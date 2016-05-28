-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2016 at 05:08 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL,
  `a_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `a_desc`) VALUES
(5, '<p>hvjhh,bkbk</p>');

-- --------------------------------------------------------

--
-- Table structure for table `analysis`
--

CREATE TABLE IF NOT EXISTS `analysis` (
  `id` int(11) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `writer` varchar(110) NOT NULL,
  `a_desc` text NOT NULL,
  `a_date` datetime NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analysis`
--

INSERT INTO `analysis` (`id`, `headline`, `writer`, `a_desc`, `a_date`, `insert_date`) VALUES
(11, ',snnd', ',dd', 'ww', '0000-00-00 00:00:00', '2016-05-20 23:16:59'),
(12, 'mnbnmbm', ',dd', 'hgfhf', '2016-05-30 00:00:00', '2016-05-21 13:54:45'),
(13, 'mdn', 'ddd', 'Hello there<br>', '2016-05-29 00:00:00', '2016-05-21 13:58:56'),
(14, 'edited', 'writer', 'hello there jke3juhfsss<br>', '2016-06-23 00:00:00', '2016-05-21 14:08:35');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `b_date` datetime NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `title`, `b_date`, `insert_date`) VALUES
(26, '', 'jnff', '2016-05-09 00:00:00', '2016-05-21 23:18:44'),
(27, 'http://localhost/agencyDelta/bdgs/upload/banner/female1.jpg', 'jnff', '2016-05-02 00:00:00', '2016-05-21 23:19:08'),
(28, '', 'jnff', '2016-05-02 00:00:00', '2016-05-21 23:19:45'),
(29, 'http://localhost/agencyDelta/bdgs/upload/banner/14.png', 'jnff', '2016-05-02 00:00:00', '2016-05-21 23:20:09'),
(30, 'http://localhost/agencyDelta/bdgs/upload/banner/stock-illustration-3294793-woman-woman-royalty-free-vector-icon-set-round-buttons.jpg', 'l;ef;jfn', '2016-05-18 00:00:00', '2016-05-21 23:21:58'),
(31, 'http://localhost/agencyDelta/bdgs/upload/banner/female2.jpg', 'postar 1', '2016-05-23 00:00:00', '2016-05-24 11:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `centrl_comittee`
--

CREATE TABLE IF NOT EXISTS `centrl_comittee` (
  `id` int(11) NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `centrl_comittee`
--

INSERT INTO `centrl_comittee` (`id`, `c_desc`) VALUES
(1, '<p>,dw,nmel,wlw</p>'),
(3, '<p>c3</p>'),
(4, '<p>x</p>'),
(5, '<p>ww</p>');

-- --------------------------------------------------------

--
-- Table structure for table `constitution`
--

CREATE TABLE IF NOT EXISTS `constitution` (
  `id` int(11) NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL,
  `c_desc` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `c_desc`) VALUES
(3, '<p>hello,m ,n</p>');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `id` int(11) NOT NULL,
  `d_date` datetime NOT NULL,
  `name` varchar(300) NOT NULL,
  `amount` int(11) NOT NULL,
  `medium` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `sub_headline` varchar(300) NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(300) NOT NULL,
  `event_detail_front` varchar(300) NOT NULL,
  `event_detail_rest` text NOT NULL,
  `elat` float NOT NULL,
  `elong` float NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `headline`, `sub_headline`, `event_date`, `location`, `event_detail_front`, `event_detail_rest`, `elat`, `elong`, `insert_date`) VALUES
(1, ' ,c', ',d ,', '2016-05-11 00:00:00', ',m ', ',f ,', 'md fmf', 0, 0, '2016-05-24 23:47:18'),
(2, ',snnd', 'ss', '2016-05-10 00:00:00', 'dhaka 2', '', '', 0, 0, '2016-05-25 00:03:30'),
(3, 'head3', '', '2016-05-18 00:00:00', '', '', '', 0, 0, '2016-05-25 00:23:41'),
(4, ',snnd', '', '2016-05-30 00:00:00', '', '', '', 0, 0, '2016-05-25 00:25:59'),
(5, 'Event add test', 'sub text', '2016-05-01 00:00:00', 'location text', '<h3 align="center"><strong>front face</strong></h3><p>Front<br></p>', '<strong>B</strong>ack', 12, 34, '2016-05-25 12:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

CREATE TABLE IF NOT EXISTS `event_image` (
  `event_image_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_image` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `cover_image` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_image`
--

INSERT INTO `event_image` (`event_image_id`, `event_id`, `event_image`, `title`, `cover_image`) VALUES
(1, 2, 'http://localhost/agencyDelta/bdgs/upload/event/female1.jpg', '.mm', 0),
(2, 2, 'http://localhost/agencyDelta/bdgs/upload/event/female11.jpg', '.kkl', 0),
(3, 3, 'http://localhost/agencyDelta/bdgs/upload/event/female2.jpg', '', 0),
(4, 3, 'http://localhost/agencyDelta/bdgs/upload/event/female21.jpg', '', 0),
(5, 4, 'http://localhost/agencyDelta/bdgs/upload/event/female12.jpg', '', 0),
(6, 4, 'http://localhost/agencyDelta/bdgs/upload/event/female13.jpg', '', 1),
(7, 4, 'http://localhost/agencyDelta/bdgs/upload/event/female14.jpg', '', 0),
(8, 5, 'http://localhost/agencyDelta/bdgs/upload/event/gp.png', '1', 0),
(9, 5, 'http://localhost/agencyDelta/bdgs/upload/event/gp1.png', '2', 0),
(10, 5, 'http://localhost/agencyDelta/bdgs/upload/event/gp2.png', '3', 1),
(11, 5, 'http://localhost/agencyDelta/bdgs/upload/event/gp3.png', '4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_video`
--

CREATE TABLE IF NOT EXISTS `event_video` (
  `event_video_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `video_link` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_video`
--

INSERT INTO `event_video` (`event_video_id`, `event_id`, `video_link`, `title`) VALUES
(1, 2, 'm', 'mnnm'),
(2, 2, 'as', ',ms'),
(3, 3, '', ''),
(4, 4, '', ''),
(5, 5, 'l1', 't1'),
(6, 5, 'l2', 't2');

-- --------------------------------------------------------

--
-- Table structure for table `focus_event`
--

CREATE TABLE IF NOT EXISTS `focus_event` (
  `focus_event_id` int(11) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `sub_headline` varchar(300) NOT NULL,
  `event_detail_front` varchar(300) NOT NULL,
  `event_detail_rest` text NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(300) NOT NULL,
  `elat` float NOT NULL,
  `elong` float NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `focus_event`
--

INSERT INTO `focus_event` (`focus_event_id`, `headline`, `sub_headline`, `event_detail_front`, `event_detail_rest`, `event_date`, `location`, `elat`, `elong`, `insert_date`) VALUES
(1, 'headline', 'sub', 'mnkhnk', 'mn kt hbk gf k vk gbk kfv', '2016-05-25 00:00:00', ',nfn', 123, 23, '2016-05-24 16:03:57'),
(2, ',snnd', 'ss', 'sss', 'ss', '2016-05-03 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 16:57:17'),
(3, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', '', 0, 0, '2016-05-24 16:58:28'),
(4, 'mdn', '', '', '', '2016-05-03 00:00:00', '', 0, 0, '2016-05-24 16:59:57'),
(5, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:06:07'),
(6, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:06:29'),
(7, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:07:05'),
(8, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:07:39'),
(9, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:08:33'),
(10, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:08:50'),
(11, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:11:53'),
(12, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:12:34'),
(13, 'mdn', 'ss', '', '', '2016-05-10 00:00:00', 'dhaka 2', 0, 0, '2016-05-24 17:12:56'),
(14, 'www', '', '', '', '2016-05-11 00:00:00', '', 0, 0, '2016-05-25 00:18:24'),
(15, 'www', '', '', '', '2016-05-11 00:00:00', '', 0, 0, '2016-05-25 00:21:11'),
(16, ',snnd', 'sub text', '', '', '2016-05-03 00:00:00', 'dhaka 2', 23.8103, 90.4125, '2016-05-25 13:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `focus_event_image`
--

CREATE TABLE IF NOT EXISTS `focus_event_image` (
  `fei_id` int(11) NOT NULL,
  `event_image` varchar(300) NOT NULL,
  `focus_event_id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `cover_image` tinyint(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `focus_event_image`
--

INSERT INTO `focus_event_image` (`fei_id`, `event_image`, `focus_event_id`, `title`, `cover_image`) VALUES
(1, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female2.jpg', 12, '', 0),
(2, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female21.jpg', 12, '', 0),
(3, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female22.jpg', 12, '', 0),
(4, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female23.jpg', 13, '', 0),
(5, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female24.jpg', 13, '', 0),
(6, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female25.jpg', 13, '', 0),
(7, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female1.jpg', 15, '', 0),
(8, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female11.jpg', 15, '', 1),
(9, 'http://localhost/agencyDelta/bdgs/upload/focus_event/female12.jpg', 15, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `leaflet`
--

CREATE TABLE IF NOT EXISTS `leaflet` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `l_desc` text NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaflet`
--

INSERT INTO `leaflet` (`id`, `title`, `image`, `l_desc`, `insert_date`) VALUES
(1, ',d ,', '', ',m d,m v', '2016-05-22 15:37:29'),
(2, 'leaflet 1', 'http://localhost/agencyDelta/bdgs/upload/leaflet/female2.jpg', ',mdnlf', '2016-05-22 16:40:24'),
(3, 'leaflet 1edited2', 'http://localhost/agencyDelta/bdgs/upload/leaflet/female1.jpg', 'edited 2<br>', '2016-05-22 16:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `next_event`
--

CREATE TABLE IF NOT EXISTS `next_event` (
  `next_event_id` int(11) NOT NULL,
  `headline` varchar(300) NOT NULL,
  `event_date` datetime NOT NULL,
  `location` varchar(1300) NOT NULL,
  `fb_link` varchar(200) NOT NULL,
  `elat` double NOT NULL,
  `elong` double NOT NULL,
  `image` varchar(300) NOT NULL,
  `insert_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next_event`
--

INSERT INTO `next_event` (`next_event_id`, `headline`, `event_date`, `location`, `fb_link`, `elat`, `elong`, `image`, `insert_date`) VALUES
(1, 'head 6', '2016-05-11 00:00:00', 'dhaka', 'fb', 2.119999885559082, 3.450000047683716, ',fm', '2016-05-24 15:55:10'),
(2, 'mdn', '2016-05-18 00:00:00', 'dhaka', '2016-05', 201, 123, 'http://localhost/agencyDelta/bdgs/upload/next_event/female2.jpg', '2016-05-24 15:55:10'),
(3, 'snbfkjf', '2016-05-10 00:00:00', 'dhaka', '2016-05', 1234, 234.3000030517578, 'http://localhost/agencyDelta/bdgs/upload/next_event/female1.jpg', '2016-05-24 15:55:10'),
(4, 'Event add test', '2016-05-09 00:00:00', '22/cha mohanonda monami north badda , dhaka , bangladesh', '2016-05', 23.717704736580632, 90.38655853271439, 'http://localhost/agencyDelta/bdgs/upload/next_event/gonosonghoti.jpg', '2016-05-25 13:01:48');

-- --------------------------------------------------------

--
-- Table structure for table `poster`
--

CREATE TABLE IF NOT EXISTS `poster` (
  `id` int(11) NOT NULL,
  `image` varchar(3000) NOT NULL,
  `title` varchar(300) NOT NULL,
  `p_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poster`
--

INSERT INTO `poster` (`id`, `image`, `title`, `p_date`) VALUES
(1, 'http://localhost/agencyDelta/bdgs/upload/poster/1.jpg', 'poster1', '2016-05-18 00:00:00'),
(2, '', 'leaflet 1', '2016-05-10 00:00:00'),
(3, '', 'leaflet 13', '2016-05-09 00:00:00'),
(4, 'http://localhost/agencyDelta/bdgs/upload/poster/female1.jpg', 'leaflet 13', '2016-05-09 00:00:00'),
(5, 'http://localhost/agencyDelta/bdgs/upload/poster/female2.jpg', 'jfn', '2016-05-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(300) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `join_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_edit` datetime NOT NULL,
  `about` text NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analysis`
--
ALTER TABLE `analysis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centrl_comittee`
--
ALTER TABLE `centrl_comittee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `constitution`
--
ALTER TABLE `constitution`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_image`
--
ALTER TABLE `event_image`
  ADD PRIMARY KEY (`event_image_id`);

--
-- Indexes for table `event_video`
--
ALTER TABLE `event_video`
  ADD PRIMARY KEY (`event_video_id`);

--
-- Indexes for table `focus_event`
--
ALTER TABLE `focus_event`
  ADD PRIMARY KEY (`focus_event_id`);

--
-- Indexes for table `focus_event_image`
--
ALTER TABLE `focus_event_image`
  ADD PRIMARY KEY (`fei_id`);

--
-- Indexes for table `leaflet`
--
ALTER TABLE `leaflet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next_event`
--
ALTER TABLE `next_event`
  ADD PRIMARY KEY (`next_event_id`);

--
-- Indexes for table `poster`
--
ALTER TABLE `poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `analysis`
--
ALTER TABLE `analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `centrl_comittee`
--
ALTER TABLE `centrl_comittee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `constitution`
--
ALTER TABLE `constitution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event_image`
--
ALTER TABLE `event_image`
  MODIFY `event_image_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `event_video`
--
ALTER TABLE `event_video`
  MODIFY `event_video_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `focus_event`
--
ALTER TABLE `focus_event`
  MODIFY `focus_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `focus_event_image`
--
ALTER TABLE `focus_event_image`
  MODIFY `fei_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `leaflet`
--
ALTER TABLE `leaflet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `next_event`
--
ALTER TABLE `next_event`
  MODIFY `next_event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `poster`
--
ALTER TABLE `poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
