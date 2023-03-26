-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 02:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_egms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipments`
--

CREATE TABLE `tbl_equipments` (
  `equipment_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `e_serial` varchar(255) NOT NULL,
  `e_qty` int(255) NOT NULL,
  `e_unit` text NOT NULL,
  `e_description` text NOT NULL,
  `e_unit_price` int(255) NOT NULL,
  `date_acquired` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipments`
--

INSERT INTO `tbl_equipments` (`equipment_id`, `category_id`, `e_serial`, `e_qty`, `e_unit`, `e_description`, `e_unit_price`, `date_acquired`) VALUES
(10, 0, 'OCVS-EQUIP-1110340', 1, 'Set', 'Computer Set, 4GB Ram, Intel i9 Processor', 52000, '2022-10-21'),
(11, 0, 'OCVS-EQUIP-1110115', 1, 'Set', 'Computer Set, 4GB Ram, Intel i9 Processor', 52000, '2022-10-21'),
(12, 0, 'OCVS-EQUIP-1110133', 1, 'Set', 'Computer Set, 4GB Ram, Intel i9 Processor', 52000, '2022-10-21'),
(13, 0, 'OCVS-EQUIP-1110779', 1, 'Set', 'Computer Set, 4GB Ram, Intel i9 Processor', 52000, '2022-10-21'),
(14, 0, 'OCVS-EQUIP-1110072', 1, 'Set', 'Computer Set, 4GB Ram, Intel i9 Processor', 52000, '2022-10-21'),
(15, 0, 'OCVS-EQUIP-1110757', 1, 'Set', 'Sala set', 52000, '2022-10-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_equipments`
--
ALTER TABLE `tbl_equipments`
  ADD PRIMARY KEY (`equipment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_equipments`
--
ALTER TABLE `tbl_equipments`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
