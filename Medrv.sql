-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 16, 2019 at 04:24 AM
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
  `duration` time DEFAULT '00:15:00',
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Appoint`
--

INSERT INTO `Appoint` (`id`, `planned_at`, `duration`, `doctor_id`, `patient_id`) VALUES
(1, '2019-10-10', '00:15:00', 2, 3),
(2, '2019-10-10', '00:15:00', 2, 4);

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
  `phone` varchar(9) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`id`, `first_name`, `last_name`, `age`, `gender`, `email`, `phone`, `address`) VALUES
(1, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777655543', 'dakar'),
(2, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777655543', 'dakar'),
(3, 'Fall', 'Fallou', 56, 'H', 'senghor.pape912@hotmail.com', '777655543', 'dakar'),
(4, 'faye', 'ibrhima', 26, 'H', 'senghor.pape912@hotmail.com', '776543454', 'Parcelle');

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
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(9) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Staff`
--

INSERT INTO `Staff` (`id`, `name`, `email`, `phone`, `role_id`, `avatar`) VALUES
(1, 'Fallou Camara', 'camara43@gmail.com', '776545643', 1, '2.jpg'),
(2, 'Sidi Diallo', 'sidi23@hotmail.com', '765554323', 1, '3.jpg'),
(3, 'Ndeye Ndiaye', 'ndiaye43@gmail.com', '789875643', 1, '4.jpg'),
(4, 'Fatima Diallo', 'diallo23@gmail.com', '776543454', 1, '5.jpg'),
(5, 'Arona Faye', 'faye87@hotmail.com', '776654423', 1, '6.jpg'),
(6, 'Abdou Fall', 'fall45@hotmail.com', '786543423', 2, '7.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Patient`
--
ALTER TABLE `Patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;