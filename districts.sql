-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2017 at 10:35 AM
-- Server version: 5.7.17
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `microfin_ekgaon_global`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `district_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'district id is automatic generated',
  `user_id` int(250) NOT NULL,
  `district_name` varchar(100) NOT NULL COMMENT 'district name is inserted for address details',
  `district_code` varchar(100) NOT NULL COMMENT 'district code is optional ',
  `state_id` int(100) NOT NULL COMMENT 'state id is refered for district name',
  `added_time` int(250) NOT NULL COMMENT 'when district name is created on the time ',
  `last_updated_time` int(250) NOT NULL COMMENT 'when district name is edited on  the time',
  `status` int(11) NOT NULL COMMENT 'district name status for some purpose',
  PRIMARY KEY (`district_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=695 ;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `user_id`, `district_name`, `district_code`, `state_id`, `added_time`, `last_updated_time`, `status`) VALUES
(519, 1, 'Ariyalur', '', 31, 0, 0, 1),
(520, 1, 'Chennai', '', 31, 0, 0, 1),
(521, 1, 'Coimbatore', '', 31, 0, 0, 1),
(522, 1, 'Cuddalore', '', 31, 0, 0, 1),
(523, 1, 'Dharmapuri', '', 31, 0, 0, 1),
(524, 1, 'Dindigul', '', 31, 0, 0, 1),
(525, 1, 'Erode', '', 31, 0, 0, 1),
(526, 1, 'Kanchipuram', '', 31, 0, 0, 1),
(527, 1, 'Kanniyakumari', '', 31, 0, 0, 1),
(528, 1, 'Karur', '', 31, 0, 0, 1),
(529, 1, 'Krishnagiri', '', 31, 0, 0, 1),
(530, 1, 'Madurai', '', 31, 0, 0, 1),
(531, 1, 'Nagapattinam', '', 31, 0, 0, 1),
(532, 1, 'Namakkal', '', 31, 0, 0, 1),
(533, 1, 'The Nilgiris', '', 31, 0, 0, 1),
(534, 1, 'Perambalur', '', 31, 0, 0, 1),
(535, 1, 'Pudukkottai', '', 31, 0, 0, 1),
(536, 1, 'Ramanathapuram', '', 31, 0, 0, 1),
(537, 1, 'Salem', '', 31, 0, 0, 1),
(538, 1, 'Sivagangai', '', 31, 0, 0, 1),
(539, 1, 'Thanjavur', '', 31, 0, 0, 1),
(540, 1, 'Theni', '', 31, 0, 0, 1),
(541, 1, 'Thoothukudi', '', 31, 0, 0, 1),
(542, 1, 'Tiruchirappalli', '', 31, 0, 0, 1),
(543, 1, 'Thirunelveli', '', 31, 0, 0, 1),
(544, 1, 'Tiruppur', '', 31, 0, 0, 1),
(545, 1, 'Thiruvallur', '', 31, 0, 0, 1),
(546, 1, 'Tiruvannamalai', '', 31, 0, 0, 1),
(547, 1, 'Thiruvarur', '', 31, 0, 0, 1),
(548, 1, 'Vellore', '', 31, 0, 0, 1),
(549, 1, 'Villupuram', '', 31, 0, 0, 1),
(550, 1, 'Virudhunagar', '', 31, 0, 0, 1),
(677, 0, 'sssass', '', 31, 1427109945, 1425615058, 8),
(686, 0, 'samplepdkt', '', 31, 1428294074, 0, 2),
(687, 0, 'verification district', '', 31, 1428304073, 0, 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
