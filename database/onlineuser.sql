-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2020 at 10:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `question_id` int(4) NOT NULL DEFAULT 0,
  `a_id` int(4) NOT NULL DEFAULT 0,
  `a_name` varchar(65) NOT NULL DEFAULT '',
  `a_email` varchar(65) NOT NULL DEFAULT '',
  `a_answer` longtext NOT NULL,
  `a_datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`question_id`, `a_id`, `a_name`, `a_email`, `a_answer`, `a_datetime`) VALUES
(1, 1, 'Zannatul Ferdous Bonna', 'selimrezaswadhim@gmail.com', ' Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', '2015-05-20 06:16:26'),
(1, 2, 'Zannatul Ferdous Bonna', 'selimrezaswadhim@gmail.com', ' Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', '2015-05-20 06:16:51'),
(1, 3, 'Zannatul Ferdous Bonna', 'selimrezaswadhim@gmail.com', ' Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', '2020-05-15 10:19:10'),
(2, 1, 'Zannatul Ferdous Bonna', 'selimrezaswadhim@gmail.com', ' actor and computer books author. He has written verious kind of compute', '2020-05-15 10:45:44'),
(2, 2, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', ' actor and computer books author. He has written verious kind of compute', '2020-05-15 10:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `polling` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `polling`) VALUES
(1, 'Yes'),
(2, 'No'),
(3, 'No'),
(4, 'No'),
(5, 'No'),
(6, 'Yes'),
(7, 'No'),
(8, 'No'),
(9, 'Yes'),
(10, 'No'),
(11, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `maritalstatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `name`, `email`, `password`, `address`, `maritalstatus`) VALUES
(1, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(2, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(3, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(4, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(5, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(6, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Unmarried'),
(7, 'Zannat', 'zannat@gmail.com', '12101989', 'dsef', 'Married'),
(8, 'hamid', 'hamid@gmail.com', '12101989', 'jhosor', 'Married'),
(9, 'hamidul islam', 'hammid@gmail.com', '12101989', 'sadf', 'Married'),
(10, 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '12101989', 'Dhaka', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `totalonline`
--

CREATE TABLE `totalonline` (
  `timestamp` int(15) NOT NULL DEFAULT 0,
  `ip` varchar(40) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalonline`
--

INSERT INTO `totalonline` (`timestamp`, `ip`, `file`) VALUES
(1590165517, '', ''),
(1590165543, '', ''),
(1590165533, '', ''),
(1590165531, '', ''),
(1590165529, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tropics`
--

CREATE TABLE `tropics` (
  `id` int(5) NOT NULL,
  `tropic` varchar(255) NOT NULL,
  `detail` longtext NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `view` int(5) NOT NULL DEFAULT 0,
  `reply` int(5) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tropics`
--

INSERT INTO `tropics` (`id`, `tropic`, `detail`, `name`, `email`, `date_time`, `view`, `reply`) VALUES
(1, 'New Disscus', 'has written letious book about computer. And go on.. Look! Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '2015-05-20 06:11:38', 26, 3),
(2, 'New Disscus2', ' Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', 'Zannatul Ferdous Bonna', 'zannat@gmail.com', '2015-05-20 06:17:29', 26, 2),
(3, 'New Disscus3', 'se email or Contact us describing your requirements. Corporate training is also available either at the Center or at your site. If training requirements do not fit our standard course curricula, we will design programs in concert with your company. Rates vary depending on the subject matter. For those companies that have trainers on staff, the Center will rent classrooms with networked PCs, Internet access, assorted audio-visual teaching aids, and full break room facilities at competitive rates. For a quote, email your request. bappi ashraf', 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '2015-05-20 06:31:03', 0, 0),
(4, 'Test Forum', 'se email or Contact us describing your requirements. Corporate training is also available either at the Center or at your site. If training requirements do not fit our standard course curricula, we will design programs in concert with your company. Rates vary depending on the subject matter. For those companies that have trainers on staff, the Center will rent classrooms with networked PCs, Internet access, assorted audio-visual teaching aids, and full break room facilities at competitive rates. For a quote, email your request. bappi ashraf', 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '2015-05-20 06:32:34', 0, 0),
(5, 'New Disscus3', 'se email or Contact us describing your requirements. Corporate training is also available either at the Center or at your site. If training requirements do not fit our standard course curricula, we will design programs in concert with your company. Rates vary depending on the subject matter. For those companies that have trainers on staff, the Center will rent classrooms with networked PCs, Internet access, assorted audio-visual teaching aids, and full break room facilities at competitive rates. For a quote, email your request. bappi ashraf', 'hamidul islam', 'hamid@gmail.com', '2015-05-20 06:36:32', 48, 0),
(6, 'New Disscus4', 'fvgbvvc fgrtdcc', 'Selim Reza Swadhin', 'selimrezaswadhim@gmail.com', '2020-05-15 10:52:46', 5, 0),
(7, 'Test Forum', 'has written letious book about computer. And go on.. Look! Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', 'hamidul islam', 'hamid@gmail.com', '2020-05-16 03:02:33', 2, 0),
(8, 'Test Forum 3', 'has written letious book about computer. And go on.. Look! Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', 'hamidul islam', 'hammid@gmail.com', '2020-05-16 03:03:06', 2, 0),
(9, 'wow', 'has written letious book about computer. And go on.. Look! Our product written by Bappi Ashraf. He has written letious book about computer. And go on.. Bappi Ashraf is an actor and computer books author. He has written verious kind of computer', 'joty', 'joty@gmail.com', '2020-05-16 03:04:16', 8, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `a_id` (`a_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `totalonline`
--
ALTER TABLE `totalonline`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `ip` (`ip`),
  ADD KEY `file` (`file`);

--
-- Indexes for table `tropics`
--
ALTER TABLE `tropics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tropics`
--
ALTER TABLE `tropics`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
