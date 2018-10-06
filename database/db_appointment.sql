-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2018 at 07:10 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `patientId` varchar(1000) NOT NULL,
  `image` varchar(5000) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `aboutme` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `patientId`, `image`, `fullname`, `email`, `phone`, `address`, `password`, `gender`, `question`, `answer`, `type`, `aboutme`) VALUES
(29, 'YlDOGfUd', '', 'Sample User', 'sample@gmail.com', '09123456789', 'Blk 1 lot 1', '123456', 'Male', 'Favorite food?', 'Lasagna', 'validated', '');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `patientId` varchar(1000) NOT NULL,
  `transacId` varchar(1000) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `dates` date NOT NULL,
  `hours` varchar(1000) NOT NULL,
  `personnel` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patientId`, `transacId`, `images`, `fullname`, `email`, `services`, `dates`, `hours`, `personnel`, `status`, `datetime`) VALUES
(1, 'YlDOGfUd', '9sW1MNhv', 'images/preview.jpg', 'Sample User', 'sample@gmail.com', 'Cleaning', '2018-10-02', '8:00 - 9:00 am', 'me71YiBC', 'cancelled', '2018-10-01 02:44:50'),
(2, 'YlDOGfUd', '9sW1MNhv', 'images/preview.jpg', 'Sample User', 'sample@gmail.com', 'Braces', '2018-10-02', '8:00 - 9:00 am', 'me71YiBC', 'cancelled', '2018-10-01 02:44:50'),
(137, 'YlDOGfUd', 'ZAgFYd2D', 'images/appointment/', 'Sample User', 'sample@gmail.com', '2hrs Zen signature massage', '2018-10-16', '10:00 - 11:00 am', 'Personnel 1', 'cancelled', '2018-10-01 05:07:34'),
(138, 'YlDOGfUd', 'ZAgFYd2D', 'images/appointment/', 'Sample User', 'sample@gmail.com', 'SPECIAL PACKAGES', '2018-10-16', '10:00 - 11:00 am', 'Personnel 1', 'cancelled', '2018-10-01 05:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctorId` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `gender` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `work_hours` varchar(1000) NOT NULL,
  `profession` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctorId`, `image`, `fullname`, `email`, `bio`, `gender`, `address`, `work_hours`, `profession`, `phone`, `status`) VALUES
(11, 'me71YiBC', 'images/users/42734847_1517482465061908_908726036571619328_n.jpg', 'Nena Ruth Capus-Mamolo, DMD RN', 'mamoloruth@gmail.com', '29 years of experience with General Dentistry, Orthodontics and Implantology', 'Female', '', '8am - 5pm', 'Doctor of Dental Medicine', '09071821276', 'validated'),
(13, 'PanY0lTO', 'images/users/42711061_160648571532518_4896619508963213312_n.jpg', 'Roland Perry Manuel', 'rpmanuel70@yahoo.com', '16 years in the line of Orthodontics', 'Male', 'DasmariÃ±as City, Cavite', '8am - 5pm', 'Dental Practitioner', '09565262932', 'validated');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `dates` date NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `status`, `description`) VALUES
(1, 'BODY MASSAGE', '', '<p>A way to view teeth, jawbone and soft tissues beyond what can be seen with the naked eye.</p>\r\nTreat yourself to a relaxing massage with aromatherapy.'),
(2, 'BODY TREATMENT', '', 'We also offer foot spa, manicure and pedicure, hair spa and body scrubs.\r\n\r\n'),
(3, 'FACIAL TREATMENT', '', '<p>Tooth extraction involves removing a tooth from its socket in the jaw bone</p>\r\nIncludes facial masks, seaweed, collagen, and Dead Sea mud.'),
(4, 'HAIR REMOVAL', '', 'Hair removal for your eyebrows, upper lip, underarms, arms, bikini, etc.\r\n\r\n'),
(5, 'SPECIAL PACKAGES', '', 'Our service packages is made depends upon your needs with affordable prices.');

-- --------------------------------------------------------

--
-- Table structure for table `services_offered`
--

CREATE TABLE `services_offered` (
  `id` int(11) NOT NULL,
  `category` varchar(1000) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services_offered`
--

INSERT INTO `services_offered` (`id`, `category`, `title`, `description`, `price`) VALUES
(1, 'BODY MASSAGE', '2hrs Zen signature massage', 'Swedish, Shiatsu, Reflex and Thai', '700.00'),
(2, 'BODY TREATMENT', 'Body spa packages', 'Hair Spa, Body Scrub and 1 hour Swe-Shiatsu massage\r\n', '1,500.00'),
(3, 'FACIAL TREATMENT', 'Facial Cleaening', 'with laser * vacuum * face lifting massage', '600.00'),
(4, 'HAIR REMOVAL', 'Legs', 'Full Legs Hair Removal', '950.00'),
(5, 'BODY MASSAGE', 'SPECIAL PACKAGES', '1 HOUR Body Massage plus Manicure and Pedicure', '600.00'),
(6, 'BODY MASSAGE', 'Basalt Hot Stone Treatment', 'Full Course (1hr & 30 mins.)', '899.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_offered`
--
ALTER TABLE `services_offered`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `services_offered`
--
ALTER TABLE `services_offered`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
