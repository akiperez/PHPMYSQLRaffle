CREATE DATABASE IF NOT EXISTS villa_raffle_database; 
USE villa_raffle_database;

CREATE TABLE IF NOT EXISTS `raffle_entries` (
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

ALTER TABLE `raffle_entries`
  ADD PRIMARY KEY (`raffle_entries_id`);

ALTER TABLE `raffle_entries`
  MODIFY `raffle_entries_id` int(11) NOT NULL AUTO_INCREMENT;
