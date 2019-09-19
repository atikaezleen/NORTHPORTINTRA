-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2018 at 07:01 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `rid` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` time NOT NULL,
  `r_last` varchar(30) NOT NULL,
  `r_first` varchar(30) NOT NULL,
  `r_contact` varchar(30) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `r_type` varchar(30) NOT NULL,
  `r_ocassion` varchar(50) NOT NULL,
  `r_motif` varchar(30) NOT NULL,
  `team_id` int(11) NOT NULL,
  `r_venue` varchar(100) NOT NULL,
  `payable` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `r_status` varchar(10) NOT NULL,
  `date_reserved` date NOT NULL,
  `r_code` varchar(10) NOT NULL,
  `pax` int(11) NOT NULL,
  `combo_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `modeofpayment` varchar(50) NOT NULL,
  `r_position` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `tel_ext` int(10) NOT NULL,
  `pc_ip` varchar(30) NOT NULL,
  `pc_assign` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`rid`, `r_date`, `r_time`, `r_last`, `r_first`, `r_contact`, `r_email`, `r_address`, `r_type`, `r_ocassion`, `r_motif`, `team_id`, `r_venue`, `payable`, `balance`, `r_status`, `date_reserved`, `r_code`, `pax`, `combo_id`, `price`, `modeofpayment`, `r_position`, `division`, `tel_ext`, `pc_ip`, `pc_assign`, `department`) VALUES
(100, '2018-06-10', '00:00:00', '334454', 'azrin', '0123456789', 'norazrin@northport.com.my', '', '', '', '', 0, '', '0.00', '0.00', '', '2018-06-08', 'Sf3DQoxUFm', 0, 3, '50.00', '', 'intern', 'IT', 34535, '127.1.1.10', 'Yes', 'ISD'),
(153, '1970-01-01', '00:00:00', '334454', 'Azrin', '0145160181', 'norazrin@northport.com.my', '', '', '', '', 1, '', '0.00', '0.00', 'Finished', '2018-06-11', '9tjqs9wa75', 0, 3, '50.00', '', 'intern', 'IT', 234566, '127.1.1.10', 'Yes', 'ISD'),
(193, '2018-06-11', '00:00:00', '334454', 'Pavitra', '0123456789', 'norisa.shafika97@gmail.com', '', '', '', '', 1, '', '0.00', '0.00', 'Cancelled', '2018-06-11', 'SBRGZwTfKZ', 0, 3, '50.00', '', 'Exec', 'IT', 34535, '127.1.1.10', 'Yes', 'ISD'),
(195, '2018-06-11', '00:00:00', '334454', 'Nor Azrin', '0123456789', 'norazrin@northport.com.my', '', '', '', '', 1, '', '0.00', '0.00', 'Cancelled', '2018-06-11', 'kQ48OuF052', 0, 3, '50.00', '', 'intern', 'IT', 34535, '127.1.1.10', 'Yes', 'ISD'),
(196, '2018-06-11', '00:00:00', '334454', 'Hariz ', '0123456789', 'norazrin@northport.com.my', '', '', '', '', 2, '', '0.00', '0.00', 'Cancelled', '2018-06-11', 'zgVvL8INo5', 0, 3, '50.00', '', 'Intern', 'IT', 34535, '127.1.1.10', 'Yes', 'ISD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
