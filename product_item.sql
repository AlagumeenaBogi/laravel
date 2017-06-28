-- phpMyAdmin SQL Dump
-- version 3.3.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2017 at 10:50 AM
-- Server version: 5.5.56
-- PHP Version: 5.6.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE IF NOT EXISTS `product_item` (
  `product_pk_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_type_id` int(11) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`product_pk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`product_pk_id`, `invoice_type_id`, `product_name`, `created_time`, `modified_time`, `status`) VALUES
(1, 3, 'Aromatic Rice', 0, 0, 1),
(2, 2, 'AMC FOR Laravel Project', 0, 0, 1),
(3, 1, 'Employee Salary', 0, 0, 1),
(4, 3, 'Roasted Flax Seeds', 0, 0, 1),
(5, 3, 'Dates Palm Jagger', 0, 0, 1),
(6, 3, 'Traditional Millet Jwar', 0, 0, 1),
(7, 3, 'Dates Palm Sugar', 0, 0, 1),
(8, 3, 'Black Pepper', 0, 0, 1);
