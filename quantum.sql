-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 07, 2016 at 08:51 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `quantum-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `Amazon`
--

CREATE TABLE `Amazon` (
  `ASIN` varchar(10) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `MPN` varchar(25) NOT NULL,
  `Price` varchar(10) NOT NULL,
  `date_added` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Amazon`
--

INSERT INTO `Amazon` (`ASIN`, `Title`, `MPN`, `Price`, `date_added`) VALUES
('B000SOS7WG', 'Tovolo Collapsible Microwave Cover', '80-11115RD', '$9.99', '2016-12-01 00:06:31'),
('B009B0MZ8U', 'Canon EOS 6D 20.2 MP CMOS Digital SLR Camera with 3.0-Inch LCD (Body Only) - Wi-Fi Enabled', '8035B002', '$1,699.00', '2016-12-01 00:05:37'),
('B00A35X6NU', 'Sigma 35mm F1.4 ART DG HSM Lens for Canon', '340101', '$899.00', '2016-12-01 00:11:22'),
('B00J7XARVS', 'Herschel Supply Co. Little America, Black/Black, One Size', '10014-00535-OS', '$99.99', '2016-12-01 00:07:27'),
('B00TQZQK5E', 'Herschel Supply Co. Retreat Backpack', '10066-00309-OS', '$79.98', '2016-12-07 13:12:15'),
('B00XBZ6Q0O', 'Peak Design Anchor Links AL-2', 'AL-2', '$19.95', '2016-12-02 11:28:56'),
('B00YBC1MY6', 'Peak Design Slide Peaks Edition Lassen Padded Camera Mount, Red', 'PKDSL-L-2', '$88.56', '2016-12-01 00:07:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Amazon`
--
ALTER TABLE `Amazon`
  ADD PRIMARY KEY (`ASIN`);
