-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 07:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Abhilash', 'abhilash', 'admin'),
(2, 'Alok', 'alok', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `dob` date NOT NULL,
  `graduation` date NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `guardianname` varchar(50) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `guardianoccupation` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pin` int(10) NOT NULL,
  `housenumber` int(10) NOT NULL,
  `postoffice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `email`, `gender`, `username`, `password`, `phone`, `dob`, `graduation`, `fathername`, `mothername`, `guardianname`, `fatheroccupation`, `motheroccupation`, `guardianoccupation`, `nationality`, `state`, `district`, `pin`, `housenumber`, `postoffice`) VALUES
(1, 'Abhilash Chutia', 'abhilashchutia@gmail.com', 'Male', 'abhilashchutia', 'abhi123', 910149638, '1999-08-02', '2020-06-20', 'Shyamal Chutia', 'Chaya Saikia Chutia', 'Shyamal Chutia', 'Retired Professor', 'Housewife', 'Retired Professor', 'Indian', 'Assam', 'Jorhat', 785001, 3, 'Bongal Pukhuri'),
(2, 'Neha Sharma', 'nehasharma@gmail.com', 'Female', 'nehasharma', 'neha123', 987698760, '1999-07-01', '2020-07-20', 'Rahul Sharma', 'Radha Sharma', 'Rahul Sharma', 'Doctor', 'Shopkepper', 'Doctor', 'Indian', 'Delhi', 'Central Delhi', 100001, 5, 'Central Delhi'),
(3, 'Alok Sarmah Bordoloi', 'alok@gmail.com', 'Male', 'aloksarmahbordoloi', 'alok123', 987656789, '2001-11-18', '2020-06-30', 'Robin bordoloi ', 'Sonali Devi', 'Sonali Devi', 'Govt Job', 'Teacher', 'Teacher', 'Indian', 'Assam', 'Jorhat', 785001, 752, 'Jorhat');

-- --------------------------------------------------------

--
-- Table structure for table `bcamarks`
--

CREATE TABLE `bcamarks` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fundamentals_of_computer` int(3) NOT NULL,
  `programming_in_c` int(3) NOT NULL,
  `databases_management` int(3) NOT NULL,
  `computer_graphics` int(3) NOT NULL,
  `operations_research` int(3) NOT NULL,
  `software_engineering` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bcamarks`
--

INSERT INTO `bcamarks` (`id`, `name`, `roll`, `password`, `fundamentals_of_computer`, `programming_in_c`, `databases_management`, `computer_graphics`, `operations_research`, `software_engineering`) VALUES
(1, 'Abhilash Chutia', '2023001', 'abhilash123', 95, 95, 95, 95, 95, 95),
(2, 'Alok Sarmah Bordoloi', '2023002', 'alok123', 95, 95, 95, 95, 95, 95),
(3, 'Ihtisham Hazarika', '2023003', 'ihtisham123', 90, 90, 90, 90, 90, 90),
(4, 'Amrit Borah', '2023004', 'amrit123', 90, 90, 90, 90, 90, 90),
(5, 'Tanzilur Rahman', '2023005', 'tanzilur123', 90, 90, 90, 90, 90, 90),
(6, 'Agatha Christie', '2023006', 'agatha123', 80, 85, 93, 60, 88, 95);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `username`, `password`, `subject`) VALUES
(1, 'Gautam Kumar Adhyapok', 'gautamkumaradhyapok', 'gautam123', 'Head of the Department [BCA]'),
(2, 'Nribid Bikash Dutta', 'nirbidbikashdutta', 'nirbid123', 'Cloud Technology & Information Security  [BCA]'),
(3, 'Chandan Chakraborty', 'chandanchakraborty', 'chandan123', 'Operating System [BCA]'),
(4, 'Ajoy Kumar Pegu', 'ajoykumarpegu', 'ajoy123', 'Software Engineering [BCA]'),
(5, 'Palash Mudoi', 'palashmudoi', 'palash123', 'Formal Language and Automata [BCA]'),
(6, 'Kajuri Bordoloi', 'kajuribordoloi', 'kajuri123', 'Computer Graphics [BCA]'),
(7, 'Ratul Dutta', 'ratuldutta', 'ratul123', 'Programming, Data Structures and Database [BCA]'),
(8, 'Champak Bora', 'champakbora', 'champak123', 'Mathematics [BCA]');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bcamarks`
--
ALTER TABLE `bcamarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bcamarks`
--
ALTER TABLE `bcamarks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
