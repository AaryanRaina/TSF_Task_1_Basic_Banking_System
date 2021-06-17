-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 09:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer details`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(400) NOT NULL,
  `account number` int(6) NOT NULL,
  `balance` int(8) NOT NULL,
  `date and time` datetime NOT NULL,
  `select and view` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `age`, `gender`, `email`, `phone`, `address`, `account number`, `balance`, `date and time`, `select and view`) VALUES
(1, 'RAMAN KUMAR', 22, 'MALE', 'RAMAN@GMAIL.COM', 324323511, 'AMAN VIHAR, BANGLORE', 1299008, 39700, '2021-05-15 03:37:16', 'select and view'),
(2, 'RANJAN DAS', 25, 'MALE', 'RANJAN@GMAIL.COM', 2147483647, 'ANAND NAGAR, BANGALORE ', 6756453, 56000, '2021-05-15 03:41:02', 'select and view'),
(3, 'RAKHI SINHA', 23, 'FEMALE', 'RAKHI@GMAIL.COM', 1234321111, 'WESTERN ROAD , BANGALORE ', 1299007, 75000, '2021-05-15 03:46:23', 'select and view'),
(4, 'SALONI KUMARI', 26, 'FEMALE', 'SALONI@GMAIL.COM', 456789765, 'ANAND VIHAR, DELHI', 129006, 40000, '2021-05-15 03:48:12', 'select and view'),
(5, 'ANDREW MARTHUR', 28, 'MALE', 'ANDREW@GMAIL.COM', 1223124312, 'BANGLORE', 1299005, 87300, '2021-05-15 03:50:52', 'select and view'),
(6, 'LUISY ALLEN', 20, 'FEMALE', 'LUISY@GMAIL.COM', 1221321121, 'DELHI', 1299004, 50000, '2021-05-15 03:56:23', ''),
(7, 'ASEES KAUR', 34, 'FEMALE', 'ASEES@GMAIL.COM', 989786712, 'PUNJAB', 1299003, 34000, '2021-05-15 03:58:35', 'select and view'),
(8, 'PHILIPS CHARLES ', 42, 'MALE', 'CHARLES@GMAIL.COM', 989674512, 'DELHI', 1299002, 66000, '2021-05-15 04:02:16', 'select and view'),
(9, 'ROSHNI WALIA', 56, 'FEMALE', 'WALIA@GMAIL.COM', 988679721, 'MUMBAI', 1299001, 90000, '2021-05-15 04:04:01', 'select and view'),
(10, 'ABHAY KUMAR', 45, 'MALE', 'ABHAY@GMAIL.COM', 99887711, 'BANGLORE', 1299011, 90000, '2021-05-15 04:05:28', 'select and view');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'RANJAN DAS', 'LUISY ALLEN', 10000, '2021-05-16 21:58:32'),
(2, 'ANDREW MARTHUR', 'RAKHI SINHA', 20000, '2021-05-16 22:05:05'),
(3, 'ANDREW MARTHUR', 'RAKHI SINHA', 20000, '2021-05-16 22:06:01'),
(4, 'RAKHI SINHA', 'LUISY ALLEN', 5000, '2021-05-16 22:25:14'),
(5, 'SALONI KUMARI', 'RAMAN KUMAR', 1000, '2021-05-16 22:28:12'),
(6, 'RAMAN KUMAR', 'ABHAY KUMAR', 1000, '2021-05-16 22:59:33'),
(7, 'RAMAN KUMAR', 'ANDREW MARTHUR', 2300, '2021-05-17 00:36:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
