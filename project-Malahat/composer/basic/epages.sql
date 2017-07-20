-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2017 at 08:18 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epages`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `head` text NOT NULL,
  `prod` text NOT NULL,
  `web` text,
  `phone` int(11) NOT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `head`, `prod`, `web`, `phone`, `email`) VALUES
(1, 'Askari Bank', 'Rawalpindi', 'Customer Banking', 'www.akbl.com.pk', 519272467, 'ir@askaribank.com.pk'),
(2, 'Habib Bank', 'Karachi', 'Customer banking', 'www.hbl.com', 111111425, 'customer.complaints@hbl.com'),
(3, 'Allied Bank', 'Lahore', 'Financial Services', 'www.abl.com', 51263654, 'info@ab.com.pk'),
(4, 'MCB Bank', 'Karachi', 'Customer banking', 'www.mcb.com.pk', 1110000622, NULL),
(5, 'Faysal Bank', 'Karachi', 'Corporate Banking', 'www.faysalbank.com', 111060606, 'customercomplaint@faysalbank.com'),
(6, 'National Bank of Pakistan', 'Karachi', 'Corporate and Investment Banking', 'www.nbp.com.pk', 111627627, NULL),
(7, 'Summit bank', 'Karachi', 'Consumer Banking', 'www.summitbank.com.pk', 80024365, 'info@summitbank.com.pk');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `head` text,
  `prod` text NOT NULL,
  `web` varchar(50) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `head`, `prod`, `web`, `phone`, `email`) VALUES
(1, 'Unilever', 'Karachi', 'Home and Personal Care', 'www.unilever.pk', 800888666, NULL),
(2, 'Procter and Gamble', 'Karachi', 'Home and Personal Care', 'www.pg.com/en_PK/', 80072634, NULL),
(3, 'Coca Cola Company', 'Lahore', 'Beverages', 'www.coca-colajourney.com', 923577218, NULL),
(4, 'Nestle Pakistan', 'Lahore', 'Food and Beverages', 'www.nestle.pk', 42111637, 'NAATA@pk.nestle.com'),
(5, 'Pakistan Tobacco Company', 'Islamabad', 'Cigarettes', 'www.ptc.com.pk', 2083200, NULL),
(6, 'ChenOne', 'Faisalabad', 'Fashion', 'www.chenone.com.pk', 25478563, 'query@cone.com');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `name`, `email`, `password`) VALUES
(1, 'makz', 'makz@gmail.com', '123'),
(21, 'hasan', 'hasan@gmail.com', 'h'),
(22, 'malahat', 'malahat.niaz@gmail.com', 'mal'),
(23, 'fawad', 'f@gmail.com', 'mnp'),
(24, 'makz', 'makz@google.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `softwarehouses`
--

CREATE TABLE `softwarehouses` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `head` text NOT NULL,
  `prod` text NOT NULL,
  `web` text,
  `phone` int(11) NOT NULL,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `softwarehouses`
--

INSERT INTO `softwarehouses` (`id`, `name`, `head`, `prod`, `web`, `phone`, `email`) VALUES
(1, 'Folio3', 'Karachi', 'Software and Mobile services', 'www.folio3.com', 408365468, 'contact@folio3.com'),
(2, '10Pearls', 'Karachi', 'Software', 'www.10pearls.com', 34328447, 'info@10pearls.com'),
(3, 'Avanza Solutions', 'Karachi', 'Software Services', 'www.avanzasolutions.com', 35675240, 'info@avanzasolutions.com'),
(4, 'NetSol Technologies', 'California', 'IT solutions and softwares', 'www.netsoltech.com', 147852644, 'info@netsoltech.com'),
(5, 'Systems Limited', 'Karachi', 'IT solutions and products', 'www.systemsltd.com', 458226547, 'careers@systemsltd.com'),
(6, 'Kalsoft', 'Islamabad', 'IT Solutions', 'www.ekalsoft.com', 774185252, 'infopk@ekalsoft.com ');

-- --------------------------------------------------------

--
-- Table structure for table `user_interest`
--

CREATE TABLE `user_interest` (
  `ref` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `interest` int(11) NOT NULL,
  `tag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_interest`
--

INSERT INTO `user_interest` (`ref`, `users`, `interest`, `tag`) VALUES
(23, 1, 1, 'bank'),
(24, 21, 2, 'software'),
(25, 21, 1, 'software'),
(26, 1, 1, 'company'),
(27, 1, 3, 'bank'),
(28, 1, 1, 'bank'),
(30, 1, 1, 'bank'),
(33, 1, 5, 'bank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `softwarehouses`
--
ALTER TABLE `softwarehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_interest`
--
ALTER TABLE `user_interest`
  ADD PRIMARY KEY (`ref`),
  ADD KEY `users` (`users`),
  ADD KEY `FK_inetrest` (`interest`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `softwarehouses`
--
ALTER TABLE `softwarehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_interest`
--
ALTER TABLE `user_interest`
  MODIFY `ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_interest`
--
ALTER TABLE `user_interest`
  ADD CONSTRAINT `FK_inetrest` FOREIGN KEY (`interest`) REFERENCES `banks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_users` FOREIGN KEY (`users`) REFERENCES `registered_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
