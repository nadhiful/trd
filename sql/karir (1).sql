-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2020 at 08:34 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triratna_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `karir`
--

CREATE TABLE `karir` (
  `id` int(3) NOT NULL,
  `job_position` varchar(200) NOT NULL,
  `job_desc` text NOT NULL,
  `job_location` varchar(100) NOT NULL,
  `date_create` date NOT NULL,
  `date_close` date NOT NULL,
  `kategori` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karir`
--

INSERT INTO `karir` (`id`, `job_position`, `job_desc`, `job_location`, `date_create`, `date_close`, `kategori`) VALUES
(1, 'PPC Staf', '• Prepare production plan and ensure the procurement of its required materials\r\n• Identify production requirement of raw materils and control material stock\r\n• Establish annual plan for raw material procurement in coodination with purchasing Dept.\r\n• Provide the Finance and Account Dept. with the necessary information about the cost calculation\r\n• Responsible for controling input production result and inventory control\r\n• Coordinate with Dept related about production process to achieve the realization of production Job Requirement:\r\n• ​Candidate must possess at least SMU, Diploma, Bachelor\'s Degree in Engineering (Civil), Engineering (Industrial), Engineering (Mechanical) or equivalent.\r\n• At least 1 Year(s) of working experience in the related field is required for this position.\r\n• Required Skill(s): Active, Dynamic, Microsoft Office, Organization Skill & Leadership, Inventory control and Planning production calculation\r\n• Preferably Staff (non-management & non-supervisor specialized in Manufacturing/Production Operations or equivalent', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-12', 2),
(2, 'Programmer', 'Job Description\r\n• Confirms project requirements by reviewing program objective, input data, and output requirements with analyst, supervisor, and user.\r\n• Arranges project requirements in programming sequence by analyzing requirements; preparing a work flow chart and diagram using knowledge of computer capabilities, subject matter, programming language, and logic.\r\n• Encodes project requirements by converting work flow information into computer language.\r\n• Programs the computer by entering coded information.\r\n• Confirms program operation by conducting tests; modifying program sequence and/or codes.\r\n• Prepares reference for users by writing operating instructions.\r\n• Maintains historical records by documenting program development and revisions.\r\n• Maintains user operations by keeping information confidential.\r\n• Ensures operation of equipment by following manufacturer\'s instructions; troubleshooting malfunctions; calling for repairs; evaluating new equipment and techniques.\r\n• Contributes to team effort by accomplishing related results as needed. Job Requirements :\r\n• Candidate must possess at least Diploma/Bachelor Degree in Engineering (Computer/Telecommunication/Information Technology) or equivalent\r\n• Fresh graduate are welcome\r\n• Required language(s) : English, Bahasa Indonesia\r\n• Required skill(s): ASP.Net or PHP (web based)\r\n• At least 2 Year(s) of working experience in the related field is required for this position.\r\n• Preferably Staff (non-management & non-supervisor) specialized in IT/Computer - Network/System/Database Admin or equivalent.\r\n• Willing to work under pressure\r\n• Result-Oriented\r\n• Presentable, conscientious, and structured in coding', 'Gresik, Jawa Timur', '2020-02-12', '2020-02-12', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karir`
--
ALTER TABLE `karir`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karir`
--
ALTER TABLE `karir`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
