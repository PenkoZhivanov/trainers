-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 06:04 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` tinyint(11) NOT NULL,
  `city` tinyint(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `medical_story` text DEFAULT NULL,
  `training_experience` text DEFAULT NULL,
  `age` tinyint(4) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  `height` tinyint(4) NOT NULL,
  `target` text DEFAULT NULL,
  `training` text DEFAULT NULL,
  `more_info` text DEFAULT NULL,
  `isAdmin` tinyint(2) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT 'uploads/unknown.jpg',
  `isActive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `country`, `city`, `address`, `email`, `password`, `medical_story`, `training_experience`, `age`, `weight`, `height`, `target`, `training`, `more_info`, `isAdmin`, `image`, `isActive`) VALUES
(1, 'Пешо', 'Петров', 0, 0, '0', 'nekavuser@abv.bg', '1', 'gsdfgsdfgsdgdfg dg sdg sdfg dsg sdg sdgs d', 'sdfgsdfg sd sdg dgs', 44, 44, 44, 'sdfsdf gs sdfg sdfg sd fsd', 'we wedfsdd sdg dg', 'sd fgsdfgsdfg sdfg fg sdg sdgdfg df', 0, 'uploads/ba.jpg', 0),
(2, 'Тест', 'Тест', 1, 2, '3', 'nekavuser@abv.bg1', '1', '4', '5', 6, 7, 8, '9', '10', '11', 1, 'uploads/unknown.jpg', 0),
(3, 'Тест', 'Тест', 1, 2, '3', 'nekavuser@abv.bg1', '1', '4', '5', 6, 7, 8, '9', '10', '11', 1, 'uploads/unknown.jpg', 0),
(4, 'Тест', 'Тест', 1, 1, 'wqeas', 'nekavuser@abv.bg', '111111', '3', '4', 5, 6, 7, '8', '9', '99', 1, 'uploads/unknown.jpg', 0),
(12, 'Мишо', 'Иванов', 5, 11, 'ул. Бойко Борисов 12', 'misho@abv.bg', '1', 'Няма заболявания', 'Няма опит само плюска', 33, 120, 127, 'Да отслабне', 'НЯМА', 'не искам', 1, 'uploads/unknown.jpg', 0),
(13, 'Иван', 'Георгиев', 1, 76, 'кв. Мазнево бл. 45', 'ivan@abv.bg', '1', 'Намираат се няколко', '10 години ', 28, 76, 127, 'няма', 'няма', 'няма', 1, 'uploads/unknown.jpg', 0),
(14, 'Баш', 'Майстора', 1, 127, 'kyde twa ?', 'maistor@abv.bg', '1', 'tc', 'хич', 16, 111, 127, 'тц', 'тц', 'тц', 1, 'uploads/eFfmdb3.jpg', 0),
(15, 'Kalin', 'Stoyanov', 1, 127, 'str. Pernik 176 B, block 11-12, floor 7, ap. 107', 'k.h.stoyanov@gmail.com', 'omfp12omfp12', 'няма', 'няма', 31, 66, 127, 'няма', 'всеки ден :)', 'бла,бла', 1, 'uploads/unknown.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
