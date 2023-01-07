-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2021 at 10:16 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_waste`
--
CREATE DATABASE IF NOT EXISTS `e_waste` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `e_waste`;

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE IF NOT EXISTS `bid` (
  `bid_id` int(20) NOT NULL AUTO_INCREMENT,
  `sale_id` int(20) NOT NULL,
  `reg_id` int(20) NOT NULL,
  `amt` int(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `sale_id`, `reg_id`, `amt`, `status`) VALUES
(1, 1, 29, 220, 'rejected'),
(2, 1, 29, 225, 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `bill_details`
--

CREATE TABLE IF NOT EXISTS `bill_details` (
  `bill_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(20) NOT NULL,
  `price` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `cgst` int(20) NOT NULL,
  `sgst` int(20) NOT NULL,
  `total` double NOT NULL,
  `bill_date` varchar(30) NOT NULL,
  `reg_id` int(20) NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bill_details`
--

INSERT INTO `bill_details` (`bill_id`, `product_id`, `price`, `qty`, `cgst`, `sgst`, `total`, `bill_date`, `reg_id`) VALUES
(5, 1, 225, 10, 135, 135, 2520, '2021-10-05', 29);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `utype` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `pwd`, `utype`) VALUES
('admin1', '123456', 'admin'),
('vidya', '1234', 'customer'),
('asif.bvb@gmail.com', 'qwerty123', 'customer'),
('basu@gmail.com', '9900882211', 'vendor');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(1000) NOT NULL,
  `composition` varchar(1000) NOT NULL,
  `benefits` varchar(1000) NOT NULL,
  `price` int(50) NOT NULL,
  `cgst` double NOT NULL,
  `sgst` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `stock` int(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `composition`, `benefits`, `price`, `cgst`, `sgst`, `image`, `stock`) VALUES
(1, 'qq', 'qqq', 'wwww', 200, 8, 8, 'vadm2.png', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pur_details`
--

CREATE TABLE IF NOT EXISTS `pur_details` (
  `pdid` int(20) NOT NULL AUTO_INCREMENT,
  `poid` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `rqty` int(20) NOT NULL,
  PRIMARY KEY (`pdid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pur_details`
--

INSERT INTO `pur_details` (`pdid`, `poid`, `product_id`, `qty`, `status`, `rqty`) VALUES
(1, 5, 1, 20, 'sent', 0),
(2, 5, 1, 20, 'sent', 0),
(3, 6, 1, 10, 'received', 9),
(4, 6, 1, 20, 'received', 15);

-- --------------------------------------------------------

--
-- Table structure for table `pur_order`
--

CREATE TABLE IF NOT EXISTS `pur_order` (
  `poid` int(20) NOT NULL AUTO_INCREMENT,
  `pdate` varchar(30) NOT NULL,
  `v_id` int(20) NOT NULL,
  PRIMARY KEY (`poid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pur_order`
--

INSERT INTO `pur_order` (`poid`, `pdate`, `v_id`) VALUES
(3, '2020-02-05', 1),
(4, '2020-02-04', 1),
(5, '2020-02-04', 1),
(6, '2020-02-28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `reg_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `name`, `address`, `contact_no`, `email_id`, `pwd`) VALUES
(1, 'deepa', 'haveri', '2147483647', 'vidya@gmail.com', '984508'),
(26, 'eder', 'fgf6565', '1234567890', 'aaa@gmail.com', '12345'),
(7, 'aa', 'gayuf', '1872987786', 'gmv99@gmail.com', '1214323'),
(8, 'vvvMMMM', 'mmm', '1872987786', 'vidya@gmail.com', 'hgffdd'),
(15, 'kk', 'bnn', '55677899', 'gffff@gmail.com', '556677'),
(16, 'we', 'are', '214745', 'vidya@gmail.com', 'www'),
(18, 'aaaattt', 'd', '2147423456', 'sgggg@gmail.com', 'aaaa'),
(21, 'maitri', 'ddddd', '9481729732', 'maitri@gmIL.OM', 'DJKFSJ'),
(25, 'aaaaa', 'sssssss', '5678904321', 'SaDdafasF@gmail.com', 'nnn'),
(27, 'deepa', 'haveri', '6666666222', 'deepadeepu@gmail.com', '1234'),
(29, 'Asif K', 'c/o N.R.Koujaganur, Garag building, behind sanmati hostel', '9743320840', 'asif.bvb@gmail.com', 'qwerty123');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `sale_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  `rate` varchar(100) NOT NULL,
  `last_date` varchar(100) NOT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `product_id`, `qty`, `rate`, `last_date`) VALUES
(1, 1, 10, '200', '2021-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE IF NOT EXISTS `vendor` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(100) NOT NULL,
  `v_address` varchar(200) NOT NULL,
  `v_contact` bigint(30) NOT NULL,
  `owner_name` varchar(30) NOT NULL,
  `v_email` varchar(30) NOT NULL,
  `gst_no` varchar(50) NOT NULL,
  `license_no` varchar(50) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`v_id`, `v_name`, `v_address`, `v_contact`, `owner_name`, `v_email`, `gst_no`, `license_no`) VALUES
(1, 'Asif K', 'c/o N.R.Koujaganur, Garag building, behind sanmati hostel\r\nMahishi road', 9743320840, 'www', 'asif.bvb@gmail.com', '12345', '54321'),
(2, 'Basavaraj Suppliers', 'Hubli ', 9900882211, 'Basavaraj', 'basu@gmail.com', '12345', '665544');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
