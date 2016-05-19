-- phpMyAdmin SQL Dump
-- version 4.6.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2016 at 12:13 PM
-- Server version: 5.7.11
-- PHP Version: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `villa_raffle_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `raffle_entries`
--

CREATE TABLE `raffle_entries` (
  `raffle_entries_id` int(11) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(35) NOT NULL,
  `address1` varchar(60) NOT NULL,
  `address2` varchar(60) DEFAULT NULL,
  `address3` varchar(60) DEFAULT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `postalcode` varchar(10) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `villalocation` varchar(40) NOT NULL,
  `shoesize` varchar(4) NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raffle_entries`
--

INSERT INTO `raffle_entries` (`raffle_entries_id`, `firstname`, `lastname`, `address1`, `address2`, `address3`, `city`, `state`, `postalcode`, `telephone`, `email`, `villalocation`, `shoesize`, `tstamp`) VALUES
(1, 'Tom', 'Tester', '123 Test Rd.', '', '', 'Brooklyn', 'NY', '11207', '(718) 123-1234', 'ttester@test.com', 'Philadelphia', '9', '2016-05-18 23:28:18'),
(2, 'Ted', 'Testerono', '123 Test Blvd.', '', '', 'Queens', 'NY', '11208', '(718) 153-1634', 'ttestorono@testorono.com', 'New York', '12', '2016-05-19 01:45:52'),
(4, 'Steve', 'Swift', '123 Test St.', '', '', 'Philadelphia', 'PA', '19021', '(215) 153-1634', 'steve@swift.com', 'Philadelphia', '12', '2016-05-19 01:58:26'),
(5, 'Bob', 'Barker', '234 W 58th St', 'Apt 2b', '', 'NYC', 'NY', '12023-4356', '(212) 789-5674', 'bob@bob.com', 'Milwaukee', '12.5', '2016-05-19 02:01:07'),
(6, 'Dave', 'Parker', '2343 Main St', '', '', 'New York', 'NY', '12023-4356', '(212) 123-5674', 'dave@parker.com', 'Milwaukee', '12.5', '2016-05-19 02:14:32'),
(7, 'Tony', 'Smith', '567 W 58th St', 'Apt 2b', '', 'NYC', 'NY', '12023-4356', '(212) 234-5757', 'tony@smith.com', 'Milwaukee', '10.5', '2016-05-19 02:22:15'),
(8, 'Jeff', 'Daniels', '789 Arch St', 'Apt 2b', '', 'Philadelphia', 'PA', '19023-4356', '(215) 342-5674', 'jeff@daniels.com', 'Milwaukee', '11.5', '2016-05-19 02:23:51'),
(9, 'Mike', 'Smith', '234 W 58th St', 'Apt 2b', '', 'NYC', 'NY', '12023-4356', '(212) 789-5674', 'mike@smith.com', 'Milwaukee', '12.5', '2016-05-19 02:24:57'),
(10, 'Bobby', 'Blaze', '234 W 58th St', 'Apt 2b', '', 'NYC', 'NY', '12023-4356', '(212) 789-5674', 'bob@bob.com', 'Milwaukee', '10.5', '2016-05-19 02:25:15'),
(11, 'Paul', 'Barker', '234 W 58th St', 'Apt 2b', '', 'NYC', 'NY', '12023-4356', '(212) 739-5674', 'bobby@blaze.com', 'Milwaukee', '9.5', '2016-05-19 02:26:09'),
(12, 'Tony', 'Stark', '300 W 58th St', 'FL 41', '', 'NYC', 'NY', '12028-0001', '(212) 300-3000', 'tony@stark.com', 'Reading', '13', '2016-05-19 02:27:21'),
(13, 'Rich', 'Lee', '200 W 25th St', 'PH', '', 'NYC', 'NY', '10123', '(212) 300-4500', 'rich@testco.com', 'Wilmington', '11', '2016-05-19 02:32:33'),
(14, 'Paula', 'Scott', '200 W 25th St', 'PH', '', 'NYC', 'NY', '10123', '(212) 374-4500', 'paulas@testco.com', 'Wilmington', '7', '2016-05-19 02:32:33'),
(15, 'Bruce', 'Wayne', '200 S 3rd St', 'PH', '', 'Brooklyn', 'NY', '10123', '(718) 374-5000', 'bruce@wayne.com', 'Wilmington', '10', '2016-05-19 02:49:50'),
(16, 'Tim', 'Newton', '321 Slick Road', 'Apt 34', '', 'Philadelphia', 'PA', '19111', '(256) 345-4678', 'newtest@newtest.com', 'Philadelphia', '11', '2016-05-19 16:08:01'),
(17, 'Theo', 'Gray', '321 Slick Road', 'Apt 34', '', 'Philadelphia', 'PA', '19111', '(256) 345-4678', 'theo@newtest.com', 'Philadelphia', '13', '2016-05-19 16:09:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raffle_entries`
--
ALTER TABLE `raffle_entries`
  ADD PRIMARY KEY (`raffle_entries_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raffle_entries`
--
ALTER TABLE `raffle_entries`
  MODIFY `raffle_entries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
