-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2024 at 03:08 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_expenses`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`user_id`, `firstname`, `lastname`, `email`, `password`, `date_of_birth`) VALUES
(1, 'keyur', 'panchal', 'kp@gmail.com', 'kp123', '2024-03-21'),
(2, 'urvish', 'panchal', 'panchalurvish56@gmail.com', '147258', '2002-02-21'),
(3, 'ishan', 'rana', 'ishanrana00@gmail.com', '258369', '2001-03-04'),
(4, 'jay', 'patel', 'pateljay67@gmail.com', '321456', '2003-08-06'),
(7, 'U', 'P', 'up@gmail.com', 'up1234', '2024-04-13'),
(8, 'K', 'P', 'panchalkeyur1322@gmail.com', 'keyur1234', '2024-04-02'),
(9, 'keyur', 'panchal', 'panchal.key@northeastern.edu', 'keyur1234', '2024-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int NOT NULL AUTO_INCREMENT,
  `customer_company_name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_fname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_lname` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `customer_mobilenumber` bigint NOT NULL,
  `customer_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_company_name`, `customer_fname`, `customer_lname`, `customer_mobilenumber`, `customer_email`) VALUES
(20, 'Aroma', 'Keyur', 'Panchal', 9059651304, 'kp@gmail.com'),
(21, 'Green beanery', 'Urvish', 'Panchal', 9059651304, 'up@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoices`
--

DROP TABLE IF EXISTS `tbl_invoices`;
CREATE TABLE IF NOT EXISTS `tbl_invoices` (
  `inv_id` int NOT NULL AUTO_INCREMENT,
  `customer_id` int NOT NULL,
  `inv_date` date NOT NULL,
  `inv_title` varchar(500) NOT NULL,
  `inv_desc` varchar(1000) NOT NULL,
  `inv_tax` varchar(10) NOT NULL,
  `inv_status` varchar(10) NOT NULL,
  `inv_amount` int NOT NULL,
  PRIMARY KEY (`inv_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_invoices`
--

INSERT INTO `tbl_invoices` (`inv_id`, `customer_id`, `inv_date`, `inv_title`, `inv_desc`, `inv_tax`, `inv_status`, `inv_amount`) VALUES
(6, 20, '2024-04-23', 'Service', 'Service of saeco machine', 'GST', 'pending', 3000),
(5, 20, '2024-04-18', 'Service', 'Service of espresso machine', 'HST', 'pending', 1500),
(7, 20, '2024-04-08', 'Service', 'Service of gaggia espresso machine', 'HST', 'paid', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

DROP TABLE IF EXISTS `tbl_profile`;
CREATE TABLE IF NOT EXISTS `tbl_profile` (
  `profile_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postal_code` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profile_picture` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`profile_id`, `user_id`, `gender`, `address`, `city`, `country`, `postal_code`, `profile_picture`) VALUES
(1, 1, 1, 'knightbridge', 'brampton', 'canada', 'L6T3X5', 'myprofile.jpg'),
(4, 2, 1, '56,hdbfjd,sjsnh', 'surat', 'india', '365214', 'image.jpg'),
(5, 3, 1, 'xfgnxcnxcgn', 'losangel', 'us', '147258', 'img.jpg'),
(6, 4, 1, 'zdbzdfbzdf', 'zdbzdf', 'uk', '753159', 'ukl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_salary`
--

DROP TABLE IF EXISTS `tbl_salary`;
CREATE TABLE IF NOT EXISTS `tbl_salary` (
  `salary_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `salary_date` date DEFAULT NULL,
  `salary_amount` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`salary_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_salary`
--

INSERT INTO `tbl_salary` (`salary_id`, `user_id`, `salary_date`, `salary_amount`) VALUES
(1, 1, '2024-03-13', '2000'),
(2, 2, '2024-03-05', '900'),
(3, 3, '2024-03-01', '500'),
(5, 4, '2024-03-17', '2000');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD CONSTRAINT `tbl_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_admin` (`user_id`);

--
-- Constraints for table `tbl_salary`
--
ALTER TABLE `tbl_salary`
  ADD CONSTRAINT `tbl_salary_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_admin` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
