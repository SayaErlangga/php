-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2023 at 02:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `oceanone`
--

CREATE TABLE `oceanone` (
  `header` varchar(100) NOT NULL,
  `main` varchar(1000) NOT NULL,
  `button` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oceanone`
--

INSERT INTO `oceanone` (`header`, `main`, `button`) VALUES
('ALIGN', '66% of people (73% of Millennials) are willing to pay more for products and services from companies committed to positive social and environmental impact.', 'LEARN MORE'),
('KICKSTART', 'Ocean One are a turnkey solution to begin the journey of reducing your business’s environmental footprint or going plastic neutral.', 'START ACTION'),
('AMPLIFY', 'Is your actions already making strides in its commitment to sustainability? Measure your action success using IMPACT.', 'SEE HOW');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
