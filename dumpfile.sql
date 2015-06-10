-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 10:13 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `status_id` int(11) NOT NULL,
  `commented_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Upload_DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`status_id`, `commented_user`, `comment`, `Upload_DateTime`) VALUES
(46, 'Admin', 'slkfjsdl;kfjlsd', '2015-06-10 19:14:06'),
(45, 'Admin', 'dlksjfsl;fj', '2015-06-10 19:14:15'),
(41, 'Admin', 'safjsl;dkfj', '2015-06-10 19:14:26'),
(25, 'Admin', 'Nice set of wallpapers!', '2015-06-10 19:16:52'),
(25, 'kuldeep', 'I know, right?', '2015-06-10 19:47:03'),
(25, 'raoawais', '@kuldeep, tu great hai bhai!', '2015-06-10 19:47:52'),
(44, 'raoawais', 'I can comment on my own profile :O', '2015-06-10 20:09:53'),
(45, 'raoawais', 'Megaman.... :O', '2015-06-10 20:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `status_upload`
--

CREATE TABLE IF NOT EXISTS `status_upload` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UserID` int(10) unsigned NOT NULL,
  `Text` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Photo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Brag` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NowPlaying` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Upload_DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Dumping data for table `status_upload`
--

INSERT INTO `status_upload` (`ID`, `UserID`, `Text`, `Photo`, `Brag`, `NowPlaying`, `Upload_DateTime`) VALUES
(1, 1, 'This is the admin!', NULL, NULL, NULL, '2015-06-02 20:39:23'),
(2, 1, 'Follow the damn rules!', NULL, NULL, NULL, '2015-06-02 20:39:38'),
(3, 12, 'This is cross, over.', NULL, NULL, NULL, '2015-06-02 20:40:03'),
(4, 12, 'asmndask', NULL, NULL, NULL, '2015-06-03 05:03:33'),
(5, 12, 'sdfnlkjds', NULL, NULL, NULL, '2015-06-03 06:02:53'),
(6, 12, 'sdkfjh', NULL, NULL, NULL, '2015-06-03 06:09:50'),
(7, 12, 'da,', NULL, NULL, NULL, '2015-06-03 06:10:17'),
(8, 1, 'sdflj', NULL, NULL, NULL, '2015-06-03 06:10:54'),
(9, 27, 'awais', NULL, NULL, NULL, '2015-06-03 06:11:20'),
(10, 28, 'My name is Kuldeep', NULL, NULL, NULL, '2015-06-08 09:31:18'),
(25, 28, 'Uploaded photos.', ' Papers 11.jpg,Papers 12.jpg,Papers 13.jpg,Papers 14.jpg', NULL, NULL, '2015-06-08 19:51:36'),
(26, 28, 'Uploaded photos.', ' Papers 06.jpg', NULL, NULL, '2015-06-08 20:16:06'),
(27, 34, 'liejfa', NULL, NULL, NULL, '2015-06-09 05:08:28'),
(39, 28, 'dakfj', NULL, NULL, 'Dota', '2015-06-09 19:58:05'),
(40, 28, 'sdjsad', NULL, 'achievement unlocked', NULL, '2015-06-09 19:58:30'),
(41, 28, 'dflkdsj', NULL, NULL, NULL, '2015-06-09 19:59:41'),
(42, 12, 'New game! LOVE NFS!', NULL, NULL, 'NFS', '2015-06-09 23:55:50'),
(43, 12, 'ldkjf', NULL, NULL, NULL, '2015-06-10 10:35:37'),
(44, 37, 'yo!', NULL, 'Coded this brag!', NULL, '2015-06-10 14:14:59'),
(45, 37, 'k.', NULL, NULL, 'MegaMan', '2015-06-10 14:25:56'),
(46, 37, '', NULL, NULL, 'Billiards', '2015-06-10 14:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'defaultProfilePicture.png',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `profile_pic`) VALUES
(1, 'Admin', 'Admin', 'defaultProfilePicture.png'),
(12, 'cross', '1234', 'defaultProfilePicture.png'),
(14, 'hamza', 'fghj', 'defaultProfilePicture.png'),
(16, 'dslf', 'jehf', 'defaultProfilePicture.png'),
(18, 'djfh', 'www', 'defaultProfilePicture.png'),
(19, 'lelr', 'eriui', 'defaultProfilePicture.png'),
(20, 'vcnvm', 'nbvn', 'defaultProfilePicture.png'),
(21, 'fjkgh', 'jhf', 'defaultProfilePicture.png'),
(22, 'fnm', 'kff', 'defaultProfilePicture.png'),
(23, 'bbb', 'mnb', 'defaultProfilePicture.png'),
(24, 'bvc', 'mmm', 'defaultProfilePicture.png'),
(25, '', '', 'defaultProfilePicture.png'),
(26, 'hamzamasud', '123456', 'defaultProfilePicture.png'),
(27, 'awais', 'rao', 'defaultProfilePicture.png'),
(28, 'Kuldeep', 'kumar', 'defaultProfilePicture.png'),
(29, 'test1', 'test1', 'defaultProfilePicture.png'),
(30, 'test2', 'test2', 'defaultProfilePicture.png'),
(31, 'test3', 'test3', 'defaultProfilePicture.png'),
(32, 'test4', 'test4', 'defaultProfilePicture.png'),
(33, 'test5', 'test5', 'defaultProfilePicture.png'),
(34, 'test6', 'test6', 'Papers 06.jpg'),
(35, 'megaman', 'exe', 'defaultProfilePicture.png'),
(36, 'awaisrao', 'rao', 'defaultProfilePicture.png'),
(37, 'raoawais', 'abcd', 'Mushkpuri2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
