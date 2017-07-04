-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2017 at 04:39 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuId` varchar(255) NOT NULL,
  `firstName` varchar(1024) NOT NULL,
  `lastName` varchar(1024) NOT NULL,
  `grade` int(11) NOT NULL,
  `address` varchar(2048) NOT NULL,
  `dob` date NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `regDate` date NOT NULL,
  `paidStatus` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuId`, `firstName`, `lastName`, `grade`, `address`, `dob`, `contactNo`, `regDate`, `paidStatus`) VALUES
('2017/001', 'Test', 'Testing', 6, '23,Testing lane, Test', '1992-07-08', '0412228311', '2017-07-26', 1),
('2017/002', 'Jara', 'Epa', 7, '234/1,Colombo', '2017-07-03', '0716482041', '2017-07-31', 0),
('2017/005', 'Michale', 'Scofield', 4, '45,Root st.,NC', '1990-04-10', '71866212', '2017-07-25', 1),
('2017/003', 'Sanath', 'Jayasuriya', 5, '43,Moratuwa', '2017-07-12', '94412228411', '2017-07-12', 0),
('2017/004', 'Lahiru', 'Epa', 5, '254,Godagama,Matara', '2017-07-19', '0723456432', '2017-07-04', 1),
('2017/006', 'Aluth', 'Lamaya', 0, '24/1, Aluth para, Walikada.', '2017-07-04', '0912212124', '2017-07-04', 0),
('2017/007', 'jonny', 'Silva', 5, 'godagama,Matara', '2017-07-04', '0716482041', '2017-07-05', 0),
('2017/008', 'Verynew', 'Student', 9, '98, Old rd, New town.', '1992-07-09', '0766482041', '2017-07-04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_id`, `password`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'admin2', 'c84258e9c39059a89ab77d846ddab909');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
