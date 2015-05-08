-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2015 at 03:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE IF NOT EXISTS `client_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `second_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `passport` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `county` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `nearest_town` varchar(50) NOT NULL,
  `gps` varchar(200) NOT NULL,
  `postal_address` varchar(50) NOT NULL,
  `postal_town` varchar(50) NOT NULL,
  `mobile_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `household_head` varchar(100) NOT NULL,
  `household_category` varchar(100) NOT NULL,
  `building_materials` varchar(255) NOT NULL,
  `income_sources` varchar(255) NOT NULL,
  `main_income` varchar(100) NOT NULL,
  `monthly_income` varchar(100) NOT NULL,
  `family_size` varchar(50) NOT NULL,
  `rooms` varchar(50) NOT NULL,
  `connected` varchar(20) NOT NULL,
  `distance` varchar(50) NOT NULL,
  `energy_source` varchar(100) NOT NULL,
  `cooking_methods` varchar(255) NOT NULL,
  `cooking_frequency` varchar(50) NOT NULL,
  `cooking_type` varchar(50) NOT NULL,
  `lighting_methods` varchar(255) NOT NULL,
  `lighting_duration` varchar(100) NOT NULL,
  `rooms_lit` varchar(50) NOT NULL,
  `charcoal` int(1) NOT NULL DEFAULT '0',
  `firewood` tinyint(1) NOT NULL DEFAULT '0',
  `kerosene` tinyint(1) NOT NULL DEFAULT '0',
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_number` (`mobile_number`),
  UNIQUE KEY `mobile_number_2` (`mobile_number`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `client_table`
--

INSERT INTO `client_table` (`id`, `first_name`, `second_name`, `last_name`, `gender`, `passport`, `country`, `province`, `county`, `district`, `division`, `location`, `nearest_town`, `gps`, `postal_address`, `postal_town`, `mobile_number`, `email`, `marital_status`, `household_head`, `household_category`, `building_materials`, `income_sources`, `main_income`, `monthly_income`, `family_size`, `rooms`, `connected`, `distance`, `energy_source`, `cooking_methods`, `cooking_frequency`, `cooking_type`, `lighting_methods`, `lighting_duration`, `rooms_lit`, `charcoal`, `firewood`, `kerosene`, `date_added`, `deleted`) VALUES
(1, 'Robert', 'Ouko', 'Ohuru', 'Male', '27558289', 'Kenya', 'Nyanza', 'Homa Bay', 'Rachuonyo', 'Rachuonyo North', 'Kanyipir', 'Kadel', '-0.448067, 34.578252', '1', 'Kandiege', '254714360799', 'rohuru@yahoo.com', 'Married', 'Father', 'urban', 'Iron Sheet\r\nSand\r\nBricks\r\nCement\r\nWood', 'Business\r\nFarming', 'Business', '5000-20000', '6', '4', 'Yes', '500', 'Kerosene\r\nCharcoal\r\nFirewood', 'Gas Cooker\r\nParaffin Stove\r\nCoal Stove', 'Thrice', 'Communal', 'Electricity\r\nTorches\r\nCandles', '4 Hours', '5', 0, 0, 0, '2015-02-10 09:22:01', 0),
(3, 'Richard', 'Ouma', 'Miginjo', 'Male', '132625895', 'kenya', 'Nyanza', 'Homa Bay', 'Rachuonyo', 'Rachuonyo North', 'Kanyipir', 'Kendu Bay', '-0.368771, 34.650959', '', '', '254735000001', '', 'Married', 'Father', 'urban', 'Iron SheetsSandCementbrickstones', 'Salarybusiness', 'Salary', '101000-300000', '5', '4', 'Yes', '100', 'Electricity\r\nCharcoal\r\nKerosene\r\nLiquefied Petroleum Gas', 'Gas Cooker\r\nParaffin Stove\r\nCoal Stove', 'Four Times', 'Individual', 'Electricity\r\nTorches\r\nCandles', '5 Hours', '4', 0, 0, 0, '2015-03-04 12:37:50', 0),
(14, 'Bettirose', 'Njoki', 'Ngugi', 'Female', '28484110', 'Kenya', 'Central', 'Muranga', 'Muranga', 'Murang''a', 'Murang''a', 'Murang''a', '-0.7500000,37.0000000 ', '513', 'Muranga', '0714543956', 'bettirosengugi@gmail.com', 'Married', 'Father', 'urban', 'Iron Sheet\r\nSand\r\nBricks\r\nCement\r\nWood', 'business\r\nFarming', 'Farming', '5000-20000', '6', '7', 'yes', '500', 'Kerosene\r\nCharcoal\r\nFirewood', 'Gas Cooker\r\nParaffin Stove\r\nCoal Stove', 'Thrice', 'Communal', 'Electricity\r\nTorches\r\nCandles', '4 Hours', '5', 0, 0, 0, '2015-03-31 08:40:57', 0),
(16, 'ghcgh', 'chjghjfh', 'fghhfdfg', 'Male', '3547676', 'kenya', 'Coast', 'Lamu', 'dgh', 'fgchh', 'fgchj', 'fghjgv', '6756', '5467', 'mvv', '2343536354', '', 'Married', 'jhvkh', 'rural', 'jghgh', 'dfghfj', 'tyhgf', '5000-20000', '5', '12', 'Yes', '3465', 'dhc', 'vbjhk', 'Twice', 'Individual', 'gjhhj', '11 Hours', '6', 0, 0, 0, '2015-04-15 04:59:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `energy_table`
--

CREATE TABLE IF NOT EXISTS `energy_table` (
  `energy_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`energy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `energy_table`
--

INSERT INTO `energy_table` (`energy_id`, `name`, `date_added`, `deleted`) VALUES
(1, 'Charcoal', '2015-02-04 00:00:00', 0),
(2, 'Firewood', '2015-02-05 00:00:00', 0),
(3, 'kerosene', '2015-02-13 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `energy_use`
--

CREATE TABLE IF NOT EXISTS `energy_use` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clientid` int(11) DEFAULT NULL,
  `energyid` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `energy_use`
--

INSERT INTO `energy_use` (`id`, `clientid`, `energyid`, `amount`, `date`) VALUES
(1, 1, 1, 12, '2015-04-17'),
(2, 2, 2, 23, '2015-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `incoming_messages`
--

CREATE TABLE IF NOT EXISTS `incoming_messages` (
  `MsgId` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(255) NOT NULL,
  `sender_number` varchar(100) NOT NULL,
  `energy_id` int(3) NOT NULL,
  `date_received` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`MsgId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `incoming_messages`
--

INSERT INTO `incoming_messages` (`MsgId`, `amount`, `sender_number`, `energy_id`, `date_received`, `deleted`) VALUES
(1, '25', '254714360799', 1, '2015-02-27 01:10:50', 0),
(2, '32', '254714360799', 1, '2015-02-27 00:00:00', 0),
(3, '23', '254714360799', 1, '2015-02-27 01:35:09', 0),
(4, '36', '254714360799', 1, '2015-02-27 04:59:38', 0),
(5, '100', '254714360799', 1, '2015-02-27 05:20:05', 0),
(6, '123', '254714360799', 1, '2015-02-27 05:40:00', 0),
(7, '36', '254714360799', 1, '2015-02-27 05:42:47', 0),
(8, '12.5', '254714360799', 1, '2015-02-27 05:40:30', 0),
(9, '27', '254714360799', 1, '2015-02-27 05:45:34', 0),
(10, '13.2', '254714360799', 1, '2015-02-27 05:47:38', 0),
(11, '160.9', '254714360799', 1, '2015-02-27 05:48:31', 0),
(12, '45.0', '254714360799', 1, '2015-02-27 05:49:03', 0),
(13, '0.9', '254714360799', 1, '2015-02-27 05:49:36', 0),
(14, '13.6', '254714360799', 1, '2015-03-01 02:53:14', 0),
(15, '11.9', '254714360799', 1, '2015-03-01 03:06:12', 0),
(16, '20.1', '254714360799', 1, '2015-03-01 09:19:01', 0),
(17, '42.3', '254714360799', 1, '2015-03-03 01:16:32', 0),
(18, '12.1', '254714360799', 1, '2015-03-03 01:56:40', 0),
(19, '12', '254714360799', 1, '2015-03-03 02:06:23', 0),
(20, '25', '254714360799', 1, '2015-03-03 02:25:21', 0),
(21, '25.1', '254714360799', 1, '2015-03-03 02:25:44', 0),
(22, '32.1', '254714360799', 1, '2015-03-03 02:39:15', 0),
(23, '0.3', '254714360799', 1, '2015-03-03 02:43:32', 0),
(24, '2', '254714360799', 1, '2015-03-03 02:59:03', 0),
(25, '2.0', '254714360799', 1, '2015-03-03 02:59:34', 0),
(26, '5', '254714360799', 1, '2015-03-03 03:01:15', 0),
(27, '12.3', '254714360799', 1, '2015-03-03 04:18:20', 0),
(28, '20.3', '254714360799', 1, '2015-03-06 03:57:54', 0),
(29, '36', '254714360799', 1, '2015-03-09 01:58:04', 0),
(30, '13', '254714360799', 1, '2015-03-09 06:21:40', 0),
(31, '33', '254714360799', 1, '2015-03-10 08:11:16', 0),
(32, '10', '254714360799', 1, '2015-03-10 08:36:50', 0),
(33, '16.5', '254714360799', 1, '2015-03-10 10:03:02', 0),
(34, '12.3', '0714543956', 2, '2015-03-14 00:00:00', 0),
(35, '12.3', '0714543956', 2, '2015-03-14 00:00:00', 0),
(36, '56.5', '0714543956', 3, '2015-03-26 00:00:00', 0),
(37, '56.5', '0714543956', 3, '2015-03-26 00:00:00', 0),
(38, '50', '714543956', 1, '0000-00-00 00:00:00', 0),
(39, '50', '714543956', 1, '0000-00-00 00:00:00', 0),
(40, '500', '714543956', 2, '0000-00-00 00:00:00', 0),
(41, '500', '714543956', 2, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `outgoing_messages_table`
--

CREATE TABLE IF NOT EXISTS `outgoing_messages_table` (
  `message_id` int(3) NOT NULL,
  `recepients` varchar(100) NOT NULL DEFAULT 'ALL',
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  KEY `date_sent` (`date_sent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outgoing_messages_table`
--

INSERT INTO `outgoing_messages_table` (`message_id`, `recepients`, `date_sent`, `deleted`) VALUES
(1, '0714360799', '2015-02-19 12:38:43', 0),
(1, '0714360799', '2015-02-19 12:39:27', 0),
(1, '0714360799', '2015-02-19 12:40:14', 0),
(1, '0714360799', '2015-02-19 12:43:15', 0),
(6, '0714360799', '2015-02-19 12:45:58', 0),
(1, '0714360799', '2015-02-19 12:52:06', 0),
(1, '0714360799', '2015-02-19 12:52:06', 0),
(6, '0714360799', '2015-02-19 12:53:50', 0),
(1, '0714360799', '2015-02-19 12:56:47', 0),
(1, '0714360799', '2015-02-20 04:21:17', 0),
(6, '0714360799', '2015-02-20 04:21:20', 0),
(6, '0714360799', '2015-02-20 04:21:21', 0),
(1, '0714360799', '2015-02-20 04:21:22', 0),
(1, '0714360799', '2015-02-20 04:21:24', 0),
(1, '0714360799', '2015-02-20 04:21:51', 0),
(1, '0714360799', '2015-02-20 05:03:05', 0),
(1, '0714360799', '2015-02-20 05:03:07', 0),
(1, '0714360799', '2015-02-20 05:03:08', 0),
(6, '0714360799', '2015-02-20 05:03:09', 0),
(6, '0714360799', '2015-02-20 05:03:09', 0),
(1, '254714360799', '2015-04-15 04:52:06', 0),
(1, '254735000001', '2015-04-15 04:52:06', 0),
(1, '0714543956', '2015-04-15 04:52:07', 0),
(1, '254714360799', '2015-04-15 04:52:10', 0),
(1, '254735000001', '2015-04-15 04:52:11', 0),
(1, '0714543956', '2015-04-15 04:52:11', 0),
(1, '254714360799', '2015-04-15 04:52:11', 0),
(1, '254735000001', '2015-04-15 04:52:11', 0),
(1, '0714543956', '2015-04-15 04:52:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_messages_table`
--

CREATE TABLE IF NOT EXISTS `system_messages_table` (
  `message_id` int(3) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `system_messages_table`
--

INSERT INTO `system_messages_table` (`message_id`, `message`, `description`, `date_added`, `deleted`) VALUES
(1, 'Please send us data on the amount of charcoal you have used today.', 'Amount of charcoal used by household in a day', '2015-02-19 13:56:08', 0),
(6, 'Thank you for sending us data for your energy use today.', 'This is an appreciation message to respondents for sending us data on their daily energy use.', '2015-02-19 13:42:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `appointment` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `first_name`, `middle_name`, `last_name`, `appointment`, `email`, `username`, `password`, `role`, `date_added`, `deleted`) VALUES
(1, 'robert', 'Ouko', 'ohuru', 'Analyst', 'rohuru@yahoo.com', 'rohuru', 'roba3042', 'Admin', '2015-02-06 18:44:50', 0),
(2, 'brian', 'Onyango', 'Ohuru', 'Analyst', 'brianohuru@yahoo.com', 'brianohuru', '12345678', 'Clerk', '2015-02-08 14:57:09', 1),
(3, 'b', 'b', 'b', 'b', 'bettirosengugi@gmail.com', 'bettirosengugi', '25d55ad283aa400af464c76d713c07ad', 'Super Admin', '2015-03-30 12:18:14', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
