-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2019 at 02:57 PM
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
-- Table structure for table `analytic`
--

CREATE TABLE `analytic` (
  `analytic_id` int(11) NOT NULL,
  `regional` varchar(30) NOT NULL,
  `city` varchar(50) NOT NULL,
  `up` varchar(30) NOT NULL,
  `middle` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analytic`
--

INSERT INTO `analytic` (`analytic_id`, `regional`, `city`, `up`, `middle`, `down`, `date`) VALUES
(1, 'I', 'Medan ', '40', '85', '20', '2019-06-01 01:05:12'),
(2, 'I', 'Aceh', '30', '40', '20', '2019-06-01 05:10:18'),
(3, 'I', 'Jambi', '56', '30', '76', '2019-06-01 02:15:00'),
(4, 'I', 'Padang', '45', '50', '23', '2019-06-01 06:13:00'),
(5, 'I', 'Aceh', '45', '32', '10', '2019-01-01 01:00:00'),
(6, 'I', 'Ridar', '35', '60', '40', '2019-04-05 03:00:00'),
(7, 'I', 'Ridar', '67', '56', '70', '2019-04-07 03:00:00'),
(14, 'I', 'Ridar', '56', '50', '34', '2019-10-22 23:12:00'),
(15, 'I', 'Medan', '78', '34', '45', '2019-11-16 15:12:00'),
(16, 'I', 'Padang', '30', '40', '50', '2019-12-19 07:12:00'),
(17, 'I', 'Padang', '90', '23', '40', '2019-12-13 21:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `city_occupancy`
--

CREATE TABLE `city_occupancy` (
  `occity_id` int(11) NOT NULL,
  `id_occupancy` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `site_id` varchar(50) NOT NULL,
  `up` varchar(30) NOT NULL,
  `middle` varchar(30) NOT NULL,
  `down` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_occupancy`
--

INSERT INTO `city_occupancy` (`occity_id`, `id_occupancy`, `city`, `site_id`, `up`, `middle`, `down`) VALUES
(1, 1, 'Aceh', 'ACH001', '56', '64', '80'),
(2, 1, 'Medan', 'LBP301', '70', '80', '50'),
(3, 1, 'Sumut', 'SU001', '40', '50', '30'),
(4, 1, 'Ridar', 'RGT022', '80', '50', '20'),
(5, 1, 'Rikep', 'PKU024', '45', '70', '80'),
(6, 1, 'Sumbar', 'PDA113', '30', '40', '50'),
(7, 1, 'Jambi', 'JB001', '60', '90', '10');

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
(6, 1, 'Sumbar', '20', '40'),
(7, 1, 'Jambi', '10', '30');

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
  `status` varchar(30) NOT NULL,
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

INSERT INTO `current_occupancy` (`current_id`, `regional`, `city`, `site_id`, `site_name`, `bw`, `status`, `current`, `aging`, `today_highest`, `weekly_highest`, `monthly_highest`, `yearly_highest`) VALUES
(1, '1', 'Medan ', 'LBP300', 'LUBUK PAKAM', '100M', 'up', '71', '6 min', '71', '71', '71', '71'),
(2, '1', 'Aceh', 'ACH001', 'BABIRIK', '100M', 'up', '71', '1h 30min', '71', '71', '71', '71'),
(3, '1', 'Ridar', 'RGT021', 'RIDAR', '300M', 'up', '71', '1d 1h 5min', '71', '71', '71', '71'),
(4, '1', 'Rikep', 'PKU025', 'RIKEP', '250M', 'up', '71', '1h', '71', '71', '71', '71'),
(5, '1', 'Padang', 'PDA112', 'PADANG', '1G', 'up', '71', '10min', '71', '71', '71', '71'),
(6, '1', 'Medan', 'LBP301', 'LUBUK PAKAM', '100M', 'up', '56', '6min', '56', '56', '56', '56'),
(7, '1', 'Aceh', 'ACH002', 'BABIRIK', '100M', 'up', '50', '1h 30min', '56', '56', '56', '56'),
(8, '1', 'Ridar', 'RGT022', 'RIDAR', '300M', 'up', '56', '1d 1h 5min', '56', '56', '56', '56'),
(9, '1', 'Rikep', 'PKU023', 'RIKEP', '250M', 'up', '0', '1h', '30', '30', '90', '90'),
(10, '1', 'Padang', 'PDA114', 'PADANG', '1G', 'up', '0', '10 min', '30', '30', '30', '30'),
(11, '1', 'Medan ', 'LBP302', 'LUBUK PAKAM', '100M', 'down', '0', '30min', '30', '20', '50', '50'),
(12, '1', 'Aceh', 'ACH003', 'BABIRIK', '100M', 'down', '56', '1h', '20', '20', '70', '70'),
(16, '1', 'Aceh', 'ACH002', 'BABIRIK', '100M', 'up', '80', '1h 30min', '71', '56', '70', '70'),
(17, '1', 'Aceh', 'ACH003', 'BABIRIK', '100M', 'up', '50', '1d 1h 5min', '56', '56', '56', '0'),
(18, '1', 'Jambi', 'JB001', 'BUNGO', '230M', 'up', '48', '1h', '50', '60', '55', '20'),
(19, '1', 'Jambi', 'JB001', 'MUARO', '100M', 'up', '68', '1d 1h 5min', '21', '56', '45', '30'),
(20, '1', 'Jambi', 'JB002', 'KERINCI', '120M', 'down', '78', '1d 1h 5min', '21', '56', '70', '56');

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
-- Indexes for table `analytic`
--
ALTER TABLE `analytic`
  ADD PRIMARY KEY (`analytic_id`);

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
-- AUTO_INCREMENT for table `analytic`
--
ALTER TABLE `analytic`
  MODIFY `analytic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `city_occupancy`
--
ALTER TABLE `city_occupancy`
  MODIFY `occity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city_regional`
--
ALTER TABLE `city_regional`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `current_occupancy`
--
ALTER TABLE `current_occupancy`
  MODIFY `current_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
