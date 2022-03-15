-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 05:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcompany`
--

CREATE TABLE `addcompany` (
  `Name` varchar(30) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `No_of_Placement` int(11) NOT NULL,
  `Min_Salary` int(11) NOT NULL,
  `Max_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcompany`
--

INSERT INTO `addcompany` (`Name`, `Location`, `No_of_Placement`, `Min_Salary`, `Max_salary`) VALUES
('aanand1', 'Chandwad', 6, 200000, 300000),
('Microsoft', 'Banglore', 4, 400000, 530000),
('Apple', 'Chennai', 2, 700000, 800000),
('Wipro', 'Hydrabad', 4, 500000, 600000),
('Infosis', 'Banglore', 5, 800000, 900000);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `adate` date NOT NULL,
  `announcement` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`adate`, `announcement`) VALUES
('2019-03-02', 'Campus Drive at S.N.D.Polytechnic Yeola\r\nfor more Information cantact:9043789786'),
('2019-09-02', 'Campus Drive at Sandip Foundation Nashik,for more Information cantact:9043789786'),
('2020-02-03', 'SNJB\'s SHHJB POLY arranged campus drive for computer group for more details contact:7890876543');

-- --------------------------------------------------------

--
-- Table structure for table `collegeinfo`
--

CREATE TABLE `collegeinfo` (
  `name` varchar(100) NOT NULL,
  `society` varchar(100) DEFAULT '-',
  `recognized_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collegeinfo`
--

INSERT INTO `collegeinfo` (`name`, `society`, `recognized_by`) VALUES
('poly', '-', 'snjb');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `user`, `pass`) VALUES
(1, 'placement', 'placement'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `studentregistration`
--

CREATE TABLE `studentregistration` (
  `ID` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `branch` text NOT NULL,
  `percent` float NOT NULL,
  `passyear` year(4) NOT NULL,
  `address` text NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `Placement` varchar(50) NOT NULL DEFAULT 'Not Selected'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentregistration`
--

INSERT INTO `studentregistration` (`ID`, `username`, `password`, `email`, `branch`, `percent`, `passyear`, `address`, `mobileno`, `dob`, `Placement`) VALUES
(1, 'Chavan Pratibha', 'pratibha123', 'pratibha@gmail.com', 'MCS', 90, 2019, 'Chandwad', '7896546534', '2001-10-06', 'selected'),
(2, 'Deshmukh Pooja', 'pooja123', 'pooja@gmail.com', 'BCS', 90, 2019, 'Chandwad', '9876554321', '2001-06-12', 'Not Selected'),
(3, 'Pooja Deshmukh', 'pooja123', 'pooja@gmail.com', 'Diploma in Computer Tech.', 89.9, 2019, 'Chandwad', '8762453125', '2001-06-05', 'Selected'),
(4, 'Ahire Kalyani ', 'kalyani123', 'kalyani@gmail.com', 'BCS', 90, 2019, 'Satana', '9087786745', '2001-01-17', 'Selected'),
(5, 'Deshmane Rutuja', 'rutuja123', 'rutuja@gmail.com', 'MCS', 89.56, 2018, 'Devgaon', '8976879076', '2001-11-07', 'Not Selected'),
(6, 'Chavan Gaurav', 'gaurav123', 'gaurav@gmail.com', 'MCA', 78.9, 2019, 'Chandwad', '9087987678', '2001-06-12', 'Not Selected'),
(7, 'Chavan Shivani', 'shivani123', 'shivani@gmail.com', 'IT', 91.78, 2019, 'Chandwad', '9876543210', '2003-01-05', 'Not Selected'),
(8, 'Chavan Vaibhav', 'vaibhav123', 'vaibhav@gmail.com', 'BE in Comp. Tech.', 95, 2018, 'Chandwad', '8976897605', '1999-06-21', 'Selected'),
(9, 'Jain Sakshi', 'sakshi123', 'sakshi@gmail.com', 'BE in Comp. Tech.', 92.9, 2019, 'Jalgaon', '7899807654', '2001-04-21', 'Not Selected'),
(10, 'Bhandari Aditi', 'aditi123', 'aditi@gmail.com', 'IT', 91.56, 2018, 'Manmad', '9087755432', '2001-03-30', 'Not Selected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegeinfo`
--
ALTER TABLE `collegeinfo`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentregistration`
--
ALTER TABLE `studentregistration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentregistration`
--
ALTER TABLE `studentregistration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
