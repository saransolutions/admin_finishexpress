-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2024 at 08:02 AM
-- Server version: 8.0.39-0ubuntu0.20.04.1
-- PHP Version: 8.2.24

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
(36, '2024-09-15', 'Häusern Reinigung', 'Wohnung', '1.Stock', '3', '60_100', 'Nein', 'Frau', 'Rauber', 'Aline', 'Le-Corbusier Platz 9', 'Bern', '3027', '0041786672119', 'aline.rauber@gmx.ch', '2024-09-29 06:00:00', '2024-09-16 14:00:00', 690, 0, 690, '', '', '', ''),
(37, '2024-09-15', 'Häusern Reinigung', 'Wohnung', '1.Stock', '3', '60_100', 'Nein', 'Frau', 'Rauber', 'Aline', 'Le-Corbusier Platz 9', 'Bern', '3027', '0041786672119', 'aline.rauber@gmx.ch', '2024-09-29 06:00:00', '2024-09-16 14:00:00', 690, 0, 690, '', '', '', ''),
(38, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '3', '110', 'Nein', 'Frau', 'Bragh-Bihl', 'Hanne', 'Rottmannsbodenstrasse 118', 'Binningen', '4122', '0041767114610', 'hanne_frederiksen@yahoo.com', '2024-09-23 06:00:00', '2024-09-23 14:00:00', 700, 0, 700, '', '', '', ''),
(41, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '91', 'Nein', 'Frau', 'Schnell', 'Linda', 'Hechtring 21', ' Biberist', '4562', '+41797472075', 'lin_ghalia@hotmail.com', '2024-09-27 06:00:00', '2024-09-27 14:00:00', 800, 0, 800, '', '', '', ''),
(42, '2024-09-16', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '92', 'Nein', 'Frau', 'Ribas', 'Keviny', 'Fuhrstrasse 12', 'Langnau', '8135', '+41797128502', 'keviny-ribas@hotmail.com', '2024-09-30 06:00:00', '2024-09-30 14:00:00', 790, 0, 790, '', '', '', ''),
(45, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '100', 'Nein', 'Herr', 'Aebischer', 'Manuel', 'Oberfinsterwald 1', 'Finsterwald', '6162', '+41799520901', 'aebischer4@hotmail.de', '2024-09-19 14:52:00', '2024-09-19 14:52:00', 790, 0, 790, '', '', '', ''),
(46, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '100', 'Nein', 'Herr', 'Aebischer', 'Manuel', 'Oberfinsterwald 1', 'Finsterwald', '6162', '+41799520901', 'aebischer4@hotmail.de', '2024-09-19 14:52:00', '2024-09-19 14:52:00', 790, 0, 790, '', '', '', ''),
(47, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '100', 'Nein', 'Herr', 'Manuel', 'Aebischer', ' Ober finsterwald 1', ' Finsterwald b. Entlebuch', '6162', '0041799520901', 'aebischer4@hotmail.de', '2024-09-19 06:00:00', '2024-09-19 14:00:00', 790, 0, 790, '', '', '', ''),
(49, '2024-09-17', 'Wohnung Reinigung', 'Wohnung', '2.Stock', '5.5', '100', 'Nein', 'Herr', 'Justra', 'Martin', 'Löhrenweg 63', 'Biel/Bienne', '2504', '0041798240746', 'martin.justra@posteo.de', '2024-10-30 07:00:00', '2024-10-30 15:00:00', 890, 0, 890, '', '', '', ''),
(50, '2024-09-18', 'Wohnung Reinigung', 'Wohnung', '2.Stock', '4.5', '110', 'Nein', 'Herr', 'Rosset', 'Nicolas', 'Au village 2A', 'Brot dessous', '2149', '+41784002141', 'nicolasrosset2@gmail.com9', '2024-08-29 07:00:00', '2024-08-30 15:00:00', 980, 0, 980, '', '', '', ''),
(51, '2024-09-20', 'Wohnung Reinigung', 'Wohnung', 'Erdgeschoss', '4.5', '130', 'Nein', 'Herr', 'Peter', 'Jens', 'Illiswilstrasse 15', 'Wohlen b. Bern', '3033', '0041765759198', 'jenspeter@gmx.ch', '2025-01-29 07:00:00', '2025-01-29 15:00:00', 980, 0, 980, '', '', '', ''),
(53, '2024-09-21', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '1.5', '27', 'Nein', 'Herr', 'Ribolzi', 'Sara', 'Hammerstrasse 77', ' Zürich', '8032', '+41782311628', 'ribolzi.sara@gmail.com', '2024-09-29 06:30:00', '2024-09-29 14:00:00', 490, 0, 490, '', '', '', ''),
(54, '2024-09-24', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '100', 'Ja', 'Herr', 'Ates', 'Ronja', 'Rue des la cascade 18', ' Neuchâtel', '2000', '+41764924816', 'ronja_ates@hotmail.com', '2024-09-26 06:00:00', '2024-09-26 14:00:00', 790, 0, 790, '', '', '', ''),
(55, '2024-09-24', 'Wohnung Reinigung', 'Wohnung', '2.Stock', '4', '90', 'Nein', 'Herr', 'Kunz', 'Karin', 'Bernstrasse 5', 'Zäziwil', '3532', '+41792652557', 'kare.14@hotmail.com', '2024-11-28 07:00:00', '2024-11-28 15:00:00', 690, 9, 681, '', '', '', ''),
(56, '2024-09-26', 'Wohnung Reinigung', 'Wohnung', '3.Stock', '3.5', '90', 'Nein', 'Herr', 'Thaqi', 'Lum', 'Zwickystrasse 34', 'Wallisellen', '8304', '+41799559572', 'lumthaqii@hotmail.com', '2024-10-01 06:00:00', '2024-10-01 13:30:00', 800, 0, 800, '', '', '', ''),
(59, '2024-10-01', 'Umzug', 'Wohnung', '1.Stock', '5.5', '100', 'Nein', 'Herr', 'Justra', 'Martin', 'Löhrenweg 63', 'Löhrenweg 63 Biel', '2504', '0041798240746', 'martin.justra@posteo.de', '2024-10-18 06:00:00', '2024-10-18 13:00:00', 1800, 0, 1800, '', '', '', 'Mettstrasse 39 Biel'),
(62, '2024-10-01', 'Häusern Reinigung', 'Wohnung', '1.Stock', '5.5 Mehr', '120', 'Nein', 'Frau', 'Sauter', 'Jasmine', 'Grunachen', 'Schangnau', '6197', '0041774389484', 'jasmine.sauter@bluewin.ch', '2024-10-24 06:00:00', '2024-10-24 14:00:00', 980, 0, 0, '', '', '', ''),
(63, '2024-10-02', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3', '80', 'Nein', 'Herr', 'Zbinden', 'Léanne', 'Lentulusrain', 'Bern', '3007', '0041798636727', 'leanne.schmid@outlook.com', '2024-12-02 07:00:00', '2024-12-02 15:00:00', 780, 0, 780, '', '', '', ''),
(65, '2024-10-03', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3', '54', 'Nein', 'Herr', 'Vollenweider', 'Adriana', 'Obere Schöntalstrasse', 'Winterthur', '8406', '+41786494970', 'Winterthur', '2024-10-25 06:00:00', '2024-10-25 14:00:00', 780, 0, 780, '', '', '', ''),
(66, '2024-10-03', 'Häusern Reinigung', 'Wohnung', '4.Stock', '3.5', '97', 'Nein', 'Herr', 'Sulakshan', 'Uthaya Kumar', 'Weibelackerweg 1', 'Roggwil', '4914', '0799292428', 'sulakshangmbh@gmail.com', '2024-10-19 18:41:00', '2024-10-21 18:41:00', 1500, 200, 1300, 'comment 1', 'comment 2', 'comment 3', ''),
(67, '2024-10-04', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '2', '40', 'Nein', 'Herr', 'Meyer', 'Fabienne', 'Weissensteinstrasse 35', ' Bern', '3007', '+41774183341', 'fa.meyer@hotmail.com', '2024-11-26 07:00:00', '2024-11-26 15:00:00', 690, 0, 690, '', '', '', ''),
(68, '2024-10-07', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '4', '80', 'Nein', 'Frau', 'Mikulic', 'Maja', 'Tiergartenstrasse 10', ' Burgdorf', '3400', '+41796723364', 'mikulicmaja07@gmail.com', '2024-10-13 06:00:00', '2024-10-13 14:00:00', 770, 0, 770, '', '', '', ''),
(69, '2024-10-07', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '4.5', '100', 'Nein', 'Frau', 'Linder', 'Danja', 'Niesenstrasse', 'Thun', '3600', '+41797959569', 'danja.linder@gmail.com', '2024-11-25 07:00:00', '2024-11-25 15:00:00', 980, 0, 980, '', '', '', ''),
(70, '2024-10-08', 'Wohnung Reinigung', 'Wohnung', '2.Stock', '4', '98', 'Nein', 'Herr', 'Celon', 'Harryel', 'Loowiesenstrasse 45', 'Adlikon b. Regensdorf', '8106', '+41765416193', 'harryel.celon@gmail.com', '2024-10-31 07:00:00', '2024-10-31 15:00:00', 950, 0, 950, '', '', '', ''),
(73, '2024-10-11', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '3.5', '0', 'Nein', 'Frau', 'tiedke', 'michaela', 'Bergstrasse 25', 'Solothurn', '4500', '+41774079268', 'sonja.tiedke@vtxmail.ch', '2024-10-14 06:00:00', '2024-10-14 14:00:00', 750, 0, 750, '', '', '', ''),
(74, '2024-10-12', 'Wohnung Reinigung', 'Wohnung', '1.Stock', '1.5', '40', 'Nein', 'Frau', 'Imhof', 'Lidia', 'Owenweg 20', ' Zürich ', '8308', '+41765273551', 'lidiaimhof@gmail.com', '2024-11-28 07:00:00', '2024-11-28 14:00:00', 680, 0, 680, '', '', '', ''),
(75, '2024-10-14', 'Wohnung Reinigung', 'Buro', 'Erdgeschoss', '4', '70', 'Nein', 'Herr', 'Seidl', 'Ivan', 'Dufourstrasse 81', ' Zürich ', '8008', '+41796629926', 'tierarztis@bluewin.ch', '2024-10-30 08:00:00', '2024-10-30 14:00:00', 700, 0, 700, '', '', '', ''),
(76, '2024-10-16', 'Häusern Reinigung', 'Häusern', 'Erdgeschoss', '4', '80', 'Nein', '...', 'Saranya', 'Gurumoorthy', 'Sportweg, 27', 'Liebefeld', '3097', '0795680636', 'saran.guru.94@gmail.com', '2024-10-16 06:25:00', '2024-10-16 18:25:00', 750, 0, 750, 'text', 'hallo', '', ''),
(77, '2024-10-16', 'Wohnung Reinigung', 'Häusern', '...', '...', '100', '...', '...', 'Saranya', 'Gurumoorthy', 'Wannersmattweg 10H', 'Lyss', '3250', '0779445192', 'saran.guru.94@gmail.com', '2024-10-16 06:53:00', '2024-10-16 18:53:00', 750, 0, 750, 'hallo', 'text 1', 'text 2\r\n', ''),
(78, '2024-10-16', 'Häusern Reinigung', 'Wohnung', '...', '1.5', '', 'Nein', 'Herr', 'Saranya', 'Gurumoorthy', 'Sportweg, 27', 'Liebefeld', '3097', '0779445192', 'saran.guru.94@gmail.com', '2024-10-16 07:25:00', '2024-10-16 19:25:00', 2000, 0, 2000, '', '', '', ''),
(79, '2024-10-16', 'Wohnung Reinigung', 'Wohnung', '...', '4.5', '80', '...', '...', 'Richner', 'Sandra', 'Einschlagstrasse 2', 'Wynau', '4923', '+41792811903', 'sandra-richner@gmx.ch', '2024-11-18 07:00:00', '2024-11-18 15:00:00', 850, 0, 850, 'Wir bieten Ihnen Reinigungsdienste mit einer 100% Abnahme-Garantie!\r\nHaben Sie Fragen oder möchten Sie unser Angebot bestätigen?\r\nWir stehen Ihnen jederzeit gerne zur Verfügung!\r\n\r\nKontaktieren Sie uns:\r\n📧 E-Mail: info@finishexpress.ch\r\n📞 Telefon: +41 76 488 36 89 | +41 78 215 80 30\r\n\r\nFinishExpress\r\nOrpundstrasse 31,\r\n2504 Biel\r\n🌐 finishexpress.ch\r\n\r\nWir freuen uns auf Ihre Rückmeldung!', '', '', ''),
(81, '2024-10-17', 'Wohnung Reinigung', 'Wohnung', '...', '...', '0', '...', 'Frau', 'Zhang', 'Yasi', ' Bahnhofstrasse 10', 'Suhr', '5034', '0041762628571', 'zhangyasi@gmail.com', '2024-10-31 07:00:00', '2024-10-31 15:00:00', 750, 0, 750, '', '', '', ''),
(82, '2024-10-17', 'Wohnung Reinigung', 'Wohnung', '...', '...', '0', '...', 'Herr', 'Zhang', 'Yasi', 'Markeit GmbH Schutzengelstrasse 36 ', 'Baar', '6340', '0041762628571', 'zhangyasi@gmail.com', '2024-10-31 07:00:00', '2024-10-31 15:00:00', 750, 0, 750, '', '', '', ''),
(83, '2024-10-18', 'Wohnung Reinigung', 'Wohnung', 'Mehr 5', '2.5', '46', '...', '...', 'Dujmovic', 'Mia', 'Freiburgstrasse 176', 'Bern', '3008', '+41765484929', 'dujmovicmia@bluewin.ch', '2024-10-30 07:00:00', '2024-10-30 14:00:00', 745.89, 0, 745.89, '', '', '', '');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
