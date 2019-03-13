-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 13, 2019 at 01:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `PostID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CreatorID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  `content` varchar(480) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `PostID`, `CreatorID`, `DateCreated`, `content`) VALUES
('2999999999', '1999999999', '0999999999', '2019-03-12 00:00:00', 'DUMMY DATA'),
('3000000000', '2000000000', '1000000001', '2019-03-12 10:59:00', 'Bidadadadadadada'),
('3000000001', '2000000000', '1000000002', '2019-03-12 11:00:00', 'Kuakuwi Kuakuwi Kuakuwi'),
('3000000002', '2000000001', '1000000001', '2019-03-12 13:59:00', 'Darf ich Sie zu einer kurzen Fuehrung durch die Firma einladen?'),
('3000000003', '2000000001', '1000000002', '2019-03-12 15:00:00', 'Sind Sie oft auf Geschaftsreise?');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `PostID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CreatorID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DateCreated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(480) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`PostID`, `CreatorID`, `DateCreated`, `content`) VALUES
('1999999999', '0999999999', '2019-03-12 00:00:00', 'DUMMY DATA'),
('2000000000', '1000000000', '2019-03-12 03:56:00', 'Ahsiaaaap Ahsiaaaap Ahsiaaaap'),
('2000000001', '1000000000', '2019-03-12 09:16:00', 'Ban mbledos');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ProfilePicture` blob,
  `Bio` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Web` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NamaDepan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NamaBelakang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JenisKelamin` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TempatLahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Alamat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kota` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Provinsi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HashPass` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `ProfilePicture`, `Bio`, `Web`, `NamaDepan`, `NamaBelakang`, `JenisKelamin`, `TanggalLahir`, `TempatLahir`, `Alamat`, `Kota`, `Provinsi`, `hp`, `email`, `HashPass`, `salt`) VALUES
('0999999999', NULL, 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'Jakarta', 'DKI Jakarta', '0812345', 'email@email.com', 'DUMMY DATA', 'DUMMY DATA'),
('1000000000', NULL, 'Hidup seperti susu yang tumpah', 'www.123.com', 'Kuki', 'Kaki', 'L', '2000-01-01', 'Jakarta', 'Jalan Kedutaan', 'Jakarta', 'DKI Jakarta', '0812345', 'email@email.com', 'BA39CD29A2FC099F7E791468C245423C', 'Kuki'),
('1000000001', NULL, 'Bio 2', 'www.456.com', 'Jaaka', 'Jajak', 'L', '1990-01-01', 'Jakarta', 'Jalan Kebesaran', 'Jakarta', 'DKI Jakarta', '0832983285', '2email@email.com', '2CFBAFD9CA89D5E887A1351DC246900C', 'Jaaka'),
('1000000002', NULL, 'Bio 3', 'www.789.com', 'Abadi', 'Jaya', 'L', '1999-01-01', 'Jakarta', 'Jalan Kekecilan', 'Jakarta', 'DKI Jakarta', '09748364455', '3emails@email.com', 'A446A092795ED97FE8F10EF136765166', 'Abadi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`,`PostID`,`CreatorID`),
  ADD KEY `comment_fk0` (`PostID`),
  ADD KEY `comment_fk1` (`CreatorID`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`PostID`,`CreatorID`),
  ADD KEY `post_fk0` (`CreatorID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_fk0` FOREIGN KEY (`PostID`) REFERENCES `post` (`PostID`),
  ADD CONSTRAINT `comment_fk1` FOREIGN KEY (`CreatorID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_fk0` FOREIGN KEY (`CreatorID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
