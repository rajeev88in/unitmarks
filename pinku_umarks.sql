-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 25, 2022 at 10:31 AM
-- Server version: 10.5.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u663555798_mnsnhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `pinku_umarks`
--

CREATE TABLE `pinku_umarks` (
  `id` int(5) NOT NULL,
  `class` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(2) NOT NULL,
  `sid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u1` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u2` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pinku_umarks`
--

INSERT INTO `pinku_umarks` (`id`, `class`, `section`, `roll`, `sid`, `sname`, `subject`, `u1`, `u2`) VALUES
(1, 'V', 'A', 1, 'L02202021', 'SHLOKE BANERJEE', 'BENGALI / HINDI (1ST LANG)', '10', '20'),
(2, 'V', 'A', 2, 'L02252021', 'ATRIJA DAS', 'BENGALI / HINDI (1ST LANG)', '10', '18'),
(3, 'V', 'A', 3, 'L01752021', 'DEBANSHI SAHA', 'BENGALI / HINDI (1ST LANG)', '10', '19'),
(4, 'V', 'A', 4, 'L02082021', 'JAHANVI BHOWMIK', 'BENGALI / HINDI (1ST LANG)', '9', '18'),
(5, 'V', 'A', 5, 'L01672021', 'SAYAN PAUL', 'BENGALI / HINDI (1ST LANG)', '10', '0'),
(6, 'V', 'A', 6, 'L01822021', 'ANKIT SARKAR', 'BENGALI / HINDI (1ST LANG)', '10', '15'),
(7, 'V', 'A', 7, 'L02782021', 'ANKAN GHOSH', 'BENGALI / HINDI (1ST LANG)', '9', '19'),
(8, 'V', 'A', 8, 'L02342021', 'ARIYAN PAUL', 'BENGALI / HINDI (1ST LANG)', '8', '19'),
(9, 'V', 'A', 9, 'L01722021', 'ANUPAM DUTTA', 'BENGALI / HINDI (1ST LANG)', '10', '19'),
(10, 'V', 'A', 10, 'L02562021', 'AYUSHI BISWAS', 'BENGALI / HINDI (1ST LANG)', '10', '14'),
(11, 'V', 'A', 11, 'L02572021', 'ARYA MITRA', 'BENGALI / HINDI (1ST LANG)', '10', '13'),
(12, 'V', 'A', 12, 'L01732021', 'ISHITA HALDER', 'BENGALI / HINDI (1ST LANG)', '10', '19'),
(13, 'V', 'A', 13, 'L02392021', 'SUBHAM SAHA', 'BENGALI / HINDI (1ST LANG)', '6', '15'),
(14, 'V', 'A', 14, 'L02282021', 'KINJAL SINGH', 'BENGALI / HINDI (1ST LANG)', '9', '17'),
(15, 'V', 'A', 15, 'L02532021', 'SRIJA CHAKRABORTY', 'BENGALI / HINDI (1ST LANG)', '9', '13'),
(16, 'V', 'A', 16, 'A00082022', 'ANNESHA DHAR', 'BENGALI / HINDI (1ST LANG)', '9', '13'),
(17, 'V', 'A', 17, 'L02002021', 'NAFEESA PARVIN', 'BENGALI / HINDI (1ST LANG)', '7', '12'),
(18, 'V', 'A', 18, 'L02072021', 'ADDAY SINGH', 'BENGALI / HINDI (1ST LANG)', '10', '14'),
(19, 'V', 'A', 19, 'L02022021', 'SRABONA KARMAKAR', 'BENGALI / HINDI (1ST LANG)', '8', '18'),
(20, 'V', 'A', 20, 'L02762021', 'ANUSHA MONDAL', 'BENGALI / HINDI (1ST LANG)', '9', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinku_umarks`
--
ALTER TABLE `pinku_umarks`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
