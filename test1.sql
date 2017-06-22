-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2017 at 10:57 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(50) NOT NULL,
  `client_contact_person_name` varchar(100) NOT NULL,
  `client_contact_person_email_ids` varchar(500) NOT NULL,
  `client_contact_person_phone_number` varchar(50) NOT NULL,
  `client_contact_person_mobile_number` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `client_contact_person_name`, `client_contact_person_email_ids`, `client_contact_person_phone_number`, `client_contact_person_mobile_number`, `address`, `status`) VALUES
(1, 'Rajiv Saxena', 'rajaivsexens@gmail.com', '', '9788729716', 'SP - 24, Chetan Vihar Sector - C, Aliganj Lucknow - 226024,  Uttar Pradesh, India.', 1),
(2, 'Aathsiwari', 'aathiswari@gmail.com', '', '9047541307', 'Center for Microfinance D - 240, D Block, Behind World Trade Park, Malviya Nagar, Jaipur - 302017, India.', 1),
(3, 'Poorviga', 'poorviga@gmail.com', '', '8940022626', 'A-10, Second Floor, Green Park Main, New Delhi - 110016,  India.', 1),
(4, 'Priyatharisni', 'priyatharisni@gmail.com', '', '9047541307', 'OMPLIS, Orvakal village and mandal  (Near Police Station), Kurnool, Andhra Pradesh - 518010,  India.', 1),
(5, 'Maha Lakshmi', 'mahalakshmi@gmail.com', '', '9047541307', 'Self Employed Women\'s Association (SEWA) - ICT SEWA Receiption Centre, Opp to Victoria Garden, Bhadra,Ahmedabad - 380 001  Gujarat.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE `invoice_item` (
  `invoice_order_pk_id` int(11) NOT NULL,
  `invoice_number` varchar(1000) NOT NULL,
  `invoice_date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_type_id` int(11) NOT NULL,
  `invoice_type_wise_category_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaction_mode` int(11) NOT NULL,
  `product_count` varchar(1000) NOT NULL,
  `product_weight` varchar(1000) NOT NULL,
  `product_price` varchar(1000) NOT NULL,
  `product_tax` int(11) NOT NULL,
  `product_tax_price` varchar(1000) NOT NULL,
  `product_grand_total` varchar(1000) NOT NULL,
  `product_round_total` varchar(1000) NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`invoice_order_pk_id`, `invoice_number`, `invoice_date`, `user_id`, `customer_id`, `invoice_type_id`, `invoice_type_wise_category_id`, `order_id`, `transaction_mode`, `product_count`, `product_weight`, `product_price`, `product_tax`, `product_tax_price`, `product_grand_total`, `product_round_total`, `created_time`, `modified_time`, `status`) VALUES
(1, '', 1498108138, 1, 1, 3, 1, 1, 1, '2', 'KG', '3000', 0, '30', '330', '330.00', 0, 0, 1),
(2, '', 1497724199, 0, 2, 2, 2, 2, 2, '80000', '', '5400', 0, '85400', '', '85400', 0, 0, 1),
(3, '', 1495477799, 0, 3, 1, 3, 3, 1, '1', '', '150000', 0, '0', '150000', '150000', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_type`
--

CREATE TABLE `invoice_type` (
  `invoice_type_id` int(10) NOT NULL,
  `invoice_type_name` varchar(500) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_type`
--

INSERT INTO `invoice_type` (`invoice_type_id`, `invoice_type_name`, `status`) VALUES
(1, 'General Invoice', 1),
(2, 'Transaction Invoice', 1),
(3, 'Sales Invoice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_item`
--

CREATE TABLE `product_item` (
  `product_pk_id` int(11) NOT NULL,
  `invoice_type_id` int(11) NOT NULL,
  `product_name` varchar(1000) NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_item`
--

INSERT INTO `product_item` (`product_pk_id`, `invoice_type_id`, `product_name`, `created_time`, `modified_time`, `status`) VALUES
(1, 3, 'Rice', 0, 0, 1),
(2, 2, 'AMC FOR Laravel Project', 0, 0, 1),
(3, 1, 'Employee Salary', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `names` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`names`) VALUES
('1'),
('0'),
('0'),
('432'),
(''),
(''),
(''),
('afdasdf@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_mode`
--

CREATE TABLE `transaction_mode` (
  `transaction_mode_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_mode_name` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_mode`
--

INSERT INTO `transaction_mode` (`transaction_mode_id`, `user_id`, `transaction_mode_name`, `description`, `created_time`, `modified_time`, `status`) VALUES
(1, 0, 'Cash', '', 0, 0, 1),
(2, 0, 'Cheque', '', 0, 0, 1),
(3, 0, 'Demand Draft', '', 0, 0, 1),
(4, 0, 'RTGS', '', 0, 0, 1),
(5, 0, 'NEFT', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `pk_id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `created_time` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`pk_id`, `email`, `password`, `created_time`, `status`) VALUES
(1, 'alagumeena@ekgaon.com', 'alagumeena', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice_item`
--
ALTER TABLE `invoice_item`
  ADD PRIMARY KEY (`invoice_order_pk_id`);

--
-- Indexes for table `invoice_type`
--
ALTER TABLE `invoice_type`
  ADD PRIMARY KEY (`invoice_type_id`);

--
-- Indexes for table `product_item`
--
ALTER TABLE `product_item`
  ADD PRIMARY KEY (`product_pk_id`);

--
-- Indexes for table `transaction_mode`
--
ALTER TABLE `transaction_mode`
  ADD PRIMARY KEY (`transaction_mode_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`pk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invoice_item`
--
ALTER TABLE `invoice_item`
  MODIFY `invoice_order_pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoice_type`
--
ALTER TABLE `invoice_type`
  MODIFY `invoice_type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_item`
--
ALTER TABLE `product_item`
  MODIFY `product_pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaction_mode`
--
ALTER TABLE `transaction_mode`
  MODIFY `transaction_mode_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `pk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
