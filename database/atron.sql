-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 10:05 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atron`
--

-- --------------------------------------------------------

--
-- Table structure for table `city_occupancy`
--

CREATE TABLE `city_occupancy` (
  `occity_id` int(11) NOT NULL,
  `id_occupancy` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `up` varchar(30) NOT NULL,
  `middle` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_occupancy`
--

INSERT INTO `city_occupancy` (`occity_id`, `id_occupancy`, `city`, `up`, `middle`, `down`) VALUES
(1, 1, 'Aceh', '56', '64', '80'),
(2, 1, 'Medan', '70', '80', '50'),
(3, 1, 'Sumut', '40', '50', '30'),
(4, 1, 'Ridar', '80', '50', '20'),
(5, 1, 'Rikep', '45', '70', '80'),
(6, 1, 'Padang', '30', '40', '50'),
(7, 1, 'Jambi', '60', '90', '10');

-- --------------------------------------------------------

--
-- Table structure for table `city_regional`
--

CREATE TABLE `city_regional` (
  `city_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `up` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_regional`
--

INSERT INTO `city_regional` (`city_id`, `status_id`, `city`, `up`, `down`) VALUES
(1, 1, 'Aceh', '60', '100'),
(2, 1, 'Medan', '50', '200'),
(3, 1, 'Sumut', '40', '50'),
(4, 1, 'Ridar', '30', '70'),
(5, 1, 'Rikep', '20', '90'),
(6, 1, 'Padang', '20', '40'),
(7, 1, 'Jambi', '10', '30'),
(8, 2, 'Jakarta', '50', '80'),
(9, 2, 'Bandung', '70', '30');

-- --------------------------------------------------------

--
-- Table structure for table `current_occupancy`
--

CREATE TABLE `current_occupancy` (
  `current_id` int(11) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `site_id` varchar(50) NOT NULL,
  `site_name` varchar(50) NOT NULL,
  `bw` varchar(30) NOT NULL,
  `current` varchar(30) NOT NULL,
  `aging` varchar(50) NOT NULL,
  `today_highest` varchar(30) NOT NULL,
  `weekly_highest` varchar(30) NOT NULL,
  `monthly_highest` varchar(30) NOT NULL,
  `yearly_highest` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_occupancy`
--

INSERT INTO `current_occupancy` (`current_id`, `regional`, `city`, `site_id`, `site_name`, `bw`, `current`, `aging`, `today_highest`, `weekly_highest`, `monthly_highest`, `yearly_highest`) VALUES
(1, 'I', 'Medan ', 'LBP300', 'LUBUK PAKAM', '100M', '71', '6 min', '71', '71', '71', '71'),
(2, 'I', 'Aceh', 'ACH001', 'BABIRIK', '100M', '71', '1h 30min', '71', '71', '71', '71'),
(3, 'I', 'Ridar', 'RGT021', 'RIDAR', '300M', '71', '1d 1h 5min', '71', '71', '71', '71'),
(4, 'I', 'Rikep', 'PKU025', 'RIKEP', '250M', '71', '1h', '71', '71', '71', '71'),
(5, 'I', 'Padang', 'PDA112', 'PADANG', '1G', '71', '10min', '71', '71', '71', '71'),
(6, 'I', 'Medan', 'LBP301', 'LUBUK PAKAM', '100M', '56', '6min', '56', '56', '56', '56'),
(7, 'I', 'Aceh', 'ACH002', 'BABIRIK', '100M', '56', '1h 30min', '56', '56', '56', '56'),
(8, 'I', 'Ridar', 'RGT022', 'RIDAR', '300M', '56', '1d 1h 5min', '56', '56', '56', '56'),
(9, 'I', 'Rikep', 'PKU023', 'RIKEP', '250M', '0', '1h', '30', '30', '90', '90'),
(10, 'I', 'Padang', 'PDA114', 'PADANG', '1G', '0', '10 min', '30', '30', '30', '30'),
(11, 'I', 'Medan ', 'LBP302', 'LUBUK PAKAM', '100M', '0', '30min', '30', '20', '50', '50'),
(12, 'I', 'Aceh', 'ACH003', 'BABIRIK', '100M', '0', '1h', '20', '20', '70', '70'),
(13, 'II', 'Jakarta', 'JKT110', 'BINTARO', '200M', '71', '4min', '71', '71', '71', '71'),
(14, 'II', 'Bandung', 'BD212', 'REGOL', '100M', '71', '1h 5min', '71', '71', '71', '71'),
(15, 'II', 'Bogor', 'BGR91', 'BOGOR', '120M', '60', '1h 30min', '30', '56', '50', '56');

-- --------------------------------------------------------

--
-- Table structure for table `occupancy`
--

CREATE TABLE `occupancy` (
  `id_occupancy` int(11) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `up` varchar(30) NOT NULL,
  `middle` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `occupancy`
--

INSERT INTO `occupancy` (`id_occupancy`, `regional`, `up`, `middle`, `down`) VALUES
(1, 'I', '70', '70', '70'),
(2, 'II', '60', '60', '60'),
(3, 'III', '50', '50', '50'),
(4, 'IV', '40', '40', '40'),
(5, 'V', '30', '30', '30'),
(6, 'VI', '20', '20', '20'),
(7, 'VII', '10', '10', '10');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `up` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `regional`, `up`, `down`) VALUES
(1, 'I', '60', '100'),
(2, 'II', '50', '200'),
(3, 'III', '40', '50'),
(4, 'IV', '30', '70'),
(5, 'V', '20', '90'),
(6, 'VI', '20', '40'),
(7, 'VII', '10', '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city_occupancy`
--
ALTER TABLE `city_occupancy`
  ADD PRIMARY KEY (`occity_id`),
  ADD KEY `city_occupancy_ibfk_1` (`id_occupancy`);

--
-- Indexes for table `city_regional`
--
ALTER TABLE `city_regional`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `current_occupancy`
--
ALTER TABLE `current_occupancy`
  ADD PRIMARY KEY (`current_id`);

--
-- Indexes for table `occupancy`
--
ALTER TABLE `occupancy`
  ADD PRIMARY KEY (`id_occupancy`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city_occupancy`
--
ALTER TABLE `city_occupancy`
  MODIFY `occity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city_regional`
--
ALTER TABLE `city_regional`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `current_occupancy`
--
ALTER TABLE `current_occupancy`
  MODIFY `current_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `occupancy`
--
ALTER TABLE `occupancy`
  MODIFY `id_occupancy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city_occupancy`
--
ALTER TABLE `city_occupancy`
  ADD CONSTRAINT `city_occupancy_ibfk_1` FOREIGN KEY (`id_occupancy`) REFERENCES `occupancy` (`id_occupancy`);

--
-- Constraints for table `city_regional`
--
ALTER TABLE `city_regional`
  ADD CONSTRAINT `city_regional_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id_status`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
