-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 10:14 PM
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
-- Table structure for table `banstatus`
--

CREATE TABLE `banstatus` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `warns` int(1) DEFAULT NULL,
  `isbanned` int(1) DEFAULT NULL,
  `banreason` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banstatus`
--

INSERT INTO `banstatus` (`id`, `username`, `warns`, `isbanned`, `banreason`) VALUES
(1, 'devjohn', 0, 0, NULL),
(2, 'unitygames', 0, 0, NULL),
(3, 'stevenWrites', 0, 0, NULL),
(4, 'jafjax33', 0, 0, NULL),
(5, 'davidtalks', 0, 0, NULL),
(6, 'rajpatel', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `newstitle` text,
  `newsdata` text,
  `newstags` text,
  `thumbnail` text,
  `dttm` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newstitle`, `newsdata`, `newstags`, `thumbnail`, `dttm`) VALUES
(1, 'Rockstar gaming to annouce GTA-6', 'Lorem ipsum nisi nostrud aliqua minim irure dolore dolore cupidatat non veniam labore duis duis do elit velit quis sit in consequat nulla ex nisi adipisicing ut elit consequat in magna aute officia magna id ut pariatur labore et nostrud veniam ut id labore labore fugiat cillum duis reprehenderit eiusmod laborum aliqua qui culpa labore non sint nisi sit non ullamco sit ex magna ullamco ea ut sit commodo culpa cillum duis aute eu cupidatat sit aliqua laborum pariatur do adipisicing commodo sit laborum do ullamco sint et sed consectetur laborum dolore aute sint reprehenderit in in eu commodo dolor adipisicing in ex culpa dolor et occaecat non duis dolore cillum laborum ullamco laboris incididunt in sunt irure laboris nostrud non ut laboris veniam labore commodo laboris in irure ut cillum officia occaecat anim voluptate ullamco in in minim commodo officia proident ea dolore dolor quis laborum qui commodo adipisicing deserunt nostrud proident consectetur elit nostrud deserunt qui est esse quis labore fugiat est ullamco laboris ut commodo in dolore proident aute qui est elit nulla officia occaecat elit nostrud quis ea tempor officia esse qui sint esse sit ea deserunt magna adipisicing occaecat laboris consectetur cillum magna tempor qui anim irure in adipisicing dolore do pariatur in deserunt in excepteur labore quis fugiat esse fugiat incididunt mollit id in qui proident aute velit magna ut nostrud ut laborum dolore ad enim anim qui sit exercitation incididunt duis dolore adipisicing dolore velit deserunt ullamco pariatur sunt ut dolor proident adipisicing ex velit commodo et in.\r\n\r\nSed ad veniam laborum et veniam velit quis occaecat commodo tempor minim ut voluptate ex pariatur id aliquip est sint incididunt eiusmod est dolore exercitation est cupidatat reprehenderit commodo voluptate ut cillum sit adipisicing consectetur irure eiusmod consequat laborum cupidatat exercitation sint tempor sint sit aliquip et incididunt in in cillum adipisicing quis proident do ut in non voluptate aute ut do est qui officia sed magna culpa ut commodo dolore amet officia ullamco tempor nulla ut consequat excepteur dolor in enim duis elit deserunt quis sint sed ex laborum proident eiusmod mollit ullamco ad quis sunt commodo in sint elit in in id consequat officia et mollit laborum eu id adipisicing deserunt elit anim magna officia aute est reprehenderit labore in ex cillum velit velit tempor fugiat commodo tempor aliqua voluptate tempor reprehenderit excepteur irure laborum in qui excepteur laboris non sint ad velit minim ea proident pariatur in eiusmod ex dolor culpa ad ea ad ut veniam proident adipisicing laborum dolore laboris culpa deserunt consequat pariatur qui irure sed deserunt et consectetur non non eiusmod sunt elit exercitation aute in anim sit labore laborum dolore laborum culpa duis amet dolor aliqua tempor aliqua ut nisi laboris voluptate minim minim pariatur ullamco excepteur veniam laborum et duis exercitation aute irure ex enim do.\r\n\r\nEa aliquip quis ex amet non ullamco sint laborum veniam velit reprehenderit do occaecat elit mollit reprehenderit nostrud dolor velit ex cupidatat officia duis ullamco est labore cillum aliqua incididunt reprehenderit nostrud exercitation ad exercitation ex tempor dolore eu est in aliqua esse aute proident non dolore cillum consectetur exercitation in officia velit velit ut enim anim non labore nostrud quis id nostrud ad ad commodo in est do aliqua consequat deserunt quis eiusmod adipisicing ut nisi exercitation reprehenderit in sint sed ad nulla aute id exercitation nostrud irure ut cupidatat pariatur dolor exercitation consectetur ut irure deserunt sint dolor aliqua cupidatat do minim ut ut consectetur aute dolor exercitation consequat occaecat laborum nostrud excepteur reprehenderit anim aliquip reprehenderit culpa culpa culpa sed laborum veniam duis laboris excepteur amet velit proident minim qui consequat exercitation velit velit aliquip laboris tempor sed dolore do ut velit ex fugiat eu duis fugiat incididunt non irure ut tempor laborum sed cupidatat sit pariatur ullamco esse fugiat nisi veniam aute.\r\n\r\nEiusmod anim qui veniam velit anim est pariatur sit est consequat anim fugiat non dolor velit ex est ullamco ut sed sed magna minim exercitation minim ea dolor dolor consectetur duis et ut elit aliquip.', 'gaming,gta,rockstar', 'desk8.jpg', '2020-03-13'),
(2, 'australian bush fire affecting a lot koalas', 'Magna exercitation duis exercitation nostrud in eu veniam cupidatat minim laborum qui reprehenderit adipisicing ut ad consectetur esse quis laborum qui qui quis ullamco velit officia in aliquip sit in labore labore laboris pariatur eiusmod proident id id dolor anim tempor voluptate dolor quis enim nostrud enim culpa nisi minim do culpa magna magna qui officia magna elit reprehenderit qui proident sit officia do duis ut eu consectetur eu ut ad minim cupidatat voluptate dolor proident occaecat nisi occaecat deserunt reprehenderit officia occaecat irure ea magna veniam commodo laborum dolor veniam ullamco ea deserunt tempor qui est dolore magna magna cillum ullamco duis ad amet ut velit est deserunt tempor nisi enim magna in laboris amet cupidatat deserunt incididunt elit sed aliquip dolor incididunt mollit id sed in ut magna commodo pariatur sunt minim et labore in quis ad sunt occaecat anim ad in sed et aliqua ad.\r\n\r\nProident officia sit nisi ea commodo sint elit amet reprehenderit aliquip dolore sint tempor qui velit nostrud ex cupidatat dolor incididunt est excepteur ad et do consequat veniam est nisi eu deserunt aliqua aute tempor aliqua exercitation do esse mollit deserunt ad nostrud ut exercitation amet ex magna sed eiusmod laborum dolor labore adipisicing id sed reprehenderit irure eu enim excepteur non velit aliquip amet et veniam enim sunt ut laboris in eiusmod quis sunt commodo ut cupidatat enim ullamco pariatur in irure ut non sit reprehenderit in exercitation voluptate culpa cillum sed laboris consequat voluptate laboris duis eiusmod non incididunt aute incididunt non est sunt amet cillum laborum laborum in laborum elit eu excepteur cillum sunt do enim elit sed ut laboris ut id eiusmod in proident dolore eiusmod laboris consectetur ad ea non reprehenderit sunt occaecat mollit anim aliqua laborum deserunt ut aliqua nulla labore ea magna tempor velit id laborum deserunt nulla ut dolor tempor incididunt adipisicing consequat ut enim exercitation anim veniam officia labore aliquip adipisicing amet excepteur cupidatat irure cillum sed ut qui sit proident eu in enim dolor veniam do laboris non anim eu in id laboris reprehenderit proident in labore sed quis laborum ea ullamco ut nostrud in elit culpa pariatur exercitation ea laboris nisi labore minim elit anim est proident deserunt occaecat sint in et aliquip laboris sit minim exercitation qui anim commodo aliquip ad aliqua deserunt veniam tempor elit deserunt laborum duis aute duis dolore.\r\n\r\nSint incididunt amet do adipisicing sed incididunt excepteur adipisicing aute aliqua irure consectetur ut proident est cillum nulla voluptate exercitation laboris id qui consectetur do quis dolor ullamco do sunt laborum sint dolore duis ad do aliquip consequat mollit nisi esse velit non ea dolor aute mollit dolor voluptate elit ea aliquip exercitation sit esse commodo ad incididunt qui sed sunt exercitation labore veniam ea eu eiusmod nostrud in enim amet dolor officia nulla esse quis dolor proident nostrud magna et cupidatat laboris in id proident occaecat dolor velit ut sunt ex exercitation sed velit eu tempor id cupidatat nisi tempor elit velit voluptate ullamco cupidatat laborum sit cillum qui sint tempor eiusmod exercitation ad duis minim ad ut sit aute voluptate enim ad culpa velit id qui duis ex commodo in ex qui deserunt in qui anim nulla velit aliquip ut ullamco magna amet in enim labore commodo aute ut quis culpa labore incididunt exercitation eiusmod qui laborum ad in qui mollit enim velit ullamco ullamco non nostrud sunt in consectetur in labore in ut aliqua in officia mollit proident aliqua enim ut incididunt sed elit sit aliquip eu ad non duis ex minim magna elit deserunt minim tempor ut minim consequat sit magna sint magna labore consequat non ex ex sunt tempor aliquip consequat in ut culpa aliqua ut qui ut ut proident do reprehenderit ad elit ex eiusmod culpa excepteur in nisi ad aliqua cupidatat ea deserunt est aliqua nisi velit excepteur ut occaecat veniam ea esse nostrud consectetur ut exercitation.', 'bushfire,australia,koala', 'Koala.jpg', '2020-03-13'),
(3, 'storms on the way: america', 'Cillum ad mollit officia eu adipisicing elit ea commodo consectetur cillum id sit eiusmod magna commodo irure magna adipisicing ut est labore id enim ut nostrud eiusmod minim ullamco mollit consequat veniam ullamco sit non ex minim veniam ad id ullamco cupidatat reprehenderit sunt irure dolor pariatur non non pariatur dolor magna ut nisi eiusmod in duis cillum sunt occaecat exercitation in officia labore aute pariatur sunt consequat deserunt minim eu do voluptate tempor velit est aliquip ex aliquip pariatur enim sed proident et labore est laboris eiusmod velit ut officia duis consectetur adipisicing id veniam do in est occaecat sit magna ullamco eiusmod eiusmod esse ea pariatur ut dolor labore sit deserunt enim dolor incididunt ad anim proident ex culpa exercitation culpa mollit ut duis qui magna proident sed aliqua magna aliquip excepteur consequat aliquip qui aute excepteur deserunt aliquip ut eiusmod ut esse ad excepteur cillum nisi aute ut nostrud irure proident exercitation mollit sit tempor nostrud sed fugiat cillum veniam commodo aliquip laborum occaecat nostrud exercitation ut irure amet cillum fugiat non officia nisi pariatur dolore nisi fugiat ullamco excepteur duis reprehenderit aliquip est esse consectetur culpa anim eiusmod ut laborum.\r\n\r\nEst excepteur reprehenderit id id minim in fugiat in et laboris do in fugiat ullamco pariatur dolor dolor dolor occaecat aliqua amet do veniam in aliquip aliqua cillum officia ullamco irure in ut cillum mollit dolore pariatur elit dolor tempor culpa deserunt tempor qui dolor elit dolor exercitation elit et id magna cupidatat nostrud cupidatat in nostrud minim dolore ea consectetur in duis dolore eu dolor sunt ut velit minim ea cillum ullamco anim tempor excepteur occaecat fugiat pariatur commodo culpa consectetur consequat dolor laboris cupidatat labore velit velit incididunt enim fugiat cupidatat sit consectetur et dolor minim dolore labore id cillum in nulla in ea deserunt nisi eu veniam pariatur culpa in ut adipisicing ut laborum ullamco ut qui anim amet eiusmod in pariatur ad sit fugiat ullamco magna esse ea ullamco anim duis sit quis cupidatat amet aute in duis ex tempor labore do ut reprehenderit duis pariatur nulla proident sint eiusmod tempor cupidatat enim consequat sunt quis.\r\n\r\nVoluptate quis tempor sint elit incididunt cillum labore dolor nisi aute nostrud occaecat aute proident anim deserunt ut cupidatat et esse excepteur ex cupidatat eu eu irure est laboris labore commodo dolore amet sed ullamco tempor ullamco occaecat mollit et veniam commodo sunt dolor exercitation incididunt deserunt fugiat consequat commodo consectetur aliquip cupidatat laboris cillum ut est adipisicing reprehenderit pariatur culpa sit ut sint reprehenderit tempor excepteur anim nisi veniam nostrud ut excepteur aute nostrud irure exercitation dolor mollit dolor officia voluptate magna sed eu dolore eiusmod ex nisi pariatur laborum commodo do eu quis minim labore tempor esse ut nulla dolor mollit mollit fugiat ex veniam nulla occaecat commodo culpa qui ut elit eu aliquip culpa elit commodo sit commodo anim fugiat laboris fugiat nulla reprehenderit in irure nulla ex est est dolore magna ut aliqua officia veniam cupidatat in ut proident aliquip et dolor est in qui dolor reprehenderit id nulla deserunt in voluptate commodo eiusmod excepteur occaecat exercitation in dolor ut nostrud nostrud nisi ullamco est consequat veniam non sunt amet labore fugiat eiusmod et eu in ad irure ut nostrud adipisicing enim eiusmod labore et fugiat ut ad mollit.\r\n\r\nDuis anim consequat nulla sed ex anim pariatur dolor id elit anim non quis exercitation ea elit mollit nulla ut laboris consectetur reprehenderit dolore anim dolor ea qui labore sint ut pariatur officia et anim aliqua incididunt adipisicing laborum eu fugiat enim proident voluptate ea labore irure ex in esse sunt est deserunt cupidatat aute excepteur elit enim ut elit anim in consectetur enim id cillum sint irure quis ut pariatur sed minim elit consequat magna in dolore ex ad amet adipisicing cupidatat nostrud duis dolore sint eu irure mollit pariatur eu irure labore velit ex fugiat duis pariatur dolore tempor ad dolor elit do consectetur ut in ex ullamco velit ut excepteur in enim id mollit nostrud occaecat ut labore in sed ex labore incididunt veniam ullamco exercitation eiusmod ut fugiat do incididunt laboris ea enim duis tempor laboris dolore incididunt reprehenderit voluptate consequat ut sunt esse in eiusmod in qui ad minim excepteur fugiat do fugiat incididunt amet nulla cillum ad minim ex ex aute voluptate eu dolor laboris velit qui quis ut aliquip exercitation elit consectetur.\r\n\r\nCillum non duis occaecat enim consectetur proident fugiat consequat.', 'storm,cyclone,thunder', 'Lighthouse.jpg', '2020-03-13');

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
  `dttm` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`noteid`, `noteuser`, `notetitle`, `notedata`, `notetags`, `dttm`) VALUES
(1, 'devjohn', 'Project completion', '1) Qui occaecat deserunt amet nulla.\r\n\r\n2) mollit id sit commodo sed.\r\n\r\n3) et id proident amet exercitation adipisicing proident dolor elit non veniam.\r\n\r\n4) ut in eu ut culpa officia.', 'projectwork,deadline,stress', '2020-03-19'),
(2, 'devjohn', 'Gym Planning', '1) Daily Gym Plan\r\n=&gt; Magna ex culpa aute exercitation enim exercitation amet ut do eu sint ullamco nostrud fugiat ut cillum id in labore exercitation elit cupidatat exercitation cillum amet nostrud veniam dolor est.\r\n\r\n2) Diet plan\r\n=&gt; Nulla commodo non do cillum esse aute anim pariatur eiusmod in velit aute sed irure id reprehenderit eu ut commodo nisi reprehenderit ex in irure in elit veniam nulla pariatur velit aliqua proident.\r\n\r\nDuis mollit minim aute nostrud deserunt id sint consectetur in pariatur incididunt mollit aliquip.', 'gym,workout,planning', '2020-03-19'),
(3, 'unitygames', 'game launch event', 'prepare for new game launch event\r\n\r\nstuff to do : \r\n1) Ad et in fugiat ad aute dolor ullamco id dolor mollit veniam et ut sint mollit eu et incididunt et.\r\n\r\n2) Ea exercitation duis.', 'preparations,launchevent', '2020-03-19'),
(4, 'davidtalks', 'schedule meeting at office', 'Pariatur esse adipisicing est proident consectetur est ut ut culpa ut tempor cupidatat dolore sunt proident nulla laborum officia mollit nisi non ut nisi nostrud est sit id minim enim officia elit duis dolore sint sint eu ut ex non ut nisi sint mollit cupidatat in enim ullamco incididunt cupidatat in culpa ea consectetur commodo proident et in laboris voluptate laborum ex exercitation dolor fugiat sit enim in nulla consectetur eu adipisicing minim cillum proident minim amet non veniam ex dolore amet do mollit ut quis nulla in ad nostrud quis non laboris cupidatat veniam reprehenderit voluptate quis culpa et qui ea aliquip ullamco reprehenderit laboris eu velit enim nisi exercitation ea esse tempor ex non dolore ex ullamco magna anim cillum minim velit in et minim cillum duis ea ut in consequat et ex deserunt incididunt in incididunt elit dolore in voluptate mollit fugiat labore magna do tempor dolor et ea eu laborum amet eu esse veniam exercitation sed in ullamco tempor eiusmod magna deserunt enim velit excepteur consectetur laboris sunt adipisicing ullamco ut tempor veniam officia pariatur dolor reprehenderit sed pariatur eu est sunt amet incididunt consectetur exercitation excepteur do reprehenderit enim eiusmod occaecat velit culpa dolor nulla minim labore in dolore duis incididunt cillum aute aliqua labore magna culpa aliquip irure veniam ex aliqua duis consequat.', 'meeting,work', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `reportid` int(11) NOT NULL,
  `reportedby` varchar(15) DEFAULT NULL,
  `reportedstoryid` int(11) DEFAULT NULL,
  `reportreason` text,
  `isresolved` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`reportid`, `reportedby`, `reportedstoryid`, `reportreason`, `isresolved`) VALUES
(1, 'stevenWrites', 2, 'Scam', 0),
(2, 'jafjax33', 5, 'Fakeinfo', 0),
(3, 'davidtalks', 3, 'Terrorism', 0);

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
  `ispublic` int(11) NOT NULL DEFAULT '1',
  `dttm` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`storyid`, `storyuser`, `storytitle`, `storydata`, `storytags`, `thumbnail`, `ispublic`, `dttm`) VALUES
(1, 'devjohn', 'Lorem ipsum voluptate incididunt labore non ea.', 'Id minim velit excepteur duis voluptate tempor quis irure sed consequat et esse laboris minim culpa amet veniam et velit aute exercitation velit cillum pariatur labore aute mollit sit in anim in elit mollit exercitation tempor exercitation excepteur laborum amet sunt excepteur sed dolore cillum ea officia incididunt sed minim ex consectetur amet laborum in consequat eu exercitation consectetur in exercitation veniam tempor dolore duis nisi sint dolore dolor sint nulla in excepteur ex consectetur ea adipisicing consectetur irure cupidatat cillum et nostrud nisi ut cillum laborum nisi excepteur nisi nisi cupidatat nisi qui dolor in cillum eiusmod consequat dolor qui aliquip cillum sit cupidatat qui mollit sint laboris aute aliqua adipisicing est consequat labore do do in do duis duis et tempor dolore ut ut consectetur magna in labore voluptate voluptate et ex sint sint ex dolor veniam sint dolor cupidatat sunt in aliqua voluptate aliquip pariatur et aute et mollit nisi mollit commodo magna cupidatat id eiusmod sit in in enim laborum sit deserunt est quis eu velit enim ea nisi aliquip consequat in laboris duis dolor elit officia aliquip dolor dolore consequat adipisicing nostrud officia aute minim tempor laboris.\r\n\r\nCillum nisi laboris ut nostrud cupidatat sunt ut enim eiusmod cupidatat ad qui sint exercitation et esse officia sint tempor culpa duis elit.\r\n\r\nAliqua mollit tempor elit ex et eu voluptate sit qui duis quis voluptate ad est proident minim sit excepteur in laboris adipisicing exercitation ut dolor culpa nostrud aliquip ex aliquip fugiat in occaecat consectetur elit ea in enim ea voluptate duis ut esse in ad dolore incididunt elit quis aute consectetur sint aliquip non aute dolor et officia deserunt excepteur cillum in aute anim est esse sed labore ut exercitation adipisicing adipisicing sunt ea do ad aliqua quis sunt velit sunt ad mollit reprehenderit adipisicing enim dolore ea eiusmod id qui ad veniam esse culpa in exercitation nostrud in culpa excepteur nisi est nisi eu commodo in culpa anim ut eu magna cupidatat aute dolore cupidatat tempor amet enim sit cillum reprehenderit do nisi in amet occaecat aute cillum officia voluptate dolore mollit nulla voluptate dolore adipisicing consectetur esse irure aliqua nulla sed nostrud in excepteur cupidatat esse do in proident sint esse et dolore magna aliqua cillum elit consectetur dolore est irure esse incididunt fugiat fugiat deserunt laboris sint laborum anim sunt nostrud consequat dolore voluptate mollit fugiat reprehenderit qui.\r\n\r\nReprehenderit esse do deserunt excepteur aute dolor tempor deserunt excepteur deserunt ad in magna reprehenderit ut non incididunt dolor laboris duis occaecat voluptate pariatur dolore sint consectetur do minim esse sunt ut deserunt fugiat est sunt sit sed mollit minim mollit fugiat est ex irure ut do adipisicing sint labore sit nisi id minim sit id officia enim dolor ex est excepteur nulla qui reprehenderit culpa in id non sit pariatur in in non ut pariatur ut officia reprehenderit consequat pariatur officia velit non culpa officia dolor ullamco consequat sit tempor aliqua quis ut magna ut dolore irure sit in dolor velit ut occaecat duis eiusmod culpa ut occaecat laborum dolore elit aliqua nisi mollit officia consectetur deserunt cillum ut aute mollit do tempor deserunt excepteur id sunt ad in cillum minim pariatur amet labore enim cillum aliqua sint nulla laboris eu anim culpa incididunt ea dolor anim ea dolore anim ut in dolore est labore ut tempor qui cillum ut anim et sint consequat ex occaecat tempor pariatur sint consequat excepteur quis non exercitation ex ut in ad deserunt dolor quis consequat elit sint pariatur qui in fugiat sint labore veniam adipisicing irure duis officia enim minim deserunt occaecat ut ut enim.', 'react,js,webdev', 'secure-rest-api-in-nodejs-18f43b3033c239da5d2525cfd9fdc98f.png', 1, '2020-03-19'),
(2, 'devjohn', 'My journey: Learning to earning', 'Nostrud nisi commodo ut ut magna aliqua enim reprehenderit minim dolor enim reprehenderit voluptate amet elit id in ut elit mollit pariatur elit deserunt do veniam officia sint nostrud occaecat in eu est id incididunt nisi ut reprehenderit et nulla qui occaecat anim est veniam dolore ad anim deserunt est ut adipisicing quis aute fugiat cillum occaecat consequat do anim dolore reprehenderit ad labore eu dolor excepteur in proident deserunt ea nisi aliquip enim et in eu id irure aliqua dolore adipisicing ut deserunt mollit non deserunt culpa nisi ex cillum ut officia in culpa nisi ut do officia adipisicing enim proident dolore id occaecat ut tempor aliqua do pariatur dolore laboris velit veniam fugiat magna mollit officia nostrud sunt commodo quis fugiat fugiat eiusmod est est velit do id dolor qui id pariatur dolore commodo occaecat cillum duis ullamco veniam nisi duis proident minim dolore ea laboris incididunt officia sint cillum do aliquip excepteur in cupidatat adipisicing laboris nostrud ut fugiat consectetur ut exercitation fugiat non in mollit veniam non consequat excepteur adipisicing laborum fugiat commodo cupidatat qui nulla irure laborum quis elit aliqua adipisicing sit ad sed adipisicing aute laborum anim irure laboris quis in ad culpa ad cillum aute dolor voluptate sunt velit velit ut adipisicing ex eu dolore esse cupidatat proident ad ut culpa labore cillum nisi quis in ad cupidatat laboris irure deserunt adipisicing non aliqua tempor anim in non est irure fugiat deserunt ut consequat esse incididunt est aliquip ut veniam velit pariatur eu incididunt incididunt enim minim nulla.\r\n\r\nNostrud consequat dolore mollit fugiat sit cillum quis irure enim ea deserunt est consectetur cupidatat adipisicing ut eiusmod laborum in consequat qui voluptate consectetur ut enim amet nostrud do laborum laboris enim id proident consequat veniam minim ex consequat in minim amet in commodo veniam ut reprehenderit tempor id sit veniam commodo et anim incididunt tempor et commodo exercitation qui laboris ea ea aute sed nostrud pariatur aute laboris occaecat do enim voluptate eu duis labore consectetur quis fugiat ut dolor eu voluptate cupidatat deserunt officia reprehenderit duis est in fugiat mollit sunt ut in elit ullamco consequat consectetur magna duis in in occaecat culpa occaecat voluptate excepteur aute ad exercitation magna aliqua laboris minim do laborum culpa occaecat laboris incididunt in in et eiusmod ad sint officia laborum veniam sunt ut esse tempor laborum et id nulla labore tempor in esse do mollit voluptate ex do esse laboris sint dolore officia dolore pariatur in labore cupidatat pariatur adipisicing est nisi commodo cupidatat fugiat esse veniam sit in nostrud veniam dolor ut ut ad voluptate fugiat minim ullamco id labore esse sit deserunt consequat aliqua reprehenderit ut magna nostrud qui qui duis ut consectetur ut ut adipisicing amet fugiat mollit laboris ea quis incididunt in ex nostrud excepteur pariatur aute commodo elit consequat minim cupidatat consectetur in est dolor officia adipisicing incididunt sed incididunt veniam enim dolore ut ex mollit amet irure ea aute magna laboris duis tempor.\r\n\r\nAdipisicing et in sit officia id consectetur adipisicing ea consequat nostrud nulla cillum.\r\n\r\nEnim elit occaecat sint officia ut adipisicing ea incididunt deserunt ut id est laborum magna cillum fugiat ex deserunt laborum dolore deserunt dolore ex incididunt dolore sit deserunt ea velit in veniam ex ut non deserunt sint ut non sunt culpa dolor in dolore ex sint in eu ut aliqua duis proident magna anim adipisicing exercitation dolor incididunt amet proident amet duis aute non aute veniam anim mollit in dolore amet nostrud minim exercitation ullamco in excepteur labore commodo amet ut mollit commodo voluptate ullamco qui minim est deserunt sint magna magna consectetur ullamco cupidatat nulla in commodo elit in tempor irure cupidatat in laborum id dolore nulla sint esse laboris occaecat enim elit do mollit sint occaecat deserunt eiusmod excepteur dolore in voluptate consequat ullamco dolore quis exercitation reprehenderit officia excepteur irure excepteur magna magna sint dolore irure irure sunt amet deserunt mollit qui in esse aliqua amet anim in magna excepteur officia sed aliquip ad officia aliquip eu commodo exercitation minim in sit dolore in laborum eiusmod occaecat anim consequat ullamco enim non consectetur cillum do laborum enim in esse sunt amet et commodo consectetur commodo dolor pariatur eiusmod pariatur.', 'devtalks,journey', 'florian-olivo-JNz9bQD3Oio-unsplash.jpg', 1, '2020-03-19'),
(3, 'unitygames', 'War Machine: story of a master', 'So here we are, happy to announce a new game \"War Machine\".\r\n\r\nAliquip nisi id esse aliqua sunt laboris culpa deserunt sed pariatur commodo dolore labore aliquip ullamco nostrud ut tempor in deserunt excepteur ex proident ut sed non minim aute officia occaecat cillum nisi labore est irure ut aliqua cillum ad dolore nulla velit excepteur duis eiusmod ullamco ut ut eiusmod cupidatat cillum eiusmod ut mollit elit fugiat commodo labore dolore sed duis excepteur excepteur pariatur nulla dolor sit sint incididunt fugiat labore enim pariatur eu id nulla enim excepteur minim nostrud elit occaecat in est amet sint quis id cillum ut cillum qui adipisicing sunt consequat dolor aliquip ut dolore eu dolore incididunt et dolor laboris ut dolore excepteur irure cupidatat non nulla magna in mollit non aliqua adipisicing adipisicing amet reprehenderit exercitation exercitation ad nisi incididunt mollit ut eu ea anim esse commodo labore eu culpa nostrud in ut laborum aute minim esse nisi incididunt sunt adipisicing veniam excepteur laboris ad ullamco reprehenderit reprehenderit elit do ad proident proident dolore mollit sint dolor incididunt magna occaecat incididunt dolor minim eiusmod enim proident sed cillum fugiat laborum voluptate dolor fugiat commodo id do eiusmod pariatur officia deserunt nulla in pariatur in voluptate esse sed consequat enim laborum elit consectetur laboris veniam magna consequat in occaecat duis consectetur ullamco.\r\n\r\nConsequat adipisicing in proident do velit eu esse do dolor ut \r\nNulla quis dolore deserunt velit proident ut sit in eiusmod eu cillum dolor dolore labore in amet et pariatur est sint anim dolore officia labore laborum duis dolor exercitation sunt elit reprehenderit anim dolor nisi et esse irure est deserunt amet exercitation proident dolore et sed non amet qui incididunt sit laboris nulla cillum ut velit eiusmod eiusmod cillum do dolor sed ad adipisicing ut qui non dolore aliqua aliquip elit occaecat reprehenderit labore adipisicing quis nostrud cillum in sed occaecat ad sit ut amet aliquip occaecat consectetur sunt dolore tempor aliquip elit anim fugiat ut irure ullamco duis anim occaecat duis id dolore nostrud ut est sint sed consequat dolor esse ullamco tempor proident nisi tempor reprehenderit velit ut eu excepteur in sint non consequat excepteur commodo exercitation enim voluptate commodo reprehenderit excepteur ullamco laboris mollit ut voluptate voluptate ut excepteur non laborum laborum nulla aute enim sit dolore non eiusmod incididunt excepteur occaecat et enim incididunt veniam nostrud\r\n\r\n voluptate in dolor occaecat dolore aliquip dolore commodo in adipisicing aliquip ut sed in adipisicing ut ea incididunt in adipisicing fugiat deserunt ullamco dolore ad et minim in cillum in est esse non minim sunt cillum officia consequat tempor quis ea elit in duis dolore\r\n\r\n pariatur aute reprehenderit tempor ad ad et sunt nostrud ad sunt cupidatat aliquip fugiat eu et aliquip nostrud sunt nostrud amet dolor enim ea enim qui ut ullamco sed in nostrud consequat ea sint quis minim excepteur sint elit fugiat duis mollit laboris duis do ea velit sunt laborum mollit ut.laborum deserunt occaecat et do magna nisi culpa ut in.', 'gamelaunch,newgame,warmachine', 'desk5.jpg', 1, '2020-03-19'),
(4, 'unitygames', 'Update on \"War head: glory of victory\" will be rolling on pretty soon for android.', 'Laboris incididunt aliqua sit ex cupidatat exercitation non excepteur proident quis sed id mollit consequat in aliquip ut culpa anim amet reprehenderit do anim ad sit nisi labore fugiat adipisicing consectetur do pariatur duis amet sed dolor do aliqua in proident officia laborum aliqua adipisicing aliqua reprehenderit proident aliquip mollit minim ut elit tempor id dolor eu id et nisi qui irure ut in sint officia non exercitation labore duis laborum quis in aliquip occaecat ut in incididunt tempor in ex voluptate magna excepteur proident officia cupidatat ad consectetur consectetur pariatur occaecat amet dolor laborum aute irure excepteur laborum id laborum do dolore sunt eiusmod excepteur non ut magna minim laborum dolore velit in do amet est in reprehenderit culpa laborum et ad ut reprehenderit ex mollit commodo sed dolor nostrud non ut aliquip irure ut occaecat sunt in.\r\n\r\nEu anim cupidatat ullamco nostrud et dolor culpa dolor qui qui cillum officia occaecat est dolor ut sit in quis officia voluptate labore in in enim aute eu esse laborum ullamco sunt incididunt et tempor duis eiusmod ad cupidatat.\r\n\r\nIn do tempor cillum laboris voluptate dolore veniam voluptate amet mollit esse ut exercitation in pariatur ut anim veniam adipisicing qui exercitation laboris labore cupidatat reprehenderit ex in cillum aute ut non in quis qui consectetur anim duis exercitation sunt pariatur ut id consectetur laboris consequat aliquip duis anim elit deserunt sunt eu officia elit dolore duis velit nisi exercitation aute eu eiusmod eiusmod dolore qui sunt cillum enim irure in voluptate mollit voluptate ad est dolor ex proident ut irure ut labore eiusmod sed ut adipisicing nisi aliqua amet anim id consectetur reprehenderit nisi ullamco dolor irure consectetur pariatur eu consequat ut cupidatat quis laborum proident magna reprehenderit velit ea pariatur aliquip sunt amet in mollit mollit aliqua officia sit in ut reprehenderit pariatur est nostrud est ut elit reprehenderit enim ut anim culpa qui ut id dolor laboris officia incididunt sint culpa non deserunt incididunt commodo aliqua non elit sint deserunt aliquip voluptate dolor exercitation veniam laborum exercitation sunt quis in mollit esse nulla laborum ut commodo dolor laborum.', 'warhead,update', 'desk7.jpg', 1, '2020-03-19'),
(5, 'stevenWrites', 'Anime review: Ghost world', 'Ut veniam commodo veniam fugiat cillum in aute officia pariatur sed reprehenderit aliquip eu sit mollit sunt dolor cillum et commodo qui nulla dolor nisi cupidatat quis minim sunt sunt et ut do esse est veniam nostrud magna laborum deserunt mollit commodo non veniam minim et sunt ut nulla sunt fugiat sed laborum deserunt sint consectetur reprehenderit mollit mollit irure in sed minim ad commodo aliquip magna consectetur do elit in ex aute nostrud veniam ut officia in mollit ea do enim quis duis labore culpa esse quis laboris qui eiusmod incididunt sit enim excepteur labore laboris id cillum dolore eu laboris ad anim cillum non exercitation aute ex adipisicing deserunt mollit aliquip ea proident quis cillum nisi culpa eu eu dolore do cupidatat excepteur dolor anim nulla id aliquip amet proident velit veniam in in ullamco mollit enim sunt ut fugiat ut dolor sint enim eu elit ut eu incididunt dolor veniam nisi qui proident mollit culpa et culpa cupidatat voluptate do do ut occaecat id eiusmod sint excepteur sed aliquip tempor sed nulla laborum anim est voluptate minim anim cupidatat commodo anim cupidatat excepteur magna velit pariatur consectetur sit officia aute sunt deserunt adipisicing elit elit id reprehenderit ex reprehenderit amet enim do sit ex qui adipisicing ut dolor labore.\r\n\r\nLorem ipsum excepteur adipisicing dolor laborum ea incididunt ad nisi cillum consequat dolore mollit magna fugiat voluptate amet irure consequat proident est est sint tempor in culpa ut.\r\n\r\nIn laboris dolore ad nostrud ut ea proident incididunt exercitation ut ea elit sed dolore laboris commodo dolore pariatur cillum labore proident esse do cillum in aliquip occaecat dolor dolor sit veniam ad cillum occaecat sint aliquip dolore et aliqua et aute ut quis exercitation adipisicing laboris aute cillum enim aliquip aliqua in aute consequat aliquip dolore dolore sunt minim laboris commodo cillum velit dolore fugiat laboris veniam anim proident mollit sit aliqua culpa non sit aute eiusmod irure aliqua in aute in enim laborum pariatur culpa est minim irure cupidatat duis exercitation sint nisi consectetur in nulla nostrud anim fugiat nisi eiusmod ex eu consequat tempor do excepteur dolor laborum do pariatur sit do sunt duis laborum proident voluptate cupidatat consectetur dolor non sunt exercitation fugiat ex tempor eu excepteur et enim adipisicing tempor dolore sit non ut sint aute in consectetur culpa anim magna ut veniam nostrud do aute in ut cupidatat ea aliquip laborum in quis amet sed anim do incididunt incididunt occaecat dolor sint ut reprehenderit deserunt velit voluptate anim ad irure incididunt deserunt est irure eu aliquip voluptate officia id ex pariatur quis cupidatat cillum sint ut cillum sint dolore exercitation sunt ullamco consectetur adipisicing deserunt quis cupidatat sit consectetur nostrud elit in incididunt dolor mollit enim cillum in in pariatur aute ad id commodo quis labore occaecat ad exercitation sit pariatur laboris cillum aute veniam laborum laborum ut dolore labore velit nostrud dolor labore.', 'review,anime,ghostworld', 'desk2.jpg', 1, '2020-03-19'),
(6, 'jafjax33', 'Reviewing new processor from intel', 'Duis id ea fugiat eu eiusmod proident adipisicing nostrud in consequat in consequat cupidatat fugiat ad non laboris in non velit laborum velit sint velit ad voluptate occaecat exercitation sint enim anim ut deserunt dolor laboris ut exercitation dolore do in labore est ut occaecat commodo nostrud cupidatat voluptate eu ex ex ex ad exercitation minim non consequat officia esse est ad ut elit magna laboris ut ea dolor dolore incididunt nulla officia id officia eiusmod sunt nostrud labore dolor ea laborum exercitation in occaecat esse magna sed irure sint pariatur in incididunt ut adipisicing nisi deserunt consequat veniam laborum enim mollit velit laboris dolore culpa sit sed eu occaecat aliquip in dolore reprehenderit dolore enim non quis proident in laboris cupidatat dolore ut dolor qui proident dolore non do veniam nisi commodo dolore nisi enim velit cillum eiusmod elit fugiat tempor aliqua fugiat id dolore ea duis dolore nostrud fugiat quis dolor esse sit deserunt velit exercitation quis est.\r\n\r\nDuis labore cupidatat esse dolor veniam proident commodo tempor laborum reprehenderit fugiat adipisicing ullamco laborum veniam aliqua aliqua magna do magna sit ad reprehenderit occaecat ex pariatur amet enim reprehenderit incididunt amet minim qui duis sint anim cillum minim ex in laboris amet consequat pariatur in qui dolor tempor qui proident consequat qui reprehenderit voluptate aliqua eu mollit do sit excepteur fugiat magna eu mollit ex eiusmod commodo dolor id tempor voluptate deserunt consequat officia ullamco eiusmod ut do pariatur quis non ut pariatur ad aliqua excepteur irure culpa consequat consectetur mollit elit sit fugiat dolor occaecat nulla nostrud esse ut est anim magna in dolor eu qui dolor sunt sunt in nostrud sed mollit fugiat ad labore dolor proident ut fugiat cillum quis anim nostrud nisi sint reprehenderit magna dolore excepteur id ad eiusmod anim velit veniam officia aliquip id minim id incididunt aliquip sed ut fugiat culpa veniam voluptate ex ut anim veniam dolor et consectetur occaecat ut laboris incididunt ullamco cupidatat deserunt mollit duis sed eiusmod ut in incididunt laboris id proident aliqua officia duis in consectetur dolore non id duis cillum occaecat.\r\n\r\nLorem ipsum culpa sed elit nostrud laborum fugiat commodo est quis quis veniam amet proident sed ad elit irure esse reprehenderit do culpa mollit adipisicing aliquip pariatur culpa in ad eu cupidatat id tempor adipisicing minim dolor ex dolor culpa elit dolor est magna est proident tempor in laboris pariatur tempor irure consequat et qui qui eiusmod est cillum et ullamco nostrud ad dolore dolore anim ullamco exercitation irure nisi cillum cillum nostrud id incididunt veniam commodo dolore incididunt ullamco aute esse ut eu non et nisi sunt irure nisi et voluptate aliquip in officia enim do anim ad consectetur reprehenderit elit nostrud amet magna quis sed est fugiat dolor enim non adipisicing magna fugiat dolor magna reprehenderit adipisicing dolore cillum nulla ex nostrud consequat sint commodo aute aliqua ut aliqua dolore mollit nulla aliquip cillum in consequat elit sit nisi ut veniam culpa qui minim in culpa enim laborum minim dolore duis non dolor proident in consectetur do excepteur eu amet exercitation et magna magna fugiat ex reprehenderit laborum ut dolore dolore in minim aliqua nostrud in velit exercitation anim laboris magna laborum ut dolore qui dolore deserunt ut cupidatat officia ut dolore magna consectetur cupidatat reprehenderit officia duis dolore nulla dolore dolor quis nostrud.\r\n\r\nPariatur esse adipisicing est proident consectetur est ut ut culpa ut tempor cupidatat dolore sunt proident nulla laborum officia mollit nisi non ut nisi nostrud est sit id minim enim officia elit duis dolore sint sint eu ut ex non ut nisi sint mollit cupidatat in enim ullamco incididunt cupidatat in culpa ea consectetur commodo proident et in laboris voluptate laborum ex exercitation dolor fugiat sit enim in nulla consectetur eu adipisicing minim cillum proident minim amet non veniam ex dolore amet do mollit ut quis nulla in ad nostrud quis non laboris cupidatat veniam reprehenderit voluptate quis culpa et qui ea aliquip ullamco reprehenderit laboris eu velit enim nisi exercitation ea esse tempor ex non dolore ex ullamco magna anim cillum minim velit in et minim cillum duis ea ut in consequat et ex deserunt incididunt in incididunt elit dolore in voluptate mollit fugiat labore magna do tempor dolor et ea eu laborum amet eu esse veniam exercitation sed in ullamco tempor eiusmod magna deserunt enim velit excepteur consectetur laboris sunt adipisicing ullamco ut tempor veniam officia pariatur dolor reprehenderit sed pariatur eu est sunt amet incididunt consectetur exercitation excepteur do reprehenderit enim eiusmod occaecat velit culpa dolor nulla minim labore in dolore duis incididunt cillum aute aliqua labore magna culpa aliquip irure veniam ex aliqua duis consequat.', 'techreview,jaxshow,intel,processor', 'desk6.jpg', 1, '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `storylikes`
--

CREATE TABLE `storylikes` (
  `storyid` int(11) DEFAULT NULL,
  `likeby` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storylikes`
--

INSERT INTO `storylikes` (`storyid`, `likeby`) VALUES
(4, 'stevenWrites'),
(3, 'stevenWrites'),
(3, 'jafjax33'),
(4, 'jafjax33'),
(6, 'davidtalks'),
(2, 'davidtalks'),
(6, 'rajpatel');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `joinedat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `email`, `fullname`, `pass`, `joinedat`) VALUES
(1, 'devjohn', 'johnathandoe@gmail.com', 'John Doe', 'JohnDoe#12', '2020-03-19'),
(2, 'unitygames', 'unitydevs@gmail.com', 'Unity Developers', 'UnityC#12', '2020-03-19'),
(3, 'stevenWrites', 'smith331@gmail.com', 'Steven Smith', 'Steven#12', '2020-03-19'),
(4, 'jafjax33', 'jafjax@gmail.com', 'Jax Jafferson', 'Jaxson#12', '2020-03-19'),
(5, 'davidtalks', 'davidfuq3311@gmail.com', 'David Fuqua', 'DavidTalks#12', '2020-03-19'),
(6, 'rajpatel', 'rajpatel@gmail.com', 'Raj Chhatrala', 'Patel#12', '2020-03-13');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `addBanStatus` AFTER INSERT ON `users` FOR EACH ROW INSERT INTO banstatus (username, warns, isbanned) VALUES(NEW.username, 0, 0)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banstatus`
--
ALTER TABLE `banstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`noteid`),
  ADD KEY `noteuser` (`noteuser`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`reportid`),
  ADD KEY `reportedstoryid` (`reportedstoryid`);

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
-- AUTO_INCREMENT for table `banstatus`
--
ALTER TABLE `banstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `storyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banstatus`
--
ALTER TABLE `banstatus`
  ADD CONSTRAINT `banstatus_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`noteuser`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`reportedstoryid`) REFERENCES `stories` (`storyid`) ON DELETE CASCADE ON UPDATE CASCADE;

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
