-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2019 at 05:54 AM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Bio` varchar(140) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Web` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NamaDepan` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NamaBelakang` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `JenisKelamin` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `TempatLahir` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Kota` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HashPass` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salt` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Bio`, `Web`, `NamaDepan`, `NamaBelakang`, `JenisKelamin`, `TanggalLahir`, `TempatLahir`, `Kota`, `hp`, `email`, `HashPass`, `salt`) VALUES
('0999999999', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'DUMMY DATA', 'D', '0000-00-00', 'DUMMY DATA', 'Jakarta', '0812345', 'email@email.com', 'DUMMY DATA', 'DUMMY DATA'),
('abadi12345', 'Bio 3', 'www.789.com', 'Abadi', 'Jaya', 'L', '1999-01-01', 'Jakarta', 'Jakarta', '09748364455', '3emails@email.com', 'A446A092795ED97FE8F10EF136765166', 'Abadi'),
('jaaka23456', 'Bio 2', 'www.456.com', 'Jaaka', 'Jajak', 'L', '1990-01-01', 'Jakarta', 'Jakarta', '0832983285', '2email@email.com', '2CFBAFD9CA89D5E887A1351DC246900C', 'Jaaka'),
('kukikaki12', 'Hidup seperti susu yang tumpah', 'www.123.com', 'Kuki', 'Kaki', 'L', '2000-01-01', 'Jakarta', 'Jakarta', '0812345', 'email@email.com', 'BA39CD29A2FC099F7E791468C245423C', 'Kuki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
