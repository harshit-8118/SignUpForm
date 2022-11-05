-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 12:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment_olcademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign_up_form_data`
--

CREATE TABLE `sign_up_form_data` (
  `id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Password` varchar(12) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Time_stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up_form_data`
--

INSERT INTO `sign_up_form_data` (`id`, `Name`, `Email`, `Password`, `Dob`, `Gender`, `Time_stamp`) VALUES
(13, 'Ramkrishna Singh', 'abc@gmail.com', '25d55ad283aa', '2022-11-18', 'Male', '2022-11-05 11:05:26'),
(14, 'Harshit Shukla', 'hharshit8118@gmail.c', '21232f297a57', '2022-11-23', 'Male', '2022-11-05 11:05:50'),
(15, 'Rahul singh ', 'abcd@gmail.com', 'e2e54522965d', '2000-06-04', 'Male', '2022-11-05 11:06:39'),
(16, 'Nikita singh', 'xyz@gmail.com', 'e2e54522965d', '2000-07-08', 'Male', '2022-11-05 11:07:14'),
(17, 'aryan raj', 'aryan4234@gmail.com', '95d47be0d380', '2022-12-02', 'Male', '2022-11-05 11:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign_up_form_data`
--
ALTER TABLE `sign_up_form_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign_up_form_data`
--
ALTER TABLE `sign_up_form_data`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
