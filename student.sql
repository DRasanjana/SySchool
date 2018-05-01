-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 05:38 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `AdmissionNumber` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confrompassword` varchar(100) NOT NULL,
  `NamewithInitials` varchar(100) NOT NULL,
  `Grade` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`AdmissionNumber`, `Password`, `Confrompassword`, `NamewithInitials`, `Grade`) VALUES
('0', '10001', '10001', 'L.Lavan', '10A'),
('0', '10002', '10002', 'R.Raj', '10'),
('0', '', '', '', ''),
('0', '10003', '10003', 'K.Kabil', '10A'),
('0', '10004', '10004', 'B.Babil', '10A'),
('0', '10005', '10005', 'K.Kuddi', '10A'),
('0', '10006', '10006', 'L.DEFE', '10A'),
('0', '10', '10', 'mbj', '10'),
('0', '100', '100', 'k.lllllll', '10'),
('', '10', '10', 'l.kjjj', '10'),
('1000000', '10', '10', 'gg', '10'),
('10008', '10008', '10008', 'j.gfdsa', '10'),
('kbm', '45', '45', 'jjjj', '4'),
('10010A', '10010', '10010', 'L.Thevan', '10A'),
('100001', '1111', '1111', 'H. H YIHFUEH', '12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
