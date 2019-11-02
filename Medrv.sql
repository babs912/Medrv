-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2019 at 01:37 AM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.3.10-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Medrv`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appoint`
--

CREATE TABLE `Appoint` (
  `id` int(11) NOT NULL,
  `planned_at` date DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `duration` time DEFAULT '00:15:00',
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Appoint`
--

INSERT INTO `Appoint` (`id`, `planned_at`, `start_time`, `duration`, `doctor_id`, `patient_id`) VALUES
(1, '2019-10-10', '10:16:00', '08:30:00', 2, 3),
(2, '2019-10-10', '08:45:00', '00:15:00', 2, 4),
(3, '2019-10-17', '09:00:00', '00:15:00', 1, 5),
(4, '2019-10-09', '09:00:00', '00:15:00', 2, 6),
(5, '2019-10-09', '09:30:00', '00:15:00', 2, 7),
(6, '2019-10-09', '09:45:00', '00:15:00', 2, 8),
(7, '2019-10-09', '10:00:00', '00:15:00', 2, 9),
(8, '2019-10-18', '10:15:00', '00:15:00', 5, 10),
(9, '2019-10-10', '10:45:00', '00:15:00', 2, 11),
(10, '2019-10-10', '11:00:00', '00:15:00', 2, 12),
(11, '2019-10-09', '11:15:00', '00:15:00', 2, 13),
(12, '2019-10-09', '11:30:00', '00:15:00', 2, 14),
(13, '2019-10-18', '11:45:00', '00:15:00', 2, 15),
(14, '2019-10-10', '12:00:00', '00:15:00', 2, 16),
(15, '2019-10-10', '12:15:00', '00:15:00', 2, 17),
(16, '2019-10-10', '12:30:00', '00:15:00', 2, 18),
(17, '2019-10-17', '12:45:00', '00:15:00', 5, 19),
(18, '2019-10-11', '13:00:00', '00:15:00', 2, 20),
(19, '2019-10-11', '13:15:00', '00:15:00', 2, 21),
(20, '2019-10-10', '13:30:00', '00:15:00', 2, 22),
(21, '2019-10-08', '15:00:00', '00:15:00', 3, 23),
(22, '2019-10-24', '15:15:00', '00:15:00', 4, 24),
(23, '2019-10-09', '15:30:00', '00:15:00', 2, 25),
(24, '2019-10-17', '15:45:00', '00:15:00', 2, 26),
(25, '2019-10-10', '16:00:00', '00:15:00', 5, 27),
(26, '2019-10-09', NULL, '00:15:00', 2, 28),
(27, '2019-10-09', NULL, '00:15:00', 2, 29),
(28, '2019-10-09', NULL, '00:15:00', 2, 30),
(29, '2019-10-09', NULL, '00:15:00', 2, 31),
(30, '2019-10-01', NULL, '00:15:00', 4, 32),
(31, '2019-10-10', NULL, '00:15:00', 2, 33),
(32, '2019-10-10', NULL, '00:15:00', 5, 34),
(33, '2019-10-09', NULL, '00:15:00', 3, 35),
(34, '2019-10-09', NULL, '00:15:00', 2, 36),
(35, '2019-10-09', NULL, '00:15:00', 2, 37),
(36, '2019-10-10', NULL, '00:15:00', 1, 38),
(37, '2019-10-17', NULL, '00:15:00', 2, 39),
(38, '2019-10-17', NULL, '00:15:00', 1, 40),
(39, '2019-10-17', '08:30:00', '00:15:00', 1, 41),
(40, '2019-10-22', NULL, '00:15:00', 2, 42),
(41, '2019-10-10', NULL, '00:15:00', 1, 44),
(42, '2019-10-10', NULL, '00:15:00', 1, 46),
(43, '2019-10-18', '17:00:00', '00:15:00', 2, 48),
(44, '2019-10-10', '17:00:00', '00:15:00', 2, 62),
(45, '2019-10-10', '17:00:00', '00:15:00', 2, 65),
(46, '2019-10-10', '17:00:00', '00:15:00', 2, 66),
(47, '2019-10-09', '17:00:00', '00:15:00', 2, 67),
(48, '2019-10-10', '17:00:00', '00:15:00', 2, 68),
(49, '2019-10-10', '10:00:00', '00:15:00', 2, 70),
(50, '2019-10-10', '08:30:00', '00:15:00', 2, 71),
(51, '2019-10-10', '10:30:00', '00:15:00', 2, 72),
(52, '2019-10-10', '10:30:00', '00:15:00', 2, 73),
(53, '2019-10-10', '09:30:00', '00:15:00', 1, 74),
(54, '2019-10-15', '08:45:00', '00:15:00', 1, 77),
(55, NULL, '09:30:00', '00:15:00', 3, 78),
(56, NULL, '09:30:00', '00:15:00', 1, 79),
(57, NULL, '09:15:00', '00:15:00', 1, 80),
(58, NULL, '09:15:00', '00:15:00', 1, 81),
(59, NULL, '09:00:00', '00:15:00', 3, 82),
(60, NULL, '09:00:00', '00:15:00', 1, 83),
(61, NULL, '09:15:00', '00:15:00', 1, 2),
(62, NULL, '09:15:00', '00:15:00', 1, 2),
(63, NULL, '09:15:00', '00:15:00', 1, 46),
(64, NULL, '09:00:00', '00:15:00', 1, 6),
(65, NULL, '08:30:00', '00:15:00', 2, 3),
(66, NULL, '09:15:00', '00:15:00', 1, 2),
(67, '2019-10-28', '09:00:00', '00:15:00', 1, 2),
(68, '2019-10-09', '09:00:00', '00:15:00', 1, 2),
(69, '2019-10-09', '08:30:00', '00:15:00', 2, 3),
(70, '2019-10-28', '09:15:00', '00:15:00', 1, 3),
(71, '2019-10-28', '09:15:00', '00:15:00', 1, 3),
(72, '2019-10-28', '09:15:00', '00:15:00', 1, 1),
(73, '2019-10-28', '09:00:00', '00:15:00', 3, 1),
(74, '2019-10-15', '09:00:00', '00:15:00', 3, 2),
(75, '2019-10-15', '09:00:00', '00:15:00', 3, 2),
(76, '2019-10-10', '08:30:00', '00:15:00', 5, 3),
(77, '2019-10-28', '10:15:00', '00:15:00', 5, 2),
(78, '2019-10-28', '10:15:00', '00:15:00', 5, 83),
(79, '2019-10-28', '10:15:00', '00:15:00', 5, 83),
(80, '2019-10-28', '10:15:00', '00:15:00', 5, 82),
(81, '2019-10-28', '10:15:00', '00:15:00', 5, 80),
(82, '2019-10-28', '09:30:00', '00:15:00', 5, 3),
(83, '2019-10-29', '09:30:00', '00:15:00', 3, 2),
(84, '2019-10-29', '09:30:00', '00:15:00', 3, 13),
(85, '2019-10-30', '08:30:00', '00:15:00', 1, 2),
(86, '2019-10-30', '08:45:00', '00:15:00', 2, 3),
(87, '2019-10-30', '09:30:00', '00:15:00', 1, 2),
(88, '2019-10-30', '09:00:00', '00:15:00', 5, 3),
(89, '2019-10-30', '09:15:00', '00:15:00', 5, 2),
(90, '2019-10-30', '09:15:00', '00:15:00', 5, 3),
(91, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(92, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(93, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(94, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(95, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(96, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(97, '2019-10-30', '10:30:00', '00:15:00', 5, 2),
(98, '2019-10-31', '09:15:00', '00:15:00', 1, 2),
(99, '2019-10-31', '09:30:00', '00:15:00', 1, 3),
(100, '2019-10-31', '08:45:00', '00:15:00', 1, 3),
(101, '2019-10-31', '08:45:00', '00:15:00', 1, 12),
(102, '2019-10-31', '08:45:00', '00:15:00', 1, 13),
(103, '2019-10-31', '08:45:00', '00:15:00', 1, 12),
(104, '2019-10-31', '08:45:00', '00:15:00', 1, 13),
(105, '2019-10-31', '08:30:00', '00:15:00', 2, 4),
(106, '2019-10-31', '08:30:00', '00:15:00', 2, 4),
(107, '2019-10-31', '08:30:00', '00:15:00', 2, 2),
(108, '2019-10-31', '08:30:00', '00:15:00', 1, 1),
(109, '2019-10-31', '08:45:00', '00:15:00', 1, 4),
(110, '2019-10-31', '08:45:00', '00:15:00', 1, 2),
(111, '2019-10-31', '09:45:00', '00:15:00', 1, 2),
(112, '2019-11-01', '09:30:00', '00:15:00', 1, 84),
(113, '2019-11-01', '09:00:00', '00:15:00', 1, 85),
(114, '2019-11-01', '08:30:00', '00:15:00', 1, 6),
(115, '2019-11-01', '10:00:00', '00:15:00', 1, 86),
(116, '2019-11-01', '10:30:00', '00:15:00', 1, 1),
(117, '2019-11-01', '11:00:00', '00:15:00', 1, 3),
(118, '2019-11-01', '09:15:00', '00:15:00', 1, 2),
(119, '2019-11-01', '11:30:00', '00:15:00', 1, 2),
(120, '2019-11-01', '09:45:00', '00:15:00', 1, 2),
(121, '2019-11-01', '09:45:00', '00:15:00', 3, 3),
(122, '2019-11-01', '08:45:00', '00:15:00', 1, 2),
(123, '2019-11-01', '15:00:00', '00:15:00', 1, 3),
(124, '2019-11-01', '10:15:00', '00:15:00', 1, 5),
(125, '2019-11-01', '10:45:00', '00:15:00', 1, 4),
(126, '2019-11-01', '11:15:00', '00:15:00', 1, 3),
(127, '2019-11-01', '15:45:00', '00:15:00', 1, 5),
(128, '2019-11-01', '13:45:00', '00:15:00', 1, 4),
(129, '2019-11-01', '11:45:00', '00:15:00', 1, 3),
(130, '2019-11-01', '13:15:00', '00:15:00', 1, 3),
(131, '2019-11-01', '16:45:00', '00:15:00', 1, 1),
(132, '2019-11-01', '12:30:00', '00:15:00', 1, 2),
(133, '2019-11-01', '12:45:00', '00:15:00', 1, 3),
(134, '2019-11-01', '16:15:00', '00:15:00', 1, 4),
(135, '2019-11-01', '15:15:00', '00:15:00', 1, 2),
(136, '2019-11-01', '13:30:00', '00:15:00', 1, 2),
(137, '2019-11-01', '13:30:00', '00:15:00', 1, 54),
(138, '2019-11-01', '17:00:00', '00:15:00', 1, 2),
(139, '2019-11-01', '13:30:00', '00:15:00', 1, 2),
(140, '2019-11-01', '16:30:00', '00:15:00', 1, 3),
(141, '2019-11-01', '16:00:00', '00:15:00', 1, 3),
(142, '2019-11-01', '15:30:00', '00:15:00', 1, 3),
(143, '2019-11-01', '13:00:00', '00:15:00', 1, 3),
(144, '2019-11-01', '13:30:00', '00:15:00', 1, 3),
(145, '2019-11-01', '12:00:00', '00:15:00', 1, 2),
(146, '2019-11-01', '12:15:00', '00:15:00', 1, 2),
(147, '2019-11-01', '13:30:00', '00:15:00', 1, 2),
(148, '2019-11-04', '13:45:00', '00:15:00', 1, 2),
(149, '2019-11-05', '08:45:00', '00:15:00', 1, 2),
(150, '2019-11-05', '09:00:00', '00:15:00', 1, 2),
(151, '2019-11-02', '08:45:00', '00:15:00', 1, 87),
(152, '2019-11-02', '08:30:00', '00:15:00', 1, 88);

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `age` tinyint(4) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(12) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`id`, `first_name`, `last_name`, `age`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dakar'),
(2, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dakar'),
(3, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dakar'),
(4, 'faye', 'ibrhima', 26, 'H', 'senghor.pape912@hotmail.com', '777443663', 'Parcelle'),
(5, 'Sy', 'Sidi', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'Kaolack'),
(6, 'Pape', 'Senghor', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', '6789'),
(7, 'Pape', 'Senghor', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', '6789'),
(8, 'Pape', 'Senghor', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', '6789'),
(9, 'pape', 'senghor', 23, 'H', 'senghor.pape912@hotmail.com', '777443663', '5678'),
(10, 'Diop ', 'Fofana', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', '675868'),
(11, 'fghijk', 'fghijk', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sfdghjkl;'),
(12, 'fhh', 'tyui', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dsdgfhjxfghjk'),
(13, 'fghjk', 'as', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdgfhjkl;'),
(14, 'Diop', 'Ibrahima', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', '565746'),
(15, 'Diop', 'hjkl', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dfghjkl'),
(16, 'dfghjklo', 'wertfgyhujiok', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'asdfghjk'),
(17, 'dfghjklo', 'wertfgyhujiok', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'asdfghjk'),
(18, 'ghhhjuo', 'vyuik', 67, 'F', 'senghor.pape912@hotmail.com', '777443663', 'drtfyguijok'),
(19, 'sdfghj', 'sdfghjk', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fdgthy'),
(20, 'fghjk', 'fghjiok', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dfghjk'),
(21, 'fghjk', 'fghjiok', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dfghjk'),
(22, 'sg', 'sdfguhijop', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fdghjkl\';'),
(23, 'ertyuiop', 'dsfghuijok', 21, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdfghjkl'),
(24, 'fghuijok', 'fdghjkl', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdfghjkl'),
(25, 'gfhjkl;', 'fdghjkl;', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dfghjkl;'),
(26, 'dfghjok', 'asdtfyguiop', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'asdfghjkl;'),
(27, 'dfghjk', 'fdghjkl', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dxfcgvhbjnkm'),
(28, 'hjk', 'cvhbjnm', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'cvbnm'),
(29, 'fgyhujkl', 'fdghjk', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdfghjk'),
(30, 'fgyhujkl', 'fdghjk', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdfghjk'),
(31, 'fgyhujkl', 'fdghjk', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'sdfghjk'),
(32, 'ghjkpl[;\'', 'gfhjiokp[', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'xfgvhjkl;'),
(33, 'dtfyguhijokpl', 'dfghjkl;', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dgfhjk'),
(34, 'srdtfyuiop', 'zdxfghjkl', 67, 'F', 'senghor.pape912@hotmail.com', '777443663', 'dfghjkl'),
(35, 'tyuiop', 'esrdtfyguhjikl;', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'dsfghjk;l'),
(36, 'ertyuiop', 'sdfghjk', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjkl'),
(37, 'tryuiop', 'fdghjkl', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjkl\';'),
(38, 'fghjkl', 'ghjkl', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjkl'),
(39, 'fghjk', 'gfhj', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjk'),
(40, 'ghjjkkkg', 'ghjk', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'papr'),
(41, 'Diallo', 'Fama', 45, 'F', 'senghor.pape912@hotmail.com', '777443663', 'Dakar'),
(42, 'Senghor', 'Pape', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'vchgj'),
(43, 'Senghor', 'Pape', 27, 'H', 'senghor.pape912@hotmail.com', '777443663', 'parcelle'),
(44, 'Senghor', 'Pape', 27, 'H', 'senghor.pape912@hotmail.com', '777443663', 'parcelle'),
(45, 'Fama', 'Diop', 45, 'F', 'senghor.pape912@hotmail.com', '777443663', 'Dakar'),
(46, 'Fama', 'Diop', 45, 'F', 'senghor.pape912@hotmail.com', '777443663', 'Dakar'),
(47, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjk'),
(48, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghjk'),
(49, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'vhgjkl'),
(50, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hjkl'),
(51, 'Senghor', 'Pape', 66, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hjkl'),
(52, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(53, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(54, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(55, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(56, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(57, 'Senghor', 'Pape', 44, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghyju'),
(58, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', '45'),
(59, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', '45'),
(60, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', '45'),
(61, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', '45'),
(62, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ggt'),
(63, 'Senghor', 'Pape', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hgjk'),
(64, 'Senghor', 'Pape', 45, 'H', 'senghor.pape912@hotmail.com', '777443663', 'bvygu'),
(65, 'Senghor', 'Pape', 55, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ggf'),
(66, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hhyguhu'),
(67, 'Senghor', 'Pape', 55, NULL, 'senghor.pape912@hotmail.com', '777443663', 'vghj'),
(68, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'ghj'),
(69, 'Senghor', 'Pape', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'njjgig'),
(70, 'Senghor', 'Pape', 56, 'H', 'senghor.pape912@hotmail.com', '777443663', 'mnvjg'),
(71, 'Senghor', 'Pape', 34, 'H', 'senghor.pape912@hotmail.com', '777443663', 'fghbh'),
(72, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hgh'),
(73, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'hgh'),
(74, 'Senghor', 'Pape', 67, 'H', 'senghor.pape912@hotmail.com', '777443663', 'jhuhu'),
(75, 'Senghor', 'Pape', 10, 'on', NULL, '777443663', NULL),
(76, 'Senghor', 'Pape', 67, 'M', 'senghor.pape912@hotmail.com', '777443663', NULL),
(77, 'Senghor', 'Pape', 45, 'M', 'senghor.pape912@hotmail.com', '777443663', NULL),
(78, 'Senghor', 'Pape', 65, 'F', 'senghor.pape912@hotmail.com', '777443663', 'hfbjgu'),
(79, 'Senghor', 'Pape', 77, 'M', 'senghor.pape912@hotmail.com', '777443663', 'nhbkjnkl'),
(80, 'Senghor', 'Pape', 45, 'M', 'senghor.pape912@hotmail.com', '777443663', 'parcelle'),
(81, 'Senghor', 'Pape', 67, 'F', 'senghor.pape912@hotmail.com', '777443663', 'hgjkl;'),
(82, 'Senghor', 'Pape', 34, 'M', 'senghor.pape912@hotmail.com', '777443663', 'hgjkl;'),
(83, 'Senghor', 'Pape', 87, 'M', 'senghor.pape912@hotmail.com', '777443663', 'hjk'),
(84, 'Senghor', 'Pape', 45, 'M', 'senghor.pape912@hotmail.com', '456789077', 'fghj'),
(85, 'Senghor', 'Pape', 45, NULL, 'senghor.pape912@hotmail.com', '456789077', 'hllfjjf'),
(86, 'Senghor', 'Pape', 78, 'F', 'senghor.pape912@hotmail.com', '456789099', 'vjk'),
(87, 'Senghor', 'Pape', 45, 'M', 'senghor.pape912@hotmail.com', '77 677 66 45', 'nfjnkj'),
(88, 'Senghor', 'Pape', 45, 'M', 'senghor.pape912@hotmail.com', '4567890', 'jjgj');

-- --------------------------------------------------------

--
-- Table structure for table `Role`
--

CREATE TABLE `Role` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Role`
--

INSERT INTO `Role` (`id`, `name`, `description`) VALUES
(1, 'doctor', 'il soigne les malades'),
(2, 'secretary', 'il oriente les patients'),
(3, 'admin', 'il gere la platforme');

-- --------------------------------------------------------

--
-- Table structure for table `Service`
--

CREATE TABLE `Service` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Service`
--

INSERT INTO `Service` (`id`, `name`, `description`) VALUES
(1, 'Bloc opératoir', NULL),
(2, 'Cardiologie', NULL),
(3, 'Réanimation', NULL),
(4, 'Diabétologie / Endocrinologie', NULL),
(5, 'Anesthésiologie', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Speciality`
--

CREATE TABLE `Speciality` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `description` text,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Speciality`
--

INSERT INTO `Speciality` (`id`, `name`, `description`, `service_id`) VALUES
(6, 'Chirurgie bariatrique', NULL, 1),
(7, 'Chirurgie de reconstruction et plastique', NULL, 1),
(8, 'Chirurgie vasculaire', NULL, 1),
(9, 'Chirurgie orthopédique et traumatologique', NULL, 1),
(10, 'Chirurgie urologique', NULL, 1),
(11, 'Infarctus du myocarde', NULL, 2),
(12, 'Syndrome coronarien aigu', NULL, 2),
(13, 'Troubles du rythme', NULL, 2),
(14, 'Embolie pulmonaire', NULL, 2),
(15, 'Thromboses veineuses', NULL, 2),
(16, 'Réanimation cardiaques', NULL, 3),
(17, 'Réanimation neurologiques', NULL, 3),
(18, 'Réanimation digestives', NULL, 3),
(19, ' Réanimation rénales avec hémofiltration', NULL, 3),
(20, 'Diabète', NULL, 4),
(21, 'Obésité', NULL, 4),
(22, 'VHI', NULL, 4),
(23, 'Anesthésie générale', NULL, 5),
(24, 'Anesthésie loco-régionale', NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Speciality_Staff`
--

CREATE TABLE `Speciality_Staff` (
  `speciality_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Speciality_Staff`
--

INSERT INTO `Speciality_Staff` (`speciality_id`, `staff_id`) VALUES
(6, 1),
(20, 1),
(24, 1),
(6, 2),
(10, 2),
(23, 2),
(6, 3),
(8, 3),
(16, 3),
(8, 4),
(17, 4),
(8, 5),
(10, 5),
(13, 5),
(14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `Staff`
--

CREATE TABLE `Staff` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`id`, `name`, `first_name`, `last_name`, `email`, `phone`, `role_id`, `avatar`) VALUES
(1, 'Fallou Camara', '', '', 'camara43@gmail.com', '776545643', 1, '2.jpg'),
(2, 'Sidi Diallo', '', '', 'sidi23@hotmail.com', '765554323', 1, '3.jpg'),
(3, 'Ndeye Ndiaye', '', '', 'ndiaye43@gmail.com', '789875643', 1, '4.jpg'),
(4, 'Fatima Diallo', '', '', 'diallo23@gmail.com', '776543454', 1, '5.jpg'),
(5, 'Arona Faye', '', '', 'faye87@hotmail.com', '776654423', 1, '6.jpg'),
(6, 'Abdou Fall', '', '', 'fall45@hotmail.com', '786543423', 2, '7.jpeg'),
(7, NULL, 'Senghor ', 'Pape ', 'senghor.pape912@hotmail.com ', '4567890 ', 1, NULL),
(8, NULL, 'Senghor ', 'Pape ', 'senghor.pape912@hotmail.com ', '4567890 ', 1, NULL),
(9, NULL, 'Senghor ', 'Pape ', 'senghor.pape912@hotmail.com ', '4567890 ', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`, `staff_id`, `patient_id`) VALUES
(1, 'fall123', 'fall1234', 6, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appoint`
--
ALTER TABLE `Appoint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Appoint_Planning1_idx` (`doctor_id`),
  ADD KEY `fk_Appoint_Patient1_idx` (`patient_id`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Service`
--
ALTER TABLE `Service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Speciality`
--
ALTER TABLE `Speciality`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Specialites_Services1_idx` (`service_id`);

--
-- Indexes for table `Speciality_Staff`
--
ALTER TABLE `Speciality_Staff`
  ADD PRIMARY KEY (`speciality_id`,`staff_id`),
  ADD KEY `fk_Speciality_has_Staff_Staff1_idx` (`staff_id`),
  ADD KEY `fk_Speciality_has_Staff_Speciality1_idx` (`speciality_id`);

--
-- Indexes for table `Staff`
--
ALTER TABLE `Staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Staff_Roles1_idx` (`role_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_User_Doctor1_idx` (`staff_id`),
  ADD KEY `fk_User_Patient1_idx` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appoint`
--
ALTER TABLE `Appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `Role`
--
ALTER TABLE `Role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Service`
--
ALTER TABLE `Service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Speciality`
--
ALTER TABLE `Speciality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `Staff`
--
ALTER TABLE `Staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;