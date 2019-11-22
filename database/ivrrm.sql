-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2019 at 07:13 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivrrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `image` varchar(100) NOT NULL,
  `productid` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `userid` int(10) NOT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`image`, `productid`, `name`, `description`, `userid`) VALUES
('product1.jpg', 1, 'frist product', 'first product desc', 1),
('product2.jpg', 2, 'second product', 'second product desc', 1),
('product2.jpg', 5, 'third product', 'second product desc', 9),
('product1.jpg', 6, 'fourth product', 'second product desc', 8),
('product1.jpg', 7, 'sixth product', 'first product desc', 8),
('product2.jpg', 8, 'fifth product', 'second product desc', 8),
('product2.jpg', 9, 'seventh product', 'second product desc', 7),
('product1.jpg', 10, 'eighth product', 'second product desc', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `shopname` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `shopaddress` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `paytm` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `shopname`, `image`, `shopaddress`, `pincode`, `paytm`, `pass`, `reg_date`) VALUES
(1, 'Aviral Sharma', 'sharma_aviral@ymail.com', 'shop1', 'shop/image1.jpg', 'sf-4, B-89, charms apartment', '201005', '541875168', 'aviral', '2019-11-22 07:13:07');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
