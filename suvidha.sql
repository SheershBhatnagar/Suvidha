-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2023 at 03:44 AM
-- Server version: 8.0.35-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suvidha`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint DEFAULT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `message` text NOT NULL,
  `messaged_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `resolved` tinyint NOT NULL DEFAULT '0',
  `resolved_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `internship_form`
--

CREATE TABLE `internship_form` (
  `form_id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint NOT NULL,
  `whatsapp` bigint NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `schoolName` varchar(200) NOT NULL,
  `qualifications` varchar(200) NOT NULL,
  `course` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `offer_letter` varchar(15) DEFAULT NULL,
  `internship_status` int NOT NULL DEFAULT '0',
  `offer_letter_status` int NOT NULL DEFAULT '0',
  `form_filled_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `letter_viewed_at` datetime DEFAULT NULL,
  `date_of_joining` datetime DEFAULT NULL,
  `internship_enddate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `role` tinyint NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `last_login_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `internship_form`
--
ALTER TABLE `internship_form`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `internship_form`
--
ALTER TABLE `internship_form`
  MODIFY `form_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
