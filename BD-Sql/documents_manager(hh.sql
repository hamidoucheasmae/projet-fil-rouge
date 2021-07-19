-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 05:49 PM
-- Server version: 8.0.24
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `documents_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int NOT NULL,
  `Firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `sexe` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `Firstname`, `lastname`, `sexe`, `email`, `password`, `phone_number`, `picture`, `created`) VALUES
(1, 'asmae', 'hamidouche', 'F', 'hamidouche.asmae@gmail.com', 'solicode123', '+212', 'https://media-exp1.licdn.com/dms/image/C5603AQEjyoHvPXUZfw/profile-displayphoto-shrink_200_200/0/1614856748302?e=1631145600&v=beta&t=idEOeVV0DmlWAxUe-HqUDzl-EEVTtlj84-8q4jhK1YA', '0000-00-00 00:00:00'),
(2, NULL, 'admin', NULL, 'admin1@gmail.com', 'YWRtaW4=', NULL, NULL, '2021-07-19 09:29:39'),
(3, NULL, 'HHH', NULL, 'test@gmail.com', 'SEhI', NULL, NULL, '2021-07-19 09:47:10'),
(4, NULL, 'demo', NULL, 'demo@gmail.com', 'REVNTw==', NULL, NULL, '2021-07-19 13:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id_document` int NOT NULL,
  `id_client` int DEFAULT NULL,
  `document_name` varchar(55) NOT NULL,
  `date_expiration` date NOT NULL,
  `etat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id_document`, `id_client`, `document_name`, `date_expiration`, `etat`) VALUES
(17, NULL, 'Carte de résidence', '2021-07-28', 'VA'),
(18, NULL, 'Passport', '2021-07-31', 'VA'),
(20, NULL, 'Passport', '2021-07-25', 'VA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `id_client` (`id_client`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id_document`),
  ADD UNIQUE KEY `id_document` (`id_document`),
  ADD KEY `FK_client_id` (`id_client`),
  ADD KEY `FK_id_client` (`id_client`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id_document` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
