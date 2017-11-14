-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 09:56 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vk_diplomski`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `auto_id` int(11) NOT NULL,
  `auto_naziv` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datum_servisa` date NOT NULL,
  `tip` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `izdat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`auto_id`, `auto_naziv`, `datum_servisa`, `tip`, `izdat`) VALUES
(528, 'BMW X3', '2017-02-02', 'Limuzina', 0),
(527, 'OPEL CORSA', '2017-03-02', 'Limuzina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `broj_telefona` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email_adresa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clanski_broj` int(11) DEFAULT NULL,
  `vrsta_korisnika` int(1) NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime_prezime`, `korisnicko_ime`, `lozinka`, `broj_telefona`, `email_adresa`, `clanski_broj`, `vrsta_korisnika`, `status`) VALUES
(1, 'Katarina Lucic', 'Kale93', 'kale', '06532145668', 'kale93@gmail.com', NULL, 1, 'administrator'),
(2, 'Nevena Gordic', 'Necka93', 'necka', '0652145425', 'necka93@gmail.com', 100, 2, 'clan');

-- --------------------------------------------------------

--
-- Table structure for table `uplata`
--

CREATE TABLE `uplata` (
  `clanarina_id` int(11) NOT NULL,
  `datum_od` date NOT NULL,
  `datum_do` date NOT NULL,
  `clanski_broj` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zaduzenje`
--

CREATE TABLE `zaduzenje` (
  `zaduzenje_id` int(11) NOT NULL,
  `datum_zaduzenja` date NOT NULL,
  `clanski_broj` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`auto_id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uplata`
--
ALTER TABLE `uplata`
  ADD PRIMARY KEY (`clanarina_id`);

--
-- Indexes for table `zaduzenje`
--
ALTER TABLE `zaduzenje`
  ADD PRIMARY KEY (`zaduzenje_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `auto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=529;
--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `uplata`
--
ALTER TABLE `uplata`
  MODIFY `clanarina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `zaduzenje`
--
ALTER TABLE `zaduzenje`
  MODIFY `zaduzenje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
