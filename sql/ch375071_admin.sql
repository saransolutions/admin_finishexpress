-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2024 at 09:23 AM
-- Server version: 8.0.40-0ubuntu0.20.04.1
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ch375071_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `project_id` int NOT NULL,
  `path` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `is_cover_photo` tinyint NOT NULL DEFAULT '0',
  `comments` varchar(3000) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `added_date`, `project_id`, `path`, `is_cover_photo`, `comments`) VALUES
(7, '2024-11-22 14:34:42', 100, './album/100/144320506_2513300362304313_4124348258956181719_n.jpg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookies`
--

CREATE TABLE `bookies` (
  `bid` mediumint NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `jdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookies`
--

INSERT INTO `bookies` (`bid`, `username`, `password`, `role`, `jdate`) VALUES
(1, 'admin', 'welcome', 'admin', '2014-07-10'),
(2, 'saran', 'welcome3ibm', NULL, '2014-11-06');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` mediumint NOT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `last_name` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `ort` varchar(25) DEFAULT NULL,
  `pin_code` mediumint DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `service_type` varchar(50) DEFAULT NULL,
  `product_type` varchar(25) DEFAULT NULL,
  `website_name` varchar(25) DEFAULT NULL,
  `supported_language` varchar(25) DEFAULT NULL,
  `total_pages` smallint DEFAULT NULL,
  `media_support` varchar(50) DEFAULT NULL,
  `domain_hosting` varchar(30) DEFAULT NULL,
  `mail_support` varchar(30) DEFAULT NULL,
  `mail_advertisement` varchar(30) DEFAULT NULL,
  `user_feedback` varchar(30) DEFAULT NULL,
  `seo_support` varchar(30) DEFAULT NULL,
  `google_business_support` varchar(30) DEFAULT NULL,
  `cookies_support` varchar(30) DEFAULT NULL,
  `google_check_activation` varchar(30) DEFAULT NULL,
  `advance_paid` varchar(5) DEFAULT NULL,
  `advance_amount` int DEFAULT NULL,
  `total_price` int DEFAULT NULL,
  `balance` int DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `warranty_period` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `rate` int NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `rate`, `comment`, `date`) VALUES
(1, 'Saranya Gurumoorthy', 5, 'Excellent work', '2024-08-22 15:49:13'),
(2, 'Sundaravel ', 5, 'Good ', '2024-08-22 16:58:50'),
(3, 'Lukas', 5, 'Sie haben meine Wohnung wie neu gereinigt und das in kürzester Zeit. Ich bin sehr zufrieden mit ihrer Arbeit.  Top top ', '2024-08-26 09:59:38'),
(5, 'Aebischer ', 5, 'Alles super geklappt beste empfelung ', '2024-09-20 10:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `created_date` date DEFAULT NULL,
  `type_of_service` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `building_type` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `floor` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `number_of_rooms` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `square_meters` varchar(25) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_elevator` varchar(5) COLLATE utf8mb4_general_ci DEFAULT 'No',
  `prefix` varchar(10) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Herr',
  `first_name` varchar(40) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `ort` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pin_code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `start_date_time` timestamp NULL DEFAULT NULL,
  `end_date_time` timestamp NULL DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `advance_amount` float DEFAULT NULL,
  `balance` float DEFAULT NULL,
  `comments_1` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `comments_2` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `comments_3` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ort_nach` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created_date`, `type_of_service`, `building_type`, `floor`, `number_of_rooms`, `square_meters`, `is_elevator`, `prefix`, `first_name`, `last_name`, `address`, `ort`, `pin_code`, `mobile`, `email`, `start_date_time`, `end_date_time`, `total_price`, `advance_amount`, `balance`, `comments_1`, `comments_2`, `comments_3`, `ort_nach`) VALUES
(38, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '3', '110', 'Nein', 'Frau', 'Bragh-Bihl', 'Hanne', 'Rottmannsbodenstrasse 118', 'Binningen', '4122', '0041767114610', 'hanne_frederiksen@yahoo.com', '2024-09-23 06:00:00', '2024-09-23 14:00:00', 700, 0, 700, '', '', '', ''),
(41, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '91', 'Nein', 'Frau', 'Schnell', 'Linda', 'Hechtring 21', ' Biberist', '4562', '+41797472075', 'lin_ghalia@hotmail.com', '2024-09-27 06:00:00', '2024-09-27 14:00:00', 800, 0, 800, '', '', '', ''),
(42, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '92', 'Nein', 'Frau', 'Ribas', 'Keviny', 'Fuhrstrasse 12', 'Langnau', '8135', '+41797128502', 'keviny-ribas@hotmail.com', '2024-09-30 06:00:00', '2024-09-30 14:00:00', 790, 0, 790, '', '', '', ''),
(47, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '100', 'Nein', 'Herr', 'Manuel', 'Aebischer', ' Ober finsterwald 1', ' Finsterwald b. Entlebuch', '6162', '0041799520901', 'aebischer4@hotmail.de', '2024-09-19 06:00:00', '2024-09-19 14:00:00', 790, 0, 790, '', '', '', ''),
(49, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', '2.Stock', '5.5', '100', 'Nein', 'Herr', 'Justra', 'Martin', 'Löhrenweg 63', 'Biel/Bienne', '2504', '0041798240746', 'martin.justra@posteo.de', '2024-10-30 07:00:00', '2024-10-30 15:00:00', 890, 0, 890, '', '', '', ''),
(53, '2024-09-21', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '1.5', '27', 'Nein', 'Herr', 'Ribolzi', 'Sara', 'Hammerstrasse 77', ' Zürich', '8032', '+41782311628', 'ribolzi.sara@gmail.com', '2024-09-29 06:30:00', '2024-09-29 14:00:00', 490, 0, 490, '', '', '', ''),
(54, '2024-09-24', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '100', 'Ja', 'Herr', 'Ates', 'Ronja', 'Rue des la cascade 18', ' Neuchâtel', '2000', '+41764924816', 'ronja_ates@hotmail.com', '2024-09-26 06:00:00', '2024-09-26 14:00:00', 790, 0, 790, '', '', '', ''),
(56, '2024-09-26', 'Wohnung Reinigung', 'Wohnung', '3.Stock', '3.5', '90', 'Nein', 'Herr', 'Thaqi', 'Lum', 'Zwickystrasse 34', 'Wallisellen', '8304', '+41799559572', 'lumthaqii@hotmail.com', '2024-10-01 06:00:00', '2024-10-01 13:30:00', 800, 0, 800, '', '', '', ''),
(59, '2024-10-01', 'Umzug', 'Wohnung', '1.Stock', '5.5', '100', 'Nein', 'Herr', 'Justra', 'Martin', 'Löhrenweg 63', 'Löhrenweg 63 Biel', '2504', '0041798240746', 'martin.justra@posteo.de', '2024-10-18 06:00:00', '2024-10-18 13:00:00', 1800, 0, 1800, '', '', '', 'Mettstrasse 39 Biel'),
(73, '2024-10-11', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '0', 'Nein', 'Frau', 'tiedke', 'michaela', 'Bergstrasse 25', 'Solothurn', '4500', '+41774079268', 'sonja.tiedke@vtxmail.ch', '2024-10-14 06:00:00', '2024-10-14 14:00:00', 750, 0, 750, '', '', '', ''),
(85, '2024-11-01', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '100', '...', '...', 'Markeit GmbH ', 'Markeit GmbH', 'Schltezengasse 36', 'Baar ', '6340', '0041762628571', 'zhangyasi@gmail.com', '2024-10-31 07:00:00', '2024-10-31 15:00:00', 900, 0, 900, 'Frau zhang yasi\r\nBanhofstrasse 10\r\n5034 Suhr\r\n04176268571\r\n\r\nDie Notiz für Yasi Zhang ist bereits aktualisiert: Sie benötigt Quittungen auf den Namen ihres Unternehmens statt auf ihren persönlichen Namen.\r\n', '', '', ''),
(93, '2024-11-11', 'Gastronomie Reinigung', 'Häusern', 'Erdgeschoss', '3', '80', 'Nein', 'Herr', 'Sundaravel', 'Natarajan', 'Sportweg, 27', 'Köniz', '3097', '0779445192', 'saran.guru.94@gmail.com', '2024-11-11 12:29:00', '2024-11-11 14:29:00', 240, 0, 240, '', '', '', ''),
(94, '2024-11-14', 'Unterhalt Reinigung', 'Wohnung', '1.Stock', '2.5', '80', 'Ja', 'Frau', 'Saranya', 'Gurumoorthy', 'Wannersmattweg', 'Liebefeld', '3250', '0779445192', 'saran.guru.94@gmail.com', '2024-11-14 17:33:00', '2024-11-14 19:34:00', 720, 0, 720, '', '', '', ''),
(95, '2024-11-18', 'Unterhalt Reinigung', 'Häusern', '3.Stock', '3.5', '150.50', 'Nein', 'Herr', 'Sulakshan', 'Uthaya Kumar', 'Weibelackerweg 1', 'Roggwil', '4914', '0799292428', 'sulakshangmbh@gmail.com', '2024-11-18 21:58:00', '2024-11-18 22:58:00', 90, 0, 90, '', '', '', ''),
(96, '2024-11-22', 'Gastronomie Reinigung', 'Treppen', '4.Stock', '2', '80', 'Nein', 'Frau', 'Saranya', 'Gurumoorthy', 'Sportweg, 27', 'Liebefeld', '3097', '0795680636', 'saran.guru.94@gmail.com', '2024-11-21 23:34:00', '2024-11-22 01:34:00', 600, 0, 600, '', '', '', ''),
(97, '2024-11-22', 'Unterhalt Reinigung', 'Wohnung', '...', '...', '100', '...', 'Herr', 'Dawit', 'Gebrekristos', 'Orpundstrasse', 'Biel', '2504biel', '0764883689', 'Dawit068@gmail.com', '2024-11-22 03:59:00', '2024-11-30 04:00:00', 1000, 50, 950, '', '', '', ''),
(98, '2024-11-22', 'Gastronomie Reinigung', 'Wohnung', '1.Stock', '4', '1000', '...', 'Herr', 'Dawit', 'Gebrekristos ', 'Orpundstrasse 31', 'Biel', '2504', '0764883689', 'Dawit068@gmail.com', '2024-11-22 04:07:00', '2024-11-26 04:07:00', 2764800, 5000, 2759800, '', '', '', ''),
(99, '2024-11-22', 'Unterhalt Reinigung', 'Wohnung', '3.Stock', '3', '100', 'Nein', 'Frau', 'Saranya Gurumoorthy', 'Guru', 'Wannersmattweg 10H', 'Lyss', '3250', '0779445192', 'saran.guru.94@gmail.com', '2024-11-29 14:10:00', '2024-11-29 16:10:00', 480, 0, 480, 'Every friday must clean kitchen', 'Every friday must clean steps', 'Every friday must clean bath', ''),
(100, '2024-11-22', 'Gastronomie Reinigung', 'Buro', '3.Stock', '4', '100', 'Ja', 'Frau', 'Saranya', 'Guru', 'Sportweg', 'Liebefeld', '3098', '0795680636', 'saran.guru.94@gmail.com', '2024-11-26 14:21:00', '2024-11-26 17:23:00', 11500, 0, 11500, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `repeat_dates`
--

CREATE TABLE `repeat_dates` (
  `id` int NOT NULL,
  `parent_id` int NOT NULL,
  `start_date_time` timestamp NULL DEFAULT NULL,
  `end_date_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repeat_dates`
--

INSERT INTO `repeat_dates` (`id`, `parent_id`, `start_date_time`, `end_date_time`) VALUES
(1, 1, '2024-11-04 15:13:00', '2024-11-04 16:13:00'),
(2, 1, '2024-11-11 15:13:00', '2024-11-11 16:13:00'),
(3, 1, '2024-11-18 15:13:00', '2024-11-18 16:13:00'),
(4, 1, '2024-11-07 15:13:00', '2024-11-07 16:13:00'),
(5, 1, '2024-11-14 15:13:00', '2024-11-14 16:13:00'),
(6, 1, '2024-11-21 15:13:00', '2024-11-21 16:13:00'),
(7, 2, '2024-11-11 11:53:00', '2024-11-11 13:53:00'),
(8, 2, '2024-11-18 11:53:00', '2024-11-18 13:53:00'),
(9, 2, '2024-11-25 11:53:00', '2024-11-25 13:53:00'),
(10, 2, '2024-12-02 11:53:00', '2024-12-02 13:53:00'),
(11, 3, '2024-11-11 12:29:00', '2024-11-11 14:29:00'),
(12, 3, '2024-11-18 12:29:00', '2024-11-18 14:29:00'),
(13, 3, '2024-11-25 12:29:00', '2024-11-25 14:29:00'),
(14, 4, '2024-11-14 17:33:00', '2024-11-14 19:34:00'),
(15, 4, '2024-11-21 17:33:00', '2024-11-21 19:34:00'),
(16, 4, '2024-11-28 17:33:00', '2024-11-28 19:34:00'),
(17, 4, '2024-12-05 17:33:00', '2024-12-05 19:34:00'),
(18, 4, '2024-12-12 17:33:00', '2024-12-12 19:34:00'),
(19, 4, '2024-12-19 17:33:00', '2024-12-19 19:34:00'),
(20, 4, '2024-11-21 17:33:00', '2024-11-21 19:34:00'),
(21, 4, '2024-11-28 17:33:00', '2024-11-28 19:34:00'),
(22, 4, '2024-12-05 17:33:00', '2024-12-05 19:34:00'),
(23, 4, '2024-12-12 17:33:00', '2024-12-12 19:34:00'),
(24, 4, '2024-12-19 17:33:00', '2024-12-19 19:34:00'),
(25, 4, '2024-12-26 17:33:00', '2024-12-26 19:34:00'),
(26, 5, '2024-11-18 21:58:00', '2024-11-18 22:58:00'),
(27, 5, '2024-11-25 21:58:00', '2024-11-25 22:58:00'),
(28, 5, '2024-12-02 21:58:00', '2024-12-02 22:58:00'),
(29, 6, '2024-11-21 23:34:00', '2024-11-22 01:34:00'),
(30, 6, '2024-11-28 23:34:00', '2024-11-29 01:34:00'),
(31, 6, '2024-12-05 23:34:00', '2024-12-06 01:34:00'),
(32, 6, '2024-12-12 23:34:00', '2024-12-13 01:34:00'),
(33, 6, '2024-12-19 23:34:00', '2024-12-20 01:34:00'),
(34, 6, '2024-11-28 23:34:00', '2024-11-29 01:34:00'),
(35, 6, '2024-12-05 23:34:00', '2024-12-06 01:34:00'),
(36, 6, '2024-12-12 23:34:00', '2024-12-13 01:34:00'),
(37, 6, '2024-12-19 23:34:00', '2024-12-20 01:34:00'),
(38, 6, '2024-12-26 23:34:00', '2024-12-27 01:34:00'),
(39, 7, '2024-11-22 04:07:00', '2024-11-22 04:07:00'),
(40, 7, '2024-11-29 04:07:00', '2024-11-29 04:07:00'),
(41, 7, '2024-12-06 04:07:00', '2024-12-06 04:07:00'),
(42, 7, '2024-12-13 04:07:00', '2024-12-13 04:07:00'),
(43, 7, '2024-12-20 04:07:00', '2024-12-20 04:07:00'),
(44, 7, '2024-12-27 04:07:00', '2024-12-27 04:07:00'),
(45, 7, '2025-01-03 04:07:00', '2025-01-03 04:07:00'),
(46, 7, '2025-01-10 04:07:00', '2025-01-10 04:07:00'),
(47, 7, '2025-01-17 04:07:00', '2025-01-17 04:07:00'),
(48, 7, '2025-01-24 04:07:00', '2025-01-24 04:07:00'),
(49, 7, '2025-01-31 04:07:00', '2025-01-31 04:07:00'),
(50, 7, '2025-02-07 04:07:00', '2025-02-07 04:07:00'),
(51, 7, '2025-02-14 04:07:00', '2025-02-14 04:07:00'),
(52, 7, '2025-02-21 04:07:00', '2025-02-21 04:07:00'),
(53, 7, '2025-02-28 04:07:00', '2025-02-28 04:07:00'),
(54, 7, '2025-03-07 04:07:00', '2025-03-07 04:07:00'),
(55, 7, '2025-03-14 04:07:00', '2025-03-14 04:07:00'),
(56, 7, '2025-03-21 04:07:00', '2025-03-21 04:07:00'),
(57, 7, '2025-03-28 04:07:00', '2025-03-28 04:07:00'),
(58, 7, '2025-04-04 03:07:00', '2025-04-04 03:07:00'),
(59, 7, '2025-04-11 03:07:00', '2025-04-11 03:07:00'),
(60, 7, '2025-04-18 03:07:00', '2025-04-18 03:07:00'),
(61, 7, '2025-04-25 03:07:00', '2025-04-25 03:07:00'),
(62, 7, '2025-05-02 03:07:00', '2025-05-02 03:07:00'),
(63, 7, '2025-05-09 03:07:00', '2025-05-09 03:07:00'),
(64, 7, '2025-05-16 03:07:00', '2025-05-16 03:07:00'),
(65, 7, '2025-05-23 03:07:00', '2025-05-23 03:07:00'),
(66, 7, '2025-05-30 03:07:00', '2025-05-30 03:07:00'),
(67, 7, '2025-06-06 03:07:00', '2025-06-06 03:07:00'),
(68, 7, '2025-06-13 03:07:00', '2025-06-13 03:07:00'),
(69, 7, '2025-06-20 03:07:00', '2025-06-20 03:07:00'),
(70, 7, '2025-06-27 03:07:00', '2025-06-27 03:07:00'),
(71, 7, '2025-07-04 03:07:00', '2025-07-04 03:07:00'),
(72, 7, '2025-07-11 03:07:00', '2025-07-11 03:07:00'),
(73, 7, '2025-07-18 03:07:00', '2025-07-18 03:07:00'),
(74, 7, '2025-07-25 03:07:00', '2025-07-25 03:07:00'),
(75, 7, '2025-08-01 03:07:00', '2025-08-01 03:07:00'),
(76, 7, '2025-08-08 03:07:00', '2025-08-08 03:07:00'),
(77, 7, '2025-08-15 03:07:00', '2025-08-15 03:07:00'),
(78, 7, '2025-08-22 03:07:00', '2025-08-22 03:07:00'),
(79, 7, '2025-08-29 03:07:00', '2025-08-29 03:07:00'),
(80, 7, '2025-09-05 03:07:00', '2025-09-05 03:07:00'),
(81, 7, '2025-09-12 03:07:00', '2025-09-12 03:07:00'),
(82, 7, '2025-09-19 03:07:00', '2025-09-19 03:07:00'),
(83, 7, '2025-09-26 03:07:00', '2025-09-26 03:07:00'),
(84, 7, '2025-10-03 03:07:00', '2025-10-03 03:07:00'),
(85, 7, '2025-10-10 03:07:00', '2025-10-10 03:07:00'),
(86, 7, '2025-10-17 03:07:00', '2025-10-17 03:07:00'),
(87, 7, '2024-11-26 04:07:00', '2024-11-26 04:07:00'),
(88, 7, '2024-12-03 04:07:00', '2024-12-03 04:07:00'),
(89, 7, '2024-12-10 04:07:00', '2024-12-10 04:07:00'),
(90, 7, '2024-12-17 04:07:00', '2024-12-17 04:07:00'),
(91, 7, '2024-12-24 04:07:00', '2024-12-24 04:07:00'),
(92, 7, '2024-12-31 04:07:00', '2024-12-31 04:07:00'),
(93, 7, '2025-01-07 04:07:00', '2025-01-07 04:07:00'),
(94, 7, '2025-01-14 04:07:00', '2025-01-14 04:07:00'),
(95, 7, '2025-01-21 04:07:00', '2025-01-21 04:07:00'),
(96, 7, '2025-01-28 04:07:00', '2025-01-28 04:07:00'),
(97, 7, '2025-02-04 04:07:00', '2025-02-04 04:07:00'),
(98, 7, '2025-02-11 04:07:00', '2025-02-11 04:07:00'),
(99, 7, '2025-02-18 04:07:00', '2025-02-18 04:07:00'),
(100, 7, '2025-02-25 04:07:00', '2025-02-25 04:07:00'),
(101, 7, '2025-03-04 04:07:00', '2025-03-04 04:07:00'),
(102, 7, '2025-03-11 04:07:00', '2025-03-11 04:07:00'),
(103, 7, '2025-03-18 04:07:00', '2025-03-18 04:07:00'),
(104, 7, '2025-03-25 04:07:00', '2025-03-25 04:07:00'),
(105, 7, '2025-04-01 03:07:00', '2025-04-01 03:07:00'),
(106, 7, '2025-04-08 03:07:00', '2025-04-08 03:07:00'),
(107, 7, '2025-04-15 03:07:00', '2025-04-15 03:07:00'),
(108, 7, '2025-04-22 03:07:00', '2025-04-22 03:07:00'),
(109, 7, '2025-04-29 03:07:00', '2025-04-29 03:07:00'),
(110, 7, '2025-05-06 03:07:00', '2025-05-06 03:07:00'),
(111, 7, '2025-05-13 03:07:00', '2025-05-13 03:07:00'),
(112, 7, '2025-05-20 03:07:00', '2025-05-20 03:07:00'),
(113, 7, '2025-05-27 03:07:00', '2025-05-27 03:07:00'),
(114, 7, '2025-06-03 03:07:00', '2025-06-03 03:07:00'),
(115, 7, '2025-06-10 03:07:00', '2025-06-10 03:07:00'),
(116, 7, '2025-06-17 03:07:00', '2025-06-17 03:07:00'),
(117, 7, '2025-06-24 03:07:00', '2025-06-24 03:07:00'),
(118, 7, '2025-07-01 03:07:00', '2025-07-01 03:07:00'),
(119, 7, '2025-07-08 03:07:00', '2025-07-08 03:07:00'),
(120, 7, '2025-07-15 03:07:00', '2025-07-15 03:07:00'),
(121, 7, '2025-07-22 03:07:00', '2025-07-22 03:07:00'),
(122, 7, '2025-07-29 03:07:00', '2025-07-29 03:07:00'),
(123, 7, '2025-08-05 03:07:00', '2025-08-05 03:07:00'),
(124, 7, '2025-08-12 03:07:00', '2025-08-12 03:07:00'),
(125, 7, '2025-08-19 03:07:00', '2025-08-19 03:07:00'),
(126, 7, '2025-08-26 03:07:00', '2025-08-26 03:07:00'),
(127, 7, '2025-09-02 03:07:00', '2025-09-02 03:07:00'),
(128, 7, '2025-09-09 03:07:00', '2025-09-09 03:07:00'),
(129, 7, '2025-09-16 03:07:00', '2025-09-16 03:07:00'),
(130, 7, '2025-09-23 03:07:00', '2025-09-23 03:07:00'),
(131, 7, '2025-09-30 03:07:00', '2025-09-30 03:07:00'),
(132, 7, '2025-10-07 03:07:00', '2025-10-07 03:07:00'),
(133, 7, '2025-10-14 03:07:00', '2025-10-14 03:07:00'),
(134, 7, '2025-10-21 03:07:00', '2025-10-21 03:07:00'),
(135, 7, '2024-11-27 04:07:00', '2024-11-27 04:07:00'),
(136, 7, '2024-12-04 04:07:00', '2024-12-04 04:07:00'),
(137, 7, '2024-12-11 04:07:00', '2024-12-11 04:07:00'),
(138, 7, '2024-12-18 04:07:00', '2024-12-18 04:07:00'),
(139, 7, '2024-12-25 04:07:00', '2024-12-25 04:07:00'),
(140, 7, '2025-01-01 04:07:00', '2025-01-01 04:07:00'),
(141, 7, '2025-01-08 04:07:00', '2025-01-08 04:07:00'),
(142, 7, '2025-01-15 04:07:00', '2025-01-15 04:07:00'),
(143, 7, '2025-01-22 04:07:00', '2025-01-22 04:07:00'),
(144, 7, '2025-01-29 04:07:00', '2025-01-29 04:07:00'),
(145, 7, '2025-02-05 04:07:00', '2025-02-05 04:07:00'),
(146, 7, '2025-02-12 04:07:00', '2025-02-12 04:07:00'),
(147, 7, '2025-02-19 04:07:00', '2025-02-19 04:07:00'),
(148, 7, '2025-02-26 04:07:00', '2025-02-26 04:07:00'),
(149, 7, '2025-03-05 04:07:00', '2025-03-05 04:07:00'),
(150, 7, '2025-03-12 04:07:00', '2025-03-12 04:07:00'),
(151, 7, '2025-03-19 04:07:00', '2025-03-19 04:07:00'),
(152, 7, '2025-03-26 04:07:00', '2025-03-26 04:07:00'),
(153, 7, '2025-04-02 03:07:00', '2025-04-02 03:07:00'),
(154, 7, '2025-04-09 03:07:00', '2025-04-09 03:07:00'),
(155, 7, '2025-04-16 03:07:00', '2025-04-16 03:07:00'),
(156, 7, '2025-04-23 03:07:00', '2025-04-23 03:07:00'),
(157, 7, '2025-04-30 03:07:00', '2025-04-30 03:07:00'),
(158, 7, '2025-05-07 03:07:00', '2025-05-07 03:07:00'),
(159, 7, '2025-05-14 03:07:00', '2025-05-14 03:07:00'),
(160, 7, '2025-05-21 03:07:00', '2025-05-21 03:07:00'),
(161, 7, '2025-05-28 03:07:00', '2025-05-28 03:07:00'),
(162, 7, '2025-06-04 03:07:00', '2025-06-04 03:07:00'),
(163, 7, '2025-06-11 03:07:00', '2025-06-11 03:07:00'),
(164, 7, '2025-06-18 03:07:00', '2025-06-18 03:07:00'),
(165, 7, '2025-06-25 03:07:00', '2025-06-25 03:07:00'),
(166, 7, '2025-07-02 03:07:00', '2025-07-02 03:07:00'),
(167, 7, '2025-07-09 03:07:00', '2025-07-09 03:07:00'),
(168, 7, '2025-07-16 03:07:00', '2025-07-16 03:07:00'),
(169, 7, '2025-07-23 03:07:00', '2025-07-23 03:07:00'),
(170, 7, '2025-07-30 03:07:00', '2025-07-30 03:07:00'),
(171, 7, '2025-08-06 03:07:00', '2025-08-06 03:07:00'),
(172, 7, '2025-08-13 03:07:00', '2025-08-13 03:07:00'),
(173, 7, '2025-08-20 03:07:00', '2025-08-20 03:07:00'),
(174, 7, '2025-08-27 03:07:00', '2025-08-27 03:07:00'),
(175, 7, '2025-09-03 03:07:00', '2025-09-03 03:07:00'),
(176, 7, '2025-09-10 03:07:00', '2025-09-10 03:07:00'),
(177, 7, '2025-09-17 03:07:00', '2025-09-17 03:07:00'),
(178, 7, '2025-09-24 03:07:00', '2025-09-24 03:07:00'),
(179, 7, '2025-10-01 03:07:00', '2025-10-01 03:07:00'),
(180, 7, '2025-10-08 03:07:00', '2025-10-08 03:07:00'),
(181, 7, '2025-10-15 03:07:00', '2025-10-15 03:07:00'),
(182, 7, '2025-10-22 03:07:00', '2025-10-22 03:07:00'),
(183, 7, '2024-11-28 04:07:00', '2024-11-28 04:07:00'),
(184, 7, '2024-12-05 04:07:00', '2024-12-05 04:07:00'),
(185, 7, '2024-12-12 04:07:00', '2024-12-12 04:07:00'),
(186, 7, '2024-12-19 04:07:00', '2024-12-19 04:07:00'),
(187, 7, '2024-12-26 04:07:00', '2024-12-26 04:07:00'),
(188, 7, '2025-01-02 04:07:00', '2025-01-02 04:07:00'),
(189, 7, '2025-01-09 04:07:00', '2025-01-09 04:07:00'),
(190, 7, '2025-01-16 04:07:00', '2025-01-16 04:07:00'),
(191, 7, '2025-01-23 04:07:00', '2025-01-23 04:07:00'),
(192, 7, '2025-01-30 04:07:00', '2025-01-30 04:07:00'),
(193, 7, '2025-02-06 04:07:00', '2025-02-06 04:07:00'),
(194, 7, '2025-02-13 04:07:00', '2025-02-13 04:07:00'),
(195, 7, '2025-02-20 04:07:00', '2025-02-20 04:07:00'),
(196, 7, '2025-02-27 04:07:00', '2025-02-27 04:07:00'),
(197, 7, '2025-03-06 04:07:00', '2025-03-06 04:07:00'),
(198, 7, '2025-03-13 04:07:00', '2025-03-13 04:07:00'),
(199, 7, '2025-03-20 04:07:00', '2025-03-20 04:07:00'),
(200, 7, '2025-03-27 04:07:00', '2025-03-27 04:07:00'),
(201, 7, '2025-04-03 03:07:00', '2025-04-03 03:07:00'),
(202, 7, '2025-04-10 03:07:00', '2025-04-10 03:07:00'),
(203, 7, '2025-04-17 03:07:00', '2025-04-17 03:07:00'),
(204, 7, '2025-04-24 03:07:00', '2025-04-24 03:07:00'),
(205, 7, '2025-05-01 03:07:00', '2025-05-01 03:07:00'),
(206, 7, '2025-05-08 03:07:00', '2025-05-08 03:07:00'),
(207, 7, '2025-05-15 03:07:00', '2025-05-15 03:07:00'),
(208, 7, '2025-05-22 03:07:00', '2025-05-22 03:07:00'),
(209, 7, '2025-05-29 03:07:00', '2025-05-29 03:07:00'),
(210, 7, '2025-06-05 03:07:00', '2025-06-05 03:07:00'),
(211, 7, '2025-06-12 03:07:00', '2025-06-12 03:07:00'),
(212, 7, '2025-06-19 03:07:00', '2025-06-19 03:07:00'),
(213, 7, '2025-06-26 03:07:00', '2025-06-26 03:07:00'),
(214, 7, '2025-07-03 03:07:00', '2025-07-03 03:07:00'),
(215, 7, '2025-07-10 03:07:00', '2025-07-10 03:07:00'),
(216, 7, '2025-07-17 03:07:00', '2025-07-17 03:07:00'),
(217, 7, '2025-07-24 03:07:00', '2025-07-24 03:07:00'),
(218, 7, '2025-07-31 03:07:00', '2025-07-31 03:07:00'),
(219, 7, '2025-08-07 03:07:00', '2025-08-07 03:07:00'),
(220, 7, '2025-08-14 03:07:00', '2025-08-14 03:07:00'),
(221, 7, '2025-08-21 03:07:00', '2025-08-21 03:07:00'),
(222, 7, '2025-08-28 03:07:00', '2025-08-28 03:07:00'),
(223, 7, '2025-09-04 03:07:00', '2025-09-04 03:07:00'),
(224, 7, '2025-09-11 03:07:00', '2025-09-11 03:07:00'),
(225, 7, '2025-09-18 03:07:00', '2025-09-18 03:07:00'),
(226, 7, '2025-09-25 03:07:00', '2025-09-25 03:07:00'),
(227, 7, '2025-10-02 03:07:00', '2025-10-02 03:07:00'),
(228, 7, '2025-10-09 03:07:00', '2025-10-09 03:07:00'),
(229, 7, '2025-10-16 03:07:00', '2025-10-16 03:07:00'),
(230, 7, '2025-10-23 03:07:00', '2025-10-23 03:07:00'),
(231, 7, '2024-11-29 04:07:00', '2024-11-29 04:07:00'),
(232, 7, '2024-12-06 04:07:00', '2024-12-06 04:07:00'),
(233, 7, '2024-12-13 04:07:00', '2024-12-13 04:07:00'),
(234, 7, '2024-12-20 04:07:00', '2024-12-20 04:07:00'),
(235, 7, '2024-12-27 04:07:00', '2024-12-27 04:07:00'),
(236, 7, '2025-01-03 04:07:00', '2025-01-03 04:07:00'),
(237, 7, '2025-01-10 04:07:00', '2025-01-10 04:07:00'),
(238, 7, '2025-01-17 04:07:00', '2025-01-17 04:07:00'),
(239, 7, '2025-01-24 04:07:00', '2025-01-24 04:07:00'),
(240, 7, '2025-01-31 04:07:00', '2025-01-31 04:07:00'),
(241, 7, '2025-02-07 04:07:00', '2025-02-07 04:07:00'),
(242, 7, '2025-02-14 04:07:00', '2025-02-14 04:07:00'),
(243, 7, '2025-02-21 04:07:00', '2025-02-21 04:07:00'),
(244, 7, '2025-02-28 04:07:00', '2025-02-28 04:07:00'),
(245, 7, '2025-03-07 04:07:00', '2025-03-07 04:07:00'),
(246, 7, '2025-03-14 04:07:00', '2025-03-14 04:07:00'),
(247, 7, '2025-03-21 04:07:00', '2025-03-21 04:07:00'),
(248, 7, '2025-03-28 04:07:00', '2025-03-28 04:07:00'),
(249, 7, '2025-04-04 03:07:00', '2025-04-04 03:07:00'),
(250, 7, '2025-04-11 03:07:00', '2025-04-11 03:07:00'),
(251, 7, '2025-04-18 03:07:00', '2025-04-18 03:07:00'),
(252, 7, '2025-04-25 03:07:00', '2025-04-25 03:07:00'),
(253, 7, '2025-05-02 03:07:00', '2025-05-02 03:07:00'),
(254, 7, '2025-05-09 03:07:00', '2025-05-09 03:07:00'),
(255, 7, '2025-05-16 03:07:00', '2025-05-16 03:07:00'),
(256, 7, '2025-05-23 03:07:00', '2025-05-23 03:07:00'),
(257, 7, '2025-05-30 03:07:00', '2025-05-30 03:07:00'),
(258, 7, '2025-06-06 03:07:00', '2025-06-06 03:07:00'),
(259, 7, '2025-06-13 03:07:00', '2025-06-13 03:07:00'),
(260, 7, '2025-06-20 03:07:00', '2025-06-20 03:07:00'),
(261, 7, '2025-06-27 03:07:00', '2025-06-27 03:07:00'),
(262, 7, '2025-07-04 03:07:00', '2025-07-04 03:07:00'),
(263, 7, '2025-07-11 03:07:00', '2025-07-11 03:07:00'),
(264, 7, '2025-07-18 03:07:00', '2025-07-18 03:07:00'),
(265, 7, '2025-07-25 03:07:00', '2025-07-25 03:07:00'),
(266, 7, '2025-08-01 03:07:00', '2025-08-01 03:07:00'),
(267, 7, '2025-08-08 03:07:00', '2025-08-08 03:07:00'),
(268, 7, '2025-08-15 03:07:00', '2025-08-15 03:07:00'),
(269, 7, '2025-08-22 03:07:00', '2025-08-22 03:07:00'),
(270, 7, '2025-08-29 03:07:00', '2025-08-29 03:07:00'),
(271, 7, '2025-09-05 03:07:00', '2025-09-05 03:07:00'),
(272, 7, '2025-09-12 03:07:00', '2025-09-12 03:07:00'),
(273, 7, '2025-09-19 03:07:00', '2025-09-19 03:07:00'),
(274, 7, '2025-09-26 03:07:00', '2025-09-26 03:07:00'),
(275, 7, '2025-10-03 03:07:00', '2025-10-03 03:07:00'),
(276, 7, '2025-10-10 03:07:00', '2025-10-10 03:07:00'),
(277, 7, '2025-10-17 03:07:00', '2025-10-17 03:07:00'),
(278, 7, '2025-10-24 03:07:00', '2025-10-24 03:07:00'),
(279, 7, '2024-11-23 04:07:00', '2024-11-23 04:07:00'),
(280, 7, '2024-11-30 04:07:00', '2024-11-30 04:07:00'),
(281, 7, '2024-12-07 04:07:00', '2024-12-07 04:07:00'),
(282, 7, '2024-12-14 04:07:00', '2024-12-14 04:07:00'),
(283, 7, '2024-12-21 04:07:00', '2024-12-21 04:07:00'),
(284, 7, '2024-12-28 04:07:00', '2024-12-28 04:07:00'),
(285, 7, '2025-01-04 04:07:00', '2025-01-04 04:07:00'),
(286, 7, '2025-01-11 04:07:00', '2025-01-11 04:07:00'),
(287, 7, '2025-01-18 04:07:00', '2025-01-18 04:07:00'),
(288, 7, '2025-01-25 04:07:00', '2025-01-25 04:07:00'),
(289, 7, '2025-02-01 04:07:00', '2025-02-01 04:07:00'),
(290, 7, '2025-02-08 04:07:00', '2025-02-08 04:07:00'),
(291, 7, '2025-02-15 04:07:00', '2025-02-15 04:07:00'),
(292, 7, '2025-02-22 04:07:00', '2025-02-22 04:07:00'),
(293, 7, '2025-03-01 04:07:00', '2025-03-01 04:07:00'),
(294, 7, '2025-03-08 04:07:00', '2025-03-08 04:07:00'),
(295, 7, '2025-03-15 04:07:00', '2025-03-15 04:07:00'),
(296, 7, '2025-03-22 04:07:00', '2025-03-22 04:07:00'),
(297, 7, '2025-03-29 04:07:00', '2025-03-29 04:07:00'),
(298, 7, '2025-04-05 03:07:00', '2025-04-05 03:07:00'),
(299, 7, '2025-04-12 03:07:00', '2025-04-12 03:07:00'),
(300, 7, '2025-04-19 03:07:00', '2025-04-19 03:07:00'),
(301, 7, '2025-04-26 03:07:00', '2025-04-26 03:07:00'),
(302, 7, '2025-05-03 03:07:00', '2025-05-03 03:07:00'),
(303, 7, '2025-05-10 03:07:00', '2025-05-10 03:07:00'),
(304, 7, '2025-05-17 03:07:00', '2025-05-17 03:07:00'),
(305, 7, '2025-05-24 03:07:00', '2025-05-24 03:07:00'),
(306, 7, '2025-05-31 03:07:00', '2025-05-31 03:07:00'),
(307, 7, '2025-06-07 03:07:00', '2025-06-07 03:07:00'),
(308, 7, '2025-06-14 03:07:00', '2025-06-14 03:07:00'),
(309, 7, '2025-06-21 03:07:00', '2025-06-21 03:07:00'),
(310, 7, '2025-06-28 03:07:00', '2025-06-28 03:07:00'),
(311, 7, '2025-07-05 03:07:00', '2025-07-05 03:07:00'),
(312, 7, '2025-07-12 03:07:00', '2025-07-12 03:07:00'),
(313, 7, '2025-07-19 03:07:00', '2025-07-19 03:07:00'),
(314, 7, '2025-07-26 03:07:00', '2025-07-26 03:07:00'),
(315, 7, '2025-08-02 03:07:00', '2025-08-02 03:07:00'),
(316, 7, '2025-08-09 03:07:00', '2025-08-09 03:07:00'),
(317, 7, '2025-08-16 03:07:00', '2025-08-16 03:07:00'),
(318, 7, '2025-08-23 03:07:00', '2025-08-23 03:07:00'),
(319, 7, '2025-08-30 03:07:00', '2025-08-30 03:07:00'),
(320, 7, '2025-09-06 03:07:00', '2025-09-06 03:07:00'),
(321, 7, '2025-09-13 03:07:00', '2025-09-13 03:07:00'),
(322, 7, '2025-09-20 03:07:00', '2025-09-20 03:07:00'),
(323, 7, '2025-09-27 03:07:00', '2025-09-27 03:07:00'),
(324, 7, '2025-10-04 03:07:00', '2025-10-04 03:07:00'),
(325, 7, '2025-10-11 03:07:00', '2025-10-11 03:07:00'),
(326, 7, '2025-10-18 03:07:00', '2025-10-18 03:07:00'),
(327, 8, '2024-11-29 14:10:00', '2024-11-29 16:10:00'),
(328, 8, '2024-12-06 14:10:00', '2024-12-06 16:10:00'),
(329, 8, '2024-12-13 14:10:00', '2024-12-13 16:10:00'),
(330, 8, '2024-12-20 14:10:00', '2024-12-20 16:10:00'),
(331, 8, '2024-12-27 14:10:00', '2024-12-27 16:10:00'),
(332, 8, '2025-01-03 14:10:00', '2025-01-03 16:10:00'),
(333, 8, '2025-01-10 14:10:00', '2025-01-10 16:10:00'),
(334, 8, '2025-01-17 14:10:00', '2025-01-17 16:10:00'),
(335, 9, '2024-11-26 14:21:00', '2024-11-26 17:23:00'),
(336, 9, '2024-12-03 14:21:00', '2024-12-03 17:23:00'),
(337, 9, '2024-12-10 14:21:00', '2024-12-10 17:23:00'),
(338, 9, '2024-12-17 14:21:00', '2024-12-17 17:23:00'),
(339, 9, '2024-12-24 14:21:00', '2024-12-24 17:23:00'),
(340, 9, '2024-12-31 14:21:00', '2024-12-31 17:23:00'),
(341, 9, '2025-01-07 14:21:00', '2025-01-07 17:23:00'),
(342, 9, '2025-01-14 14:21:00', '2025-01-14 17:23:00'),
(343, 9, '2025-01-21 14:21:00', '2025-01-21 17:23:00'),
(344, 9, '2025-01-28 14:21:00', '2025-01-28 17:23:00'),
(345, 9, '2025-02-04 14:21:00', '2025-02-04 17:23:00'),
(346, 9, '2025-02-11 14:21:00', '2025-02-11 17:23:00'),
(347, 9, '2025-02-18 14:21:00', '2025-02-18 17:23:00'),
(348, 9, '2025-02-25 14:21:00', '2025-02-25 17:23:00'),
(349, 9, '2025-03-04 14:21:00', '2025-03-04 17:23:00'),
(350, 9, '2025-03-11 14:21:00', '2025-03-11 17:23:00'),
(351, 9, '2025-03-18 14:21:00', '2025-03-18 17:23:00'),
(352, 9, '2025-03-25 14:21:00', '2025-03-25 17:23:00'),
(353, 9, '2025-04-01 13:21:00', '2025-04-01 16:23:00'),
(354, 9, '2025-04-08 13:21:00', '2025-04-08 16:23:00'),
(355, 9, '2025-04-15 13:21:00', '2025-04-15 16:23:00'),
(356, 9, '2025-04-22 13:21:00', '2025-04-22 16:23:00'),
(357, 9, '2025-04-29 13:21:00', '2025-04-29 16:23:00'),
(358, 9, '2025-05-06 13:21:00', '2025-05-06 16:23:00'),
(359, 9, '2025-05-13 13:21:00', '2025-05-13 16:23:00'),
(360, 9, '2025-05-20 13:21:00', '2025-05-20 16:23:00'),
(361, 9, '2025-05-27 13:21:00', '2025-05-27 16:23:00'),
(362, 9, '2025-06-03 13:21:00', '2025-06-03 16:23:00'),
(363, 9, '2025-06-10 13:21:00', '2025-06-10 16:23:00'),
(364, 9, '2025-06-17 13:21:00', '2025-06-17 16:23:00'),
(365, 9, '2025-06-24 13:21:00', '2025-06-24 16:23:00'),
(366, 9, '2025-07-01 13:21:00', '2025-07-01 16:23:00'),
(367, 9, '2025-07-08 13:21:00', '2025-07-08 16:23:00'),
(368, 9, '2025-07-15 13:21:00', '2025-07-15 16:23:00'),
(369, 9, '2025-07-22 13:21:00', '2025-07-22 16:23:00'),
(370, 9, '2025-07-29 13:21:00', '2025-07-29 16:23:00'),
(371, 9, '2025-08-05 13:21:00', '2025-08-05 16:23:00'),
(372, 9, '2025-08-12 13:21:00', '2025-08-12 16:23:00'),
(373, 9, '2025-08-19 13:21:00', '2025-08-19 16:23:00'),
(374, 9, '2025-08-26 13:21:00', '2025-08-26 16:23:00'),
(375, 9, '2025-09-02 13:21:00', '2025-09-02 16:23:00'),
(376, 9, '2025-09-09 13:21:00', '2025-09-09 16:23:00'),
(377, 9, '2025-09-16 13:21:00', '2025-09-16 16:23:00'),
(378, 9, '2025-09-23 13:21:00', '2025-09-23 16:23:00'),
(379, 9, '2025-09-30 13:21:00', '2025-09-30 16:23:00'),
(380, 9, '2025-10-07 13:21:00', '2025-10-07 16:23:00'),
(381, 9, '2025-10-14 13:21:00', '2025-10-14 16:23:00'),
(382, 9, '2025-10-21 13:21:00', '2025-10-21 16:23:00'),
(383, 9, '2024-11-28 14:21:00', '2024-11-28 17:23:00'),
(384, 9, '2024-12-05 14:21:00', '2024-12-05 17:23:00'),
(385, 9, '2024-12-12 14:21:00', '2024-12-12 17:23:00'),
(386, 9, '2024-12-19 14:21:00', '2024-12-19 17:23:00'),
(387, 9, '2024-12-26 14:21:00', '2024-12-26 17:23:00'),
(388, 9, '2025-01-02 14:21:00', '2025-01-02 17:23:00'),
(389, 9, '2025-01-09 14:21:00', '2025-01-09 17:23:00'),
(390, 9, '2025-01-16 14:21:00', '2025-01-16 17:23:00'),
(391, 9, '2025-01-23 14:21:00', '2025-01-23 17:23:00'),
(392, 9, '2025-01-30 14:21:00', '2025-01-30 17:23:00'),
(393, 9, '2025-02-06 14:21:00', '2025-02-06 17:23:00'),
(394, 9, '2025-02-13 14:21:00', '2025-02-13 17:23:00'),
(395, 9, '2025-02-20 14:21:00', '2025-02-20 17:23:00'),
(396, 9, '2025-02-27 14:21:00', '2025-02-27 17:23:00'),
(397, 9, '2025-03-06 14:21:00', '2025-03-06 17:23:00'),
(398, 9, '2025-03-13 14:21:00', '2025-03-13 17:23:00'),
(399, 9, '2025-03-20 14:21:00', '2025-03-20 17:23:00'),
(400, 9, '2025-03-27 14:21:00', '2025-03-27 17:23:00'),
(401, 9, '2025-04-03 13:21:00', '2025-04-03 16:23:00'),
(402, 9, '2025-04-10 13:21:00', '2025-04-10 16:23:00'),
(403, 9, '2025-04-17 13:21:00', '2025-04-17 16:23:00'),
(404, 9, '2025-04-24 13:21:00', '2025-04-24 16:23:00'),
(405, 9, '2025-05-01 13:21:00', '2025-05-01 16:23:00'),
(406, 9, '2025-05-08 13:21:00', '2025-05-08 16:23:00'),
(407, 9, '2025-05-15 13:21:00', '2025-05-15 16:23:00'),
(408, 9, '2025-05-22 13:21:00', '2025-05-22 16:23:00'),
(409, 9, '2025-05-29 13:21:00', '2025-05-29 16:23:00'),
(410, 9, '2025-06-05 13:21:00', '2025-06-05 16:23:00'),
(411, 9, '2025-06-12 13:21:00', '2025-06-12 16:23:00'),
(412, 9, '2025-06-19 13:21:00', '2025-06-19 16:23:00'),
(413, 9, '2025-06-26 13:21:00', '2025-06-26 16:23:00'),
(414, 9, '2025-07-03 13:21:00', '2025-07-03 16:23:00'),
(415, 9, '2025-07-10 13:21:00', '2025-07-10 16:23:00'),
(416, 9, '2025-07-17 13:21:00', '2025-07-17 16:23:00'),
(417, 9, '2025-07-24 13:21:00', '2025-07-24 16:23:00'),
(418, 9, '2025-07-31 13:21:00', '2025-07-31 16:23:00'),
(419, 9, '2025-08-07 13:21:00', '2025-08-07 16:23:00'),
(420, 9, '2025-08-14 13:21:00', '2025-08-14 16:23:00'),
(421, 9, '2025-08-21 13:21:00', '2025-08-21 16:23:00'),
(422, 9, '2025-08-28 13:21:00', '2025-08-28 16:23:00'),
(423, 9, '2025-09-04 13:21:00', '2025-09-04 16:23:00'),
(424, 9, '2025-09-11 13:21:00', '2025-09-11 16:23:00'),
(425, 9, '2025-09-18 13:21:00', '2025-09-18 16:23:00'),
(426, 9, '2025-09-25 13:21:00', '2025-09-25 16:23:00'),
(427, 9, '2025-10-02 13:21:00', '2025-10-02 16:23:00'),
(428, 9, '2025-10-09 13:21:00', '2025-10-09 16:23:00'),
(429, 9, '2025-10-16 13:21:00', '2025-10-16 16:23:00'),
(430, 9, '2025-10-23 13:21:00', '2025-10-23 16:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `repeat_tasks`
--

CREATE TABLE `repeat_tasks` (
  `id` int NOT NULL,
  `parent_id` int NOT NULL,
  `number_cycles` int NOT NULL,
  `number_tracks` int NOT NULL,
  `days` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `diff_hours` int NOT NULL,
  `total_hours` int NOT NULL,
  `price_per_hour` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repeat_tasks`
--

INSERT INTO `repeat_tasks` (`id`, `parent_id`, `number_cycles`, `number_tracks`, `days`, `diff_hours`, `total_hours`, `price_per_hour`) VALUES
(1, 89, 3, 2, '_monday_thursday', 1, 6, NULL),
(2, 91, 4, 1, '_monday', 2, 8, 30),
(3, 93, 3, 1, '_monday', 2, 6, 40),
(4, 94, 6, 2, '_monday_thursday', 2, 24, 30),
(5, 95, 3, 1, '_monday', 1, 3, 30),
(6, 96, 5, 2, '_tuesday_friday', 2, 20, 30),
(7, 98, 48, 6, '_monday_tuesday_wednesday_thursday_friday_saturday', 96, 27648, 100),
(8, 99, 8, 1, '_friday', 2, 16, 30),
(9, 100, 48, 2, '_tuesday_thursday', 3, 288, 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookies`
--
ALTER TABLE `bookies`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repeat_dates`
--
ALTER TABLE `repeat_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repeat_tasks`
--
ALTER TABLE `repeat_tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookies`
--
ALTER TABLE `bookies`
  MODIFY `bid` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` mediumint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `repeat_dates`
--
ALTER TABLE `repeat_dates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT for table `repeat_tasks`
--
ALTER TABLE `repeat_tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
