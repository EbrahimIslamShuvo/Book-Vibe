-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2025 at 01:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `image` text DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`image`, `name`, `category`, `price`, `quantity`) VALUES
('https://i.ibb.co.com/LNDT0c9/book-2-removebg-preview.png', 'Money?', 'Advice', '250', 997),
('https://i.ibb.co.com/RyCLskj/book-1.png', 'The Dating Book ', 'Romantic', '650', 498),
('https://i.ibb.co.com/cxLLwgL/book-3-removebg-preview.png', 'Annotated Texas', 'Thriller', '140', 598);

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `name` varchar(30) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`name`, `phone`, `email`, `password`, `type`) VALUES
('Arpita', '01547854', 'arpita@gmail.com', '125', 'admin'),
('Sawel', '013458794', 'sawel@gmail.com', '145', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `customer_name` varchar(30) DEFAULT NULL,
  `customer_number` varchar(30) DEFAULT NULL,
  `customer_email` varchar(30) DEFAULT NULL,
  `customer_address` varchar(30) DEFAULT NULL,
  `book_name` varchar(30) NOT NULL,
  `book_category` varchar(30) NOT NULL,
  `book_price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`customer_name`, `customer_number`, `customer_email`, `customer_address`, `book_name`, `book_category`, `book_price`) VALUES
('Turfa', '0148946', 'turfa@gmail.com', 'Uttora, Dhaka', 'Annotated Texas', 'Thriller', '140'),
('Sawel', '013458794', 'sawel@gmail.com', 'Tongi,Uttara,Dhaka', 'The Dating Book ', 'Romantic', '650'),
('Midu', '01548912654', 'midu@gmail.com', 'Joudevpur,Gazipur', 'Money?', 'Advice', '250'),
('Sawel', '013458794', 'sawel@gmail.com', 'Tongi,Uttara,Dhaka', 'Annotated Texas', 'Thriller', '140'),
('Sawel', '0156326', 'sawel@gmail.com', 'Tongi,Uttara,Dhaka', 'Money?', 'Advice', '250');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
