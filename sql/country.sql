-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 06:03 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainers`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryid` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `country_name`) VALUES
(1, 'България'),
(2, 'Австрия'),
(3, 'Албания'),
(4, 'Андора'),
(5, 'Армения'),
(6, 'Азербайджан'),
(7, 'Беларус'),
(8, 'Белгия'),
(9, 'Босна и Херцеговина'),
(10, 'Ватикана'),
(11, 'Великобритания'),
(12, 'Германия'),
(13, 'Грузия'),
(14, 'Гърция'),
(15, 'Дания'),
(16, 'Естония'),
(17, 'Ирландия'),
(18, 'Исландия'),
(19, 'Испания'),
(20, 'Италия'),
(21, 'Казахстан'),
(22, 'Кипър'),
(23, 'Латвия'),
(24, 'Литва'),
(25, 'Лихтенщайн'),
(26, 'Люксембург'),
(27, 'Малта'),
(28, 'Молдова'),
(29, 'Монако'),
(30, 'Нидерландия'),
(31, 'Норвегия'),
(32, 'Полша'),
(33, 'Португалия'),
(34, 'Румъния'),
(35, 'Русия'),
(36, 'Сан Марино'),
(37, 'Северна Македония'),
(38, 'Словакия'),
(39, 'Словения'),
(40, 'Сърбия'),
(41, 'Турция'),
(42, 'Украйна'),
(43, 'Унгария'),
(44, 'Финландия'),
(45, 'Франция'),
(46, 'Хърватия'),
(47, 'Черна гора'),
(48, 'Чехия'),
(49, 'Швеция'),
(50, 'Швейцария');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
