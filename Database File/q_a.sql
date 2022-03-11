-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 07:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `q_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_master`
--

CREATE TABLE `answer_master` (
  `a_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answer_master`
--

INSERT INTO `answer_master` (`a_id`, `q_id`, `u_id`, `answer`) VALUES
(1, 1, 2, 'Yes'),
(2, 2, 1, 'Python, java');

-- --------------------------------------------------------

--
-- Table structure for table `question_master`
--

CREATE TABLE `question_master` (
  `q_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_master`
--

INSERT INTO `question_master` (`q_id`, `u_id`, `question`) VALUES
(1, 1, 'php is better with framework?'),
(2, 2, 'which technology is better?');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_addr` varchar(200) NOT NULL,
  `u_gender` varchar(7) NOT NULL,
  `u_birthdate` date NOT NULL,
  `u_ph` int(11) NOT NULL,
  `u_mail` varchar(25) NOT NULL,
  `u_pwd` varchar(20) NOT NULL,
  `u_con_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`u_id`, `u_name`, `u_addr`, `u_gender`, `u_birthdate`, `u_ph`, `u_mail`, `u_pwd`, `u_con_pwd`) VALUES
(1, 'sanket', 'Yogeshwar society , Paldi , 380006', 'male', '2002-02-06', 2147483647, 'sanket@gmail.com', 'sanket123', 'sanket123'),
(2, 'Mohit Ahir', '91/456 , G.H.B , netajinagar ahmedabad 380012', 'male', '2001-09-17', 2147483647, 'mohit@gmail.com', 'mohit123', 'mohit123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_master`
--
ALTER TABLE `answer_master`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `q_id` (`q_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `answer` (`answer`(768));

--
-- Indexes for table `question_master`
--
ALTER TABLE `question_master`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `question` (`question`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_name` (`u_name`),
  ADD KEY `u_addr` (`u_addr`),
  ADD KEY `u_gender` (`u_gender`),
  ADD KEY `u_birthdate` (`u_birthdate`),
  ADD KEY `u_ph` (`u_ph`),
  ADD KEY `u_mail` (`u_mail`),
  ADD KEY `u_pwd` (`u_pwd`),
  ADD KEY `u_con_pwd` (`u_con_pwd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_master`
--
ALTER TABLE `answer_master`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_master`
--
ALTER TABLE `question_master`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_master`
--
ALTER TABLE `answer_master`
  ADD CONSTRAINT `answer_master_ibfk_1` FOREIGN KEY (`q_id`) REFERENCES `question_master` (`q_id`),
  ADD CONSTRAINT `answer_master_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`);

--
-- Constraints for table `question_master`
--
ALTER TABLE `question_master`
  ADD CONSTRAINT `question_master_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_master` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
