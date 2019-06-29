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

-- Set `project` db
use project;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `status_id` int(11) NOT NULL,
  `commented_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Upload_DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `status_upload`
--

DROP TABLE IF EXISTS `status_upload`;
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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'defaultProfilePicture.png',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

