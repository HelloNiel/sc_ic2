-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql307.byetcluster.com
-- Generation Time: Apr 03, 2025 at 04:00 AM
-- Server version: 10.6.19-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezyro_38624632_sc_voting_db`
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
  `department` varchar(255) DEFAULT NULL,
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
(1, 'Niel', '$2y$10$AQhLm8KLZNAr78UQGKOy2ejBSVM3DhTlYJftNIdVQ.FyiqPpKPg4G');

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
(1, 'Lennith Castro', 'BSIT', 'One Team, One Dream', 'lennith.png', '2025-04-02 16:49:09'),
(2, 'Jamie Reyno', 'BSHM', 'Better plans lead to a better future.', 'jamie.png', '2025-04-02 16:54:06'),
(3, 'Velly Ybanez', 'BSOA', 'Smart choices build a brighter future.', 'velly.png', '2025-04-02 16:55:53');

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
(1, '1', 3, '2025-04-03 00:46:24'),
(2, '3', 2, '2025-04-03 00:46:46'),
(3, '4', 3, '2025-04-03 00:46:54'),
(4, '2', 3, '2025-04-03 00:48:09'),
(5, '5', 3, '2025-04-03 00:48:31'),
(6, '6', 3, '2025-04-03 00:49:02'),
(7, '7', 3, '2025-04-03 00:49:42'),
(8, '8', 1, '2025-04-03 00:49:43'),
(9, '10', 1, '2025-04-03 00:49:59'),
(10, '9', 3, '2025-04-03 00:50:48'),
(11, '11', 3, '2025-04-03 00:51:04'),
(12, '13', 3, '2025-04-03 00:51:19'),
(13, '12', 1, '2025-04-03 00:51:36'),
(14, '14', 3, '2025-04-03 00:52:01'),
(15, '17', 3, '2025-04-03 00:53:37'),
(16, '16', 3, '2025-04-03 00:54:33'),
(17, '15', 3, '2025-04-03 00:54:40'),
(18, '18', 3, '2025-04-03 00:55:53'),
(19, '20', 2, '2025-04-03 00:57:08'),
(20, '24', 3, '2025-04-03 00:57:44'),
(21, '21', 3, '2025-04-03 00:58:00'),
(22, '22', 3, '2025-04-03 00:58:25'),
(23, '25', 1, '2025-04-03 00:58:28'),
(24, '23', 3, '2025-04-03 00:58:29'),
(25, '26', 3, '2025-04-03 00:58:42'),
(26, '27', 3, '2025-04-03 00:58:55'),
(27, '28', 2, '2025-04-03 00:59:06'),
(28, '30', 1, '2025-04-03 01:02:18'),
(29, '29', 1, '2025-04-03 01:02:19'),
(30, '35', 3, '2025-04-03 01:02:55'),
(31, '36', 3, '2025-04-03 01:03:02'),
(32, '32', 2, '2025-04-03 01:03:18'),
(33, '33', 2, '2025-04-03 01:03:19'),
(34, '34', 3, '2025-04-03 01:03:30'),
(35, '38', 3, '2025-04-03 01:03:42'),
(36, '31', 3, '2025-04-03 01:03:42'),
(37, '39', 3, '2025-04-03 01:03:50'),
(38, '41', 3, '2025-04-03 01:04:04'),
(39, '44', 3, '2025-04-03 01:05:11'),
(40, '43', 3, '2025-04-03 01:05:24'),
(41, '42', 3, '2025-04-03 01:05:37'),
(42, '45', 3, '2025-04-03 01:05:54'),
(43, '46', 1, '2025-04-03 01:06:19'),
(44, '47', 3, '2025-04-03 01:07:31'),
(45, '48', 3, '2025-04-03 01:08:19'),
(46, '49', 1, '2025-04-03 01:13:29'),
(47, '50', 3, '2025-04-03 01:15:21'),
(48, '52', 1, '2025-04-03 01:17:43'),
(49, '51', 1, '2025-04-03 01:18:04'),
(50, '53', 1, '2025-04-03 01:18:15'),
(51, '54', 3, '2025-04-03 01:20:34'),
(52, '57', 3, '2025-04-03 01:21:25'),
(53, '55', 3, '2025-04-03 01:21:56'),
(54, '60', 3, '2025-04-03 01:22:02'),
(55, '61', 3, '2025-04-03 01:22:03'),
(56, '59', 3, '2025-04-03 01:22:06'),
(57, '56', 3, '2025-04-03 01:22:06'),
(58, '58', 3, '2025-04-03 01:22:09'),
(59, '63', 2, '2025-04-03 01:22:10'),
(60, '62', 3, '2025-04-03 01:23:09'),
(61, '66', 1, '2025-04-03 01:23:55'),
(62, '65', 3, '2025-04-03 01:24:05'),
(63, '64', 3, '2025-04-03 01:24:14'),
(64, '67', 3, '2025-04-03 01:24:51'),
(65, '69', 3, '2025-04-03 01:25:11'),
(66, '70', 3, '2025-04-03 01:25:28'),
(67, '68', 3, '2025-04-03 01:29:06'),
(68, '71', 2, '2025-04-03 01:32:27'),
(69, '72', 1, '2025-04-03 01:32:51'),
(70, '73', 3, '2025-04-03 01:35:10'),
(71, '74', 3, '2025-04-03 01:36:55'),
(72, '75', 2, '2025-04-03 01:40:49'),
(73, '76', 2, '2025-04-03 01:41:31'),
(74, '77', 1, '2025-04-03 01:42:01'),
(75, '78', 1, '2025-04-03 01:43:50'),
(76, '79', 3, '2025-04-03 01:47:41'),
(77, '80', 3, '2025-04-03 01:48:18'),
(78, '81', 3, '2025-04-03 01:53:20'),
(79, '82', 3, '2025-04-03 01:56:15'),
(80, '83', 3, '2025-04-03 01:56:17'),
(81, '84', 3, '2025-04-03 01:56:36'),
(82, '85', 1, '2025-04-03 01:57:30'),
(83, '91', 3, '2025-04-03 01:58:11'),
(84, '89', 3, '2025-04-03 01:58:27'),
(85, '87', 1, '2025-04-03 01:58:50'),
(86, '92', 3, '2025-04-03 01:58:52'),
(87, '88', 1, '2025-04-03 01:58:54'),
(88, '94', 3, '2025-04-03 02:00:00'),
(89, '95', 3, '2025-04-03 02:00:57'),
(90, '93', 3, '2025-04-03 02:00:59'),
(91, '97', 2, '2025-04-03 02:02:58'),
(92, '98', 3, '2025-04-03 02:05:14'),
(93, '102', 3, '2025-04-03 02:05:31'),
(94, '100', 3, '2025-04-03 02:05:39'),
(95, '99', 3, '2025-04-03 02:05:51'),
(96, '101', 3, '2025-04-03 02:06:35'),
(97, '105', 1, '2025-04-03 02:09:02'),
(98, '104', 3, '2025-04-03 02:09:30'),
(99, '106', 1, '2025-04-03 02:09:30'),
(100, '103', 3, '2025-04-03 02:09:32'),
(101, '107', 1, '2025-04-03 02:12:23'),
(102, '108', 1, '2025-04-03 02:13:44'),
(103, '109', 1, '2025-04-03 02:14:34'),
(104, '110', 3, '2025-04-03 02:24:55'),
(105, '112', 3, '2025-04-03 02:25:19'),
(106, '111', 3, '2025-04-03 02:25:49'),
(107, '114', 3, '2025-04-03 02:26:10'),
(108, '113', 3, '2025-04-03 02:26:12'),
(109, '115', 3, '2025-04-03 02:26:15'),
(110, '116', 3, '2025-04-03 02:28:04'),
(111, '117', 3, '2025-04-03 02:28:13'),
(112, '119', 3, '2025-04-03 02:30:19'),
(113, '118', 3, '2025-04-03 02:30:49'),
(114, '120', 1, '2025-04-03 02:33:28'),
(115, '121', 1, '2025-04-03 02:35:08'),
(116, '122', 3, '2025-04-03 02:36:51'),
(117, '123', 1, '2025-04-03 02:39:29'),
(118, '124', 3, '2025-04-03 02:40:45'),
(119, '125', 3, '2025-04-03 02:41:23'),
(120, '126', 3, '2025-04-03 02:42:33'),
(121, '127', 1, '2025-04-03 02:48:16'),
(122, '128', 3, '2025-04-03 02:48:47'),
(123, '129', 3, '2025-04-03 02:49:15'),
(124, '130', 3, '2025-04-03 02:50:29'),
(125, '131', 1, '2025-04-03 02:50:57'),
(126, '132', 3, '2025-04-03 02:51:59'),
(127, '135', 3, '2025-04-03 02:53:08'),
(128, '133', 3, '2025-04-03 02:53:19'),
(129, '137', 3, '2025-04-03 02:53:28'),
(130, '136', 3, '2025-04-03 02:53:41'),
(131, '138', 3, '2025-04-03 02:54:22'),
(132, '139', 3, '2025-04-03 02:56:48'),
(133, '141', 3, '2025-04-03 03:00:18'),
(134, '140', 1, '2025-04-03 03:00:28'),
(135, '142', 3, '2025-04-03 03:00:28'),
(136, '143', 2, '2025-04-03 03:02:12'),
(137, '144', 2, '2025-04-03 03:04:36'),
(138, '145', 2, '2025-04-03 03:14:46'),
(139, '146', 3, '2025-04-03 03:18:19'),
(140, '147', 3, '2025-04-03 03:18:24'),
(141, '149', 2, '2025-04-03 03:26:15'),
(142, '148', 3, '2025-04-03 03:26:15'),
(143, '150', 3, '2025-04-03 03:29:04'),
(144, '152', 2, '2025-04-03 03:30:22'),
(145, '151', 3, '2025-04-03 03:30:24'),
(146, '153', 3, '2025-04-03 03:34:23'),
(147, '154', 3, '2025-04-03 03:35:43'),
(148, '155', 3, '2025-04-03 03:37:03'),
(149, '157', 3, '2025-04-03 03:45:35'),
(150, '158', 3, '2025-04-03 03:47:40'),
(151, '159', 3, '2025-04-03 03:47:56'),
(152, '160', 3, '2025-04-03 03:53:52'),
(153, '161', 2, '2025-04-03 03:56:32'),
(154, '162', 1, '2025-04-03 03:57:53'),
(155, '163', 3, '2025-04-03 03:57:54'),
(156, '164', 1, '2025-04-03 04:13:33'),
(157, '165', 3, '2025-04-03 04:15:18'),
(158, '166', 1, '2025-04-03 04:18:21'),
(159, '167', 2, '2025-04-03 04:22:45'),
(160, '168', 2, '2025-04-03 04:23:25'),
(161, '169', 3, '2025-04-03 04:29:02'),
(162, '170', 3, '2025-04-03 04:35:32'),
(163, '171', 3, '2025-04-03 04:40:18'),
(164, '172', 3, '2025-04-03 04:47:17'),
(165, '173', 3, '2025-04-03 04:48:39'),
(166, '174', 3, '2025-04-03 04:52:20'),
(167, '175', 3, '2025-04-03 05:01:25'),
(168, '176', 3, '2025-04-03 05:02:03'),
(169, '177', 2, '2025-04-03 05:03:41'),
(170, '179', 2, '2025-04-03 05:04:59'),
(171, '178', 2, '2025-04-03 05:05:17'),
(172, '180', 3, '2025-04-03 05:06:06'),
(173, '182', 1, '2025-04-03 05:07:12'),
(174, '181', 2, '2025-04-03 05:07:17'),
(175, '183', 3, '2025-04-03 05:10:37'),
(176, '184', 1, '2025-04-03 05:10:38'),
(177, '186', 3, '2025-04-03 05:13:26'),
(178, '185', 3, '2025-04-03 05:13:39'),
(179, '187', 2, '2025-04-03 05:16:34'),
(180, '188', 3, '2025-04-03 05:17:53'),
(181, '189', 2, '2025-04-03 05:19:30'),
(182, '191', 1, '2025-04-03 05:21:10'),
(183, '190', 2, '2025-04-03 05:21:47'),
(184, '192', 3, '2025-04-03 05:21:54'),
(185, '194', 3, '2025-04-03 05:22:08'),
(186, '193', 3, '2025-04-03 05:22:17'),
(187, '195', 1, '2025-04-03 05:25:28'),
(188, '196', 2, '2025-04-03 05:39:51'),
(189, '197', 2, '2025-04-03 05:42:14'),
(190, '200', 3, '2025-04-03 05:42:16'),
(191, '199', 3, '2025-04-03 05:42:18'),
(192, '198', 2, '2025-04-03 05:42:19'),
(193, '201', 2, '2025-04-03 05:42:59'),
(194, '202', 3, '2025-04-03 05:48:38'),
(195, '203', 2, '2025-04-03 05:48:45'),
(196, '205', 2, '2025-04-03 05:50:43'),
(197, '206', 1, '2025-04-03 05:51:20'),
(198, '207', 2, '2025-04-03 05:53:26'),
(199, '208', 2, '2025-04-03 05:53:56'),
(200, '209', 2, '2025-04-03 05:55:33'),
(201, '210', 1, '2025-04-03 05:57:09'),
(202, '211', 2, '2025-04-03 05:58:11'),
(203, '212', 2, '2025-04-03 06:00:52'),
(204, '213', 1, '2025-04-03 06:03:33'),
(205, '214', 3, '2025-04-03 06:04:21'),
(206, '217', 1, '2025-04-03 06:04:36'),
(207, '215', 2, '2025-04-03 06:05:15'),
(208, '216', 2, '2025-04-03 06:05:45'),
(209, '220', 1, '2025-04-03 06:07:35'),
(210, '219', 2, '2025-04-03 06:08:24'),
(211, '218', 1, '2025-04-03 06:08:35'),
(212, '222', 3, '2025-04-03 06:10:18'),
(213, '223', 2, '2025-04-03 06:10:31'),
(214, '221', 2, '2025-04-03 06:11:16'),
(215, '228', 3, '2025-04-03 06:18:49'),
(216, '225', 3, '2025-04-03 06:19:02'),
(217, '227', 3, '2025-04-03 06:19:30'),
(218, '226', 1, '2025-04-03 06:19:46'),
(219, '224', 3, '2025-04-03 06:20:14'),
(220, '229', 3, '2025-04-03 06:20:48'),
(221, '230', 3, '2025-04-03 06:20:51'),
(222, '231', 3, '2025-04-03 06:23:05'),
(223, '232', 3, '2025-04-03 06:23:22'),
(224, '236', 3, '2025-04-03 06:24:11'),
(225, '233', 3, '2025-04-03 06:24:26'),
(226, '234', 3, '2025-04-03 06:24:28'),
(227, '235', 3, '2025-04-03 06:25:12'),
(228, '238', 3, '2025-04-03 06:26:18'),
(229, '239', 2, '2025-04-03 06:26:19'),
(230, '240', 3, '2025-04-03 06:26:23'),
(231, '241', 3, '2025-04-03 06:26:50'),
(232, '242', 3, '2025-04-03 06:28:05'),
(233, '243', 3, '2025-04-03 06:29:34'),
(234, '244', 1, '2025-04-03 06:29:37'),
(235, '245', 3, '2025-04-03 06:31:00'),
(236, '246', 3, '2025-04-03 06:31:13'),
(237, '248', 1, '2025-04-03 06:31:22'),
(238, '250', 1, '2025-04-03 06:31:33'),
(239, '249', 3, '2025-04-03 06:31:35'),
(240, '247', 3, '2025-04-03 06:31:49'),
(241, '251', 3, '2025-04-03 06:32:03'),
(242, '252', 3, '2025-04-03 06:33:45'),
(243, '253', 3, '2025-04-03 06:35:08'),
(244, '254', 3, '2025-04-03 06:41:57'),
(245, '255', 3, '2025-04-03 06:42:06'),
(246, '258', 1, '2025-04-03 06:43:00'),
(247, '256', 3, '2025-04-03 06:43:08'),
(248, '261', 1, '2025-04-03 06:43:17'),
(249, '260', 2, '2025-04-03 06:43:23'),
(250, '257', 3, '2025-04-03 06:43:26'),
(251, '262', 1, '2025-04-03 06:43:40'),
(252, '259', 3, '2025-04-03 06:44:17'),
(253, '263', 3, '2025-04-03 06:47:29'),
(254, '264', 3, '2025-04-03 06:47:30'),
(255, '265', 3, '2025-04-03 06:48:31'),
(256, '267', 2, '2025-04-03 06:50:55'),
(257, '266', 3, '2025-04-03 06:51:40'),
(258, '268', 1, '2025-04-03 06:52:20'),
(259, '269', 3, '2025-04-03 06:53:45'),
(260, '270', 1, '2025-04-03 06:53:46'),
(261, '271', 3, '2025-04-03 06:54:12'),
(262, '274', 1, '2025-04-03 06:59:37'),
(263, '273', 1, '2025-04-03 06:59:47'),
(264, '275', 3, '2025-04-03 06:59:59'),
(265, '276', 1, '2025-04-03 07:00:08'),
(266, '277', 3, '2025-04-03 07:00:22'),
(267, '278', 3, '2025-04-03 07:02:01'),
(268, '279', 2, '2025-04-03 07:02:33'),
(269, '280', 2, '2025-04-03 07:02:38'),
(270, '282', 1, '2025-04-03 07:02:51'),
(271, '281', 3, '2025-04-03 07:02:58'),
(272, '283', 1, '2025-04-03 07:03:12'),
(273, '285', 2, '2025-04-03 07:04:30'),
(274, '286', 2, '2025-04-03 07:05:07'),
(275, '284', 2, '2025-04-03 07:05:16'),
(276, '287', 2, '2025-04-03 07:05:42'),
(277, '289', 2, '2025-04-03 07:07:39'),
(278, '290', 2, '2025-04-03 07:07:58'),
(279, '288', 1, '2025-04-03 07:07:59'),
(280, '291', 1, '2025-04-03 07:09:54'),
(281, '292', 1, '2025-04-03 07:10:24'),
(282, '293', 3, '2025-04-03 07:10:43'),
(283, '294', 3, '2025-04-03 07:11:04'),
(284, '295', 3, '2025-04-03 07:13:17'),
(285, '296', 1, '2025-04-03 07:13:30'),
(286, '297', 1, '2025-04-03 07:14:23'),
(287, '298', 1, '2025-04-03 07:14:32'),
(288, '299', 3, '2025-04-03 07:14:51'),
(289, '300', 1, '2025-04-03 07:16:09'),
(290, '301', 1, '2025-04-03 07:16:16'),
(291, '302', 1, '2025-04-03 07:19:40'),
(292, '304', 2, '2025-04-03 07:20:03'),
(293, '303', 2, '2025-04-03 07:20:04'),
(294, '305', 2, '2025-04-03 07:23:28'),
(295, '308', 1, '2025-04-03 07:24:29'),
(296, '307', 3, '2025-04-03 07:24:35'),
(297, '306', 3, '2025-04-03 07:24:36'),
(298, '309', 1, '2025-04-03 07:24:41'),
(299, '310', 3, '2025-04-03 07:26:02'),
(300, '311', 3, '2025-04-03 07:27:20'),
(301, '313', 3, '2025-04-03 07:27:31'),
(302, '312', 3, '2025-04-03 07:27:50'),
(303, '314', 3, '2025-04-03 07:35:52'),
(304, '315', 1, '2025-04-03 07:39:49'),
(305, '316', 3, '2025-04-03 07:40:44'),
(306, '317', 1, '2025-04-03 07:41:01'),
(307, '319', 3, '2025-04-03 07:42:42'),
(308, '318', 3, '2025-04-03 07:43:06'),
(309, '320', 1, '2025-04-03 07:45:07'),
(310, '321', 3, '2025-04-03 07:45:23'),
(311, '323', 1, '2025-04-03 07:48:39'),
(312, '324', 3, '2025-04-03 07:48:40'),
(313, '322', 3, '2025-04-03 07:49:12'),
(314, '326', 1, '2025-04-03 07:49:22'),
(315, '327', 3, '2025-04-03 07:49:36'),
(316, '325', 3, '2025-04-03 07:50:27'),
(317, '328', 3, '2025-04-03 07:50:34'),
(318, '329', 2, '2025-04-03 07:51:34'),
(319, '330', 3, '2025-04-03 07:53:44'),
(320, '331', 2, '2025-04-03 07:56:23'),
(321, '332', 1, '2025-04-03 07:59:44');

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
(1, 'Niel', '$2y$10$78JhiDCp2.Xru4QKlFUqzOWQf/TIXUNXJK/cyEpxmV.nxku8Jdd0C', '2025-04-01 09:37:20');

-- --------------------------------------------------------

--
-- Table structure for table `valid_account`
--

CREATE TABLE `valid_account` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valid_account`
--

INSERT INTO `valid_account` (`id`, `student_id`, `account_name`, `last_name`, `department`, `created_at`) VALUES
(1, '230120', 'Carla', 'De Castro', 'Bachelor of Science in Office Administration', '2025-04-03 00:42:48'),
(2, '210022', 'Alysa ', 'Fabrigas', 'Bachelor of Science in Office Administration', '2025-04-03 00:45:28'),
(3, '240132', 'John Benedick', 'Ayson', 'Associate in Computer Technology', '2025-04-03 00:45:38'),
(4, '230014', 'Velly', 'ybanez', 'Bachelor of Science in Office Administration', '2025-04-03 00:46:04'),
(5, '240034', 'Jhanelle ', 'Palces', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:47:05'),
(6, '240072', 'Beberly Ann ', 'Abrina', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:47:36'),
(7, '240095', 'Marnie', 'Pagtanac', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:48:24'),
(8, '23-0104', 'John Oliver', 'Cortes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:48:39'),
(9, '240078', 'Michelle', 'Tenorio', 'Bachelor of Science Information Technology', '2025-04-03 00:49:09'),
(10, '230183', 'Russell James', 'Maravilla', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:49:14'),
(11, '111486110059', 'jessa', 'isipan', 'Senior Highschool', '2025-04-03 00:49:33'),
(12, '119925130189', 'Crystal', 'Dela Cruz', 'Senior Highschool', '2025-04-03 00:49:46'),
(13, '240032', 'Christian Albert', 'Lucio ', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:49:47'),
(14, '111466110049', 'wenex', 'pastolero', 'Senior Highschool', '2025-04-03 00:50:53'),
(15, '111469130061', 'Stella Glicine', 'Kramer', 'Senior Highschool', '2025-04-03 00:52:13'),
(16, '111491130508', 'mariel', 'flores', 'Senior Highschool', '2025-04-03 00:52:15'),
(17, '11532130029', 'Maya Lorraine', 'Juderial', 'Senior Highschool', '2025-04-03 00:52:26'),
(18, '111527110010', 'zaira', 'dadores', 'Senior Highschool', '2025-04-03 00:54:17'),
(19, '1111492120016', 'Angel ', 'Botolan ', 'Senior Highschool', '2025-04-03 00:55:33'),
(20, '111467130283', 'Jireh Cleope', 'Garcia', 'Senior Highschool', '2025-04-03 00:55:34'),
(21, '24-0059', 'Redgie', 'Cuevas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:56:16'),
(22, '111485130264', 'justine berly', 'dumlao', 'Senior Highschool', '2025-04-03 00:56:45'),
(23, '240008', 'AARON JOSEPH', 'BUENA', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:57:03'),
(24, '111492120016', 'Angel', 'Botolan', 'Senior Highschool', '2025-04-03 00:57:11'),
(25, '240057', 'Jon Yman ', 'Gozo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 00:57:20'),
(26, '111485130154', 'Angel Nathalie', 'Venturillo', 'Senior Highschool', '2025-04-03 00:57:26'),
(27, '220062', 'John ', 'Delos Angeles', 'Bachelor of Science in Hospitality Management', '2025-04-03 00:57:56'),
(28, '220017', 'erica mae', 'aragon', 'Bachelor of Science in Hospitality Management', '2025-04-03 00:58:06'),
(29, '240107', 'Kenneth ', 'CACHO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:19'),
(30, '240108', 'Maritonette', 'Rabut', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:21'),
(31, '240013', 'Riugene', 'Guinto', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:45'),
(32, '240083', 'James Lloyd', 'Villota', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:46'),
(33, '240119', 'Francine Joy', 'Menrajal', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:54'),
(34, '240126', 'Glenn', 'Soto', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:01:55'),
(35, '240056', 'Jomar Jr.', 'Udtohan', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:02:07'),
(36, '240010', 'Zyn Reuvyrt ', 'Sebigan', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:02:09'),
(38, '240137', 'Franzelrick', 'Buenafe', 'Bachelor of Science in Information Systems', '2025-04-03 01:02:47'),
(39, '240093', 'PhilioYore', 'Omar', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:02:54'),
(41, '240021', 'ceasar', 'espinosa', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:03:22'),
(42, '240003', 'Edrian Jay P.', 'Bautista', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:04:03'),
(43, '240002', 'ROLLY', 'SAN LUIS', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:04:07'),
(44, '240047', 'EMMANUEL', 'CONSTANTINO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:04:16'),
(45, '240035', 'Audriel', 'Vicencio', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:04:24'),
(46, '24-0029', 'Isaac ', 'Tabang', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:04:44'),
(47, '240097', 'Key Zyrus', 'Traquena', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:06:02'),
(48, '240102', 'john raven', 'abaga', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:07:09'),
(49, '220012', 'Rey victor ', 'Empin', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:11:36'),
(50, '240127', 'Yza Aeuio', 'Padul', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:13:26'),
(51, '230043', 'Alvin', 'Nanoy ', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:16:25'),
(52, '230069', 'aldrin', 'cayao', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:16:29'),
(53, '220010', 'Ancel Renz', 'Lamanilao', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:16:49'),
(54, '210138', 'marvin', 'herman', 'Bachelor of Science in Office Administration', '2025-04-03 01:19:00'),
(55, '230002', 'ma.christina', 'PARANGUE', 'Bachelor of Science in Office Administration', '2025-04-03 01:19:12'),
(56, '240145', 'Hans ', 'Babor', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:20:20'),
(57, '240076', 'angelica', 'dadosano', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:20:20'),
(58, '240015', 'beverlyn', 'hachuela', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:20:38'),
(59, '240069', 'allen', 'honorio', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:20:51'),
(60, '240149', 'Angel', 'Pantanilla', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:20:59'),
(61, '240103', 'Erika ', 'Delos Reyes', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:21:00'),
(62, '240046', 'Arabella ', 'mortos', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:21:03'),
(63, '220021', 'Jamie Rose', 'Reyno', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:21:25'),
(64, '240063', 'Dominique', 'Badilla', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:22:44'),
(65, '240177', 'Jovelyn', 'Aninang', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:23:03'),
(66, '230137', 'nikko john ', 'nangit', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:23:05'),
(67, '240058', 'xandra', 'morales', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:23:24'),
(68, '240016       ', 'mary joy ', 'tumimbang', 'Bachelor of Science Information Communication Technology', '2025-04-03 01:24:37'),
(69, '240168', 'Alyssa', 'Orca', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:24:37'),
(70, '230099', 'Mia', 'Cabote', 'Bachelor of Science in Office Administration', '2025-04-03 01:24:38'),
(71, '111485110070', 'VANNY FAITH', 'GALARRITA', 'Senior Highschool', '2025-04-03 01:30:52'),
(72, '230017', 'generosemie', 'nastor', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:31:31'),
(73, '240071', 'nobriel wade', 'cainglet', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:33:52'),
(74, '240131', 'Sean Louis', 'Naling', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:35:43'),
(75, '240053', 'ronald', 'constancio', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:39:44'),
(76, '210019', 'Christine', 'Pastolero', 'Bachelor of Science in Hospitality Management', '2025-04-03 01:40:29'),
(77, '240121', 'Jopiter ', 'Canasarez', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:40:43'),
(78, '220016', 'Lennith', 'Castro', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:41:39'),
(79, '230117', 'Aizel', 'Condes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:46:37'),
(80, '230155', 'April Jane ', 'Diao', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:47:06'),
(81, '240167', 'KURT', 'QUIJANO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 01:51:36'),
(82, '111503130210', 'Eryselle Rhome', 'Lontes', 'Senior Highschool', '2025-04-03 01:54:24'),
(83, '403532150332', 'Shannon Ricci', 'Rebote', 'Senior Highschool', '2025-04-03 01:54:40'),
(84, '111485130437', 'wilfredo', 'gacasa', 'Senior Highschool', '2025-04-03 01:55:30'),
(85, '11149510003', 'christian deejay ', 'arandia', 'Senior Highschool', '2025-04-03 01:55:30'),
(87, '111237130024', 'jamaica', 'lozande', 'Senior Highschool', '2025-04-03 01:55:52'),
(88, '111485110042', 'christine', 'corroz', 'Senior Highschool', '2025-04-03 01:55:54'),
(89, '111231130011', 'Norie', 'Cainglet', 'Senior Highschool', '2025-04-03 01:56:36'),
(91, '240001', 'mirabel', 'albano', 'Senior Highschool', '2025-04-03 01:56:59'),
(92, '111236130080', 'kirth ', 'samson', 'Senior Highschool', '2025-04-03 01:57:45'),
(93, '00721', 'Ej faye', 'Salazar', 'Bachelor of Science in Office Administration', '2025-04-03 01:58:35'),
(94, '305441150065', 'Gregorio', 'Omapas', 'Senior Highschool', '2025-04-03 01:59:13'),
(95, '111236120040', 'ivan dave', 'mahilum', 'Senior Highschool', '2025-04-03 01:59:41'),
(96, '040192', 'prince ', 'aton ', 'Bachelor of Science in Hospitality Management', '2025-04-03 02:02:04'),
(97, '220088', 'Egieboy Justine ', 'Parales', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:02:32'),
(98, '240123', 'ronald ', 'badilla', 'Bachelor of Science in Hospitality Management', '2025-04-03 02:02:57'),
(99, '240055', 'Mark Noven', 'Arguelles', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:04:22'),
(100, '240017', 'Angel ', 'Obseman', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:04:39'),
(101, '240018', 'Prince Elmer', 'Mallari', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:04:41'),
(102, '240192', 'prince rolindo', 'aton', 'Bachelor of Science in Hospitality Management', '2025-04-03 02:04:53'),
(103, '240089', 'grace', 'latube', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:07:13'),
(104, '240205', 'Antonette', 'Ortiaga', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:07:23'),
(105, '220051', 'Fer- an', 'Batoy', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:08:15'),
(106, '23009', 'Leoven Jie', 'Frias', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:08:22'),
(107, '230081', 'Justin Chloie', 'Caabas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:11:48'),
(108, '230100', 'Junie', 'Bonbon', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:12:42'),
(109, '230029', 'Cris Jerico', 'Coching', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:13:28'),
(110, '111485130291', 'sophia drichel', 'de leon ', 'Senior Highschool', '2025-04-03 02:24:03'),
(111, '230052', 'John paul', 'Suclan', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:24:09'),
(112, '230130', 'Calvin Carl', 'Cervantes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:24:18'),
(113, '230020', 'Jerecho', 'Ayes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:24:29'),
(114, '230051', 'Reza May ', 'Calaogao', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:24:58'),
(115, '230025', 'LEOLYN ', 'LEONORA', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:25:12'),
(116, '430530150182', 'lian matthew', 'romero', 'Senior Highschool', '2025-04-03 02:27:08'),
(117, '111120130098', 'marion ashli', 'artillaga', 'Senior Highschool', '2025-04-03 02:27:10'),
(118, '240006', 'Bjay', 'Badajos', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:29:39'),
(119, '240163', 'axcel dave', 'madrona', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:29:44'),
(120, '110881090046', 'camille ', 'lacson', 'Senior Highschool', '2025-04-03 02:31:40'),
(121, '240207', 'Deseree', 'Garcia', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:33:01'),
(122, '2400001', 'Princess', 'Jagmis', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:35:55'),
(123, '230006', 'Drahcir Miguel', 'Saberdo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:38:15'),
(124, '220060', 'joshua', 'miagao', 'Bachelor of Science in Office Administration', '2025-04-03 02:39:23'),
(125, '230042', 'Tracy Jeane', 'Dela Torre', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:40:28'),
(126, '24-0154', 'john lester', 'tayo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:40:46'),
(127, '240128', 'jofel elaine', 'echavez', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:47:22'),
(128, '111485130215', 'Rowell', 'Magdua', 'Senior Highschool', '2025-04-03 02:47:54'),
(129, '111147120005', 'sean aaron dendzl', 'suela ', 'Senior Highschool', '2025-04-03 02:48:07'),
(130, '240031', 'jared andrie', 'orgin', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:49:51'),
(131, '220004', 'angelico jay', 'padojinog', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:50:15'),
(132, '230136', 'Mera Joy', 'Bundal', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:51:07'),
(133, '230012', 'Genre Cayl ', 'Garsuta', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:51:18'),
(134, '20-0070', 'stephine', 'gedalanga', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:51:31'),
(135, '230086', 'Karl Bricknell', 'Villegas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:51:57'),
(136, '240204', 'alexza jean', 'delos santos', 'Bachelor of Science in Hospitality Management', '2025-04-03 02:52:13'),
(137, '240203', 'Annell Via', 'Fortunato', 'Bachelor of Science in Hospitality Management', '2025-04-03 02:52:27'),
(138, '23-0070', 'stephine', 'gedalanga', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:52:55'),
(139, '230074', 'Merry Ann ', 'Sanchez', 'Bachelor of Science in Information Systems', '2025-04-03 02:56:04'),
(140, '230067', 'roniper', 'acma', 'Bachelor of Science in Information Communication Technology', '2025-04-03 02:58:47'),
(141, '230108', 'charity chen', 'gacayan', 'Bachelor of Science in Office Administration', '2025-04-03 02:59:37'),
(142, '230080', 'agnes', 'dela cruz', 'Bachelor of Science in Office Administration', '2025-04-03 02:59:46'),
(143, '230030', 'bea joy ', 'morales', 'Bachelor of Science in Information Communication Technology', '2025-04-03 03:01:06'),
(144, '210028', 'jhon mark ', 'palay', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:03:27'),
(145, '230048', 'Rhea Mhie', 'Calalin', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:13:20'),
(146, '230113', 'mary rose', 'almazan', 'Associate in Computer Technology', '2025-04-03 03:16:52'),
(147, '230103', 'Rea Angela', 'Talla', 'Associate in Computer Technology', '2025-04-03 03:17:15'),
(148, '240070', 'JADE AZRYLL', 'RUBIA', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:25:33'),
(149, '200001', 'Noel', 'sumido', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:25:45'),
(150, '230122', 'JAIRA MARIE', 'EBON', 'Associate in Computer Technology', '2025-04-03 03:28:16'),
(151, '230107', 'Sheryl may ', 'sealongo', 'Associate in Computer Technology', '2025-04-03 03:28:56'),
(152, '220048', 'Ivy Michelle', 'Reyes', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:29:35'),
(153, '230019', 'ladylyn', 'diao', 'Associate in Computer Technology', '2025-04-03 03:33:08'),
(154, '200035', 'ALBERT EINSTEIN EDISON', 'PAGLINGAYEN', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:34:42'),
(155, '110718120030', 'Angelica ', 'Bertos', 'Senior Highschool', '2025-04-03 03:35:59'),
(156, '24007', 'Carl joey', 'tupas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 03:44:00'),
(157, '230010', 'John Junnel', 'Cervantes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 03:44:24'),
(158, '240007', 'Carl joey', 'tupas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 03:46:42'),
(159, '24000002', 'stephen', 'monares', 'Bachelor of Science in Information Communication Technology', '2025-04-03 03:47:11'),
(160, '21-0010', 'Farah Angeline', 'Pelayo', 'Bachelor of Science in Office Administration', '2025-04-03 03:51:54'),
(161, '230094', 'LOVELIE KC', 'RENGEL', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:55:50'),
(162, '230040', 'RENCY', 'EMPIN', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:55:56'),
(163, '230031', 'nerie', 'sulit', 'Bachelor of Science in Hospitality Management', '2025-04-03 03:56:34'),
(164, '240050', 'john joshua', 'porras', 'Bachelor of Science in Information Communication Technology', '2025-04-03 04:12:09'),
(165, '240176', 'Marc  Owen', 'Pacampara', 'Bachelor of Science in Information Communication Technology', '2025-04-03 04:14:35'),
(166, '220040', 'John Rey ', 'Fabrigas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 04:17:33'),
(167, '220092', 'LOVELY PAULINE', 'BRILLANTE', 'Bachelor of Science in Hospitality Management', '2025-04-03 04:21:15'),
(168, '2200003', 'Aljhoeswaldz Vinvent A,', 'Medice', 'Bachelor of Science in Hospitality Management', '2025-04-03 04:22:41'),
(169, '240172', 'John Eric', 'Combis', 'Bachelor of Science in Information Systems', '2025-04-03 04:28:12'),
(170, '220085', 'Owendy', 'Maniapao', 'Bachelor of Science in Hospitality Management', '2025-04-03 04:33:57'),
(171, '240052', 'Recardo', 'Amar', 'Bachelor of Science in Information Communication Technology', '2025-04-03 04:39:02'),
(172, '230098', 'april rose', 'Francisco', 'Bachelor of Science in Hospitality Management', '2025-04-03 04:45:42'),
(173, '210130', 'Roseann', 'aquino', 'Bachelor of Science in Office Administration', '2025-04-03 04:47:40'),
(174, '240088', 'Josef Ian', 'Baldomar', 'Associate in Computer Technology', '2025-04-03 04:50:48'),
(175, '240130', 'Eldrin Jeck', 'Damasco', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:00:32'),
(176, '230087', 'james', 'nava', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:01:06'),
(177, '230112', 'rafael', 'almazan', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:02:34'),
(178, '2400004', 'aj', 'gabunia', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:03:08'),
(179, '200038', 'mark bryan', 'untolan', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:03:38'),
(180, '240042', 'kent jazer', 'pradilla', 'Bachelor of Science in Information Systems', '2025-04-03 05:05:30'),
(181, '230091', 'Nathan Mike', 'Abrea', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:05:42'),
(182, '230065', 'jairah mae g.', 'almazan', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:06:00'),
(183, '230058', 'karl ', 'cervantes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:09:42'),
(184, '220008', 'kevin jem', 'ledesma', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:10:07'),
(185, '241010', 'KEAN CARL', 'REMIENDO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:12:15'),
(186, '240036', 'johnrick', 'canete', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:12:23'),
(187, '210079', 'angelica', 'deo', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:15:29'),
(188, '240179', 'gavin murray', 'dimacali', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:16:25'),
(189, '240014', 'Charles', 'Repalbor', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:16:49'),
(190, '240039', 'crissa angela', 'enriquez', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:19:54'),
(191, '230190', 'kate danielle', 'blas', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:20:04'),
(192, '240109', 'Dimple', 'Colarina', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:20:08'),
(193, '230023', 'Aisie', 'Tresvalles', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:20:40'),
(194, '240064', 'marielle', 'nicolas', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:20:58'),
(195, '230038', 'christian jay', 'soberano', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:24:13'),
(196, '210083', 'Trixie ', 'Chavez', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:39:17'),
(197, '230053', 'floria', 'quezada', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:40:44'),
(198, '230024', 'althea jen ', 'valledor', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:40:44'),
(199, '230063', 'Jayshell Joy', 'Almedalla', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:41:25'),
(200, '180043', 'Stefanie', 'Antonio', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:41:34'),
(201, ' 230060', ' abegail', 'galvez', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:41:37'),
(202, '230101', 'mary ann ', 'degillo', 'Bachelor of Science Hospitality Management', '2025-04-03 05:47:26'),
(203, '220107', 'Earl Justin', 'Morales', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:48:01'),
(205, '220100', 'Thalia', 'Fernandez', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:49:56'),
(206, '23-0059', 'Eistle Chiles', 'Bacaltos', 'Bachelor of Science in Information Communication Technology', '2025-04-03 05:50:25'),
(207, '220099', 'ken cedrick', 'tabuada', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:52:40'),
(208, '230157', 'ian', 'biton', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:53:08'),
(209, '230152', 'adrian keith ', 'antipuesto', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:53:36'),
(210, '230001', 'JAY', 'CALINGAO', 'Bachelor of Science in Office Administration', '2025-04-03 05:55:32'),
(211, '230185', 'mendy faith', 'salazar', 'Bachelor of Science in Hospitality Management', '2025-04-03 05:57:33'),
(212, '230105', 'DUN SHANE', 'RODRIGUEZ', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:00:26'),
(213, '220002', 'RALPH VINCE GERALD', 'PAMA', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:02:39'),
(214, '240054', 'KENTH MARTIN', 'PORRAS', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:03:23'),
(215, '220007', 'kessy', 'padilla', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:03:49'),
(216, '220045', 'REGINE', 'NANGIT', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:04:05'),
(217, '210020', 'EDZELLE WINNS ', 'ADRIANO', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:04:07'),
(218, '240033', 'Angel Mae', 'Repe', 'Associate in Computer Technology', '2025-04-03 06:04:48'),
(219, '230028', 'mischelle ', 'zabalo', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:05:09'),
(220, '230118', 'HANZ', 'BASILISCO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:05:57'),
(221, '230119', 'YUH', 'BASILISCO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:06:24'),
(222, '230202', 'ROSE ANN', 'ELVINA', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:09:51'),
(223, '230075', 'Al Yasser', 'Abbas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:09:52'),
(224, '230064', 'Jayvee', 'Anober', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:15:49'),
(225, '240045', 'Ralph dexter', 'aquino', 'Associate in Computer Technology', '2025-04-03 06:16:47'),
(226, '230047', 'Jerickson', 'Del Rosario', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:16:58'),
(227, '240028', 'Herminio Alexander', 'Badenas', 'Associate in Computer Technology', '2025-04-03 06:17:07'),
(228, '230131', 'Ar-V', 'Baring', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:17:19'),
(229, '240105', 'Adreana Beatriz', 'Tagud', 'Bachelor of Science in Office Administration', '2025-04-03 06:20:00'),
(230, '240114', 'Shania Shane', 'Palay', 'Bachelor of Science in Office Administration', '2025-04-03 06:20:21'),
(231, '230045', 'Meryll Liezle', 'Urdaneta', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:22:28'),
(232, '230076', 'Micah Ella', 'Rodriguez', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:22:35'),
(233, '240181', 'Bernadeth Jane', 'Mandal', 'Bachelor of Science in Office Administration', '2025-04-03 06:23:08'),
(234, '240138', 'Andrea Mae', 'Aniar', 'Bachelor of Science in Office Administration', '2025-04-03 06:23:12'),
(235, '240150', 'Meliza', 'Rambonga', 'Associate in Computer Technology', '2025-04-03 06:23:24'),
(236, '180006', 'CHARLENE', 'IBANEZ', 'Bachelor of Science in Office Administration', '2025-04-03 06:23:47'),
(238, '230062', 'hashel', 'obseman', 'Bachelor of Science in Office Administration', '2025-04-03 06:25:05'),
(239, '210102', 'DEECEREE', 'BULAN', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:25:30'),
(240, '240012', 'antonette', 'carpio', 'Bachelor of Science in Office Administration', '2025-04-03 06:25:34'),
(241, '240129', 'Arianne Mae', 'Batayo', 'Bachelor of Science in Office Administration', '2025-04-03 06:25:57'),
(242, '220027', 'Aira Jane', 'Langis', 'Bachelor of Science in Office Administration', '2025-04-03 06:26:19'),
(243, '240212', 'louue jean', 'samillano', 'Bachelor of Science in Office Administration', '2025-04-03 06:28:17'),
(244, '220049', 'MARK JOSHUA', 'SAMSON', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:28:34'),
(245, '240158', 'Rodge Michael ', 'Mangua', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:29:43'),
(246, '230011', 'kristel', 'vera', 'Bachelor of Science in Office Administration', '2025-04-03 06:30:13'),
(247, '23-0186', 'izzy', 'medina', 'Bachelor of Science in Office Administration', '2025-04-03 06:30:22'),
(248, '230184', 'Emmanuel Vincent', 'Rowy', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:30:32'),
(249, '240080', 'judy mae', 'ortega', 'Bachelor of Science in Office Administration', '2025-04-03 06:30:54'),
(250, '240171', 'KENNETH', 'GABO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:30:55'),
(251, '240153', 'mary joy', 'yayen', 'Bachelor of Science in Office Administration', '2025-04-03 06:31:10'),
(252, '24-0170', 'Elaiza', 'Romano', 'Bachelor of Science in Office Administration', '2025-04-03 06:31:21'),
(253, '230129', 'Kristine Mae', 'Miraflores', 'Bachelor of Science in Office Administration', '2025-04-03 06:34:22'),
(254, '230008', 'RAFFY', 'MAULION', 'Associate in Computer Technology', '2025-04-03 06:40:55'),
(255, '230109', 'Eljhana', 'Cayabo', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:41:08'),
(256, '23078', 'princess', 'nacis', '', '2025-04-03 06:41:42'),
(257, '230134', 'Jimmy', 'Narvasa', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:42:02'),
(258, '230088', 'jacob', 'hernandez', 'Associate in Computer Technology', '2025-04-03 06:42:06'),
(259, '230110', 'Efren ', 'Moncatar', '', '2025-04-03 06:42:08'),
(260, '230133', 'kimverly', 'zapanta', 'Bachelor of Science in Hospitality Management', '2025-04-03 06:42:15'),
(261, '220011', 'Joshua Eikim', 'Heredero', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:42:43'),
(262, '220082', 'Alexander', 'Cos', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:42:53'),
(263, '240049', 'Kevin ', 'San Buenaventura', 'Associate in Computer Technology', '2025-04-03 06:46:23'),
(264, '240092', 'Franklin', 'Casabuena', 'Associate in Computer Technology', '2025-04-03 06:46:29'),
(265, '240004', 'angelo nicole ', 'aguillon', 'Associate in Computer Technology', '2025-04-03 06:46:38'),
(266, '240188', 'Jirah Shamae Mie', 'Tria', 'Bachelor of Science Information Communication Technology', '2025-04-03 06:49:52'),
(267, '210049', 'zAFFIA ', 'MARQUINA', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:49:59'),
(268, '240162', 'Francis', 'Tarectican', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:51:22'),
(269, '240099', 'Romelyn', 'Magallanes', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:51:40'),
(270, '240081', 'Vivian', 'Agda', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:52:02'),
(271, '210032', 'Rensie', 'Ellazar', 'Bachelor of Science in Office Administration', '2025-04-03 06:52:56'),
(273, '18081', 'Roma Faith', 'Pamplona', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:58:39'),
(274, '210109', 'Rica ', 'Roa', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:59:00'),
(275, '200059', 'Allan', 'Albag', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:59:00'),
(276, '210029', 'JUSTINE MAE', 'MAGALLANES', 'Bachelor of Science in Information Communication Technology', '2025-04-03 06:59:04'),
(277, '180097', 'jaisa', 'taka', 'Bachelor of Science in Office Administration', '2025-04-03 06:59:26'),
(278, '230033', 'Anya Julia ', 'Fiebre', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:01:23'),
(279, '210030', 'Lloyd Vincent', 'Urdaneta', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:01:57'),
(280, '190060', 'jemuel', 'belgado', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:01:57'),
(281, '230083', 'John Sidrick', 'CaÃ±ete', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:01:59'),
(282, '210040', 'JOHN CARLO', 'CANONIGO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:02:05'),
(283, '210080', 'albengrie', 'gonzales jr.', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:02:28'),
(284, '210076', 'Jeffrey', 'Solina', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:03:54'),
(285, '210003', 'Marlon Edcel', 'Cortez', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:04:06'),
(286, '220054', 'Nick', 'Abalayan', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:04:09'),
(287, '200014', 'Charles Philip', 'Zabanal', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:04:28'),
(288, '220047', 'Claudine', 'Barabad', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:06:26'),
(289, '230004', 'ALLIAH', 'ORDONEZ', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:06:57'),
(290, '210012', 'Vince Ruel', 'Juno', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:07:03'),
(291, '220037', 'ivan', 'sealquil', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:08:50'),
(292, '220066', 'EILLEZ', 'PELAYO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:09:44'),
(293, '240082', 'Samantha Bernadette', 'Vilchez', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:09:52'),
(294, '240040', 'vince jude', 'pelenia', 'Associate in Computer Technology', '2025-04-03 07:10:13'),
(295, '220005', 'Alchrisitan', 'Nepomuceno', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:12:44'),
(296, '17148', 'ivan jhons ', 'sanchez', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:12:51'),
(297, '220039', 'Ivan Jasper ', 'Abian', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:13:40'),
(298, '220073', 'mike vincent', 'remo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:13:42'),
(299, '240120', 'Shekayna Margarette', 'Paguia', 'Bachelor of Science in Office Administration', '2025-04-03 07:13:43'),
(300, '220024', 'John Kenneth ', 'Cabrillos', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:14:43'),
(301, '220053', 'jet', 'elardo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:15:19'),
(302, '2200002', 'karl john', 'bete', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:18:08'),
(303, '220041', 'Van Michaela', 'Jagmis', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:19:02'),
(304, '2200052', 'jay ali ', 'mauricio', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:19:05'),
(305, '230015', 'krenzclark', 'palay', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:22:46'),
(306, '230147', 'Stephanie', 'Pantollano', 'Associate in Computer Technology', '2025-04-03 07:23:17'),
(307, '230191', 'harold ', 'maloloy-on', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:23:18'),
(308, '190157', 'Krishta Monique', 'Failon', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:23:24'),
(309, '230135', 'Jacqueline ', 'Fuertes ', 'Associate in Computer Technology', '2025-04-03 07:23:44'),
(310, '240051', 'Richard', 'Constancio', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:24:43'),
(311, '240044', 'michell', 'betita', 'Associate in Computer Technology', '2025-04-03 07:26:09'),
(312, '240173', 'reign josiah', 'batoy', 'Associate in Computer Technology', '2025-04-03 07:26:38'),
(313, '240067', 'renz david', 'riquima', 'Associate in Computer Technology', '2025-04-03 07:26:39'),
(314, '230194', 'pauline jean', 'pantollano', 'Associate in Computer Technology', '2025-04-03 07:34:35'),
(315, '230114', 'Gemma', 'Isipan', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:38:48'),
(316, '24-0215', 'Enzo Luiz', 'David', 'Associate in Computer Technology', '2025-04-03 07:39:53'),
(317, '220035', 'Ann ', 'Oremo', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:39:53'),
(318, '230090', 'Mel Gibson', 'Fernandez', 'Associate in Computer Technology', '2025-04-03 07:41:28'),
(319, '230193', 'John mark', 'Chanez', 'Associate in Computer Technology', '2025-04-03 07:41:48'),
(320, '240159', 'Paulo', 'Ordinario', 'Bachelor of Science in Office Administration', '2025-04-03 07:44:06'),
(321, '230127', 'Annaliza Bea', 'Lim', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:44:32'),
(322, '240090', 'Neo Anderson Repejemar', 'Rowy', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:47:58'),
(323, '220056', 'Niel Patrick', 'Penlas', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:48:10'),
(324, '240022', 'Jonard Lan', 'Alolod', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:48:18'),
(325, '230027', 'Elisha Eve', 'SeÃ±orin', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:48:33'),
(326, '240106', 'Rommel', 'Daganio', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:48:50'),
(327, '230022', 'Jazer Carl', 'Dalumpines', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:48:54'),
(328, '240061', 'Prince Ian', 'Dimanalata', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:49:48'),
(329, '210098', 'jonard', 'lozande', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:50:15'),
(330, '240024', 'Laurence', 'Omilda', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:53:19'),
(331, '240194', 'Anazaiah', 'Gico', 'Bachelor of Science in Hospitality Management', '2025-04-03 07:55:38'),
(332, '240118', 'ALIYAH', 'DOMINGO', 'Bachelor of Science in Information Communication Technology', '2025-04-03 07:59:12');

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
(1, 'Generose Nastor', 'BSIT', 'One Team, One Dream', 'gen.png', '2025-04-02 16:49:33'),
(2, 'Lovelie Rengel', 'BSHM', 'Better plans lead to a better future.', 'lovelie.png', '2025-04-02 16:54:53');

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
(1, '1', 2, '2025-04-03 00:46:24'),
(2, '3', 2, '2025-04-03 00:46:46'),
(3, '4', 2, '2025-04-03 00:46:54'),
(4, '2', 1, '2025-04-03 00:48:09'),
(5, '5', 2, '2025-04-03 00:48:31'),
(6, '6', 2, '2025-04-03 00:49:02'),
(7, '7', 1, '2025-04-03 00:49:42'),
(8, '8', 1, '2025-04-03 00:49:43'),
(9, '10', 1, '2025-04-03 00:49:59'),
(10, '9', 1, '2025-04-03 00:50:48'),
(11, '11', 2, '2025-04-03 00:51:04'),
(12, '13', 1, '2025-04-03 00:51:19'),
(13, '12', 1, '2025-04-03 00:51:36'),
(14, '14', 2, '2025-04-03 00:52:01'),
(15, '17', 2, '2025-04-03 00:53:37'),
(16, '16', 1, '2025-04-03 00:54:33'),
(17, '15', 2, '2025-04-03 00:54:40'),
(18, '18', 2, '2025-04-03 00:55:53'),
(19, '20', 1, '2025-04-03 00:57:08'),
(20, '24', 2, '2025-04-03 00:57:44'),
(21, '21', 1, '2025-04-03 00:58:00'),
(22, '22', 2, '2025-04-03 00:58:25'),
(23, '25', 1, '2025-04-03 00:58:28'),
(24, '23', 1, '2025-04-03 00:58:29'),
(25, '26', 1, '2025-04-03 00:58:42'),
(26, '27', 2, '2025-04-03 00:58:55'),
(27, '28', 2, '2025-04-03 00:59:06'),
(28, '30', 1, '2025-04-03 01:02:18'),
(29, '29', 1, '2025-04-03 01:02:19'),
(30, '35', 1, '2025-04-03 01:02:55'),
(31, '36', 1, '2025-04-03 01:03:02'),
(32, '32', 1, '2025-04-03 01:03:18'),
(33, '33', 1, '2025-04-03 01:03:19'),
(34, '34', 1, '2025-04-03 01:03:30'),
(35, '38', 1, '2025-04-03 01:03:42'),
(36, '31', 2, '2025-04-03 01:03:42'),
(37, '39', 1, '2025-04-03 01:03:50'),
(38, '41', 2, '2025-04-03 01:04:04'),
(39, '44', 2, '2025-04-03 01:05:11'),
(40, '43', 2, '2025-04-03 01:05:24'),
(41, '42', 2, '2025-04-03 01:05:37'),
(42, '45', 1, '2025-04-03 01:05:54'),
(43, '46', 1, '2025-04-03 01:06:19'),
(44, '47', 1, '2025-04-03 01:07:31'),
(45, '48', 1, '2025-04-03 01:08:19'),
(46, '49', 1, '2025-04-03 01:13:29'),
(47, '50', 1, '2025-04-03 01:15:21'),
(48, '52', 1, '2025-04-03 01:17:43'),
(49, '51', 1, '2025-04-03 01:18:04'),
(50, '53', 1, '2025-04-03 01:18:15'),
(51, '54', 1, '2025-04-03 01:20:34'),
(52, '57', 2, '2025-04-03 01:21:25'),
(53, '55', 1, '2025-04-03 01:21:56'),
(54, '60', 2, '2025-04-03 01:22:02'),
(55, '61', 2, '2025-04-03 01:22:03'),
(56, '59', 2, '2025-04-03 01:22:06'),
(57, '56', 2, '2025-04-03 01:22:06'),
(58, '58', 2, '2025-04-03 01:22:09'),
(59, '63', 2, '2025-04-03 01:22:10'),
(60, '62', 2, '2025-04-03 01:23:09'),
(61, '66', 1, '2025-04-03 01:23:55'),
(62, '65', 2, '2025-04-03 01:24:05'),
(63, '64', 2, '2025-04-03 01:24:14'),
(64, '67', 2, '2025-04-03 01:24:51'),
(65, '69', 2, '2025-04-03 01:25:11'),
(66, '70', 2, '2025-04-03 01:25:28'),
(67, '68', 2, '2025-04-03 01:29:06'),
(68, '71', 2, '2025-04-03 01:32:27'),
(69, '72', 1, '2025-04-03 01:32:51'),
(70, '73', 2, '2025-04-03 01:35:10'),
(71, '74', 1, '2025-04-03 01:36:55'),
(72, '75', 1, '2025-04-03 01:40:49'),
(73, '76', 2, '2025-04-03 01:41:31'),
(74, '77', 1, '2025-04-03 01:42:01'),
(75, '78', 1, '2025-04-03 01:43:50'),
(76, '79', 1, '2025-04-03 01:47:41'),
(77, '80', 1, '2025-04-03 01:48:18'),
(78, '81', 1, '2025-04-03 01:53:20'),
(79, '82', 2, '2025-04-03 01:56:15'),
(80, '83', 2, '2025-04-03 01:56:17'),
(81, '84', 2, '2025-04-03 01:56:36'),
(82, '85', 2, '2025-04-03 01:57:30'),
(83, '91', 2, '2025-04-03 01:58:11'),
(84, '89', 2, '2025-04-03 01:58:27'),
(85, '87', 2, '2025-04-03 01:58:50'),
(86, '92', 2, '2025-04-03 01:58:52'),
(87, '88', 1, '2025-04-03 01:58:54'),
(88, '94', 1, '2025-04-03 02:00:00'),
(89, '95', 2, '2025-04-03 02:00:57'),
(90, '93', 1, '2025-04-03 02:00:59'),
(91, '97', 2, '2025-04-03 02:02:58'),
(92, '98', 2, '2025-04-03 02:05:14'),
(93, '102', 2, '2025-04-03 02:05:31'),
(94, '100', 1, '2025-04-03 02:05:39'),
(95, '99', 1, '2025-04-03 02:05:51'),
(96, '101', 1, '2025-04-03 02:06:35'),
(97, '105', 1, '2025-04-03 02:09:02'),
(98, '104', 1, '2025-04-03 02:09:30'),
(99, '106', 1, '2025-04-03 02:09:30'),
(100, '103', 1, '2025-04-03 02:09:32'),
(101, '107', 1, '2025-04-03 02:12:23'),
(102, '108', 1, '2025-04-03 02:13:44'),
(103, '109', 1, '2025-04-03 02:14:34'),
(104, '110', 2, '2025-04-03 02:24:55'),
(105, '112', 1, '2025-04-03 02:25:19'),
(106, '111', 1, '2025-04-03 02:25:49'),
(107, '114', 1, '2025-04-03 02:26:10'),
(108, '113', 1, '2025-04-03 02:26:12'),
(109, '115', 1, '2025-04-03 02:26:15'),
(110, '116', 2, '2025-04-03 02:28:04'),
(111, '117', 1, '2025-04-03 02:28:13'),
(112, '119', 2, '2025-04-03 02:30:19'),
(113, '118', 1, '2025-04-03 02:30:49'),
(114, '120', 1, '2025-04-03 02:33:28'),
(115, '121', 1, '2025-04-03 02:35:08'),
(116, '122', 1, '2025-04-03 02:36:51'),
(117, '123', 1, '2025-04-03 02:39:29'),
(118, '124', 1, '2025-04-03 02:40:45'),
(119, '125', 1, '2025-04-03 02:41:23'),
(120, '126', 1, '2025-04-03 02:42:33'),
(121, '127', 1, '2025-04-03 02:48:16'),
(122, '128', 2, '2025-04-03 02:48:47'),
(123, '129', 1, '2025-04-03 02:49:15'),
(124, '130', 2, '2025-04-03 02:50:29'),
(125, '131', 1, '2025-04-03 02:50:57'),
(126, '132', 2, '2025-04-03 02:51:59'),
(127, '135', 2, '2025-04-03 02:53:08'),
(128, '133', 2, '2025-04-03 02:53:19'),
(129, '137', 2, '2025-04-03 02:53:28'),
(130, '136', 2, '2025-04-03 02:53:41'),
(131, '138', 2, '2025-04-03 02:54:22'),
(132, '139', 1, '2025-04-03 02:56:48'),
(133, '141', 2, '2025-04-03 03:00:18'),
(134, '140', 1, '2025-04-03 03:00:28'),
(135, '142', 2, '2025-04-03 03:00:28'),
(136, '143', 1, '2025-04-03 03:02:12'),
(137, '144', 2, '2025-04-03 03:04:36'),
(138, '145', 2, '2025-04-03 03:14:46'),
(139, '146', 2, '2025-04-03 03:18:19'),
(140, '147', 1, '2025-04-03 03:18:24'),
(141, '149', 2, '2025-04-03 03:26:15'),
(142, '148', 2, '2025-04-03 03:26:15'),
(143, '150', 1, '2025-04-03 03:29:04'),
(144, '152', 2, '2025-04-03 03:30:22'),
(145, '151', 1, '2025-04-03 03:30:24'),
(146, '153', 1, '2025-04-03 03:34:23'),
(147, '154', 2, '2025-04-03 03:35:43'),
(148, '155', 2, '2025-04-03 03:37:03'),
(149, '157', 2, '2025-04-03 03:45:35'),
(150, '158', 2, '2025-04-03 03:47:40'),
(151, '159', 2, '2025-04-03 03:47:56'),
(152, '160', 1, '2025-04-03 03:53:52'),
(153, '161', 2, '2025-04-03 03:56:32'),
(154, '162', 2, '2025-04-03 03:57:53'),
(155, '163', 2, '2025-04-03 03:57:54'),
(156, '164', 2, '2025-04-03 04:13:33'),
(157, '165', 2, '2025-04-03 04:15:18'),
(158, '166', 1, '2025-04-03 04:18:21'),
(159, '167', 2, '2025-04-03 04:22:45'),
(160, '168', 2, '2025-04-03 04:23:25'),
(161, '169', 1, '2025-04-03 04:29:02'),
(162, '170', 1, '2025-04-03 04:35:32'),
(163, '171', 2, '2025-04-03 04:40:18'),
(164, '172', 2, '2025-04-03 04:47:17'),
(165, '173', 2, '2025-04-03 04:48:39'),
(166, '174', 1, '2025-04-03 04:52:20'),
(167, '175', 1, '2025-04-03 05:01:25'),
(168, '176', 1, '2025-04-03 05:02:03'),
(169, '177', 2, '2025-04-03 05:03:41'),
(170, '179', 2, '2025-04-03 05:04:59'),
(171, '178', 2, '2025-04-03 05:05:17'),
(172, '180', 1, '2025-04-03 05:06:06'),
(173, '182', 2, '2025-04-03 05:07:12'),
(174, '181', 2, '2025-04-03 05:07:17'),
(175, '183', 1, '2025-04-03 05:10:37'),
(176, '184', 1, '2025-04-03 05:10:38'),
(177, '186', 2, '2025-04-03 05:13:26'),
(178, '185', 1, '2025-04-03 05:13:39'),
(179, '187', 2, '2025-04-03 05:16:34'),
(180, '188', 1, '2025-04-03 05:17:53'),
(181, '189', 1, '2025-04-03 05:19:30'),
(182, '191', 2, '2025-04-03 05:21:10'),
(183, '190', 2, '2025-04-03 05:21:47'),
(184, '192', 2, '2025-04-03 05:21:54'),
(185, '194', 2, '2025-04-03 05:22:08'),
(186, '193', 2, '2025-04-03 05:22:17'),
(187, '195', 1, '2025-04-03 05:25:28'),
(188, '196', 2, '2025-04-03 05:39:51'),
(189, '197', 2, '2025-04-03 05:42:14'),
(190, '200', 2, '2025-04-03 05:42:16'),
(191, '199', 1, '2025-04-03 05:42:18'),
(192, '198', 2, '2025-04-03 05:42:19'),
(193, '201', 2, '2025-04-03 05:42:59'),
(194, '202', 2, '2025-04-03 05:48:38'),
(195, '203', 1, '2025-04-03 05:48:45'),
(196, '205', 2, '2025-04-03 05:50:43'),
(197, '206', 1, '2025-04-03 05:51:20'),
(198, '207', 2, '2025-04-03 05:53:26'),
(199, '208', 2, '2025-04-03 05:53:56'),
(200, '209', 2, '2025-04-03 05:55:33'),
(201, '210', 1, '2025-04-03 05:57:09'),
(202, '211', 2, '2025-04-03 05:58:11'),
(203, '212', 2, '2025-04-03 06:00:52'),
(204, '213', 1, '2025-04-03 06:03:33'),
(205, '214', 1, '2025-04-03 06:04:21'),
(206, '217', 1, '2025-04-03 06:04:36'),
(207, '215', 2, '2025-04-03 06:05:15'),
(208, '216', 2, '2025-04-03 06:05:45'),
(209, '220', 1, '2025-04-03 06:07:35'),
(210, '219', 2, '2025-04-03 06:08:24'),
(211, '218', 2, '2025-04-03 06:08:35'),
(212, '222', 2, '2025-04-03 06:10:18'),
(213, '223', 1, '2025-04-03 06:10:31'),
(214, '221', 1, '2025-04-03 06:11:16'),
(215, '228', 2, '2025-04-03 06:18:49'),
(216, '225', 1, '2025-04-03 06:19:02'),
(217, '227', 1, '2025-04-03 06:19:30'),
(218, '226', 1, '2025-04-03 06:19:46'),
(219, '224', 1, '2025-04-03 06:20:14'),
(220, '229', 1, '2025-04-03 06:20:48'),
(221, '230', 1, '2025-04-03 06:20:51'),
(222, '231', 2, '2025-04-03 06:23:05'),
(223, '232', 2, '2025-04-03 06:23:22'),
(224, '236', 2, '2025-04-03 06:24:11'),
(225, '233', 1, '2025-04-03 06:24:26'),
(226, '234', 1, '2025-04-03 06:24:28'),
(227, '235', 1, '2025-04-03 06:25:12'),
(228, '238', 2, '2025-04-03 06:26:18'),
(229, '239', 2, '2025-04-03 06:26:19'),
(230, '240', 1, '2025-04-03 06:26:23'),
(231, '241', 2, '2025-04-03 06:26:50'),
(232, '242', 1, '2025-04-03 06:28:05'),
(233, '243', 1, '2025-04-03 06:29:34'),
(234, '244', 1, '2025-04-03 06:29:37'),
(235, '245', 1, '2025-04-03 06:31:00'),
(236, '246', 2, '2025-04-03 06:31:13'),
(237, '248', 1, '2025-04-03 06:31:22'),
(238, '250', 1, '2025-04-03 06:31:33'),
(239, '249', 2, '2025-04-03 06:31:35'),
(240, '247', 2, '2025-04-03 06:31:49'),
(241, '251', 2, '2025-04-03 06:32:03'),
(242, '252', 1, '2025-04-03 06:33:45'),
(243, '253', 2, '2025-04-03 06:35:08'),
(244, '254', 1, '2025-04-03 06:41:57'),
(245, '255', 2, '2025-04-03 06:42:06'),
(246, '258', 2, '2025-04-03 06:43:00'),
(247, '256', 2, '2025-04-03 06:43:08'),
(248, '261', 1, '2025-04-03 06:43:17'),
(249, '260', 2, '2025-04-03 06:43:23'),
(250, '257', 2, '2025-04-03 06:43:26'),
(251, '262', 1, '2025-04-03 06:43:40'),
(252, '259', 2, '2025-04-03 06:44:17'),
(253, '263', 2, '2025-04-03 06:47:29'),
(254, '264', 2, '2025-04-03 06:47:30'),
(255, '265', 2, '2025-04-03 06:48:31'),
(256, '267', 2, '2025-04-03 06:50:55'),
(257, '266', 1, '2025-04-03 06:51:40'),
(258, '268', 1, '2025-04-03 06:52:20'),
(259, '269', 1, '2025-04-03 06:53:45'),
(260, '270', 1, '2025-04-03 06:53:46'),
(261, '271', 2, '2025-04-03 06:54:12'),
(262, '274', 1, '2025-04-03 06:59:37'),
(263, '273', 2, '2025-04-03 06:59:47'),
(264, '275', 2, '2025-04-03 06:59:59'),
(265, '276', 2, '2025-04-03 07:00:08'),
(266, '277', 1, '2025-04-03 07:00:22'),
(267, '278', 2, '2025-04-03 07:02:01'),
(268, '279', 2, '2025-04-03 07:02:33'),
(269, '280', 2, '2025-04-03 07:02:38'),
(270, '282', 2, '2025-04-03 07:02:51'),
(271, '281', 2, '2025-04-03 07:02:58'),
(272, '283', 2, '2025-04-03 07:03:12'),
(273, '285', 2, '2025-04-03 07:04:30'),
(274, '286', 2, '2025-04-03 07:05:07'),
(275, '284', 1, '2025-04-03 07:05:16'),
(276, '287', 2, '2025-04-03 07:05:42'),
(277, '289', 2, '2025-04-03 07:07:39'),
(278, '290', 2, '2025-04-03 07:07:58'),
(279, '288', 2, '2025-04-03 07:07:59'),
(280, '291', 1, '2025-04-03 07:09:54'),
(281, '292', 1, '2025-04-03 07:10:24'),
(282, '293', 2, '2025-04-03 07:10:43'),
(283, '294', 1, '2025-04-03 07:11:04'),
(284, '295', 1, '2025-04-03 07:13:17'),
(285, '296', 2, '2025-04-03 07:13:30'),
(286, '297', 1, '2025-04-03 07:14:23'),
(287, '298', 1, '2025-04-03 07:14:32'),
(288, '299', 1, '2025-04-03 07:14:51'),
(289, '300', 1, '2025-04-03 07:16:09'),
(290, '301', 1, '2025-04-03 07:16:16'),
(291, '302', 1, '2025-04-03 07:19:40'),
(292, '304', 2, '2025-04-03 07:20:03'),
(293, '303', 2, '2025-04-03 07:20:04'),
(294, '305', 2, '2025-04-03 07:23:28'),
(295, '308', 2, '2025-04-03 07:24:29'),
(296, '307', 2, '2025-04-03 07:24:35'),
(297, '306', 2, '2025-04-03 07:24:36'),
(298, '309', 1, '2025-04-03 07:24:41'),
(299, '310', 1, '2025-04-03 07:26:02'),
(300, '311', 1, '2025-04-03 07:27:20'),
(301, '313', 1, '2025-04-03 07:27:31'),
(302, '312', 1, '2025-04-03 07:27:50'),
(303, '314', 2, '2025-04-03 07:35:52'),
(304, '315', 1, '2025-04-03 07:39:49'),
(305, '316', 1, '2025-04-03 07:40:44'),
(306, '317', 1, '2025-04-03 07:41:01'),
(307, '319', 2, '2025-04-03 07:42:42'),
(308, '318', 2, '2025-04-03 07:43:06'),
(309, '320', 1, '2025-04-03 07:45:07'),
(310, '321', 2, '2025-04-03 07:45:23'),
(311, '323', 1, '2025-04-03 07:48:39'),
(312, '324', 1, '2025-04-03 07:48:40'),
(313, '322', 1, '2025-04-03 07:49:12'),
(314, '326', 1, '2025-04-03 07:49:22'),
(315, '327', 1, '2025-04-03 07:49:36'),
(316, '325', 1, '2025-04-03 07:50:27'),
(317, '328', 1, '2025-04-03 07:50:34'),
(318, '329', 2, '2025-04-03 07:51:34'),
(319, '330', 1, '2025-04-03 07:53:44'),
(320, '331', 2, '2025-04-03 07:56:23'),
(321, '332', 1, '2025-04-03 07:59:44');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `president_candidates`
--
ALTER TABLE `president_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `president_votes`
--
ALTER TABLE `president_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT for table `stelcom_users`
--
ALTER TABLE `stelcom_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `valid_account`
--
ALTER TABLE `valid_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=333;

--
-- AUTO_INCREMENT for table `vice_president_candidates`
--
ALTER TABLE `vice_president_candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vice_president_votes`
--
ALTER TABLE `vice_president_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

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
