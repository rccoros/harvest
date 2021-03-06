-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2016 at 07:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `harvest`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('97f72b864fa239e683817fad06def5c203487dbc', '::1', 1467078927, 0x5f5f63695f6c6173745f726567656e65726174657c693a313436373037383932373b),
('a811f0cf5b7ef4b552de579e2b3e8961b9d21371', '::1', 1477128334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373132383333343b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a2264617368626f617264223b6d6573736167657c733a31343a22416363657373206772616e746564223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('a6396886f643cc77a1619ec8786396b2dd8e5826', '::1', 1477128695, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373132383639353b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a22696e76656e746f7279223b),
('fe9baa22cf227f1e7df0baacf830e6417d85d3bd', '::1', 1477129836, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373132393833363b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a2264617368626f617264223b),
('04ebec286eec33c2960d96447e5dc1a7be5b06ad', '::1', 1477129949, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373132393833363b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a227363686564756c6573223b),
('89843171012b7f8559ccf04417db76e0f0836d41', '::1', 1477130765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373133303437393b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a2264617368626f617264223b),
('fc482028b0577390c3beee9a9dde1bee9260349a', '::1', 1477131859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373133313835393b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a2264617368626f617264223b6d6573736167657c733a31343a22416363657373206772616e746564223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('72efbd8318824d5a63555936f366a83089e656a6', '::1', 1477132048, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437373133313835393b6163636573735f6772616e7465647c733a333a22796573223b6163746976655f706167657c733a393a2264617368626f617264223b);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `last_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject_id`, `name`, `date`, `last_modified`) VALUES
(1, 1, 'Exam1', '2016-10-23', '2016-10-23 03:57:46'),
(2, 1, 'Exam2', '2016-10-23', '2016-10-23 03:57:46'),
(3, 2, 'Exam1', '2016-10-23', '2016-10-23 03:57:46'),
(4, 2, 'Exam2', '2016-10-23', '2016-10-24 03:57:46'),
(5, 3, 'Exam1', '2016-10-23', '2016-10-24 03:57:46');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `grade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `user_id`, `exam_id`, `grade`) VALUES
(1, 4, 1, 100),
(2, 4, 2, 80),
(3, 5, 1, 90),
(4, 5, 2, 85),
(5, 6, 1, 95),
(6, 6, 2, 97);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_plan`
--

CREATE TABLE `lesson_plan` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Bathroom Chenelen'),
(2, 'Baking'),
(3, 'Marblicious');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `reset` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `last_login` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `reset`, `first_name`, `last_name`, `last_login`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 0, 'Administrator', 'User', NULL),
(2, 'rccoros', 'b5f506b9b8b562e0ea4bebefddf52506', 'Teacher', 0, 'rccoros', 'rccoros', NULL),
(4, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Student', 0, 'user', 'user', NULL),
(5, 'user1', 'ee11cbb19052e40b07aac0ca060c23ee', 'Student', 0, 'Romnick', 'Coros', NULL),
(6, 'user2', 'ee11cbb19052e40b07aac0ca060c23ee', 'Student', 0, 'user2', 'user2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lesson_plan`
--
ALTER TABLE `lesson_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
