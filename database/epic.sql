-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2020 at 11:36 AM
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
(4, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:46:00'),
(5, 'tstsub2', 'booo cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 50 overs\r\n\r\ngym at 8:00 pm																', 'schedule,asdhgbasd,sdsg', '2020-02-15 16:48:22'),
(6, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:50:35'),
(7, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 16:51:48'),
(11, 'tstsub2', 'hohoh cricket', 'bowl 10 overs\r\nbat 15 overs\r\nwicketkeeping 20 overs\r\n\r\ngym at 8:00 pm				', 'schedule', '2020-02-15 17:15:32'),
(14, 'rajpats22', 'Project deadline', 'complete story pages on project by next 2 days,\r\n\r\nsdafs \r\ndfg df\r\ngh fg\r\nhgfh \r\nsdf fg				', 'project,coding', '2020-02-16 11:38:59'),
(15, 'rajpats22', 'sdfdsfg fh fgh fgh', 'dfg df dgdgdfdg\r\ndgd fgd \r\ngd\r\n fg df\r\ng df\r\ng d\r\nfg d\r\nfg d\r\n\r\ndfg df dgdgdfdg\r\ndgd fgd \r\ngd\r\n fg df\r\ng df\r\ng d\r\nfg d\r\nfg d\r\n', 'sdfdg', '2020-02-16 11:50:52'),
(16, 'tstsub2', 'node practice', 'practice node everyday\r\ntill master of it\r\ndsaf\r\nsdfg dfg\r\n fgh f\r\nghf\r\ngh\r\ngh\r\nj\r\nghj\r\ngh\r\nj\r\ngj\r\n', 'node,js,javascript,pracitce', '2020-02-16 12:48:27'),
(17, 'rickdead', 'daily task', 'kill all the zombies on fences\r\ngo on a run for healing medicine\r\n\r\nwalk happily :)', 'walking,run,task', '2020-02-16 14:30:59');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `storyid` int(11) NOT NULL,
  `storyuser` varchar(15) DEFAULT NULL,
  `storytitle` text,
  `storydata` text,
  `storytags` text,
  `dttm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storyid`, `storyuser`, `storytitle`, `storydata`, `storytags`, `dttm`) VALUES
(1, 'rickdead', 'Sed dolore tempor sint minim sed enim ullamco laborum non adipisicing ad ut consequat.', 'Mollit qui amet commodo exercitation velit aliquip minim dolore do mollit velit nulla aute dolor et culpa excepteur non et non deserunt in nisi cupidatat dolore ex laboris irure sed eiusmod voluptate elit commodo minim fugiat ad cupidatat ut duis ex nulla qui eiusmod proident sunt non esse qui enim dolore voluptate nisi cillum exercitation est qui nisi veniam excepteur proident in exercitation irure quis mollit dolore cupidatat eu ullamco ad exercitation nisi qui ex amet officia proident consectetur sit amet excepteur veniam dolore occaecat magna sit in consequat commodo nostrud ut labore exercitation officia dolor amet labore amet aliquip dolore nisi ex aliqua do elit et dolore ad pariatur eu aliqua elit adipisicing commodo exercitation cillum eu ex cupidatat laborum aute quis consectetur amet aliquip esse esse laborum eu veniam deserunt cupidatat officia ut quis dolore ullamco nostrud consectetur laborum velit tempor ullamco dolor velit aliquip ut laboris dolore do id minim dolor consequat pariatur ad tempor culpa pariatur voluptate commodo reprehenderit dolor sunt in culpa culpa sit dolore est aliquip culpa elit ad nisi dolore ex excepteur laborum cillum dolor fugiat proident velit sint voluptate in sed laboris tempor est cillum velit laborum.\r\n\r\nEiusmod et nostrud cupidatat sit non id reprehenderit sint laboris in sit eu eiusmod eiusmod minim dolor sit veniam aliqua proident esse qui exercitation pariatur fugiat consectetur aliqua anim laborum adipisicing aliqua sint amet id reprehenderit irure esse in deserunt esse duis mollit exercitation eiusmod amet nulla elit veniam dolor incididunt irure laboris ex ea anim eu quis pariatur mollit minim veniam reprehenderit do nisi enim exercitation et adipisicing ut reprehenderit nisi deserunt in est laboris ut nisi laboris qui non sunt mollit do consectetur dolore aliqua adipisicing voluptate in nostrud nulla dolore velit consequat quis aute nulla ullamco qui sed amet irure labore quis occaecat laborum nostrud ad anim do est fugiat dolor veniam consequat culpa officia dolore dolore dolor minim occaecat nulla commodo cupidatat dolore adipisicing commodo pariatur amet et fugiat nulla eu do duis id sit excepteur mollit laborum aliqua veniam mollit non dolor id deserunt sunt deserunt ut laboris eiusmod et dolor magna culpa ea exercitation cillum non ea elit aliqua occaecat nostrud sunt nisi officia ad minim ut consequat irure aliquip ex qui veniam ex in velit excepteur qui laboris quis officia consequat aute non nisi dolore labore ea cillum minim sed deserunt est consequat ut commodo eu elit duis quis adipisicing ea ex cillum in enim mollit ut aliquip dolor labore esse fugiat laboris dolore incididunt ut dolor excepteur reprehenderit sint laborum incididunt ut.', 'random,stuff,something', '2020-02-16 16:01:48');

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
(7, 'tstsub2', 'testsub2@gmail.com', 'test subject2', 'TstSub#12'),
(8, 'rajpats22', 'rajpatel123@gmail.com', 'Raj Patel', 'Rajkkqq!23'),
(9, 'rickdead', 'rick@walking.com', 'Rick Grimes', 'Rick#12Dead');

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
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`storyid`),
  ADD KEY `storyuser` (`storyuser`);

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
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`noteuser`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`storyuser`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
