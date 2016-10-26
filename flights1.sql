-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2016 at 04:46 
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flights1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(200) NOT NULL,
  `idnumber` varchar(30) NOT NULL,
  `title` varchar(6) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `cellphone` int(40) NOT NULL,
  `payment` varchar(40) NOT NULL,
  `ticket` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `idnumber`, `title`, `firstname`, `surname`, `email`, `cellphone`, `payment`, `ticket`) VALUES
(1, '', 'Mrs', 'jdjdjd', 'dkjdkjd', 'tsgumunyu20@gmail.com', 737377474, 'Paid using Master Card', 0),
(2, '', 'Mr', 'trevor', 'gumunyu', 'yshsns27', 28282, '288', 3737),
(3, '', 'Mrs', '3733', '383', 'tsgumunyu20@gmail.com', 838833, 'Will pay later', 0),
(4, '', 'Mrs', 'jdjdjd', 'dkjdkjd', 'tsgumunyu20@gmail.com', 737377474, 'Paid using Master Card', 0),
(5, '', 'Mrs', 'zbzbz', 'bzbz', 'tsgumunyu20@gmail.com', 0, 'Will pay later', 0),
(6, '', 'Mrs', 'jdjdjd', 'dkjdkjd', 'tsgumunyu20@gmail.com', 737377474, 'Will pay later', 0),
(7, '', 'Mrs', 'nmjj', 'jedjd', 'sis', 0, 'Paid using Master Card', 0),
(8, '', 'Mrs', 'aja', 'aja', 'ajja', 0, '0', 0),
(9, 'hhhhhhhhhh', 'Mrs', 'jdjdjd', 'dkjdkjd', 'tsgumunyu20@gmail.com', 737377474, 'Paid using Master Card', 0),
(10, 'jnjbhj', 'Mrs', 'jnjhbnnknjkn', 'rrr', 'tsgumunyu20@gmail.com', 0, 'Will pay later', 0),
(11, 'TTTTT', 'Mrs', 'jnjhbnnknjkn', 'rrr', 'tsgumunyu20@gmail.com', 0, '', 0),
(12, 'WWWW', 'Mrs', 'jnjhbnnknjkn', 'rrr', 'tsgumunyu20@gmail.com', 0, '', 0),
(13, 'VVVVV', 'Mrs', 'jnjhbnnknjkn', 'rrr', 'tsgumunyu20@gmail.com', 0, '387', 0),
(14, 'VVVVV', 'Mrs', 'jnjhbnnknjkn', 'rrr', 'tsgumunyu20@gmail.com', 0, '387', 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date NOT NULL,
  `number_of_adults` int(2) NOT NULL,
  `number_of_children` int(2) NOT NULL,
  `class` varchar(30) NOT NULL,
  `time` int(30) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `departure`, `destination`, `departure_date`, `arrival_date`, `number_of_adults`, `number_of_children`, `class`, `time`, `price`) VALUES
(1, 'harare', 'bulawayo', '2016-10-10', '2016-11-10', 1, 1, 'Economy', 1300, 248),
(2, 'harare', 'bulawayo', '2016-10-10', '2016-11-10', 1, 1, 'Economy', 2000, 398),
(3, 'bulawayo', 'china', '2016-08-20', '2016-08-28', 2, 1, 'Business', 1200, 148),
(4, 'bulawayo', 'china', '2016-08-20', '2016-08-28', 2, 1, 'Business', 1800, 480),
(6, 'bulawayo', 'china', '2016-08-20', '2016-08-28', 2, 1, 'Business', 2000, 387);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cellphone` int(30) NOT NULL,
  `quick_contact` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `title`, `firstname`, `surname`, `email`, `cellphone`, `quick_contact`, `comment`) VALUES
(1, 'Mrs', 'haha', 'ajjaa', 'jaja', 0, 'Send', 'jajaa'),
(2, 'Mrs', 'cchc', 'cjjcc', 'tsgumunyu20@gmail.com', 0, 'Send', 'jcjcjkchchccjcj'),
(3, 'Mrs', 'kckc', 'ckc', 'tsgumunyu20@gmail.com', 0, 'Send', 'jcjcjcddcckd'),
(4, 'Mrs', 'hdhdhd', 'djdjjd', 'tsgumunyu20@gmail.com', 0, 'use my cellphone', 'djd'),
(5, 'Mrs', 'hss', 'sjs', 'tsgumunyu20@gmail.com', 3733, 'use my email', 'hyehehee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
