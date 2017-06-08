-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 04:22 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attend`
--

CREATE DATABASE IF NOT EXISTS db_mpower;
USE db_mpower;

CREATE TABLE `tbl_attend` (
  `attend_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_attend`
--

INSERT INTO `tbl_attend` (`attend_id`, `event_id`, `user_id`) VALUES
(2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categorized`
--

CREATE TABLE `tbl_categorized` (
  `event_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_title`) VALUES
(1, 'Computer Hardware Servicing'),
(2, 'Software Development'),
(3, 'Web Designing');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_desc` varchar(50) NOT NULL,
  `event_venue` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `event_payment` varchar(50) NOT NULL,
  `event_category` varchar(50) NOT NULL,
  `venue_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `org_id`, `event_title`, `event_desc`, `event_venue`, `start_date`, `end_date`, `event_payment`, `event_category`, `venue_img`) VALUES
(1, 3, 'DevCup', 'Hackathon', 'Makati', '2016-08-01', '2016-08-03', 'Php 100.00', 'Computer Hardware Servicing', ''),
(2, 3, 'Arduino CodeCamp', 'Learning how to code with Arduino', 'GlobeLabs', '2016-08-06', '2016-08-06', 'Php 100.00', 'IOT', ''),
(3, 3, 'Hacksyon Bilang Pilipino', 'A hackthon to help filipino choose their candidate', 'UP Diliman', '2015-08-20', '2016-08-22', '0', 'Category 1', 'cover.jpg'),
(4, 3, 'Data mining', 'data mining', 'GC', '2015-04-21', '2016-08-24', '50', 'Category 1', 'cover.jpg'),
(6, 3, 'Progressive Web App', 'Progressive Web App for Google IO', 'GC', '2015-04-21', '2016-08-24', '0', 'Category 1', 'cover.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_organizer`
--

CREATE TABLE `tbl_organizer` (
  `org_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `org_img` longtext NOT NULL,
  `o_first_name` varchar(50) NOT NULL,
  `o_last_name` varchar(50) NOT NULL,
  `o_middle_name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_organizer`
--

INSERT INTO `tbl_organizer` (`org_id`, `username`, `password`, `org_img`, `o_first_name`, `o_last_name`, `o_middle_name`, `company`, `course`) VALUES
(3, 'org', '12345', 'unknown.png', 'Albrien', 'Millan', 'Mayor', 'Nidec', 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speaker`
--

CREATE TABLE `tbl_speaker` (
  `speaker_id` int(11) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `s_first_name` varchar(50) NOT NULL,
  `s_last_name` varchar(50) NOT NULL,
  `s_middle_name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `speaker_img` longtext NOT NULL,
  `speaker_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_speaker`
--

INSERT INTO `tbl_speaker` (`speaker_id`, `organizer_id`, `s_first_name`, `s_last_name`, `s_middle_name`, `course`, `company`, `skills`, `speaker_img`, `speaker_title`) VALUES
(1, 3, 'Steve', 'Jobs', '', 'BSIT', 'Apple, Inc.', 'IOS Studio Programming', 'speaker.png', 'Web Developer'),
(2, 3, 'Mark', 'Suckerberg', '', 'BSCS', 'Facebook CEO', 'Computer Programming', 'speaker.png', 'System Analyst');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_speaks`
--

CREATE TABLE `tbl_speaks` (
  `speaks_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `speaker_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_speaks`
--

INSERT INTO `tbl_speaks` (`speaks_id`, `event_id`, `speaker_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_img` longtext NOT NULL,
  `u_first_name` varchar(50) NOT NULL,
  `u_last_name` varchar(50) NOT NULL,
  `u_middle_name` varchar(50) NOT NULL,
  `house_no` int(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `graduated` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `password`, `user_img`, `u_first_name`, `u_last_name`, `u_middle_name`, `house_no`, `street`, `barangay`, `province`, `contact_no`, `course`, `graduated`) VALUES
(3, 'brien97', 'Aa1234567', 'gerald.jpg', 'Albrien', 'Millan', 'Mayor', 119, 'Irving', 'New Kalalake', 'Sta. Cruz, Zambales', '09304801715', 'BSCS', 1),
(4, 'user1', '12345', 'gerald.jpg', 'Gerald Michael', 'Austria', 'Napalan', 12, 'Filtration St', 'Sta. Rita', 'Zambales', '09099596749', 'BS Computer Science', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  ADD PRIMARY KEY (`attend_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_organizer`
--
ALTER TABLE `tbl_organizer`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `tbl_speaker`
--
ALTER TABLE `tbl_speaker`
  ADD PRIMARY KEY (`speaker_id`);

--
-- Indexes for table `tbl_speaks`
--
ALTER TABLE `tbl_speaks`
  ADD PRIMARY KEY (`speaks_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attend`
--
ALTER TABLE `tbl_attend`
  MODIFY `attend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_organizer`
--
ALTER TABLE `tbl_organizer`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_speaker`
--
ALTER TABLE `tbl_speaker`
  MODIFY `speaker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_speaks`
--
ALTER TABLE `tbl_speaks`
  MODIFY `speaks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
