-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2025 at 05:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sc_voting_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_validation`
--

CREATE TABLE `account_validation` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `account_name`, `password`) VALUES
(1, 'Niel', '$2y$10$82GM2lvTwN/qcPn2grkSOOyH2RbgRlhZMJ9JqE.HpMoFOLoIQ5uHy'),
(2, 'Sample', '$2y$10$zWkeUh8cUVVDX1T5OHm9XOu4lsCsb35OoiQxXYrlcGR2xVm7.ouya');

-- --------------------------------------------------------

--
-- Table structure for table `president_candidates`
--

CREATE TABLE `president_candidates` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president_candidates`
--

INSERT INTO `president_candidates` (`id`, `full_name`, `course`, `slogan`, `image`, `created_at`) VALUES
(16, 'JABEEEE DE MCDONALD ', 'BSIT', 'HAPPY MEAL', 'gpu.png', '2025-03-28 11:13:46'),
(17, 'DONMAC CAFE', 'BSHM', 'FREE COFFEE 50 PESOS', 'gpu1.jpg', '2025-03-28 11:14:20'),
(18, 'CROCODILE FARM', 'BSOA', 'CROCKS', 'gpu2.jpg', '2025-03-28 11:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `president_votes`
--

CREATE TABLE `president_votes` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `voted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president_votes`
--

INSERT INTO `president_votes` (`id`, `student_id`, `candidate_id`, `voted_at`) VALUES
(3, '1', 16, '2025-03-28 11:18:38'),
(4, '4', 16, '2025-03-28 16:14:24'),
(5, '2', 17, '2025-03-28 16:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `stelcom_users`
--

CREATE TABLE `stelcom_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stelcom_users`
--

INSERT INTO `stelcom_users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'Arky Shiya', '$2y$10$jq6QbyhLAyfi7BSCBwHOxeQwrek8TsYlG2g4QPnLJ0k4hct1P16n6', '2025-03-25 11:55:22'),
(4, 'awd', '$2y$10$RXjnMtIPPlMxYiGypRey3uc276H24/w/V2PSTtajsfLhZ/AJ32vnu', '2025-03-25 11:56:12'),
(5, 'Niel', '$2y$10$Q3aRl4xY4XCfGRBIuNK43eI.fKD46i8QpEFPs.xs1Eig7aW44socq', '2025-03-25 11:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `valid_account`
--

CREATE TABLE `valid_account` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valid_account`
--

INSERT INTO `valid_account` (`id`, `student_id`, `account_name`, `last_name`, `created_at`) VALUES
(1, '220056', 'Niel', 'Penlas', '2025-03-28 11:09:38'),
(2, '220051', 'Hello', 'World', '2025-03-28 16:13:16'),
(3, '220052', 'World', 'Hello', '2025-03-28 16:13:42'),
(4, '220053', 'jizz', 'jizz', '2025-03-28 16:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `vice_president_candidates`
--

CREATE TABLE `vice_president_candidates` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vice_president_candidates`
--

INSERT INTO `vice_president_candidates` (`id`, `full_name`, `course`, `slogan`, `image`, `created_at`) VALUES
(7, 'LEBRON JAMES', 'BSIT', 'LAKERS', 's7.jpg', '2025-03-28 11:15:55'),
(8, 'STEPHEN CURRY', 'BSOA', 'GOLDEN STATE WARRIORS', 's6.jpg', '2025-03-28 11:16:29'),
(9, 'KYRIE IRVING', 'BSHM', 'DALLAS MAVERICKS', 's5.jpg', '2025-03-28 11:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `vice_president_votes`
--

CREATE TABLE `vice_president_votes` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `voted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vice_president_votes`
--

INSERT INTO `vice_president_votes` (`id`, `student_id`, `candidate_id`, `voted_at`) VALUES
(3, '1', 9, '2025-03-28 11:18:38'),
(4, '4', 9, '2025-03-28 16:14:24'),
(5, '2', 8, '2025-03-28 16:15:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_validation`
--
ALTER TABLE `account_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president_candidates`
--
ALTER TABLE `president_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president_votes`
--
ALTER TABLE `president_votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_voter` (`student_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `stelcom_users`
--
ALTER TABLE `stelcom_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `valid_account`
--
ALTER TABLE `valid_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vice_president_candidates`
--
ALTER TABLE `vice_president_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vice_president_votes`
--
ALTER TABLE `vice_president_votes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_voter` (`student_id`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_validation`
--
ALTER TABLE `account_validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `president_candidates`
--
ALTER TABLE `president_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `president_votes`
--
ALTER TABLE `president_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stelcom_users`
--
ALTER TABLE `stelcom_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `valid_account`
--
ALTER TABLE `valid_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vice_president_candidates`
--
ALTER TABLE `vice_president_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vice_president_votes`
--
ALTER TABLE `vice_president_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `president_votes`
--
ALTER TABLE `president_votes`
  ADD CONSTRAINT `president_votes_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `president_candidates` (`id`);

--
-- Constraints for table `vice_president_votes`
--
ALTER TABLE `vice_president_votes`
  ADD CONSTRAINT `vice_president_votes_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `vice_president_candidates` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
