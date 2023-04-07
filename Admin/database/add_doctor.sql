-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 02:07 PM
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
-- Table structure for table `add_doctor`
--

CREATE TABLE `add_doctor` (
  `id` int(9) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `adhar` bigint(12) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `vill` varchar(50) NOT NULL,
  `post` varchar(50) NOT NULL,
  `police` varchar(50) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin` int(6) NOT NULL,
  `vill1` varchar(50) NOT NULL,
  `post1` varchar(50) NOT NULL,
  `police1` varchar(50) NOT NULL,
  `dist1` varchar(20) NOT NULL,
  `state1` varchar(30) NOT NULL,
  `pin1` int(6) NOT NULL,
  `course` varchar(50) NOT NULL,
  `board` varchar(50) NOT NULL,
  `pyear` varchar(10) NOT NULL,
  `per` varchar(10) NOT NULL,
  `course1` varchar(50) NOT NULL,
  `board1` varchar(50) NOT NULL,
  `pyear1` varchar(10) NOT NULL,
  `per1` varchar(10) NOT NULL,
  `course2` varchar(50) NOT NULL,
  `board2` varchar(50) NOT NULL,
  `pyear2` varchar(10) NOT NULL,
  `per2` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_doctor`
--

INSERT INTO `add_doctor` (`id`, `name`, `fname`, `phone`, `mail`, `dob`, `adhar`, `gender`, `religion`, `specialization`, `vill`, `post`, `police`, `dist`, `state`, `pin`, `vill1`, `post1`, `police1`, `dist1`, `state1`, `pin1`, `course`, `board`, `pyear`, `per`, `course1`, `board1`, `pyear1`, `per1`, `course2`, `board2`, `pyear2`, `per2`, `image`) VALUES
(1, 'Binay Kumar', 'Rakesh Kumar', 9135467672, 'binayhello@rediffmail.com', '1980-07-16', 813647953185, 'Male', 'hindu', 'General Physician', 'Patna', 'Patna', 'Patna', 'Patna', 'Bihar', 123456, 'Patna', 'Patna', 'Patna', 'Patna', 'Bihar', 123456, 'Matric', 'BSEB', '1993', '70', 'Isc', 'BSEB', '1995', '90', 'MBBS', 'Delhi', '2000', '95', 'pic.jpeg'),
(2, 'Nidhi Jha', 'Suresh Jha', 9135467672, 'nidhi@example.com', '1988-07-07', 258469132761, 'Female', 'sikh', 'Orthopaedics', 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'Matric', 'BSEB', '2000', '80', 'Isc', 'BSEB', '2002', '90', 'MBBS', 'Delhi', '2007', '90', 'female-doctor.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
