-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 02:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epic`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `noteid` int(11) NOT NULL,
  `noteuser` varchar(15) DEFAULT NULL,
  `notetitle` text,
  `notedata` text,
  `notetags` text,
  `dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteid`, `noteuser`, `notetitle`, `notedata`, `notetags`, `dttm`) VALUES
(3, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-08 21:42:05'),
(4, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:46:00'),
(5, 'tstsub2', 'booo cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 50 overs\r\n\r\ngym at 8:00 pm																', 'schedule,asdhgbasd,sdsg', '2020-02-15 16:48:22'),
(6, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:50:35'),
(7, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:51:48'),
(8, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 17:09:35'),
(11, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 17:15:32'),
(12, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 17:16:14'),
(13, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 17:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `fullname`, `pass`) VALUES
(1, 'admin1', 'admin@gmail.com', 'im admin', 'admin123'),
(2, 'subtst', 'testsubject@gmail.com', 'testsubject 1', '12121'),
(3, 'rajpats123', 'rajpatel@gmail.ops', 'raj patel', 'Pppp12#3'),
(4, 'nathan123', 'nathan@lastofus.com', 'nathan bhai', 'NatGeo12#'),
(5, 'walker', 'alan@walker.com', 'alan walker', 'Iamfaded12#'),
(7, 'tstsub2', 'testsub2@gmail.com', 'test subject2', 'TstSub#12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `noteuser` (`noteuser`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`noteuser`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
