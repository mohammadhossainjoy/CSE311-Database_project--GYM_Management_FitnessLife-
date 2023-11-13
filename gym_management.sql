-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 07:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aname`, `password`) VALUES
('Ishan', 'porota');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_no` varchar(30) NOT NULL,
  `baddress` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch_no`, `baddress`) VALUES
('1', 'Elephant Road'),
('2', 'Zigatola'),
('3', 'Bashundhara'),
('4', 'New market'),
('5', 'Gulshan'),
('6', 'Uttara'),
('7', 'Dhanmondi'),
('8', 'Banani');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `pack_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `phone_no`, `email`, `address`, `password`, `pack_id`, `start_date`, `end_date`) VALUES
(14, 'Alvi', 'Rahman', '0912845389', 'alvi@gmail.com', 'Airport', 'alvi123', 512, '2023-11-10', '2024-01-12'),
(16, 'MH', 'joy', '75890', 'joy@gmail.com', 'jatrabari', 'joy123', 505, '2023-10-31', '2023-11-30'),
(17, 'Jabed', 'hasan', '012356783', 'jabed@gmail.com', 'Rampura', 'jabed123', NULL, '2023-10-31', '2023-11-30'),
(19, 'Nipu', 'Chowdury', '013567829', 'nipu@gmail.com', 'Sajadpur', 'nipu123', 502, '2023-11-10', '2024-01-18'),
(20, 'Himel', 'Hasan', '018978654321', 'himel@gmail.com', 'badda', 'himel123', 501, '2023-11-10', '2024-03-13'),
(21, 'Rasel', 'Islam', '01987897890', 'rasel@gmail.com', 'SanarPara', 'rasel123', 508, '2023-11-10', '2023-12-10'),
(22, 'Miraz', 'Sikdar', '013456278921', 'miraz@gmail.com', 'Jatrabari', 'miraz123', 510, '2023-11-10', '2023-12-25'),
(23, 'Asifur', 'Rahman', '018978787654', 'asif@gmail.com', 'Dhanmondi', 'asif123', 511, '2023-11-11', '2024-01-19'),
(24, 'Rezwan', 'Ahmed', '0197939789', 'rezwan@gmail.com', 'Kuril', 'rezwan123', 504, '2023-11-11', '2023-12-11');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL,
  `ename` varchar(30) DEFAULT NULL,
  `eaddress` varchar(30) DEFAULT NULL,
  `SSN` varchar(20) DEFAULT NULL,
  `ephone_number` varchar(20) DEFAULT NULL,
  `adname` varchar(20) NOT NULL,
  `B_no` varchar(30) DEFAULT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `eaddress`, `SSN`, `ephone_number`, `adname`, `B_no`, `Salary`) VALUES
(1, 'Asif', 'Kalabgan', '1258', '014789', 'Ishan', '3', 15000),
(3, 'joy', 'Badda', '14789', '01236985', 'Ishan', '1', 10000),
(450, 'Sajid', 'Zigatola', '2311', '4378288991', 'Ishan', '2', 20000),
(490, 'Arif', 'Mohakhali', '5555', '673478w389', 'Ishan', '5', 15000),
(501, 'Shakib Al Hasan', 'Dhanmondi', '9876', '01345678998', 'Ishan', '7', 25000),
(503, 'Riyad', 'Bansree', '6756', '018765673289', 'Ishan', '2', 190000),
(506, 'Rakib', 'Shatarkul', '3456', '0187765367', 'Ishan', '5', 170000),
(510, 'Tamim Iqbal', 'Chittagong', '1235', '01728390981', 'Ishan', '6', 25000),
(512, 'Tauj', 'rampura', '9090', '0189787878', 'Ishan', '8', 9000),
(523, 'Jabed', 'Rampura', '2312', '0943875898', 'Ishan', '3', 15000),
(601, 'Sazzad', 'gazipur', '8999', '018763467', 'Ishan', '1', 6900),
(624, 'Saimon', 'Niketon', '6780', '0189766356', 'Ishan', '2', 11000),
(676, 'Sadek', 'Rajin', '787', '465789', 'Ishan', '3', 56789),
(677, 'Sajia', 'Natun Bazar', '5433', '0178686378', 'Ishan', '3', 8000),
(680, 'Asad', 'Shajanpur', '6755', '0198968536', 'Ishan', '3', 6700),
(771, 'Rayhan', 'Mohakhali', '1212', '01897973889', 'Ishan', '6', 18000),
(772, 'Pabel', 'Podua', '9543', '01979368893', 'Ishan', '1', 21000),
(777, 'Saimon', 'Banani', '9994', '4657897675', 'Ishan', '3', 70000),
(778, 'Samim', 'Gulistan', '8781', '0198797673', 'Ishan', '2', 7000),
(779, 'Riyad', 'BD', '6666', '4267298', 'Ishan', '4', 3500),
(6788, 'Shaown', 'Natun Bazar', '4444', '45372899', 'Ishan', '5', 20500);

-- --------------------------------------------------------

--
-- Table structure for table `gym_equipment`
--

CREATE TABLE `gym_equipment` (
  `equipment_id` int(11) NOT NULL,
  `equipment_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gym_equipment`
--

INSERT INTO `gym_equipment` (`equipment_id`, `equipment_name`) VALUES
(101, 'Barbell'),
(102, 'Treadmill'),
(103, 'Elliptical trainer'),
(104, 'Dumbbell'),
(105, 'Bench'),
(106, 'Leg Curl'),
(107, 'Rowing machine'),
(108, 'Kettlebell'),
(109, 'Smith machine'),
(110, 'leg extension'),
(111, 'Medicine ball');

-- --------------------------------------------------------

--
-- Table structure for table `maintainer`
--

CREATE TABLE `maintainer` (
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintainer`
--

INSERT INTO `maintainer` (`eid`) VALUES
(601),
(624),
(676),
(677),
(680);

-- --------------------------------------------------------

--
-- Table structure for table `maintains`
--

CREATE TABLE `maintains` (
  `eid` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintains`
--

INSERT INTO `maintains` (`eid`, `equip_id`) VALUES
(601, 103),
(624, 107),
(676, 101),
(676, 104),
(677, 110),
(680, 108);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `eid` int(11) NOT NULL,
  `Br_no` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`eid`, `Br_no`) VALUES
(503, '2'),
(523, '3'),
(506, '5'),
(501, '7'),
(510, '8'),
(512, '8');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `pid` int(11) NOT NULL,
  `Bno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`pid`, `Bno`) VALUES
(501, '8'),
(502, '7'),
(504, '4'),
(505, '5'),
(506, '6'),
(507, '8'),
(508, '1'),
(509, '2'),
(510, '2'),
(511, '3'),
(512, '4');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Package_id` int(11) NOT NULL,
  `Package_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `type`, `duration`, `price`) VALUES
(501, 'Premium', 'Athletic', '6 months', '9000'),
(502, 'Premium', 'Body-Build', '6 months', '10000'),
(503, 'Silver', 'Body-Build', '2 Month', '6500'),
(504, 'Gold', 'Athletic', '3 months', '5000'),
(505, 'Gold', 'Body-build', '4 months', '8000'),
(506, 'Silver', 'Yoga', '3 months', '3000'),
(507, 'Gold', 'Yoga', '5 months', '4500'),
(508, 'Premium', 'Yoga', '6 months', '5000'),
(509, 'Silver', 'Athletic', '2 months', '4000'),
(510, 'Silver', 'Power Lifting', '3 months', '4500'),
(511, 'Gold', 'Power Lifting', '5 months', '7000'),
(512, 'Premium', 'Power Lifting', '6 months', '8000');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `eid` int(11) NOT NULL,
  `Training_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`eid`, `Training_type`) VALUES
(771, 'Atheletic'),
(772, 'Power Lifter'),
(777, 'Youga'),
(778, 'Youga'),
(779, 'Meditation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aname`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Branch_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pack_id` (`pack_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `SSN` (`SSN`),
  ADD KEY `adname` (`adname`),
  ADD KEY `B_no` (`B_no`);

--
-- Indexes for table `gym_equipment`
--
ALTER TABLE `gym_equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `maintainer`
--
ALTER TABLE `maintainer`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `maintains`
--
ALTER TABLE `maintains`
  ADD PRIMARY KEY (`eid`,`equip_id`),
  ADD KEY `equipid` (`equip_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `Br_no` (`Br_no`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`pid`,`Bno`),
  ADD KEY `Bno` (`Bno`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `pack_id` FOREIGN KEY (`pack_id`) REFERENCES `package` (`Package_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `B_no` FOREIGN KEY (`B_no`) REFERENCES `branch` (`Branch_no`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `adname` FOREIGN KEY (`adname`) REFERENCES `admin` (`aname`);

--
-- Constraints for table `maintainer`
--
ALTER TABLE `maintainer`
  ADD CONSTRAINT `id` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintains`
--
ALTER TABLE `maintains`
  ADD CONSTRAINT `eeeid` FOREIGN KEY (`eid`) REFERENCES `maintainer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `equipid` FOREIGN KEY (`equip_id`) REFERENCES `gym_equipment` (`equipment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `Br_no` FOREIGN KEY (`Br_no`) REFERENCES `branch` (`Branch_no`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `eeid` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `Bno` FOREIGN KEY (`Bno`) REFERENCES `branch` (`Branch_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pid` FOREIGN KEY (`pid`) REFERENCES `package` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trainer`
--
ALTER TABLE `trainer`
  ADD CONSTRAINT `eid` FOREIGN KEY (`eid`) REFERENCES `employee` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
