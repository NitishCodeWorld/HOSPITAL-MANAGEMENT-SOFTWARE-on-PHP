-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 02:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_patient`
--

CREATE TABLE `add_patient` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `adhar` bigint(12) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `rel` varchar(20) NOT NULL,
  `patient_id` varchar(10) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(50) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(6) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_patient`
--

INSERT INTO `add_patient` (`id`, `name`, `fname`, `phone`, `mail`, `dob`, `adhar`, `gender`, `rel`, `patient_id`, `vill`, `post`, `police`, `dist`, `state`, `pin`, `image`) VALUES
(1, 'Nitish Kumar', 'Rakesh Kumar', 7278007846, 'demo@gmail.com', '1989-03-31', 258469132761, 'male', 'islam', 'NITI7846', 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'pic.jpeg'),
(2, 'Vikash Kumar', 'Rakesh Kumar', 8569412793, 'binayhello@rediffmail.com', '2007-09-10', 813647953185, 'male', 'christain', 'VIKA2793', 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'pic.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_patient`
--
ALTER TABLE `add_patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_patient`
--
ALTER TABLE `add_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
