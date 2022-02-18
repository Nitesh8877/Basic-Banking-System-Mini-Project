-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 09:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `amount`) VALUES
('Sumit Sharma', 'Abhijeet Kumar', 1000),
('Abhijeet Kumar', 'Avinash Bhardwaj', 500),
('Aadesh Kumar', 'Nitesh Pandey', 1000),
('Nitesh Pandey', 'Siddarth Gautam', 200),
('Sumit Sharma', 'Sumit Sharma', 500),
('Avinash Bhardwaj', 'Sumit Sharma', 500),
('Nitesh Pandey', 'Deepak Kumar', 1000),
('Sumit Sharma', 'Sumit Sharma', 0),
('Sumit Sharma', 'Nitesh Pandey', 100),
('mamta Kumari', 'Nitesh Kumar Ram', 100),
('Abk Kumar', 'madhu Kumari', 522),
('Sumit Sharma', 'madhu Kumari', 900);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `current_balance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `current_balance`) VALUES
('Sumit Sharma', 'Sumitsharma648668@gmail.com', 4500),
('Abhijeet Kumar', 'Abhijeetkrcse@gmail.com', 5000),
('Aadesh Kumar', 'Aadesh@gmail.com', 1500),
('Siddarth Gautam', 'Siddarth@gmail.com', 2000),
('Amrit Krishna', 'Amritkrishnacse@gmail.com', 3000),
('Avinash Bhardwaj', 'AvinashBhardwaj@gmail.com', 5500),
('Deepak Kumar', 'Deepakkumar987@gmail.com', 1900),
('Nitesh Pandey', 'Niteshpandey@gmail.com', 100),
('Nitesh Kumar Ram', 'kumarnitesh88441\n@gmail.com', 5100),
('Naina Kumari', 'naina@gmail.com', 2500),
('Abk Kumar', 'abk@gmail.com', 1978),
('Amit Kumar', 'amit@gmail.com', 500),
('Abhishek Raj', 'abhishek@gmail.com', 1500),
('madhu Kumari', 'madhu@gmail.com', 1622),
('mamta Kumari', 'mamta@gmail.com', 2400);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
