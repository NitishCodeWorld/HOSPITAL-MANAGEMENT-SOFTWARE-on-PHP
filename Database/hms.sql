-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 10:35 AM
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
(2, 'Nidhi Jha', 'Suresh Jha', 9135467672, 'nidhi@example.com', '1988-07-07', 258469132761, 'Female', 'sikh', 'Orthopaedics', 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'Parbelia', 'Neturia', 'Neturia', 'Purulia', 'West Bengal', 723121, 'Matric', 'BSEB', '2000', '80', 'Isc', 'BSEB', '2002', '90', 'MBBS', 'Delhi', '2007', '90', 'female-doctor.jpg'),
(3, 'Mohammad Ezat', 'Mohammad Riyaz', 7841254695, 'ezatmd@example.com', '1972-06-06', 654821576214, 'Male', 'islam', 'Cardiologist', 'eaxkde', 'delsoc', 'delsoc', 'sellooe', 'djgkels', 866472, 'eaxkde', 'delsoc', 'delsoc', 'sellooe', 'djgkels', 866472, 'Matric', 'Officia quaerat nihi', '2016', '80', 'Isc', 'Quia culpa iure cons', '2018', '68', 'MBBS', 'Exercitation placeat', '2022', '95', 'doc123.jpg'),
(4, 'Odessa Dawson', 'Hedy Pitts', 9584621578, 'gysihawadu@mailinator.com', '2018-09-21', 896547125469, 'Male', 'islam', 'Dermetologist', 'Ab velit qui exceptu', 'Id molestiae enim as', 'Velit laborum Non ', 'Omnis voluptates vol', 'Expedita libero moll', 163648, 'Ab velit qui exceptu', 'Id molestiae enim as', 'Velit laborum Non ', 'Omnis voluptates vol', 'Expedita libero moll', 163648, 'Aliquid voluptate qu', 'Optio voluptatibus ', '1997', '69', 'Aut ut vel maxime pl', 'Inventore cum aut ac', '2005', '81', 'Veniam libero aperi', 'Consequuntur atque m', '1972', '85', 'doctor1.jpg'),
(5, 'Ulric Prince', 'Thomas Dale', 7654862158, 'nuhan@mailinator.com', '1988-08-03', 654128746232, 'Female', 'islam', 'Nephrologist', 'Temporibus totam par', 'Minus repellendus O', 'Blanditiis quo lauda', 'Repudiandae velit to', 'Vitae ex id pariatur', 674562, 'Temporibus totam par', 'Minus repellendus O', 'Blanditiis quo lauda', 'Repudiandae velit to', 'Vitae ex id pariatur', 674562, 'Accusamus voluptatib', 'Sed amet fugiat mag', '2001', '90', 'Placeat est labore', 'Est quam repudiandae', '2010', '85', 'Vitae autem sit ven', 'Alias officiis possi', '2002', '89', 'fdocws.jpeg'),
(6, 'Wang Hawkins', 'Candace Terry', 6254864125, 'hufi@mailinator.com', '1974-06-25', 684571235895, 'Male', 'christain', 'Neurologist', 'Ratione ducimus cum', 'In nesciunt qui est', 'Minus cillum reprehe', 'Ea dolor sed qui ut ', 'Quia consequatur Qu', 345469, 'Ratione ducimus cum', 'In nesciunt qui est', 'Minus cillum reprehe', 'Ea dolor sed qui ut ', 'Quia consequatur Qu', 345469, 'Ut sit tenetur quis', 'Adipisicing porro ev', '1996', '65', 'Qui at asperiores fu', 'Provident aut et cu', '2016', '77', 'Qui dolor cillum sit', 'Alias quas sint ill', '2017', '86', 'doc488.jpg'),
(7, 'Zorita Jenkins', 'Len Watkins', 8214756475, 'giho@mailinator.com', '1992-01-25', 458321589437, 'Male', 'sikh', 'Emergency', 'Cupidatat veritatis ', 'Quo irure ipsa nesc', 'Non cupiditate sunt', 'At dolore quam nihil', 'Nulla sit quia anim', 595478, 'Cupidatat veritatis ', 'Quo irure ipsa nesc', 'Non cupiditate sunt', 'At dolore quam nihil', 'Nulla sit quia anim', 595478, 'Tempora repellendus', 'Iusto dolor ut ut ei', '1982', '73', 'Non quia est odio op', 'Suscipit veniam obc', '1978', '70', 'Officia maxime iste ', 'Ipsum quo ad nihil t', '1996', '80', 'doc5257.jpg'),
(8, 'Chandler Kirkland', 'Wendy Webb', 8214232579, 'sicodarow@mailinator.com', '1989-06-14', 564712589654, 'Female', 'sikh', 'Paediatrician', 'Et minus et sit cul', 'Explicabo Omnis pro', 'Nemo dolorum volupta', 'Et culpa unde enim ', 'Numquam voluptate et', 873256, 'Et minus et sit cul', 'Explicabo Omnis pro', 'Nemo dolorum volupta', 'Et culpa unde enim ', 'Numquam voluptate et', 873256, 'Odit cillum non laud', 'Explicabo Quibusdam', '1970', '88', 'Aut molestiae archit', 'Sit illum enim per', '2014', '85', 'Consequatur sint dol', 'Aut Nam eum enim eum', '1997', '93', 'doc3223'),
(9, 'Kylee Cortez', 'Denise Mercer', 8587456293, 'docitogafa@mailinator.com', '1993-08-09', 561478954621, 'Others', 'christain', 'Gasteroenterologist', 'Rerum voluptatibus l', 'Saepe eaque omnis se', 'Veritatis ipsa quib', 'Possimus facere rem', 'Debitis eligendi in ', 109657, 'Rerum voluptatibus l', 'Saepe eaque omnis se', 'Veritatis ipsa quib', 'Possimus facere rem', 'Debitis eligendi in ', 109657, 'Numquam id illo ab n', 'Non accusantium veli', '1999', '62', 'Pariatur Omnis aut ', 'Pariatur Nostrum co', '1990', '76', 'Odio dolor accusanti', 'Ipsum eos soluta iu', '1978', '86', 'doc66898.webp'),
(10, 'Kiona Rice', 'Ivana Barnett', 8181786567, 'tagati@mailinator.com', '1990-12-20', 624875135864, 'Female', 'hindu', 'Gynaecologist', 'Excepturi ipsam sapi', 'Ut ut minim consequa', 'Sed fugit aut aut d', 'Soluta ea facilis la', 'Dolores alias aut re', 505847, 'Excepturi ipsam sapi', 'Ut ut minim consequa', 'Sed fugit aut aut d', 'Soluta ea facilis la', 'Dolores alias aut re', 505847, 'Nemo quas odio repud', 'Excepturi odio persp', '1988', '66', 'Quam consectetur si', 'Sit ipsa sit comm', '1982', '78', 'Praesentium veritati', 'Atque labore molliti', '2005', '85', 'doc8753.webp'),
(11, 'Adena Garrison', 'Gwendolyn Thornton', 8457563285, 'teli@mailinator.com', '2023-04-21', 956574125861, 'Male', 'christain', 'General Physician', 'Id perspiciatis li', 'Sed labore ipsum ea ', 'Fugiat duis totam r', 'Omnis deleniti ut do', 'Lorem proident est ', 735627, 'Id perspiciatis li', 'Sed labore ipsum ea ', 'Fugiat duis totam r', 'Omnis deleniti ut do', 'Lorem proident est ', 735627, 'Provident elit ut ', 'Harum iste recusanda', '1973', '68', 'Voluptas atque conse', 'Doloremque ducimus ', '1986', '76', 'Aliquid quis aut ea ', 'Eius non dolore in m', '2003', '81', 'doc488.jpg'),
(12, 'Nadine Nash', 'Xyla Edwards', 9865745632, 'suvi@mailinator.com', '2022-01-22', 569845213585, 'Male', 'christain', 'Orthopaedics', 'Enim consequatur ame', 'Delectus iste aperi', 'Laboris Nam sint Nam', 'Do quis deserunt mol', 'Ipsa in qui eum ame', 415689, 'Enim consequatur ame', 'Delectus iste aperi', 'Laboris Nam sint Nam', 'Do quis deserunt mol', 'Ipsa in qui eum ame', 415689, 'Dignissimos non moll', 'Irure vel assumenda ', '2015', '76', 'Ut tenetur quia in e', 'Nisi aliquam laborum', '2015', '69', 'Voluptatem possimus', 'Harum debitis et atq', '2004', '81', 'doc488.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `add_nurse`
--

CREATE TABLE `add_nurse` (
  `id` int(11) NOT NULL,
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
  `dist` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` int(6) NOT NULL,
  `vill1` varchar(50) NOT NULL,
  `post1` varchar(50) NOT NULL,
  `police1` varchar(50) NOT NULL,
  `dist1` varchar(50) NOT NULL,
  `state1` varchar(50) NOT NULL,
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
-- Dumping data for table `add_nurse`
--

INSERT INTO `add_nurse` (`id`, `name`, `fname`, `phone`, `mail`, `dob`, `adhar`, `gender`, `religion`, `specialization`, `vill`, `post`, `police`, `dist`, `state`, `pin`, `vill1`, `post1`, `police1`, `dist1`, `state1`, `pin1`, `course`, `board`, `pyear`, `per`, `course1`, `board1`, `pyear1`, `per1`, `course2`, `board2`, `pyear2`, `per2`, `image`) VALUES
(1, 'Nidhi Jha', 'Suresh Jha', 9135467672, 'nidhi@example.com', '1999-07-22', 101010200100, 'female', 'christain', 'Repudiandae irure es', 'Patna', 'Patna', 'Patna', 'Patna', 'Bihar', 723121, 'Patna', 'Patna', 'Patna', 'Patna', 'Bihar', 723121, 'Explicabo Dignissim', 'BSEB', '2008', '70', 'Magnam dicta iste ex', 'Sit blanditiis nost', '2010', '68', 'Eos quae perspiciat', 'Irure in natus molli', '2016', '90', 'female-doctor.jpg');

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

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(9) NOT NULL,
  `addDoc_id` int(9) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `addDoc_id`, `name`, `specialization`) VALUES
(1, 1, 'Binay Kumar', 'General Physician'),
(2, 2, 'Nidhi Jha', 'Orthopaedics'),
(3, 3, 'Mohammad Ezat', 'Cardiologist'),
(4, 4, 'Odessa Dawson', 'Dermetologist'),
(5, 5, 'Ulric Prince', 'Nephrologist'),
(6, 6, 'Wang Hawkins', 'Neurologist'),
(7, 7, 'Zorita Jenkins', 'Emergency'),
(8, 8, 'Chandler Kirkland', 'Paediatrician'),
(9, 9, 'Kylee Cortez', 'Gasteroenterologist'),
(10, 10, 'Kiona Rice', 'Gynaecologist'),
(11, 1, 'Adena Garrison', 'General Physician');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_id`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'doc123', '54321'),
(3, 'nur123', 'vwxy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_doctor`
--
ALTER TABLE `add_doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_nurse`
--
ALTER TABLE `add_nurse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_patient`
--
ALTER TABLE `add_patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`addDoc_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_doctor`
--
ALTER TABLE `add_doctor`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_nurse`
--
ALTER TABLE `add_nurse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `add_patient`
--
ALTER TABLE `add_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `test` FOREIGN KEY (`addDoc_id`) REFERENCES `add_doctor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
