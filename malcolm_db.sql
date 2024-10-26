-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 13, 2023 at 04:03 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malcolm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_psw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`user_id`, `user_name`, `user_psw`) VALUES
(1, 'admin', '123'),
(2, 'Bavindu', 'bav123');

-- --------------------------------------------------------

--
-- Table structure for table `enquaries_table`
--

CREATE TABLE `enquaries_table` (
  `enq_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_tel` int(10) NOT NULL,
  `job_date` date NOT NULL,
  `job_time` varchar(50) NOT NULL,
  `job_location` varchar(1000) NOT NULL,
  `enq_accepted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquaries_table`
--

INSERT INTO `enquaries_table` (`enq_id`, `user_id`, `user_email`, `user_tel`, `job_date`, `job_time`, `job_location`, `enq_accepted`) VALUES
(1, 4, 'user@gmail.com', 77554455, '2023-09-30', '10am - 13pm', 'https://maps.app.goo.gl/QA6t5EMDwk4MCK2k6', 1),
(4, 4, 'uaer@gmail.com', 77554455, '2023-11-02', '11am-4pm', '', 1),
(5, 4, 'user@gmail.com', 77554455, '2023-10-27', '11am-4pm', 'www.youtube.com', 1),
(6, 5, 'user11@gmail.com', 2147483647, '2023-12-30', '8am-2pm', 'https://maps.app.goo.gl/QA6t5EMDwk4MCK2k6', 1),
(7, 6, 'user11@gmail.com', 2147483647, '2023-12-30', '8am-2pm', 'https://maps.app.goo.gl/QA6t5EMDwk4MCK2k6', 0),
(10, 6, 'uaer123@gmail.com', 2147483647, '2023-10-26', '8am-2pm', 'www..google.com', 1),
(12, 10, 'testing-1@gmail.com', 12345678, '2023-11-12', '10am - 13pm', 'https://maps.app.goo.gl/rKnhe7RLtWYHXCt4A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_table`
--

CREATE TABLE `feedback_table` (
  `f_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_table`
--

INSERT INTO `feedback_table` (`f_id`, `user_id`, `f_text`) VALUES
(1, 4, 'Great Site!'),
(2, 4, 'Awesome Website!'),
(3, 4, 'this web site is awesome'),
(4, 5, 'Testing'),
(5, 6, 'awesome'),
(6, 10, 'testing-1');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_table`
--

CREATE TABLE `gallery_table` (
  `img_id` int(11) NOT NULL,
  `img_location` varchar(255) NOT NULL,
  `img_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_table`
--

INSERT INTO `gallery_table` (`img_id`, `img_location`, `img_type`) VALUES
(5, 'pic/weedding6.jpg', 'landscape'),
(6, 'pic/weding3.jpg', 'landscape'),
(7, 'pic/weding2.jpg', 'landscape'),
(8, 'pic/weddingpackage.jfif', 'landscape'),
(9, 'pic/wedding13.jpg', 'landscape'),
(11, 'pic/download (1).jfif', 'landscape'),
(12, 'pic/download (2).jfif', 'landscape'),
(13, 'pic/download (3).jfif', 'landscape'),
(14, 'pic/download (4).jfif', 'landscape'),
(15, 'pic/download (5).jfif', 'landscape');

-- --------------------------------------------------------

--
-- Table structure for table `logintable`
--

CREATE TABLE `logintable` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_psw` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logintable`
--

INSERT INTO `logintable` (`user_id`, `user_name`, `user_psw`) VALUES
(1, 'admin', '123'),
(4, 'user1', '1234'),
(5, 'user2', '1234'),
(6, 'user3', '12345'),
(7, 'hiviru', '2002'),
(8, 'user4', '12345'),
(9, 'user5', '12345'),
(10, 'testing-1', '123');

-- --------------------------------------------------------

--
-- Table structure for table `packages_table`
--

CREATE TABLE `packages_table` (
  `pack_id` int(11) NOT NULL,
  `pack_Name` varchar(255) NOT NULL,
  `pack_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages_table`
--

INSERT INTO `packages_table` (`pack_id`, `pack_Name`, `pack_Price`) VALUES
(1, '11 hours wedding photography - Rose package', 2100),
(2, '5 hours engagement photo session', 850),
(3, '4 hours engagement coverage and album', 1500),
(4, '7 hours wedding photography - Enagagement package', 650),
(5, 'Basic Portrait Session', 900),
(6, 'Family Portrait Package', 700),
(7, 'Headshot and Professional Branding', 1200),
(8, 'Portrait Experience', 1350),
(9, 'Basic Event Coverage', 600),
(10, 'Corporate Event Photography', 750),
(11, 'Special Occasion Event Photography', 2000),
(12, 'VIP Event Photography Experience', 2500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `enquaries_table`
--
ALTER TABLE `enquaries_table`
  ADD PRIMARY KEY (`enq_id`),
  ADD KEY `FK_enquaries_table_user_id` (`user_id`);

--
-- Indexes for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `FK_feedback_table_user_id` (`user_id`);

--
-- Indexes for table `gallery_table`
--
ALTER TABLE `gallery_table`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `logintable`
--
ALTER TABLE `logintable`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `packages_table`
--
ALTER TABLE `packages_table`
  ADD PRIMARY KEY (`pack_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquaries_table`
--
ALTER TABLE `enquaries_table`
  MODIFY `enq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback_table`
--
ALTER TABLE `feedback_table`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_table`
--
ALTER TABLE `gallery_table`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `logintable`
--
ALTER TABLE `logintable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages_table`
--
ALTER TABLE `packages_table`
  MODIFY `pack_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enquaries_table`
--
ALTER TABLE `enquaries_table`
  ADD CONSTRAINT `FK_enquaries_table_user_id` FOREIGN KEY (`user_id`) REFERENCES `logintable` (`user_id`);

--
-- Constraints for table `feedback_table`
--
ALTER TABLE `feedback_table`
  ADD CONSTRAINT `FK_feedback_table_user_id` FOREIGN KEY (`user_id`) REFERENCES `logintable` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
