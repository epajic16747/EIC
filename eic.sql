-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2017 at 10:34 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eic`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `pitanje` text COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `ime`, `email`, `pitanje`) VALUES
(1, 'Enis', 'enis@gmail.com', 'Sta ima sta se radi?');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `korisnik` int(11) NOT NULL,
  `eventName` varchar(63) COLLATE utf8_slovenian_ci NOT NULL,
  `date` date NOT NULL,
  `location` varchar(63) COLLATE utf8_slovenian_ci NOT NULL,
  `type` varchar(63) COLLATE utf8_slovenian_ci NOT NULL,
  `mainEventInfo` text COLLATE utf8_slovenian_ci NOT NULL,
  `detailEventInfo` text COLLATE utf8_slovenian_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `korisnik`, `eventName`, `date`, `location`, `type`, `mainEventInfo`, `detailEventInfo`, `image`) VALUES
(1, 1, 'Deep Purple', '2017-01-27', 'Sarajevo', 'KOncert', 'Samo Hajc samo show', 'Samo Hajc samo show', '/images/left-arrow-gray-hi.png'),
(7, 1, 'Deep Purple', '2017-01-27', 'Zagreb', 'Concert', 'Deep Purple concert Zagreb 2017\r\n', 'Deep Purple concert Zagreb 2017. Prvi put', 'deepPurple.png'),
(8, 1, 'Iron Maiden', '2017-01-12', 'BiH', 'Concert', 'Iron maiden Sarajevo 2018\r\n', 'Iron maiden Sarajevo 2018 Sarajevo oleee', 'IronMaiden2.png'),
(9, 1, 'Iron Maiden1', '2017-01-29', 'BiH1', 'Concert1', 'Iron maiden Sarajevo 20181\r\n', 'Iron maiden Sarajevo 20128 Sarajevo oleee', 'rainbow.png'),
(10, 1, 'Rainbow concert', '2017-01-30', 'Sarajevo', 'Spektakl', 'Samo hajc samo show\r\n', 'Catch the Rainbow', 'rainbow.png'),
(11, 1, 'Kerim', '2017-01-30', 'Sedrenik', 'Spektakl', 'Samo hajc samo show\r\n', 'Catch the Rainbow', 'deepPurple2.png'),
(12, 1, 'Kerim', '2017-01-30', 'Sedrenik', 'Spektakl', 'Samo hajc samo show\r\n', 'Catch the Rainbow', 'IronMaiden3.png'),
(13, 1, 'Test', '2017-01-27', 'Test', 'Test', 'Test\r\n', 'Test', 'rainbow.png'),
(14, 1, 'Kumova svadba', '2017-01-31', 'Sarajevo', 'Svadba', 'Samo hajc samo show', 'Tesko meni sa tobom', 'Dark_Side_of_the_Moon.png'),
(15, 1, 'Pink Floyd', '2017-02-16', 'Sarajevo', 'Concert', 'Time song', 'Tesko meni sa tobom', 'Dark_Side_of_the_Moon.png'),
(16, 1, 'Pink Floyd 2', '2017-02-21', 'Mostar', 'Concert', 'Time song', 'Tesko meni sa tobom', 'IronMaiden2.png'),
(17, 1, 'Kerim', '2017-01-30', 'Sedrenik', 'Spektakl', 'Samo hajc samo show\r\n', 'Catch the Rainbow', '');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_slovenian_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `username`, `email`, `password`) VALUES
(1, 'pajson', 'enis.pajic1@gmail.com', '159632'),
(9, 'dsada', 'dsadsada', 'dasdadad'),
(10, '', '', ''),
(11, 'Enis', 'epajic@gmail.com', '159632147'),
(12, 'sdas', 'dasda', 'dsadsadda');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `ID` int(11) NOT NULL,
  `eventID` int(11) NOT NULL,
  `rateValue` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`ID`, `eventID`, `rateValue`) VALUES
(1, 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `korisnik` (`korisnik`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `eventID` (`eventID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`korisnik`) REFERENCES `korisnik` (`id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`eventID`) REFERENCES `event` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
