-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
-- --------------------------------------------------------
-- Create database
-- 
--  Table structure for table `userstbl`
-- 

CREATE TABLE `userstbl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
ALTER TABLE `userstbl`
ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `userstbl`
--
ALTER TABLE `userstbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;
COMMIT;
--
-- test case 

INSERT INTO `userstbl` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `company_name`, `address`, `city`, `state`, `country`, `zipcode`, `creation_date`) VALUES ('', 'Akshat', 'Sood', 'akshat@gmail.com', 'test case', '84521954', 'A.K group', 'Phase 8b', 'mohali', 'Punjab', 'Indea', '160054', '2023-10-21 10:44:47'());
--
-- Indexes for dumped tables

-- Indexes for table `userstbl`