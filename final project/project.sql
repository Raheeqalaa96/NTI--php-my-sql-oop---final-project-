-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: mysql5040.site4now.net
-- Generation Time: Dec 26, 2020 at 12:32 PM
-- Server version: 5.6.46-log
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_a6bd48_nti2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `user id` int(11) DEFAULT NULL,
  `feasilbility plan` text NOT NULL,
  `budget` varchar(100) NOT NULL,
  `execution time` varchar(100) NOT NULL,
  `profet value` varchar(100) NOT NULL,
  `type of beneficiaries` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `states` enum('unset','taken','','') NOT NULL DEFAULT '',
  `category_id` int(11) NOT NULL,
  `project_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user id`, `feasilbility plan`, `budget`, `execution time`, `profet value`, `type of beneficiaries`, `discription`, `states`, `category_id`, `project_name`) VALUES
(5, 21, 'jImages in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.', '5000', '4weeks', '300 monthl', 'any one', 'Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.', 'taken', 12, 'Sound Based Computer Automation Using Python'),
(7, 21, 'First of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', '$30000', '2 weeks', '200 monthly', 'any one', 'VFirst of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', 'unset', 14, 'Android Smartphone-Based Function Generator'),
(10, 21, 'First of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', '$4000', '1 mounth', '$100 monthly', 'any one', 'First of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', 'taken', 14, 'Home Automation Using Arduino Through Android Device'),
(11, 21, 'First of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-numFirst of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', '$2000', '4 weeks', '$400 monthly', 'any one', 'First of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-numFirst of all in the bootstrap grid system the sizes of the columns in your row have to add up to 12.\r\nThis means that the numbers at the end of all your column class names should always add up to 12.\r\ncol-sm-num', 'unset', 10, 'Creating A Chat Bot With Recast.AI'),
(24, 21, 'The idea is to create a grocery shopping app that suggests shopping lists from the available budget. Items on the shopping list and store recommendations are suggested based on location, budget, date, and history of the purchases.  Additionally, machine learning technology can be implemented based on purchase history and current input.', '$3008', '4weeks', '$800 weekly', 'any one', 'The idea is to create a grocery shopping app that suggests shopping lists from the available budget. Items on the shopping list and store recommendations are suggested based on location, budget, date, and history of the purchases.  Additionally, machine learning technology can be implemented based on purchase history and current input.', 'taken', 5, 'Grocery Shopping App'),
(25, 26, 'Brand Identifier App This brand identifier app will allow users to learn more about a...', '$3555', '3weeks', '$300 monthly', 'any one', 'Brand Identifier App This brand identifier app will allow users to learn more about a...Brand Identifier App This brand identifier app will allow users to learn more about a...Brand Identifier App This brand identifier app will allow users to learn more about a...Brand Identifier App This brand identifier app will allow users to learn more about a...', 'unset', 8, 'Brand Identifier App This brand identifier app will allow users to learn more about a...'),
(26, 26, 'Mood Monitoring App An Android and iOS app that lets you rate your day and look for patterns that affect your mood.Mood Monitoring App An Android and iOS app that lets you rate your day and look for patterns that affect your mood.', '$1000', '6weeks', '$400 monthly', 'any one', 'Mood Monitoring App An Android and iOS app that lets you rate your day and look for patterns that affect your mood.Mood Monitoring App An Android and iOS app that lets you rate your day and look for patterns that affect your mood.', 'unset', 8, 'Mood Monitoring App An Android and iOS app that lets you rate your day and look for patterns that af'),
(27, 26, 'A mobile food ordering app that enables customers to place their orders in advance. Once the order is placed, customers will be informed about the possible time for pick-up.\r\n\r\nThrough this app, customers don’t have to deal with waiting in line as their order will be ready by the time they arrive at the restaurant. \r\n\r\nFeel free to develop and experiment with this idea. You can simply develop the application template for both Android and iOS using the free cross-platform development tool. Once the template is ready, you can tailor the app to different restaurants’ needs.', '$1000', '5 weeks', '$100 monthly', 'any one', 'A mobile food ordering app that enables customers to place their orders in advance. Once the order is placed, customers will be informed about the possible time for pick-up.\r\n\r\nThrough this app, customers don’t have to deal with waiting in line as their order will be ready by the time they arrive at the restaurant. \r\n\r\nFeel free to develop and experiment with this idea. You can simply develop the application template for both Android and iOS using the free cross-platform development tool. Once the template is ready, you can tailor the app to different restaurants’ needs.', 'unset', 17, 'Catering Service App'),
(28, 26, 'Based on the above-mentioned method, not only songs or celebrities can be identified, but also movies, TV shows, perfumes, etc.Based on the above-mentioned method, not only songs or celebrities can be identified, but also movies, TV shows, perfumes, etc.', '$30000', '4 weeks', '$500 monthly', 'any one', 'Based on the above-mentioned method, not only songs or celebrities can be identified, but also movies, TV shows, perfumes, etc.Based on the above-mentioned method, not only songs or celebrities can be identified, but also movies, TV shows, perfumes, etc.', 'unset', 17, 'Other Recognition & Identification App');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user id` (`user id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
