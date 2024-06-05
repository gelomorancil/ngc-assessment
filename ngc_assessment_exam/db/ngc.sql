-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 07:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Middle_name` varchar(255) NOT NULL,
  `Gender` varchar(25) NOT NULL,
  `U_ID` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Salt` varchar(255) NOT NULL,
  `Active` int(11) NOT NULL DEFAULT 0,
  `Date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `First_name`, `Last_name`, `Middle_name`, `Gender`, `U_ID`, `Username`, `Password`, `Salt`, `Active`, `Date_created`) VALUES
(30, 'John', 'Doe', 'David', 'Male', '5fa775a9ce40d8d49c147a7af26cec8e9d533b6b', 'john_doe', 'df56362877c6037c6ec501b7f7b8e52350f2e984', 'Mysg1HfU2U2cq2Rp4hw3A3raBbdQbvn5mXYW6k3E1AetfB96fK', 0, '2024-06-05 23:37:07'),
(31, 'Angelo', 'Morancil', 'Depalubos', 'Male', '1350b3b610d01acbf59d4155fe89f69fd1d73697', 'sample', 'e60060facc3385d3a9ee243b8e6582ca7d879dd4', 'OKQrE0UG7EhAENyiGEnyXKCqIGqqIHVjCJyrSanKvOwq39Enx6', 0, '2024-06-06 00:03:57'),
(33, 'Cinderella', 'Princess', 'Disney', 'Female', '8990fe3363f1a121db84c2795fae305640ca23b3', 'cinderella', 'ed29280abca9ef4ca7ae588ff4678a5ce5b5c0d4', 'ap6e50osMIFYY6RLWAJEwW9VdKew6tKqMn40rdjGrfEV2MeDWD', 0, '2024-06-06 01:04:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
