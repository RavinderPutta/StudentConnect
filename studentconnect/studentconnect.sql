-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2013 at 11:50 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `corporates`
--

CREATE TABLE IF NOT EXISTS `corporates` (
  `cfullname` varchar(255) NOT NULL,
  `ccompanyname` varchar(255) NOT NULL,
  `cdesignation` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cusername` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `cverify` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporates`
--

INSERT INTO `corporates` (`cfullname`, `ccompanyname`, `cdesignation`, `cemail`, `cusername`, `cpassword`, `cverify`) VALUES
('Purnima', 'MVSR  Engineering College', 'HR', 'purnima.janaki@gmail.com', 'purnima.janaki@gmail.com', 'puri', '0'),
('sandeep', 'MVSR  Engineering College', 'HR', 'sandeepragila@gmail.com', 'sandeep', 'sandeep', '0'),
('po', 'p', 'p', 'jo', 'jo', 'op', '0'),
('Lohith Kumar Menchu', 'MVSR', 'HR', 'lkmenchu@gmail.com', 'Clkmenchu', '135621', '0');

-- --------------------------------------------------------

--
-- Table structure for table `forum_answer`
--

CREATE TABLE IF NOT EXISTS `forum_answer` (
  `question_id` int(4) NOT NULL,
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL,
  `answer` varchar(65) NOT NULL,
  `datetime` varchar(65) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `forum_answer`
--

INSERT INTO `forum_answer` (`question_id`, `id`, `username`, `answer`, `datetime`) VALUES
(1, 2, 'ravi060791', 'i do not know', ''),
(1, 3, 'ravi060791', 'i learned few things since my reply', ''),
(1, 4, 'ravi060791', 'i learned few things since my reply', ''),
(1, 5, 'ravi060791', 'helloo', ''),
(1, 6, 'ravi060791', 'wqqrrery', ''),
(1, 7, 'ravi060791', '2qwertyui', ''),
(1, 8, 'ravi060791', 'ghhkk', ''),
(1, 9, 'ravi060791', 'sdfgh', ''),
(1, 10, 'ravi060791', 'dfghjk', ''),
(1, 11, 'ravi060791', 'asdfghj', ''),
(1, 12, 'ravi060791', 'qwertyu', ''),
(1, 13, 'ravi060791', 'jaffi', ''),
(1, 14, 'ravi060791', 'asdfghjkllkjhgfdsa;lkjhgfdslgfdsa', ''),
(1, 15, 'ravi060791', 'i am doing good', ''),
(1, 16, 'ravi060791', 'hiii', ''),
(7, 17, 'ravi060791', 'egaga', ''),
(7, 18, 'ravi060791', 'fwqfafqa', ''),
(8, 19, 'ravi060791', 'gghgghjjggjj', ''),
(11, 20, 'ravi060791', 'jbkjgbkjbgkbj', ''),
(11, 21, 'ravi060791', 'jbk,bm ,,bm', ''),
(11, 22, 'ravi060791', 'dgsdgs', ''),
(11, 23, 'ravi060791', 'asdfghjkasf', ''),
(12, 24, 'ravi060791', 'hhhhhh', ''),
(12, 25, 'ravi060791', 'sdfghjk', ''),
(12, 26, 'ravi060791', 'sdfghjk', ''),
(11, 27, 'ravi060791', 'asdfghj', ''),
(11, 28, 'ravi060791', 'ukhilh', ''),
(13, 29, 'ravi060791', 'fxbxfbx', ''),
(13, 30, 'ravi060791', 'nbcnc', ''),
(13, 31, 'ravi060791', 'ndxnxdn', ''),
(13, 32, 'ravi060791', 'ddzzbz', ''),
(13, 33, 'ravi060791', 'dvdaazva', ''),
(13, 34, 'ravi060791', 'emh dgdfh\r\n', ''),
(15, 35, 'ravi060791', 'sfdfd', ''),
(15, 36, 'ravi060791', 'Xcxv', ''),
(12, 37, 'ravi060791', 'fdgfhjg', ''),
(16, 38, 'ravi060791', 'Reply 1', ''),
(16, 39, 'ravi060791', 'Reply 1', ''),
(17, 40, 'ravi060791', 'Reply One', '23/03/13 04:15:29'),
(17, 41, 'ravi060791', 'Reply Two', '23/03/13 04:18:09'),
(17, 42, '', 'Reply 3', '24/03/13 01:25:14'),
(18, 43, 'ravi060791', 'one\r\n', '24/03/13 03:08:16'),
(18, 44, 'ravi060791', 'two', '24/03/13 03:08:25'),
(19, 45, 'ravi060791', 'tq sd idk brb', '26/03/13 07:48:44'),
(19, 46, 'ravi060791', 'tt2rvrrvvvvvvvvvvr bbbbbb  vrvrv\r\n6jun4tb', '26/03/13 07:49:08'),
(19, 47, 'ravi060791', 'edfghjk', '26/03/13 07:53:05'),
(20, 48, 'ravi060791', 'Reply one', '26/03/13 07:26:46'),
(11, 49, '', 'dgadga', '05/04/13 05:03:37'),
(17, 50, '', 'Reply 4', '05/04/13 07:16:21'),
(17, 51, 'sandeep', 'Reply 5', '05/04/13 07:17:35'),
(12, 52, 'sandeep', 'm kllkmkm jkjmoik mokimo', '06/04/13 09:22:08'),
(17, 53, 'sandeep', 'Reply 6', '06/04/13 09:23:46'),
(17, 54, 'ravi060791', 'reply 7', '06/04/13 11:44:44'),
(17, 55, 'ravi060791', 'reply 7', '06/04/13 11:44:45'),
(17, 56, 'ravi060791', 'Reply 8djga\r\ng\r\nbsl,n\r\n]sr;dgb\r\nrsd,b\r\nse;hb\r\ns;rd\r\nnbs;hb\r\nsw', '06/04/13 12:26:22'),
(17, 57, 'ravi060791', 'avavava', '30/04/13 08:33:10'),
(21, 58, 'ravi060791', 'Reply One', '30/04/13 08:00:10');

-- --------------------------------------------------------

--
-- Table structure for table `forum_question`
--

CREATE TABLE IF NOT EXISTS `forum_question` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `topic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `username` varchar(65) NOT NULL,
  `datetime` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `forum_question`
--

INSERT INTO `forum_question` (`id`, `topic`, `detail`, `username`, `datetime`) VALUES
(11, 'ajax', 'ajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajaxajax', 'ravi060791', '13/03/13 09:45:55'),
(12, 'bigdata', 'bigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdatabigdata', 'ravi060791', '15/03/13 08:16:28'),
(13, 'lol', 'header( "Location:/studentconnect/suserspecforum.php");\r\n}header( "Location:/studentconnect/suserspecforum.php");\r\n}header( "Location:/studentconnect/suserspecforum.php");\r\n}header( "Location:/studentconnect/suserspecforum.php");\r\n}header( "Location:/studentconnect/suserspecforum.php");\r\n}', 'ravi060791', '15/03/13 08:24:19'),
(14, 'gh', 'ghghghghghghghghghghghghghghghghghghghghghghghghghghgh', 'ravi060791', '15/03/13 08:32:46'),
(15, 'ttt', 'tttttttttttttttttttttttttttttttttttttttttttttttt', 'ravi060791', '15/03/13 10:48:33'),
(16, 'Report', 'ABSTRACT: In this presentation we present Google, a prototype of a large-scale search engine which makes heavy use of the structure present in hypertext. Google is designed to crawl and index the Web efficiently and produce much more satisfying search results than any other existing systems. The prototype with a full text and hyperlink database of at least 24 million pages is available at http://google.stanford.edu/.\n                  As the volume of information available to the public increases exponentially, It is crucial that data storage, management, classification, ranking, and reporting techniques improve as well . To engineer a search engine is a challenging task. Search engines index tens to hundreds of millions of web pages involving a comparable number of distinct terms. They answer tens of millions of queries every day. Despite the importance of large-scale search engines on the web, very little academic research has been done on them. Furthermore, due to rapid advance in technology and web proliferation, creating a web search engine today is very different from three years ago.   \n                    Apart from the problems of scaling traditional search techniques to data of this magnitude, there are new technical challenges involved with using the additional information present in hypertext to produce better search results. This also takes a look on how to build a practical large-scale system which can exploit the additional information present in hypertext. Also we look at the problem of how to effectively deal with uncontrolled hypertext collections where anyone can publish anything they want.\n', 'ravi060791', '23/03/13 01:56:26'),
(17, 'University Campus Social Network System for Knowledge Sharing', 'Introduction: \r\n    Online social network services are considered one of the most popular network services in recent years, with billions of users spending huge amount of time every day on social network sites including Facebook, Twitter, Weibo, RenRen, Linkedin etc. People use online social network services to share information and knowledge with their friends in real life,\r\nconnect with new friends on network, follow celebrities and other network friends to get more and fresher news, and publish their own information to the public or their followers.\r\n\r\nDescription: \r\n     Campus users of universities including students, teachers and staff members are the most active users of internetservices, especially emerging services including social networking services. In our project we are developing Vertical social network systems.This system usually accept users with some common features or within an organization. Aside from the functions that public social network systems provide, vertical social network systems will add some specific features for its special purposes.\r\n\r\nExisting System:\r\nPublic social network services have disadvantages. It is not connected with the real environment and activities of universities’ campus, it cannot support the learning, teaching, researching and cultural activities closely and timely; on the other hand, public social network systems cannot provide strict information protection to the users and organizations that users are belonged to because of their consideration of commercial interest.\r\n\r\nProposed System:\r\nIn Proposed System we are developing campus social network services in the cyberspace of universities. The main aim of the project is to facilitate knowledge sharing, support the daily communication and activities including learning, teaching and researching of campus users in the cyberspace of universities\r\n', 'ravi060791', '23/03/13 04:14:17'),
(18, 'Topic Test', 'aegag', 'ravi060791', '24/03/13 03:08:04'),
(19, 'tttt', 'tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt111111111111111111', 'ravi060791', '26/03/13 07:48:26'),
(20, 'Computer Networks', 'Topology\r\nTCP\r\nIP\r\nIPV4\r\nIPV6\r\nCongestion\r\nCryptography\r\nLAN\r\nWAN\r\nMAN', 'ravi060791', '26/03/13 07:26:34'),
(21, 'DBMS', 'A database is an organized collection of data. The data is typically organized to model relevant aspects of reality (for example, the availability of rooms in hotels), in a way that supports processes requiring this information (for example, finding a hotel with vacancies).\r\nA general-purpose database management system (DBMS) is a software system designed to allow the definition, creation, querying, update, and administration of databases. Well-known DBMSs include MySQL, PostgreSQL, SQLite, Microsoft SQL Server, Microsoft Access, Oracle, Sybase, dBASE, FoxPro, and IBM DB2. A database is not generally portable across different DBMS, but different DBMSs can inter-operate by using standards such as SQL and ODBC or JDBC to allow a single application to work with more than one database.', 'ravi060791', '05/04/13 06:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `oppurtunities`
--

CREATE TABLE IF NOT EXISTS `oppurtunities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `cusername` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `oppurtunities`
--

INSERT INTO `oppurtunities` (`id`, `title`, `description`, `cusername`, `datetime`) VALUES
(1, 'assistant engineer', 'assistant engineer capgemini\r\nsalary:1000000000000rs', 'purnima.janaki@gmail.com', '2015-03-13 08:34:19'),
(2, 'sandeep', 'sandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeep', 'sandeep', '2015-03-13 09:35:33'),
(3, 'sandeep', 'sandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeepsandeep', 'sandeep', '2015-03-13 10:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sid` smallint(10) NOT NULL AUTO_INCREMENT,
  `sfullname` varchar(255) NOT NULL,
  `scollegename` varchar(255) NOT NULL,
  `srollno` bigint(20) NOT NULL,
  `semailid` varchar(20) NOT NULL,
  `susername` varchar(20) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `sverify` bit(1) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `sfullname`, `scollegename`, `srollno`, `semailid`, `susername`, `spassword`, `sverify`) VALUES
(4, 'Ravinder Putta', 'MVSR', 245109733038, 'ravi060791ster@gmail', 'ravi060791', '135621', '0'),
(5, '', '', 0, '', '', '', '0'),
(6, 'o paramesh', 'mvsr ', 245109733014, 'paramesh014@gmail.co', 'paramesh014@gmail.co', 'paramesh', '0'),
(7, 'Lohith Kumar Menchu', 'MVSR', 11, 'lovemenchu@gmail.com', 'lkmenchu', '135621', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
