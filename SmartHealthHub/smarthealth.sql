-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 22, 2024 at 05:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `allergy`
--

CREATE TABLE `allergy` (
  `id` int(11) NOT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allergy`
--

INSERT INTO `allergy` (`id`, `allergy`, `patient`) VALUES
(1, 'mnmb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctorName`, `date`, `time`, `provider`, `location`, `status`) VALUES
(4, 4, 'mn', '2024-04-15', '07:48', 'mn', 'nbmnb', 'pending'),
(5, 1, 'ASDFDFS', '2024-04-05', '00:15', NULL, NULL, 'pending'),
(6, NULL, 'zcvx', '2024-04-17', '02:25', NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `compliance`
--

CREATE TABLE `compliance` (
  `id` int(11) NOT NULL,
  `department` varchar(255) DEFAULT NULL,
  `complianceArea` varchar(255) DEFAULT NULL,
  `complianceStatus` varchar(255) DEFAULT NULL,
  `lastInspection` varchar(255) DEFAULT NULL,
  `taskName` varchar(255) DEFAULT NULL,
  `taskStatus` varchar(255) DEFAULT NULL,
  `priority` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `compliance`
--

INSERT INTO `compliance` (`id`, `department`, `complianceArea`, `complianceStatus`, `lastInspection`, `taskName`, `taskStatus`, `priority`) VALUES
(1, 'asdfds', 'asdffsdf', 'Compliant', NULL, 'asdf', 'Due', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `auditTrailEnabled` tinyint(1) DEFAULT NULL,
  `backupSchedule` varchar(255) DEFAULT NULL,
  `dateFormat` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `logLevel` varchar(255) DEFAULT NULL,
  `monitoringThreshold` varchar(255) DEFAULT NULL,
  `smtpServer` varchar(255) DEFAULT NULL,
  `theme` varchar(255) DEFAULT NULL,
  `versionControlEnabled` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`auditTrailEnabled`, `backupSchedule`, `dateFormat`, `language`, `logLevel`, `monitoringThreshold`, `smtpServer`, `theme`, `versionControlEnabled`) VALUES
(1, 'Weekly', 'YYYY-MM-DD', NULL, NULL, 'asdf', 'casdf', 'light', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `excerciseData`
--

CREATE TABLE `excerciseData` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `calorieBurned` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `excerciseData`
--

INSERT INTO `excerciseData` (`id`, `date`, `activity`, `duration`, `calorieBurned`, `patient`) VALUES
(2, '2024-04-18', 'sdg', 'sdfg', 'sdgf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `startTime` varchar(255) DEFAULT NULL,
  `endTime` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name`, `location`, `service`, `status`, `startTime`, `endTime`) VALUES
(1, 'nakkj', 'location', 'service1', 'deactivate', '12:37', '00:38'),
(2, 'mn', 'India', NULL, 'active', '12:37', '02:38');

-- --------------------------------------------------------

--
-- Table structure for table `familyHistory`
--

CREATE TABLE `familyHistory` (
  `id` int(11) NOT NULL,
  `familyHistory` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `familyHistory`
--

INSERT INTO `familyHistory` (`id`, `familyHistory`, `patient`) VALUES
(1, 'bvnb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `health_care_provider`
--

CREATE TABLE `health_care_provider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_care_provider`
--

INSERT INTO `health_care_provider` (`id`, `name`, `specialization`, `status`) VALUES
(2, 'nakkjkj', 'jbjk', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `illness`
--

CREATE TABLE `illness` (
  `id` int(11) NOT NULL,
  `illness` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `illness`
--

INSERT INTO `illness` (`id`, `illness`, `patient`) VALUES
(1, 'mn m', 1);

-- --------------------------------------------------------

--
-- Table structure for table `incident`
--

CREATE TABLE `incident` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `incident`
--

INSERT INTO `incident` (`id`, `title`, `description`, `location`, `date`, `time`) VALUES
(1, 'asdf', 'asd', 'asdf', '2024-04-10', '01:50'),
(2, 'asdfa', 'asd', 'sdf', '2024-04-04', '01:54');

-- --------------------------------------------------------

--
-- Table structure for table `medicationReminder`
--

CREATE TABLE `medicationReminder` (
  `id` int(11) NOT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicationReminder`
--

INSERT INTO `medicationReminder` (`id`, `dosage`, `name`, `time`, `patient`) VALUES
(1, 'asdfkkjn', 'asdfmnm', '11:33', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medication_dispensation`
--

CREATE TABLE `medication_dispensation` (
  `id` int(11) NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication_dispensation`
--

INSERT INTO `medication_dispensation` (`id`, `patient`, `medication`, `dosage`, `date`) VALUES
(1, 2, 'mediaction', '2', 'date'),
(2, 2, 'hbjjhj', '5', '2024-04-16T18:30:00.000Z');

-- --------------------------------------------------------

--
-- Table structure for table `medication_history`
--

CREATE TABLE `medication_history` (
  `id` int(11) NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `frequency` varchar(255) DEFAULT NULL,
  `conditions` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medication_history`
--

INSERT INTO `medication_history` (`id`, `patient`, `dosage`, `medication`, `duration`, `frequency`, `conditions`) VALUES
(1, 2, '2', 'mediaction', 'date', NULL, NULL),
(2, 2, '88', 'jjvjbn', '2024-04-17T18:30:00.000Z', NULL, NULL),
(3, 2, NULL, 'jhbj', '2024-04-29T18:30:00.000Z', NULL, NULL),
(4, NULL, '8', 'jhb', '2024-04-17T18:30:00.000Z', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `from_user` int(11) DEFAULT NULL,
  `to_user` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `from_user`, `to_user`, `content`, `created_at`) VALUES
(16, 6, 4, 'asdf', '2024-04-18 21:37:37'),
(17, 6, 5, 'asdf', '2024-04-18 21:37:41'),
(18, 6, 11, 'asdfsfd', '2024-04-18 21:37:45'),
(19, 6, 12, 'asdf', '2024-04-18 21:37:49'),
(20, 6, 13, 'asdf', '2024-04-18 21:37:51'),
(21, 6, 14, 'asdf', '2024-04-18 21:37:55'),
(22, 6, 15, 'asdff', '2024-04-18 21:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `otp`, `email`) VALUES
(5, '6092', 'nahidali412@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pateintCommunity`
--

CREATE TABLE `pateintCommunity` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pateintCommunity`
--

INSERT INTO `pateintCommunity` (`id`, `title`, `content`, `author`, `type`) VALUES
(1, 'sdfasd', 'asdfsfd', '1', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `pateintCommunityComment`
--

CREATE TABLE `pateintCommunityComment` (
  `id` int(11) NOT NULL,
  `article` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pateintCommunityComment`
--

INSERT INTO `pateintCommunityComment` (`id`, `article`, `comment`, `author`) VALUES
(1, 1, 'asdfsd', 'user1'),
(2, 1, 'fsdgdfg', 'user1'),
(3, 1, 'dffdgfhh', 'user1');

-- --------------------------------------------------------

--
-- Table structure for table `patient_health_record`
--

CREATE TABLE `patient_health_record` (
  `id` int(11) NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `medicalHistory` varchar(255) DEFAULT NULL,
  `conditions` varchar(255) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_health_record`
--

INSERT INTO `patient_health_record` (`id`, `patient`, `name`, `age`, `height`, `address`, `medicalHistory`, `conditions`, `medication`) VALUES
(1, 2, 'nahyy', '3', '5ft', 'address', 'medicationHistory', 'conditions', 'mediaction');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `patient` int(11) DEFAULT NULL,
  `medication` varchar(255) DEFAULT NULL,
  `dosage` varchar(255) DEFAULT NULL,
  `frequency` varchar(255) DEFAULT NULL,
  `notes` varchar(255) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `patient`, `medication`, `dosage`, `frequency`, `notes`, `user`, `start`, `end`, `name`, `status`) VALUES
(2, 2, 'medication', 'dosage', 'frequency', 'notes', 1, NULL, NULL, NULL, 'pending'),
(3, 1, NULL, '5', 'kj', NULL, NULL, '2024-04-19', '2024-04-20', 'asdf', 'pending'),
(4, NULL, 'asd', 'asd', 'asd', 'asd', NULL, NULL, NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `user` int(11) DEFAULT NULL,
  `startDate` varchar(255) DEFAULT NULL,
  `endDate` varchar(255) DEFAULT NULL,
  `userActivity` varchar(255) DEFAULT NULL,
  `healthTrends` varchar(255) DEFAULT NULL,
  `systemPerformance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `user`, `startDate`, `endDate`, `userActivity`, `healthTrends`, `systemPerformance`) VALUES
(1, 5, '23/93/2034', '23/93/2034', 'userActivity', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surgery`
--

CREATE TABLE `surgery` (
  `id` int(11) NOT NULL,
  `surgery` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surgery`
--

INSERT INTO `surgery` (`id`, `surgery`, `patient`) VALUES
(1, 'yyyy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_two`
--

CREATE TABLE `user_two` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_two`
--

INSERT INTO `user_two` (`id`, `username`, `password`, `role`, `status`, `email`, `name`) VALUES
(4, NULL, '1234', 'patient', 'active', 'hem@gmail.com', 'hem'),
(5, NULL, '123', 'admin', 'active', 't1@gmail.com', 'Nahid Ali'),
(11, NULL, '123', 'patient', 'active', 'user1@gmail.com', 'user1'),
(12, NULL, '123', 'Pharmacist', 'active', 'user2@gmail.com', 'user2'),
(13, NULL, '123', 'HealthAdmin', 'active', 'user3@gmail.com', 'user3'),
(14, NULL, '123', 'HealthcareProvider', 'active', 'user4@gmail.com', 'user4'),
(15, NULL, '123', 'patient', 'active', 'user5@gmail.com', 'user5'),
(16, NULL, '123', 'patient', 'active', 'nahidali412@gmail.com', 'Nahid Ali');

-- --------------------------------------------------------

--
-- Table structure for table `vitalSign`
--

CREATE TABLE `vitalSign` (
  `id` int(11) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `bloodPressure` varchar(255) DEFAULT NULL,
  `heartRate` varchar(255) DEFAULT NULL,
  `temperature` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `patient` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vitalSign`
--

INSERT INTO `vitalSign` (`id`, `date`, `bloodPressure`, `heartRate`, `temperature`, `weight`, `patient`) VALUES
(1, '2024-04-18', 'mmn', 'm m', 'kjnbkj', 'kjnkj', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergy`
--
ALTER TABLE `allergy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compliance`
--
ALTER TABLE `compliance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `excerciseData`
--
ALTER TABLE `excerciseData`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `familyHistory`
--
ALTER TABLE `familyHistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_care_provider`
--
ALTER TABLE `health_care_provider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `illness`
--
ALTER TABLE `illness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incident`
--
ALTER TABLE `incident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicationReminder`
--
ALTER TABLE `medicationReminder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medication_history`
--
ALTER TABLE `medication_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pateintCommunity`
--
ALTER TABLE `pateintCommunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pateintCommunityComment`
--
ALTER TABLE `pateintCommunityComment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_health_record`
--
ALTER TABLE `patient_health_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgery`
--
ALTER TABLE `surgery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_two`
--
ALTER TABLE `user_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitalSign`
--
ALTER TABLE `vitalSign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allergy`
--
ALTER TABLE `allergy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `compliance`
--
ALTER TABLE `compliance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `excerciseData`
--
ALTER TABLE `excerciseData`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `familyHistory`
--
ALTER TABLE `familyHistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health_care_provider`
--
ALTER TABLE `health_care_provider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `illness`
--
ALTER TABLE `illness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `incident`
--
ALTER TABLE `incident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medicationReminder`
--
ALTER TABLE `medicationReminder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medication_dispensation`
--
ALTER TABLE `medication_dispensation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medication_history`
--
ALTER TABLE `medication_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pateintCommunity`
--
ALTER TABLE `pateintCommunity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pateintCommunityComment`
--
ALTER TABLE `pateintCommunityComment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_health_record`
--
ALTER TABLE `patient_health_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surgery`
--
ALTER TABLE `surgery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_two`
--
ALTER TABLE `user_two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vitalSign`
--
ALTER TABLE `vitalSign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
