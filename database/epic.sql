-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 05:58 PM
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
  `thumbnail` text NOT NULL,
  `dttm` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storyid`, `storyuser`, `storytitle`, `storydata`, `storytags`, `thumbnail`, `dttm`) VALUES
(2, 'devsteve', 'Why The Hell Would I Use Node.js?', 'JavaScriptâ€™s rising popularity has brought with it a lot of changes, and the face of web development today is dramatically different. The things that we can do on the web nowadays with JavaScript running on the server, as well as in the browser, were hard to imagine just several years ago, or were encapsulated within sandboxed environments like Flash or Java Applets.\r\n\r\nBefore digging into Node.js solutions, you might want to read up on the benefits of using JavaScript across the stack which unifies the language and data format (JSON), allowing you to optimally reuse developer resources. As this is more a benefit of JavaScript than Node.js specifically, we wonâ€™t discuss it much here. But itâ€™s a key advantage to incorporating Node in your stack.\r\n\r\nAs Wikipedia states: â€œNode.js is a packaged compilation of Googleâ€™s V8 JavaScript engine, the libuv platform abstraction layer, and a core library, which is itself primarily written in JavaScript.â€ Beyond that, itâ€™s worth noting that Ryan Dahl, the creator of Node.js, was aiming to create real-time websites with push capability, â€œinspired by applications like Gmailâ€. In Node.js, he gave developers a tool for working in the non-blocking, event-driven I/O paradigm.\r\n\r\nAfter over 20 years of stateless-web based on the stateless request-response paradigm, we finally have web applications with real-time, two-way connections.\r\nIn one sentence: Node.js shines in real-time web applications employing push technology over websockets. What is so revolutionary about that? Well, after over 20 years of stateless-web based on the stateless request-response paradigm, we finally have web applications with real-time, two-way connections, where both the client and server can initiate communication, allowing them to exchange data freely. This is in stark contrast to the typical web response paradigm, where the client always initiates communication. Additionally, itâ€™s all based on the open web stack (HTML, CSS and JS) running over the standard port 80.\r\n\r\nOne might argue that weâ€™ve had this for years in the form of Flash and Java Appletsâ€”but in reality, those were just sandboxed environments using the web as a transport protocol to be delivered to the client. Plus, they were run in isolation and often operated over non-standard ports, which may have required extra permissions and such.\r\n\r\nWith all of its advantages, Node.js now plays a critical role in the technology stack of many high-profile companies who depend on its unique benefits. The Node.js Foundation has consolidated all the best thinking around why enterprises should consider Node.js in a short presentation that can be found on the Node.js Foundationâ€™s Case Studies page.\r\n\r\nIn this Node.js guide, Iâ€™ll discuss not only how these advantages are accomplished, but also why you might want to use Node.jsâ€”and why notâ€”using some of the classic web application models as examples.', 'stevewrites,nodejs,node', 'secure-rest-api-in-nodejs-18f43b3033c239da5d2525cfd9fdc98f.png', '2020-03-04'),
(3, 'devsteve', 'What I wish I knew when I started to work with React.js', 'After its initial release on May 29, 2013, React.js has taken over the internet. Itâ€™s not a secret that myself and many other developers owe their success to this amazing framework.\r\n\r\nWith Medium so full of React.js tutorials, I wish one of them told me these tips when I started.\r\n\r\nDonâ€™t need .bind(this) when using arrow function\r\nUsually, you will have something like this when you have a controlled component:\r\n\r\nclass Foo extends React.Component{  constructor( props ){    super( props );    this.handleClick = this.handleClick.bind(this);  }\r\n  handleClick(event){    // your event handling logic  }\r\n  render(){    return (      &lt;button type=\"button\"       onClick={this.handleClick}&gt;      Click Me      &lt;/button&gt;    );  }}\r\nYou write .bind(this) to every method that exists, because most tutorials tell you to do so. If you have several controlled components, you will end up with a fat stack of codes in your constructor(){}.\r\n\r\nInstead, you can:\r\nclass Foo extends React.Component{\r\n  handleClick = (event) =&gt;; {    // your event handling logic  }\r\n  render(){    return (      &lt;button type=\"button\"       onClick={this.handleClick}&gt;        Click Me      &lt;/button&gt;    );  }}\r\nHow?\r\n\r\nES6â€™s arrow function uses Lexical Scoping, which lets the method access the this of where itâ€™s triggered.\r\n\r\nWhen service workers work against you\r\nService workers are great for a progressive web app, which allows for offline access and optimizes for users with poor internet connections.\r\n\r\nBut when youâ€™re not aware that the service worker is caching your static files, you deploy your hot-fixes repeatedly.\r\n\r\nOnly to find your site is not updating. ?\r\n\r\nDonâ€™t panic, make sure in your src/index.js:\r\n\r\n// Make sure it\'s set to unregisterserviceWorker.unregister();\r\nAs of version 16.8, this line should be serverWorker.unregister() by default.\r\n\r\nBut if they decide to change again, youâ€™ll know where to look.\r\n\r\n99% of the time you donâ€™t need to eject\r\nCreate React App offers an option to yarn eject your project to customize your build process.\r\n\r\nI remember trying to customize the build process to have SVG images automatically inlined in our code. I spent hours just trying to understand the build process. We end up having an import file that injects SVG tags, and we increased the siteâ€™s loading speed by 0.0001 milliseconds.\r\n\r\nEjecting your React project is like popping the hood of your running car and changing the engine on the fly to run 1% faster.\r\n\r\nOf course, if youâ€™re already a Webpack master, itâ€™s worthwhile to customize the build process to tailor the projectâ€™s needs.\r\n\r\nWhen youâ€™re trying to deliver on time, focus your effort on where it moves the needle forward.', 'react,cheatsheet,beginner,stevewrites', 'reactphoto.png', '2020-03-04'),
(4, 'KarlBlogs', 'How Do I Know I Will Enjoy My Authenticook Meal?', '1. Cuisines only found in homes: India is known for its CULTURAL DIVERSITY and the best way to experience this diversity is through food. But almost all of our Indian regional cuisines are cooked and available only at homes of people, with restaurants serving commercially prepared standardized food. And it is here that Authenticook plays such an important role of providing easy access to Indiaâ€™s regional cuisines through food experiences hosted by home-chefs at their homes.\r\n\r\n2. Food cooked or passed down by moms and grandmoms: Have you moved away from family for work and missing the food that your mom or grandmom cooked? While we canâ€™t find you a job in your hometown, we surely can bring you â€˜MAA KE HAATH KA KHANAâ€™ to the city where you live now. 98% of Authenticook hosts are women who have been cooking lovingly for the past 20- 30-40 and sometimes even 50+ years. They love being appreciated for their cooking talents and feeding people. Our home-chefs prepare a meal, keeping you in mind!!\r\n\r\n3. Empowering women and local communities: Something we take immense PRIDE in!! Authenticook is a great platform for women homemakers to start their own micro-entrepreneurial ventures. And itâ€™s not only an opportunity for them to generate some income but also helps them showcase their culinary skills and opens up social horizons (something, we young professionals take for granted sitting in our 100+ people-strong corporate jobs)\r\n', 'foodie,karlsays,foodbloging', 'blog-1.jpg', '2020-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `storylikes`
--

CREATE TABLE `storylikes` (
  `storyid` int(11) DEFAULT NULL,
  `likeby` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'devsteve', 'steve.dev@gmail.com', 'Steve White', 'SteveDev#12'),
(2, 'KarlBlogs', 'worldkarltravel@gmail.com', 'Karl Traveller', 'Karl11#blog');

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
-- Indexes for table `storylikes`
--
ALTER TABLE `storylikes`
  ADD KEY `storyid` (`storyid`),
  ADD KEY `likeby` (`likeby`);

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
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `storylikes`
--
ALTER TABLE `storylikes`
  ADD CONSTRAINT `storylikes_ibfk_1` FOREIGN KEY (`storyid`) REFERENCES `stories` (`storyid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `storylikes_ibfk_2` FOREIGN KEY (`likeby`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
