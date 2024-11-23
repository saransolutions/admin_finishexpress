-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 13, 2024 at 02:37 AM
-- Server version: 8.0.40-0ubuntu0.20.04.1
-- PHP Version: 8.2.25

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
(93, '2024-11-11', 'Gastronomie Reinigung', 'Häusern', 'Erdgeschoss', '3', '80', 'Nein', 'Herr', 'Sundaravel', 'Natarajan', 'Sportweg, 27', 'Köniz', '3097', '0779445192', 'saran.guru.94@gmail.com', '2024-11-11 12:29:00', '2024-11-11 14:29:00', 240, 0, 240, '', '', '', '');

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
(13, 3, '2024-11-25 12:29:00', '2024-11-25 14:29:00');

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
(3, 93, 3, 1, '_monday', 2, 6, 40);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `repeat_dates`
--
ALTER TABLE `repeat_dates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `repeat_tasks`
--
ALTER TABLE `repeat_tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
